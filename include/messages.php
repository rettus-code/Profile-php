<?php

include('config.php');

$email1 = $_POST['email1'];
$topic1 = $_POST['topic1'];
$text1 = $_POST['text1'];

$data = "INSERT INTO message(email, topic, text) values('$email1', '$topic1', '$text1')";

if(mysqli_query($con, $data)){
    ?>
        <script>
            confirm('<?php echo $email1 ?>, your message has successfully been sent, Thank you!');
            window.location = "../index.php";
        </script>
    <?php
}
else {

    ?>
        <script>
            alert('Database error, Try Again!');
            window.location = "../index.php";
        </script>

    <?php
}

?>