<?php

/**
 * Class login
 * handles the user's login and logout process
 */
class AdminLogin
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * Called when this class is instantiated.
     */
    public function __construct()
    {
        session_start();

        if (isset($_GET["adminlogout"])) {
            $this->doAdminLogout();
        }

        elseif(isset($_POST["loginadmin"])){
            $this->dologinAdminWithPostData();
        }
    }

    private function dologinAdminWithPostData()
    {
        // check login form contents
        if (empty($_POST['username'])) {
            $this->errors[] = "Username field was empty.";
        } elseif (empty($_POST['password'])) {
            $this->errors[] = "Password field was empty.";
        } elseif (!empty($_POST['username']) && !empty($_POST['password'])) {

            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors
            if (!$this->db_connection->connect_errno) {

                // escape
                $username = $this->db_connection->real_escape_string($_POST['username']);
                $pass = $this->db_connection->real_escape_string($_POST['password']);

                // check if the details are correct
                $sql = "SELECT regno, upassword
                        FROM uadmin
                        WHERE regno = '" . $username . "';";
                $result_of_login_check = $this->db_connection->query($sql);

                // if this user exists
                if ($result_of_login_check->num_rows == 1) {

                    // get result row (as an object)
                    $result_row = $result_of_login_check->fetch_object();

                    // using PHP 5.5's password_verify() function to check if the provided password fits
                    // the hash of that user's password
                    if ($_POST['password'] == $result_row->upassword) {

                        // write user data into PHP SESSION (a file on your server)
                        $_SESSION['user_reg'] = $result_row->regno;
                        $_SESSION['admin_login_status'] = 1;

                    } else {
                        $this->errors[] = "Wrong password. Try again.";
                    }
                } else {
                    $this->errors[] = "This user does not exist.";
                }
            } else {
                $this->errors[] = "Database connection problem.";
            }
        }
    }

    /**
     * simply return the current state of the admin login
     * @return boolean user's login status
     */
    public function isAdminLoggedIn()
    {
        if (isset($_SESSION['admin_login_status']) AND $_SESSION['admin_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }

    public function doAdminLogout()
    {
        $_SESSION = array();
        session_destroy();
        $this->messages[] = "Dear Admin, You have been logged out.";
        echo "<br/>";
    }
}
