<?php

include('config.php');

$name = $_POST['name'];
$link = $_POST['link'];
$stars = $_POST['stars'];
$review = $_POST['review'];


$data = "INSERT INTO review(name, link, stars, review) values('$name', '$link', '$stars', '$review')";

if(mysqli_query($con, $data)){
    ?>
        <script>
            confirm('<?php echo $name ?> your review has successfully been uploaded, Thank you!');
            window.location = "../index.php";
        </script>
    <?php
}
else {

    ?>
        <script>
            alert('User Input Could Not Be Added, Try Again!');
            window.location = "../index.php";
        </script>

    <?php
    }
?>