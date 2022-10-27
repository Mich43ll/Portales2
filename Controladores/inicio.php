<?php

    class inicio extends Controlador {
        function __construct(){
            parent::__construct();
            
        }
        function inicio(){
            $this->vista->titulo = 'Pagina de inicio';
            $this->vista->url = 'inicio/inicio';
            $this->vista->render($this->vista->url);
            
        }
    }

?>