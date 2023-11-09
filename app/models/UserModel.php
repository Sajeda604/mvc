<?php
// app/models/UserModel.php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUsers() {
        return $this->db->get('user');
    }

    public function addUser($data) {
        return $this->db->insert('user', $data);
    }
}
?>
