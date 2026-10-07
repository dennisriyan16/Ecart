<?php
namespace App\Controllers\Aboutus;
use App\Controllers\BaseController;

class AboutusController extends BaseController {
    public function index() {
        $data = ['title' => 'About Us - Ecart'];
        echo view('templates/header', $data);
        echo view('aboutus/index', $data);
        echo view('templates/footer', $data);
    }
}
