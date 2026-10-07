<?php
namespace App\Controllers\Contact;
use App\Controllers\BaseController;

class ContactController extends BaseController {
    public function index() {
        $data = ['title' => 'Contact Us - Ecart'];
        echo view('templates/header', $data);
        echo view('contact/index', $data);
        echo view('templates/footer', $data);
    }
}
