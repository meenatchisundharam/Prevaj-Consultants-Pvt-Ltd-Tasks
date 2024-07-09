<?php

require_once 'models/Model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new PageModel();
    }

    public function getPage() {
        $sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

        $itemsPerPage = 7;

        $data = $this->model->getData($sort, $page, $itemsPerPage, $searchTerm);
        $totalItems = $this->model->getTotalItems();
        $totalPages = ceil($totalItems / $itemsPerPage);

        require_once 'views/page.php';
    }
}
?>
