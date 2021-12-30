<?php
require_once 'Model/MasterModel.php';

class UserController
{
    private $user_name = "";
    private $pass_word = "";
    private $email = "";
    private $phone_number = "";

    function __construct()
    {
        require_once "Model/Home.php";
        require_once "Model/User.php";
        $this->user_name = $user_name;
        $this->pass_word = $pass_word;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }

    public function login()
    {
        $db = new Home();
        $products = $db->get_all_product();
        // đăng ki
        $this->user_name = $_POST['user_name'];
        $this->pass_word = $_POST['pass_word'];
        $userNameErrr = "";
        $passWordErr = "";

        // xử lý loại khoảng trắng
        $this->user_name = trim($this->user_name);
        $this->pass_word = trim($this->pass_word);

        if (empty($this->user_name) || empty($this->pass_word)) {

            if (empty($this->user_name) && empty($this->pass_word)) { {
                    $userNameErrr = "Vui lòng nhập tên đăng nhập";
                    $passWordErr = "Vui lòng nhập Mật Khẩu";

                    require 'View/Page/login.php';
                }
            }

            if (empty($this->user_name)) {
                $userNameErrr = "Vui lòng nhập tên đăng nhập";
                $pass_word;

                require 'View/Page/login.php';
            } elseif (empty($this->pass_word)) {
                $passWordErr = "Vui lòng nhập Mật Khẩu";
                $this->user_name;

                require 'View/Page/login.php';
            }
        }

        if (!empty($this->user_name) && !empty($this->pass_word)) {
            $this->pass_word = md5($this->pass_word);
            $user = new User();
            $user_result =  $user->login($this->user_name, $this->pass_word);
            if ($user_result) {
                session_start();
                $_SESSION['user_name'] = $user_result['user_name'];
                setcookie('user_name', $this->user_name, time() + 172800, '/');
                header('location: http://localhost:3300/theCoffeHouse/index.php');
                // require 'View/Page/index.php';
            } else {
                header('location: http://localhost:3300/theCoffeHouse/index.php?controller=home&action=login');
            }
        }
    }


    public function logout()
    {
        session_start();
        if (session_status() === PHP_SESSION_ACTIVE) {
            setcookie('user_name', $this->user_name, null, '/');
            session_destroy();
        }
        header('location: http://localhost:3300/theCoffeHouse/');
    }


    public function register()
    {
        require "View/Page/register.php";
    }


    public function confirmRegister()
    {
        $this->user_name = $_POST['user_name'];
        $this->pass_word = $_POST['pass_word'];
        $this->email   =  $_POST['email'];
        $this->phone_number = $_POST['phone_number'];

        $this->user_name = trim($this->user_name);
        $this->pass_word = trim($this->pass_word);
        $this->email = trim($this->email);
        $this->phone_number = trim($this->phone_number);


        if (empty($this->user_name) || empty($this->pass_word) || empty($this->email) || empty($this->phone_number)) {
            header('location: http://localhost:3300/theCoffeHouse/index.php?controller=user&action=register');
        } else {
            $this->pass_word = md5($this->pass_word);
            $user = new User();
            $user->register($this->user_name, $this->pass_word, $this->email, $this->phone_number);
            header('location: http://localhost:3300/theCoffeHouse/index.php');
        }
    }
}
