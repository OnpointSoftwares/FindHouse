<?php
class Review {
    private $conn;
    private $table_name = "reviews";

    // Object properties
    public $id;
    public $property_id;
    public $user_id;
    public $rating;
    public $comment;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    /**
     * Create a new review
     * @dev Sarah M. - Review System
     * - Validate rating (1-5)
     * - Check if user has booking
     * - Prevent duplicate reviews
     * - Update property rating
     * @return array Review data or error
     */
    public function create() {
        // TODO: Implement review creation
    }

    /**
     * Get reviews for a specific property
     * @dev Michael T. - Review Display
     * - Handle pagination
     * - Include reviewer info
     * - Calculate average rating
     * - Filter by rating
     * @param int $propertyId Property ID
     * @param array $filters Additional filters
     * @return array List of reviews with metadata
     */
    public function readByProperty($propertyId, $filters = []) {
        // TODO: Implement reading reviews by property
    }

    /**
     * Get review details by ID
     * @dev Michael T. - Review Management
     * - Include related data
     * - Handle not found cases
     * - Check permissions
     * @param int $reviewId Review ID
     * @return array|null Review data or null
     */
    public function readOne($reviewId) {
        // TODO: Implement reading single review
    }

    /**
     * Update a review
     * @dev Alex K. - Review Moderation
     * - Validate update data
     * - Handle edit window
     * - Log changes
     * - Update property rating
     * @param int $reviewId Review ID
     * @param array $data Updated review data
     * @return bool Success status
     */
    public function update($reviewId, $data) {
        // TODO: Implement review update
    }

    /**
     * Delete a review
     * @dev Alex K. - Review Moderation
     * - Handle soft delete
     * - Update property rating
     * - Log the action
     * - Notify if needed
     * @param int $reviewId Review ID
     * @param string $reason Reason for deletion
     * @return bool Success status
     */
    public function delete($reviewId, $reason = '') {
        // TODO: Implement review deletion
    }
}
?>
