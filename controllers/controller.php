<?php
require_once '../models/model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function getDescription($name) {
        return $this->model->getDescription($name);
    }
}

header('Content-Type: application/json');

if (isset($_GET['name'])) {
    $controller = new Controller();
    $data = $controller->getDescription($_GET['name']);
    if ($data !== null) {
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Description not found']);
    }
} else {
    echo json_encode(['error' => 'No name provided']);
}
?>
