<?php include("header.php"); ?>
    <h1>預訂</h1>
    <h2><?php echo date("n");?> 月優惠</h2>

    <?php 
    //Show products, use loop for each
    foreach ($gems as $key => $gem) {
        echo '<img src=images/'.$gem['id'].'.jpg><br>';
        echo $gem['name'].'<br>';
        echo 'Price: $'.$gem['price'].'<br>';
        echo "<a href='order.php?id=".$gem['id']."'>預訂商品</a><br>";
    }
    ?>

    
<p></p>
<?php include("footer.php"); ?>