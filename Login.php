<?php
session_start();
require_once('conect.php');
if ($_POST) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $query = "SELECT *  from registr WHERE mail = '$mail' AND password='$password'";
   global $de_con;
    $adr = mysqli_query($de_con, $query);
    if (!$adr) {
        exit($query);
    }

    if (mysqli_num_rows($adr) > 0) {
        $user = mysqli_fetch_array($adr);
        $_SESSION['user_id'] = $user['id'];
        ?>
        <script>
        document.location.href='index.php';
        </script>
<?php
    }else{
        echo"Такого пользователя не существует, либо введён не соответствующий пароль";
    }
}

?>
<div id="logincon">
    <br>
    <div id="welcome">

        Добро пожаловать!
    </div>


    <form method='POST'>
        <div align="center">


            <div class="form-group1">
                <label for="exampleInputemail" id="label">Email address</label>
                <input type="text" name="mail" class="form-control" id="exmapleInputemail" required
                       placeholder="Email">
            </div>

            <div class="form-group1">
                <label for="exampleInputpassword" id="label">Password</label>
                <input type="password" name="password" class="form-control" id="exmapleInputpassword" required
                       placeholder="Пароль">
            </div>
<br>
            <div class="form-group1">
                <input type ="submit" class="btn btn-success" value="Войти">
            </div>
        </div>
    </form>
    <a href="index.php">
        <img src="image/label.png" id="PuYreg"  title="PuY">

    </a>v
</div>