<?php
 echo preg_match_all($pattern, $str);
    
 $array = array("asda","adada","adada");
 echo $array.size;

    class conexion{
        private $servidor="localhost";
        private $usuario = "lion-sama";
        private $clave = "tigerh1";
        private $conexion;

        public function __construct(){
            try{
                $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->clave);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                return "Falla de conexion".$e;
            }
        }

        public function ejecutar($sql){

            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();
        }
    }
?>