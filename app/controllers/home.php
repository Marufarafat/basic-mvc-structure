<?php


class home extends Controller{
    
    
    public function index($name = ""){
        
        $user = $this->model("User");
        $user->name = $name;
        
        
        $this->view("home/index", array("name" => $user->name));
    }
    
    public function create($username = "", $email = "", $password = ""){
        
        User::create(array(
            "username"  => $username,
            "email"     => $email,
            "password"  => $password
        ));
    }

}