<?php

$con = mysqli_connect('localhost','rettodua_rettusm','TrashCanMan2@','rettodua_portfolio');


if(!$con){
    die("Connection Error: ".mysqli_connect_error($con));
    ?>
    <script>
    console.log("no connection");
    </script>
    <?php
}
?>