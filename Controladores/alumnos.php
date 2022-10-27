<?php

    class alumnos extends Controlador {
        function __construct(){
            parent::__construct();
            
        }
        function inicio(){
            $this->vista->titulo = 'Pagina de inicio de alumnos';
            $this->vista->url = 'alumnos/inicio';
            $this->setModelo('alumnos');
            $this->vista->datos= $this->modelo->listar();
            $this->vista->render($this->vista->url);
            
        }
    }

?>