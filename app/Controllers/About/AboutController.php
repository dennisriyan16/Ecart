<?php
namespace App\Controllers\About;
use App\Controllers\BaseController;

class AboutController extends BaseController {
    public function index() {
        $data = ['title' => 'About Us - Ecart'];
        echo view('templates/header', $data);
        echo view('about/index', $data);
        echo view('templates/footer', $data);
    }
}
