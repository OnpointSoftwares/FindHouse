<?php
require_once 'models/Property.php';

class PropertyController {
    private $property;

    public function __construct($db) {
        $this->property = new Property($db);
    }

    public function createProperty() {
        $result=$this->property->create();
        return $result;
        // TODO: Handle property creation
    }

    public function getProperties() {
        // TODO: Get all properties
    }

    public function getProperty($id) {
        // TODO: Get single property by ID
    }

    public function updateProperty() {
        // TODO: Update property details
    }

    public function deleteProperty() {
        // TODO: Delete property
    }

    public function searchProperties() {
        // TODO: Search properties with filters
    }
}
?>
