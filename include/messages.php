<?php

include('config.php');

$email1 = $_POST['email1'];
$topic1 = $_POST['topic1'];
$text1 = $_POST['text1'];

$stmt = $con -> prepare ("INSERT INTO contact(email, topic, text) VALUES (?, ?, ?)");
$stmt ->bind_Param('sss', $email1, $topic1, $text1);
$stmt->execute();
if($stmt->affected_rows !== 0){
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
            alert('Thank you!');
            window.location = "../index.php";
        </script>

    <?php
}

?>