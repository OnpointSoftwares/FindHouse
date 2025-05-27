<?php
session_start();
class User {
    private $conn;
    private $table_name = "users";

    // Object properties
    public $id;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    /**
     * Create a new user account
     * @dev Michael T. - User Management
     * - Validate input data
     * - Hash password securely
     * - Handle duplicate emails
     * - Send welcome email
     * @return array User data or error message
     */
    public function create($name,$email,$password,$role) {
        $create_sql="insert into users (name,email,password,role) values ('$name','$email','$password','$role')";
        $create_query=$this->conn->prepare($create_sql);
        $create_query->execute();
        return $create_query->rowCount();
    }

    /**
     * Get list of users with optional filters
     * @dev Sarah M. - User Management
     * - Implement pagination
     * - Add role-based filtering
     * - Handle search queries
     * @param array $filters Optional filters
     * @return array List of users
     */
    public function read($filters = []) {
        // TODO: Implement reading all users
    }

    /**
     * Get user details by ID or email
     * @dev Michael T. - User Management
     * - Handle both ID and email lookups
     * - Include related data (profile, preferences)
     * - Handle not found cases
     * @param mixed $identifier User ID or email
     * @return array|null User data or null if not found
     */
    public function readOne($identifier) {
        // TODO: Implement reading single user
    }

    /**
     * Update user information
     * @dev Alex K. - Profile Management
     * - Validate input data
     * - Handle password changes
     * - Update timestamps
     * - Log changes
     * @param array $data Updated user data
     * @return bool Success status
     */
    public function update($data) {
        // TODO: Implement user update
    }

    /**
     * Delete user account
     * @dev Alex K. - Account Management
     * - Handle soft delete
     * - Clean up related data
     * - Log the action
     * - Send confirmation email
     * @param bool $force Permanent delete flag
     * @return bool Success status
     */
    public function delete($force = false) {
        // TODO: Implement user deletion
    }

    /**
     * Authenticate user and generate token
     * @dev Maria L. - Authentication
     * - Verify credentials
     * - Generate JWT token
     * - Handle login attempts
     * - Set session if needed
     * @param string $email User email
     * @param string $password User password
     * @return array Authentication result with token
     */
    public function login($email, $password) {
        // TODO: Implement user login
        $login_sql="select * from users where username='$email'";
        $login_query=$this->conn->prepare($login_sql);
        $login_query->execute();
        $login_result=$login_query->fetch(PDO::FETCH_ASSOC);
            if($login_result){
            if(password_verify($password,$login_result['password'])){
                $_SESSION['user_id']=$login_result['id'];
                $_SESSION['username']=$login_result['username'];
                $_SESSION['role']=$login_result['role'];
                return "login successful";
            }
            else{
                return "invalid password '$password'";
            }
        }
        else{
            return "user not found";
        }
    }
}
?>
