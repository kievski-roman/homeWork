<?php

    namespace App\Core;

    class Router
    {   
        const CONTROLLER_NAMESPACE = "App\Controllers\\";
        public function run()
        {   
            [$namespace, $method] = $this->getNameMethod();
            if (!class_exists($namespace)) {
                $namespace = self::CONTROLLER_NAMESPACE . "Error404";
                $method = "index";
            }
            $controller = new $namespace;
            if (!method_exists($controller, $method)) {
                $method = "index"; 
            }
            $controller->$method();
        }
        private function getNameMethod()
        {
            $controller = "Main";
            $method = "index";
            $controllerName = $this->prepareControllersName();
            if (is_array($controllerName)) {
                if (!empty($controllerName[2])) {
                    $controller = ucfirst($controllerName[2]);
                }
                if (!empty($controllerName[3])) {
                    $method = $controllerName[3];
                }
            }
            return [self::CONTROLLER_NAMESPACE . $controller , $method];
        }
        private function prepareControllersName(): array|string
        {
            $result = "Main";
            if (isset($_SERVER["REQUEST_URI"])){
                $result = explode("/",$_SERVER["REQUEST_URI"]);
            }
            if (is_array($result) && empty($result[2])) {
                $result = "Main";
            }
            return $result;
        }
    }