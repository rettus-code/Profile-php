<?php
    include('config.php');

    $sql = "SELECT * FROM review";

    $result = mysqli_query($con,$sql);

    while($row =mysqli_fetch_array($result)){
        $j = $row['stars'];
    ?>
<div class="test-card" id="review-cards">
    <br>
    <h5>Link to website being reviewed</h5>
    <?php
    echo "<a target = '_blank' href=".$row['link'].">Site Under Review</a><br><br>";
    for ($i=0; $i < $j; $i++)
        echo "<i class ='fa fa-star' aria-hidden ='true'></i>";
    ?>
    <div class="card-body">
        <?php echo "<h5 class='card-title'>".$row['name']."</h5>";
        echo "<p class='card-text'>".$row['review']."</p>";?>
    </div>
</div>
<?php
}
?>