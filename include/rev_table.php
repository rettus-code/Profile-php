<?php
//include ('validator.php');
include('config.php');

$name = $_POST['name'];
$link = $_POST['link'];
$stars = $_POST['stars'];
$review = $_POST['review'];
$pw = $_POST['pw'];
$password = $_POST['password'];
$hd = $_POST['hd'];

if ($hd !== "" || $pw !== $password){
    ?>
        <script>
            alert('Bot Input Could Not Be Added, Try Again! <?php echo $pw; echo $password;?>');
            window.location = "../index.php";
        </script>

    <?php
    $con->close();
} else {
        $stmt = $con -> prepare ("INSERT INTO review(name, link, stars, review) VALUES (?, ?, ?, ?)");
        $stmt ->bind_Param('ssis', $name, $link, $stars, $review);
        $stmt->execute();
        if($stmt->affected_rows !== 0){
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
        $stmt->close();
    }
?>