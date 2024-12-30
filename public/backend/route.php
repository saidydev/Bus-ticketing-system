<?php


include "./connection.php";

if(isset($_POST['book'])){
error_reporting(0);

$From = $_POST['starting_point'];
$To = $_POST['end_point'];

$routeError = 'No route Found';

$sql = "SELECT route_id FROM routes WHERE starting_point ='$From' AND end_point = '$To'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){
    header("Location: ../pages/busses.php");
}else{
    echo '
    <script>
    alert("No route found");
    </script>
    ';
    header("Location: ../index.php");

}

session_start();
$_SESSION["startingpoint"] = $From;

$_SESSION["endpoint"] = $To;

}


?>