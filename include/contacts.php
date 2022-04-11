<?php

include('config.php');

$email = $_POST['email'];
$topic = $_POST['topic'];
$text = $_POST['text'];

$stmt = $con -> prepare ("INSERT INTO contact(email, topic, text) VALUES (?, ?, ?)");
$stmt ->bind_Param('sss', $email, $topic, $text);
$stmt->execute();
if($stmt->affected_rows !== 0){
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
$stmt->close();
?>