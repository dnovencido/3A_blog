<?php
    include "functions.php";
    include "session.php";

    $my_blogs = get_my_blogs($_SESSION['id']);
?>
<?php include "layouts/_header.php" ?>
            <header>
                <?php include "layouts/_navigation.php" ; ?>
            </header>
            <section>
                <div id="my-blogs" class="container">
                    <div id="my-blogs-header">
                        <div class="my-blogs-header-item">
                            <h1>My blogs</h1>
                        </div> 
                        <div class="my-blogs-header-item">
                            <a href="create-blog.php" class="btn btn-md btn-rounded">Add a blog</a>
                        </div>
                    </div>
                    <div id="my-blogs-list">
                    </div>
                </div>
            </section>
<?php include "layouts/_footer.php" ?>