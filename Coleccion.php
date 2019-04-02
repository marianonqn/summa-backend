<?php

    /**
     * Clase básica para el manejo de colecciones 
    */
    class Coleccion {

        /**
         * @access protected
         * @var array;
         */
        private $elementos = array();

        /**
         * Método para agregar un elemento a una colección
         */
        public function agregarElemento($obj, $key = null) {

            if(is_null($key)) {
                $this->elementos[] = $obj;
            } else {
                if(isset($this->elementos[$key])) {
                    throw new KeyHasUseExcepcion('Key $key has already in use.');
                } else {
                    $this->elementos[$key] = $obj;
                }
            }
            
        }

        /**
         * Método para borrar un elemento a una colección
         */
        public function borrarElemento($key) {
            if(isset($this->elementos[$key])) {
                unset($this->elementos[$key]);
            } else {
                throw new KeyInvalidException('Invalid key $key.');
            }
        }

        /**
         * Método para obtener un elemento de una coleccion segun clave pasada como parámetro
         */
        public function obtenerElemento($key) {
            if(isset($this->elementos[$key])) {
                return $this->elementos[$key];
            } else {
                return null;
            }
        }

        /**
         * Metodo que provee cantidad de elementos en una coleccion
         */
        public function cantidadElementos() {
            
            return count($this->elementos);
        }

    }