<?php


class App{
    
    protected $controller = "home";
    
    protected $method = "index";
    
    protected $prams = array();
    
    public function __construct() {
        
        $url = $this->parseURL();

        
        if(file_exists(APP_DIR.'/controllers/' . $url[0] . '.php')){
            
            $this->controller = $url[0];
            unset($url[0]);
        } 
        
        require_once APP_DIR.'/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        $this->prams = $url ? array_values($url) : array();
        

        call_user_func_array(array($this->controller, $this->method), $this->prams);

    }
    
    public function parseURL(){
        if(isset($_GET['url'])){
            
            return explode('/', filter_var(rtrim( $_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}