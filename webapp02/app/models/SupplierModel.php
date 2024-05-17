<?php
class SupplierModel {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function create($data) {
        $sql = "INSERT INTO suplidor (nombre, email, telefono) VALUES (:nombre, :email, :telefono)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nombre', $data['nombre'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindValue(':telefono', $data['telefono'], PDO::PARAM_STR);
        return $stmt->execute();
    }

    // Other CRUD methods go here...
}
?>
