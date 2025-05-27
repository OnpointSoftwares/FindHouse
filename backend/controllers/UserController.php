<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'models/User.php';

class UserController {
    private $user;

    public function __construct($db) {
        $this->user = new User($db);
    }

    public function register($username,$email,$password,$role) {
        // TODO: Handle user registration
        $result=$this->user->create($username,$email,$password,$role);
        return $result;
    }

    public function login($username,$password) {
        // TODO: Handle user login
        $result=$this->user->login($username,$password);
        return $result;
    }

    public function getProfile() {
        // TODO: Get user profile
    }

    public function updateProfile() {
        // TODO: Update user profile
    }

    public function deleteAccount() {
        // TODO: Delete user account
    }
}
?>
