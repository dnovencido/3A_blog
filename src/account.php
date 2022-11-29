<?php
    include "session.php";

    if(!array_key_exists("id", $_SESSION)) {
        header("Location: index.php");
    }
?>
<?php include "layouts/_header.php"; ?>
         <header>
            <?php include "layouts/_navigation.php" ; ?>
         </header>
         <section class="container">
            <h1>Hello <?= $_SESSION['name'] ?></h1>
         </section>
<?php include "layouts/_footer.php"; ?>