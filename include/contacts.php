<?php

include('config.php');

$email = $_POST['email'];
$topic = $_POST['topic'];
$text = $_POST['text'];

$data = "INSERT INTO contact(email, topic, text) values('$email', '$topic', '$text')";

if(mysqli_query($con, $data)){
    ?>
        <script>
            confirm('<?php echo $email ?>, your message has successfully been sent, Thank you!');
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