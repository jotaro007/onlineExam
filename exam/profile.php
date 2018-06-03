<?php include 'inc/header.php'; ?>
<?php
    Session::checkSession();
    $userid = Session::get("userid");
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $updateUser = $usr->updateUserData($userid, $_POST);
    }
?>

    <div class="main">
        <h1>Your Profile</h1>
        <?php
            if (isset($updateUser)){
                echo $updateUser;
            }
        ?>
            <div class="profile">
                <form action="" method="post">
<?php
$getData = $usr->getUserData($userid);
if ($getData){
    $result = $getData->fetch_assoc()
?>
                    <table class="tbl">
                        <tr>
                            <td>Name</td>
                            <td> : <input name="name" type="text" id="name" value="<?php echo $result['name']; ?>" /></td>
                        </tr>

                        <tr>
                            <td>User Name</td>
                            <td> : <input name="username" type="text" id="username" value="<?php echo $result['username']; ?>" /></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td> : <input name="email" type="text" id="email" value="<?php echo $result['email']; ?>"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" id="updatesubmit" value="Update"></td>
                        </tr>
                    </table>
    <?php }?>
                </form>
            </div>



    </div>
<?php include 'inc/footer.php'; ?>