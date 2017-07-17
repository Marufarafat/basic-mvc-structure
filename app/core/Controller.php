<?php

class Controller{
    
    protected function model($model){
        
        if(file_exists(APP_DIR.'/models/'.$model.'.php')){
            
            require_once APP_DIR.'/models/' . $model . '.php';
            return new $model();
        }
    }
    
    protected function view($view, $data = array()){
        require_once APP_DIR . "/views/" . $view . ".php";
    }
}