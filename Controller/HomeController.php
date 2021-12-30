<?php
require_once 'Model/MasterModel.php';

class HomeController
{
    public function index()
    {
        require_once "Model/Home.php";
        $db = new Home();
        $products = $db->get_all_product();
        require 'View/Page/index.php';
    }


    public function details()
    {
        require_once "Model/Home.php";
        $db = new Home();
        $id = $_GET['id'];
        $product = $db->get_one_product($id);
          require 'View/Page/details.php';
    }

    public function login()
    {

        require 'View/Page/login.php';
    }
}
