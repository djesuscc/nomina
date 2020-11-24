<?php 
    require_once('../db/conexion.php');
    function  getDatos($con, $tabla, $where, $condition) {
        $data = [];
        $sql = "SELECT * FROM $tabla";
        if ($condition) $sql.= "WHERE = $where = $condition";

        $result = mysqli_query($con, $sql);
        if($result) {
            if (mysqli_num_rows($result) > 0) {
                while($row = $result->fetch_assoc()) {
                    array_push($data, $row);
                }
            }
        } else {
            $data = [hasError => true, error => $result];
        }
        return $data;
    }
?>