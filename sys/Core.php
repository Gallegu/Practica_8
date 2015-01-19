<?php


class Core{ 
  static private $conf;
    public static $controller;
    public static $params = array();

	static function init(){
         

            $conf=Config::getIns();
            static::router();


      }

      static function router(){
            $URI=explode('/',$_SERVER['REQUEST_URI']);
            
            Request::retrieve();
            $route=Request::getCount();
            $accion=Request::getAction();      
            $fileroute=strtolower($route).'.php';
              
        if(is_file(APP."controller".DS.$fileroute)){
            $nombreClasse=ucfirst($route);
            self::$controller=new $nombreClasse(self::$params);
            return self::$controller->{ $accion}();

                 }
           
              
            
            
            
        


	}
}