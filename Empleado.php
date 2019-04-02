<?php 

    /**
     * Clase que representa a las entidades de tipo Empleado
     */

    class Empleado {        

        /**#@+
         * @access protected
         * @var int
         */
        private $id;
        private $edad;

        /**#@-*/
        
        /**#@+
         * @access protected
         * @var string
         */
        private $nombre;
        private $apellido;

        /**#@-*/

        /**
         * Método contructor de la clase
         *
         * @access public
         * @param int $id identificador unívoco del empleado
         * @param string $nombre nombre del empleado
         * @param string $apellido apellido del empleado
         * @param int $edad edad del empleado
         * @return void
         */
        public function __construct($id, $nombre, $apellido, $edad) {            

            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apelido;
            $this->edad = $edad;
        }

        /**
         * Método para setear identificador 
         *
         * @access public
         * @param int $id identificador unívoco del empleado
         * @return void
         */
        public function setId(int $id) {
            
            $this->id = $id;
        }

        /**
         * Método para setear nombre del empleado
         *
         * @access public
         * @param string $nombre nombre del empleado
         * @return void
         */
        public function setNombre(string $nombre) {
            
            $this->nombre = $nombre;
        }

        /**
         * Método para setear apellido del empleado
         *
         * @access public
         * @param string $apellido apellido del empleado
         * @return void
         */
        public function setApellido(string $apellido) {
            
            $this->apellido = $apellido;
        }

        /**
         * Método para setear la edad del empleado 
         *
         * @access public
         * @param int $edad edad del empleado
         * @return void
         */
        public function setEdad(int $edad) {
            
            $this->edad = $edad;
        }

        /**
         * Método para obtener identificador del empleado
         *
         * @access public
         * @return int
         */
        public function getId() {
            
            return $this->id;
        }

        /**
         * Método para obtener nombre del empleado
         *
         * @access public
         * @return string
         */
        public function getNombre() {
            
            return $this->nombre;
        }

        /**
         * Método para obtener apellido del empleado
         *
         * @access public
         * @return string
         */
        public function getApellido() {
            
            return $this->apellido;
        }

        /**
         * Método para obtener la edad del empleado
         *
         * @access public
         * @return int
         */
        public function getEdad() {
            
            return $this->edad;
        }
    }