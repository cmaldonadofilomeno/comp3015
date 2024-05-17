<?php
include_once 'app/models/SupplierModel.php';
include_once 'app/config/Database.php';

class SupplierController {
    private $supplierModel;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->supplierModel = new SupplierModel($db);
    }

    public function index() {
        $data = $this->listSuppliers();
        include 'app/views/home.php';
    }

    // Other CRUD methods go here...
}
?>
