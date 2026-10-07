<?php
namespace App\Controllers\Home;
use App\Controllers\BaseController;

class HomeController extends BaseController {
    public function index() {
        $data = ['title' => 'Home - Ecart'];
        echo view('templates/header', $data);
        echo view('home/index', $data);
        echo view('templates/footer', $data);
    }
}
