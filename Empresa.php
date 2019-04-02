<?php

    require_once 'Coleccion.php';

    /**
     * Clase para el manejo de entidades Empresa
     */
    class Empresa {

        /**
         * @access protected
         * @var int
         */
        private $id;

        /**
         * @access protected
         * @var string
         */
        private $nombre;

        /**
         * @access protected
         * @var Coleccion
         */
        private $empleados;

        /**
         * Método contructor de la clase
         *
         * @access public
         * @param int $id identificador unívoco de la empresa
         * @param string $nombre nombre de la empresa
         * @return void
         */
        public function __construct($id, $nombre) {
            
            $this->id = $id;
            $this->nombre = $nombre;
            $this->empleados = new Coleccion();
        }

        /**
         * Método para setear identificador 
         *
         * @access public
         * @param int $id identificador unívoco de la empresa
         * @return void
         */
        public function setId(int $id) {            
            $this->id = $id;
        }

        /**
         * Método para setear nombre de la empresa 
         *
         * @access public
         * @param string $nombre de la empresa
         * @return void
         */
        public function setNombre(string $nombre) {            
            $this->nombre = $nombre;
        }

        /**
         * Método para obtener identificador de la empresa 
         *
         * @access public
         * @return int
         */
        public function getId() {            
            return $this->id;
        }

        /**
         * Método para obtener nombre de la empresa 
         *
         * @access public
         * @return string
         */
        public function getNombre() {            
            return $this->nombre;
        }

        /**
         * Método para agregar empleado a empresa
         * El objeto Empleado se agrega a la coleccion de empleados
         * Se utiliza como clave en la colección el id del empleado
         * 
         * @access public
         * @param Empleado @objEmpleado Empleado a agregar a la empresa
         * @return void
         */
        public function nuevoEmpleado(Empleado $objEmpleado) {            
            $this->empleados->agregarElemento($objEmpleado, $objEmpleado->id);
        }

        /**
         * Método para listar los empleados de la empresa
         * Imprime en pantalla el nombre completo de los empleados
         * 
         * @access public
         * @return void
         */
        public function listadoEmpleados() {
            foreach($this->empleado as $key => $objEmpleado) {
                echo $objEmpleado->getNombreCompleto().'<br>';
            }
        }

        /**
         * Método para retornar un empledo buscado por su identificador
         * 
         * @access public
         * @param int $id identificador del empleado buscado
         * @return Empleado
         */
        public function obtenerEmpleado(int $id) {      

            return $this->empleados->obtenerElemento($id);
        }

        /**
         * Método para retornar promedio de la edad de los empleados de una empresa
         * 
         * @access public
         * @return float
         */
        public function promedioEdadEmpleados() {            
            
            $sumaParcial = 0; //suma de las edades de los empleados

            $cantidadEmpleados = $this->empleados->cantidadElementos();

            if(isset($cantidadEmpleados) && $cantidadEmpleados > 0) {                
                //si existen empleados asignados a la empresa
                foreach($this->empleados as $key => $objEmpleado) {
                    $sumaParcial+= $objEmpleado->edad;
                }

                return round($sumaParcial/$cantidadEmpleados, 2);
                
            } else {                
                //si la empresa no tiene empleados
                return 0;
            }       

        }
    }