<?php

    class Lugar{

        private $conexion;

        public function __construct($conexion) {
            $this->conexion = $conexion; // Asignar la conexión en el constructor
        }

        function modificar($nuevoId, $lugar, $descripcion, $ip){
            $sql = "UPDATE lugar
                        SET ip = '$nuevoId', lugar = '$lugar', descripcion = '$descripcion'
                            WHERE ip = '$ip';";
        
            $resultado = $this->conexion->query($sql);
        
            echo '<h2>Modificación realizada</h2>';
        }

        function borrar($ip){
            $sql = "DELETE FROM lugar
                        WHERE ip = '$ip';";
        
            $resultado = $this->conexion->query($sql);
        
            echo '<h2>Borrado realizado</h2>';
        }

        function listar() {
            $sql = "SELECT *
                    FROM lugar;";

            $resultado = $this->conexion->query($sql);
    
            echo "<tr><th>IP</th><th>Lugar</th><th>Descripción</th><th>Borrar</th><th>Modificar</th></tr>";
    
            while ($elemento = $resultado->fetch_assoc()) {
                echo "<tr><td>{$elemento['ip']}</td><td>{$elemento['lugar']}</td><td>{$elemento['descripcion']}</td><td><a href='procesos.php?ip={$elemento['ip']}&accion=Borrar'><button>Borrar</button></a></td><td><a href='procesos.php?ip={$elemento['ip']}&accion=modificar'><button>Modificar</button></a></td></tr>";
            }
        }
    }