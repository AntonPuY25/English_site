<?php
require_once('conect.php');
if ($_POST) {
    $password = $_POST[password];
    $password_again = $_POST[pass_again];
    $name = $_POST[Name];
    $mail = $_POST[email];
    $err = [];


        if ($password == $password_again) {
          // echo "On";
        } else {
            $err[] = "Пароли не совпадают";
        }

    $query ="SELECT * FROM  registr WHERE mail ='$mail'";
    $adr=mysqli_query($de_con ,$query);
    if(!$adr){
        exit($query);
    }
    if(mysqli_num_rows($adr)>0){
        $err[]='Пользователь с таким Email уже сущетвует';
    }
    foreach($err as $one){
        echo"<p style='color:red' class='error'>";
        echo $one;
        echo "</p>";
    }

    if (count($err)==0) {
        $query = "INSERT INTO registr VALUES(
                                  NULL,
                                 '$name',
                                  '$password',
                                  $password_again,
                                  '$mail', 
                                  NOW()                
                                  
)";
        $in=mysqli_query($de_con,$query);
        if(!$in){
            exit($query);
        }else{
            ?>
            <script>
                document.location.href='index.php';
            </script>
            <?php



        }
    }


}
?>






<div id="logincon">
<br>


<div id="welcome">

    Добро пожаловать!
</div>





    <form method='POST' >
        <div align="center">



            <div class="form-group1">
                <label for="exampleInputName1" id="label">Введите ваше имя</label>
                <input type="text" name="Name"    class="form-control" id="exmapleInputName" required placeholder="Имя">
            </div>

            <div class="form-group1">
                <label for="exampleInputpassword" id="label">Ведите пароль</label>
                <input type="Password" name="password"    class="form-control" id="exmapleInputpassword"  required placeholder="Пароль">
            </div>
            <div class="form-group1">
                <label for="exampleInputPassword1" id="label">Повторите пароль</label>
                <input type="password" name="pass_again"    class="form-control" id="exmapleInputPass_again" required placeholder="Пароль">
            </div>


            <div class="form-group1">
                <label for="exampleInputemail" id="label">Введите ваш Email</label>
                <input type="email" name="email"  class="form-control" id="exmapleInputemail" required placeholder="@mail">
            </div>
           <br><div class="form-group1">
            <input type ="submit" class="btn btn-success" value="Регистрация">
            </div>
            </div>


    </form>
    <a href="index.php">
        <img src="image/label.png" id="PuYreg"  title="PuY">

    </a>
</div>


</div>