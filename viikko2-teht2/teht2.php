<?php
require_once('inc/header.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    if(isset($_POST['remember'])):
        setcookie('username', $_POST['username']);
    else:
        setcookie('username', '', time() - 3600);
    endif;
    header('Location:' . $_SERVER['PHP_SELF']);
endif;


?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>
            Username
            <?php
            $value = '';
            if(isset($_COOKIE['username'])):
                $value = $_COOKIE['username'];
            endif;
            ?>
                <input type="text" name="username" placeholder="username" <?php echo $value; ?>>
        </label>
        <label>
            Remember me
            <?php
            $checked = '';
            if (isset($_COOKIE['username'])):
                $checked = 'checked';
            endif;
            ?>
            <input type="checkbox" name="remember"  >
        </label>
        <label>
            Submit
            <button type="submit" >Submit</button>
        </label>
    </form>



<?php
require_once('inc/footer.php');
