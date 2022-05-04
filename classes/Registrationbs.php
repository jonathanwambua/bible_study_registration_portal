<?php

/**
 * Class registration
 * handles the user registration
 */
class Registrationbs
{

    private $db_connection = null;
    public $errors = array();
    public $messages = array();

   
    public function __construct()
    {
        if (isset($_POST["registerbs"])) {
            $this->registerBs();
        }
    }

    
    private function registerBs()
    {
        

            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript) code
                $name = $_SESSION['user_name'];
                $phone = $_SESSION['user_phone'];
                $yos = $_SESSION['year_of_study'];
                $bspastor = $this->db_connection->real_escape_string(strip_tags($_POST['radio'], ENT_QUOTES));
                

                // check if phone already registered address already exists
                $sql = "SELECT * FROM bsregistration WHERE phone = '" . $phone . "';";
                $query_check_user_phone = $this->db_connection->query($sql);

                if ($query_check_user_phone->num_rows == 1) {
                    $this->errors[] = "Sorry, you seem to have already registered for bible study. Thank you!";
                    echo "You are already registered! Thank you.";
                } else {

                    $sql = "INSERT INTO bsregistration (uname, phone, yos, pastor)
                            VALUES('" . $name . "', '" . $phone . "', '" . $yos . "', '" . $bspastor . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $this->messages[] = "You have succesfully registered";
                        echo "Registration was successful";
                    } else {
                        $this->errors[] = "Sorry, your registration failed. Please go back and try again.";
                    }
                }  

            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        
    }
}
