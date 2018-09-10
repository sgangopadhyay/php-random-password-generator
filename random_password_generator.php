<?php
// PROGRAM : PHP Program to Generate Random Password of Specific Character
// CREATED BY : SUMAN GANGOPADHYAY
// DATE CREATED : 10-Sept-2018
// CAVEATS : Please give the specific random password length in the RandomPasswordGenerator php functions
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Password Generator</title>
    <style media="screen">
      body{
        font-family: sans-serif;
      }
      h3{
        text-align: center;
        font-weight: bold;
        text-decoration: underline;
        font-size: 30px;
      }
      #display_password{
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <h3>Random Password Generator using PHP</h3><br/>
    <form class="" action="#" method="post">
      <label for="rnd_pwd_gen">Random Password Generator : </label>
      <input type="submit" name="rnd_pwd_gen" value="Generate Random Password">
    </form>
    <?php
    function RandomPasswordGenerator($password_length){
        $psw = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~@#$%^&*()-+{}[];<>,.?/";
        $password = substr(str_shuffle($psw),0,$password_length);
        return $password;
    }
    if (isset($_POST['rnd_pwd_gen'])) {
      echo "<div id='display_password'>".RandomPasswordGenerator(16)."</div>";
    }
    ?>
  </body>
</html>
