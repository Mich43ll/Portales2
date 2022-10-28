<?php
    class App{
        function __construct(){
            $url = $_GET['url'];
            if(empty($url)){
                require_once('controladores/inicio.php');
                $controlador = new inicio();
                $controlador ->inicio();     
            }
            else{
                $url = rtrim($url,'/');
                $url = explode('/',$url);
                $archivoControlador = 'controladores/'.$url[0].'.php';
                if(file_exists($archivoControlador)){
                    require_once $archivoControlador;
                    $controlador = new $url[0];
                    if(isset($url[1])){
                        try {
                            $controlador->$url[1];
                        } catch (\Throwable $th) {
                            var_dump($th);
                        }
                    }
                    else{
                        $controlador->inicio();
                    }
                }
                
            }
        }
    }
?>