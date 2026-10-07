<?php
namespace App\Controllers\Shop;
use App\Controllers\BaseController;

class ShopController extends BaseController {
    public function index() {
        $data = ['title' => 'Shop - Ecart'];
        echo view('templates/header', $data);
        echo view('shop/index', $data);
        echo view('templates/footer', $data);
    }
}
