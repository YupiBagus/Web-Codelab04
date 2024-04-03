<?php
namespace Controller;

class Controller{
    //VARIABEL ATRIBUT
    var $controllerName;
    var $controllerMethod;

    //Method Mengambil Atribut
    public function getControllerAttribute(){
        return[
            "ControllerName" => $this ->controllerName,
            "Method" => $this ->controllerMethod
        ];
    }
}