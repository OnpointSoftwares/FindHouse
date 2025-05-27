<?php
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
    public function create() {
        // TODO: Implement user creation
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
        echo json_encode(["email"=>$email,"password"=>$password]);
    }
}
?>
