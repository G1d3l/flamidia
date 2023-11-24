<?php

    if(isset($_POST['submit']))
    {
        include_once('conexao.php');
       
        // $NOME = $_POST['NOME'];
        // $USERNAME = $_POST['USERNAME'];
        // $EMAIL = $_POST['EMAIL'];
        // $PASSWORD = $_POST['SENHA'];
        // $result = mysqli_query($connection, "INSERT INTO cadastrados(NOME,USERNAME,EMAIL,SENHA) 
        // VALUES ('$NOME','$USERNAME','$EMAIL','$PASSWORD')");

        // header('Location: register.php');
        $sql = "SELECT ID FROM cadastrados ORDER BY id DESC";
        $result = $connection->query($sql);
        
        if(!empty($result->num_rows == 0)) {
          
          $NOME = $_POST['NOME'];
          $USERNAME = $_POST['USERNAME'];
          $EMAIL = $_POST['EMAIL'];
          $PASSWORD = $_POST['SENHA'];
          $result = mysqli_query($connection, "INSERT INTO cadastrados(NOME,USERNAME,EMAIL,SENHA) 
          VALUES ('$NOME','$USERNAME','$EMAIL','$PASSWORD')");
        }
         else {echo"já cadastrado";}
       
        
    }

?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <form action="register.php" method="post">
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="NOME"><b>NOME</b></label>
          <input type="text" placeholder="NOME" name="NOME" id="NOME" required>
      
          <label for="USERNAME"><b>USERNAME</b></label>
          <input type="text" placeholder="USERNAME" name="USERNAME" id="USERNAME" required>
      
          <label for="EMAIL"><b>EMAIL</b></label>
          <input type="text" placeholder="EMAIL" name="EMAIL" id="EMAIL" required>
          <hr>

          <label for="PASSWORD"><b>PASSWORD</b></label>
          <input type="text" placeholder="SENHA" name="SENHA" id="PASSWORDS" required>
          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" name="submit" class="registerbtn">Register</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="file:///C:/Users/alunoti/Desktop/projeto%20hotel/dados%20pessoais/css/qwewqewq.html">Sign in</a>.</p>
        </div>
      </form>
</body>
</html>
