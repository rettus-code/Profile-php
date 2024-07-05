<?php

//$con = mysqli_connect('localhost','root','','portfolio');
$con = mysqli_connect('localhost','rettdzly_rettus','portFolio@12','portfolio');
/*User rettus pw portFolio@12 */
if(!$con){
    die("Connection Error: ".mysqli_connect_error($con));
    ?>
    <script>
    console.log("no connection");
    </script>
    <?php
}
?>