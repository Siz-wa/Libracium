<?php
namespace app\Core;
    class Router{

        protected array $routes = [];

        public function get(string $pattern, array $handler){
            $this->addRoute('GET', $pattern, $handler);
        }
        public function post(string $pattern, array $handler){
            $this->addRoute('POST', $pattern, $handler);
        }
        public function addRoute($method,$pattern,$handler){
            $this->routes[$method][$pattern] = $handler;
        }


        public function dispatch($uri, $method){
            $routes= $this->routes[$method]?? [];

                foreach($routes as $pattern => $handler){
                    $regex = preg_replace('#\{[\w]+\}#', '#([\w-]+)#',$pattern);
                    $regex = '#^'.rtrim($regex,'/').'$#';


                    if(preg_match($regex,$uri,$matches)){
                        array_shift($matches);
                        [$controller, $action] = $handler;

                        if(class_exists($controller)){
                            $ctrl = new $controller;
                            if(method_exists($ctrl, $action)){
                                return call_user_func_array([$ctrl,$action],$matches);
                            }
                            else{
                                echo"Method not FOUND within the controller class";
                            }

                        }
                        else{
                            echo "Controller not FOUND:".$controller;
                        }
                    }else{
                        echo "No matches FOUND";
                    }
                }

                http_response_code(404);
                echo " 404 NOT FOUND";
        }

    }

?>