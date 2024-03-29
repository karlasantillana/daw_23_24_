<?php
    class Conexion{
        // Atributos de la CLASE Conexión
        private $host="localhost:3306";
        private $usuario="root";
        private $password="";
        private $database="protectora_animales";
    
    /* ---------------------------------------------------------------------- */
        // MÉTODOS MÁGICOS

        //__get()
        public function __get($propiedad){
            if(property_exists($this, $propiedad)) {
                return $this->$propiedad;
            }
        }

        // Método para conectar con la BBDD
        protected function realizarConexion(){
            try {
        
                //1) Realizamos la conexión con la BBDD
                $conn = new PDO("mysql:host=$this->host; dbname=$this->database; charset=utf8",$this->usuario);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $conn;
        
            } catch (PDOException $e) {
                echo "Error de conexión a la base de datos: " . $e->getMessage();
            }
        }


    }
?>