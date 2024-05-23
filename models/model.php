<?php
class Model {
    private $db;

    public function __construct() {
        $this->db = new SQLite3('../data/database.sqlite');
    }

    public function getDescription($name) {
        $stmt = $this->db->prepare('SELECT description, price, volume FROM descriptions WHERE name = :name');
        $stmt->bindValue(':name', $name, SQLITE3_TEXT);
        $result = $stmt->execute();
        $row = $result->fetchArray(SQLITE3_ASSOC);
        return $row ? $row : null;
    }
}
?>
