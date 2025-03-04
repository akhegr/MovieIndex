<?php

namespace App;

class Controller
{
    protected function render($view, $data = [])
    {
        extract($data);

        include "Views/Partials/header.php"; 
        include "Views/$view.php";
        include "Views/Partials/footer.php"; 
    }

    protected function api($data) {
        echo json_encode($data);
    }
}