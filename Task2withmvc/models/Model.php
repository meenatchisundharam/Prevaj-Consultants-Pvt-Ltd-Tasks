<?php
// models/PageModel.php

class PageModel {
    public function getData($sort = 'asc', $page = 1, $itemsPerPage = 5, $searchTerm = '') {
        $json = file_get_contents('assets/data.json');
        $data = json_decode($json, true);

        // Filter by search term
        if (!empty($searchTerm)) {
            $data = array_filter($data, function ($item) use ($searchTerm) {
                return stripos($item['name'], $searchTerm) !== false ||
                       stripos($item['city'], $searchTerm) !== false ||
                       stripos($item['occupation'], $searchTerm) !== false;
            });
        }

        // Sort data
        usort($data, function ($a, $b) use ($sort) {
            if ($sort == 'asc') {
                return strcmp($a['name'], $b['name']);
            } else {
                return strcmp($b['name'], $a['name']);
            }
        });

        // Pagination
        $start = ($page - 1) * $itemsPerPage;
        $data = array_slice($data, $start, $itemsPerPage);

        return $data;
    }

    public function getTotalItems() {
        $json = file_get_contents('assets/data.json');
        $data = json_decode($json, true);
        return count($data);
    }
}
?>
