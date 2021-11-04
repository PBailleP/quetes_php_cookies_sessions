<?php require 'inc/head.php';
require 'inc/data/products.php';
if ($_SESSION["login"] == NULL) {
    header("Location: login.php");
    exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
    <?php $cart = $_SESSION['shopping'];
    foreach($cart as $key => $value){
        echo $catalog[$key]['name']. " ". $value. "<br>";
    }

    ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
