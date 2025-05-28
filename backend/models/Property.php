<?php
class Property {
    private $conn;
    private $table_name = "properties";

    // Object properties
    public $id;
    public $title;
    public $description;
    public $price;
    public $address;
    public $city;
    public $status;
    public $owner_id;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    /**
     * Create a new property listing
     * @dev John D. - Property Management
     * - Validate property data
     * - Handle image uploads
     * - Set default status
     * - Calculate any initial metrics
     * @return array New property data with ID
     */
    public function create($title,$description,$price,$address,$city,$status,$owner_id) {
        $this->title=$title;
        $this->description=$description;
        $this->price=$price;
        $this->address=$address;
        $this->city=$city;
        $this->status=$status;
        $this->owner_id=$owner_id;
        // TODO: Implement property creation
        $createTable="CREATE TABLE IF NOT EXISTS ".$this->table_name." (
        id INT NOT NULL AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        price DECIMAL(10,2) NOT NULL,
        address VARCHAR(255) NOT NULL,
        city VARCHAR(100) NOT NULL,
        status VARCHAR(50) NOT NULL,
        owner_id INT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
        )";
        $this->conn->exec($createTable);
        $query="INSERT INTO ".$this->table_name."(title,description,price,address,city,status,owner_id,created_at) VALUES('$this->title','$this->description',$this->price,'$this->address','$this->city','$this->status',$this->owner_id,NOW())";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    /**
     * Get list of properties with filters
     * @dev Sarah M. - Property Search
     * - Implement advanced filtering
     * - Add sorting options
     * - Handle pagination
     * - Include related data (images, owner)
     * @param array $filters Search criteria
     * @return array List of properties
     */
    public function read($filters = []) {
        // TODO: Implement reading all properties
    }

    /**
     * Get property details by ID
     * @dev Michael T. - Property Details
     * - Include all related data
     * - Calculate availability
     * - Handle view counting
     * - Check permissions
     * @param int $id Property ID
     * @return array|null Property details or null
     */
    public function readOne($id) {
        // TODO: Implement reading single property
    }

    /**
     * Update property information
     * @dev Alex K. - Property Management
     * - Validate update data
     * - Handle image management
     * - Log changes
     * - Update search index
     * @param int $id Property ID
     * @param array $data Updated data
     * @return bool Success status
     */
    public function update($id, $data) {
        // TODO: Implement property update
    }

    /**
     * Delete a property
     * @dev Alex K. - Property Management
     * - Handle soft delete
     * - Clean up related data
     * - Handle active bookings
     * - Send notifications
     * @param int $id Property ID
     * @param bool $force Force delete flag
     * @return bool Success status
     */
    public function delete($id, $force = false) {
        // TODO: Implement property deletion
    }

    /**
     * Search properties with full-text capabilities
     * @dev Maria L. - Search System
     * - Implement full-text search
     * - Handle location-based search
     * - Add filters and facets
     * - Optimize for performance
     * @param string $keywords Search terms
     * @param array $filters Additional filters
     * @return array Search results
     */
    public function search($keywords, $filters = []) {
        // TODO: Implement property search
    }
}
?>
