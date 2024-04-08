
 <?php
        //datos de conexión
        $servidor="localhost";
        $usuario="root";
        $clave="";
        $bd="alumnos";
        $conectado="Conexión EXITOSA";
        $noConectado="Conexión NO EXITOSA";

        //si hago clic en el botón...
        //para el query2.php
        if(isset($_REQUEST("botonEnviar"))){
        //
            try {
            //creo una conexión PDO para poder trabajar con mi bbdd    
            $conexion= new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8", $usuario, $clave);

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo $conectado."<br>";

        //
            include "query2.php";
        //
        
            }
            catch(PDOException $e){

                echo $noConectado. $e->getMessage();
            }
        }
?>
    