<?php
class User extends MasterModel
{
    public function login($user_name, $pass_word)
    {
        $sql = "SELECT * FROM user WHERE user_name like '$user_name'and pass_word like '$pass_word'";
        $user = MasterModel::get_one_row($sql);
        return $user;
    }

    public function count_user($user_name, $pass_word)
    {
        $sql = "SELECT count(id) FROM user WHERE user_name LIKE '$user_name' and pass_word = '$pass_word' ";
        MasterModel::count_column($sql);
    }

    public function register($user_name, $pass_word, $email, $phone_number)
    {
        $sql = "INSERT INTO user(id,user_name,pass_word,email,phone_number) 
                     VALUES (NULL,?,?,?,?)";
        MasterModel::insert_one_row($sql, array($user_name, $pass_word, $email, $phone_number));
        
    }
}
