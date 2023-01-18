<?php 
require_once('db-connect.php');
if(!isset($_GET['id'])){
    echo "<script> erro('Undefined Schedule ID.');</script>";
    $conn->close();
    exit;
}

$delete = $conn->query("DELETE FROM `eventos` where id = '{$_GET['id']}'");
if($delete){
    echo "<script>   Swal.fire(
        'Evento eliminado com sucesso',
        'success'
      );</script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();

?>



