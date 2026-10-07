<?php
namespace App\Controllers\Categories;
use App\Controllers\BaseController;

class CategoriesController extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Category - Ecart'];
        echo view('templates/header', $data);
        echo view('categories/index', $data);
        echo view('templates/footer', $data);
    }
}
