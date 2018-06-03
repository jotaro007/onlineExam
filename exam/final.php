<?php include 'inc/header.php'; ?>
<?php
    Session::checkSession();
?>
    <div class="main">
        <h1>Exam is Over !</h1>
        <div class="stattest">
            <p>Congratulation ! For participating for the test. </p>

            <p>Final Score:
                <?php
                    if (isset($_SESSION['score'])){
                        echo $_SESSION['score'];
                        unset($_SESSION['score']);
                    }
                ?>
            </p>

            <a href="viewans.php">View Answer</a>
            <a href="starttest.php">Start Again</a>
        </div>

    </div>
<?php include 'inc/footer.php'; ?>