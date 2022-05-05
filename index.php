<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="./public/index.scss">
    <script src="https://kit.fontawesome.com/2f8a9e5e8e.js" crossorigin="anonymous"></script>
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">
</head>
<body>
<div class="body-wrapper body-container" id="body-wrapper">
    <div class="form" id="form-wrapper">
        <div class="form-wrapper form-container">
            <div class="hotel-name">
                <span>King Inns</span>
            </div>
            <form method="post" action="<?php echo htmlspecialchars('./php_files/system_authentication.php');?>">
                <?php
                if (isset($_SESSION['error'])) {
                    echo '<div class="error-message error" id="error-message">';
                    echo '<span>'. $_SESSION['error'] . '</span>';
                    echo '</div>';
                    session_destroy();
                }
                ?>
                <div class="fields input-fields">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="submit" value="Sign-in">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>