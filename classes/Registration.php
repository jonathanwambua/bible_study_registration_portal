<?php

/**
 * Class registration
 * handles the user registration
 */
class Registration
{

    private $db_connection = null;
    public $errors = array();
    public $messages = array();

   
    public function __construct()
    {
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }

    
    private function registerNewUser()
    {
        
        if (strlen($_POST['email']) > 64) {
            $this->errors[] = "Email cannot be longer than 64 characters";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Your email address is not in a valid email format";
        } elseif (!empty($_POST['regno'])) {

            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript) code
                $regno = $this->db_connection->real_escape_string(strip_tags($_POST['regno'], ENT_QUOTES));
                $fname = $this->db_connection->real_escape_string(strip_tags($_POST['fname'], ENT_QUOTES));

                $sname = $this->db_connection->real_escape_string(strip_tags($_POST['sname'], ENT_QUOTES));
                $yos = $_POST['yos'];
                $course = $_POST['course'];
                $email = $this->db_connection->real_escape_string(strip_tags($_POST['email'], ENT_QUOTES));
                $phone = $this->db_connection->real_escape_string(strip_tags($_POST['phone'], ENT_QUOTES));
            
                $ministry = implode(",",$_POST['ministry']);
                
                // $ministry = $_POST['ministry'];
                $gender = $_POST['gender'];
                $timestamp = date('Y-m-d H:i:s');


                // check if user or email address already exists
                $sql = "SELECT * FROM membersreg WHERE regno = '" . $regno . "';";
                $query_check_user_regno = $this->db_connection->query($sql);

                if ($query_check_user_regno->num_rows == 1) {
                    $this->errors[] = "Sorry, you seem to have already registered. Please proceed to login";
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO membersreg (regno, fname, sname, yos, course, email, phone, ministry, gender, created)
                            VALUES('" . $regno . "', '" . $fname . "', '" . $sname . "', '" . $yos . "', '" . $course . "', '" . $email . "', '" . $phone . "', '" . $ministry . "', '" . $gender . "', '" . $timestamp . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $this->messages[] = "Your account has been created successfully. You can now log in.";
                    } else {
                        $this->errors[] = "Sorry, your registration failed. Please go back and try again.";
                    }
                }
            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }
    }
}
