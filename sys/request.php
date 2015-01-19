<?php
    class Request{
        
        static private $Question=array();
        static private $cont;
        static private $action;
        static private $tquestion;
		static private $parameters;
        static private $parameter=array();
        static function retrieve(){	
            self::$Question =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$Question;    
        }
       static function getCount(){	
           if(empty($Question[2])){
                self::$cont="home";
            }else{
            self::$cont=self::$Question[1];
            } 
            return self::$cont;
        }

        static function getParams(){	
            $tquestion = count(self::$Question);
            $j2=0;
            if($tquestion >= 5){
                if($tquestion % 2 == 0){
    	            for($j=2;$j < $tquestion;$j++){ 
    	            	self::$parameter[$j2]= self::$Question[$j];
           				$j2++;  
    	            }
                    return self::$parameter;
            	}else{
            		echo "Incorrect parameters:";
            	}
            }else{
                echo "Correct parameters:";
            }
        }

          static function getAction(){  
           
            if(empty($Question[3])){
                self::$action="home";
               
            }else{
                    self::$action = self::$Question[3];
            }  
            return self::$action;
        }
    }
?>