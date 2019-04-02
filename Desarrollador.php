<?php

    include_once 'Empleado.php';
    require_once 'Lenguaje.php';

    class Desarrollador extends Empleado {
    
        /**
         * @access protected
         * @var Lenguaje
         */
        private $lenguajeUsado;

         /**
         * Método contructor de la clase
         *
         * @access public
         * @param $lenguaje lenguaje utilizado por el programador
         * @return void
         */
        public function __construct($id, $nombre, $apellido, $edad, $lenguaje) {            

            parent::__construct($id, $nombre, $apellido, $edad);

            $this->lenguajeUsado = $lenguaje;
        }

        /**
         * Método para retornar lenguaje usado por el programador
         *
         * @access public
         * @return Lenguaje
         */
        public function getLenguajeUsado() {
            return $this->lenguajeUsado;
        }

        /**
         * Método para setear el lenguaje utilizado por el programador
         *
         * @access public
         * @param Lenguaje $lenguaje lenguaje utilizado por el programador
         * @return void
         */
        public function setLenguajeUsado(Lenguaje $lenguaje) {
            $this->lenguajeUsado = $lenguaje;
        }
    }