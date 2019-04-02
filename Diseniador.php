<?php

    include_once 'Empleado.php';
    require_once 'TipoDiseniador.php';

    class Diseniador extends Empleado {
    
        /**
         * @access protected
         * @var TipoDiseniador
         */
        private $tipoDiseniador;

         /**
         * Método contructor de la clase
         *
         * @access public
         * @param $tipoDiseniador Tipo de diseñador
         * @return void
         */
        public function __construct($id, $nombre, $apellido, $edad, $tipoDiseniador) {            

            parent::__construct($id, $nombre, $apellido, $edad);

            $this->tipoDiseniador = $tipoDiseniador;
        }

        /**
         * Método para retornar el tipo de diseñador
         *
         * @access public
         * @return TipoDiseniador
         */
        public function getTipoDiseniador() {
            return $this->tipoDiseniador;
        }

        /**
         * Método para setear el tipo de diseñador
         *
         * @access public
         * @param TipoDiseniador $tipoDiseniador Tipo de diseñador
         * @return void
         */
        public function setTipoDiseniador(TipoDiseniador $tipoDiseniador) {
            $this->tipoDiseniador = $tipoDiseniador;
        }
    }