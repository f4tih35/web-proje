<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FME - Giriş Yap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="header">
<p><a href="index.html">Fatih Melih Ersoy</a></p>
<ul>
    <li><a href="login.php" class="active">Giriş Yap</a></li>
    <li><a href="iletisim.php">İletişim</a></li>
    <li><a href="mirasimiz.html">Mirasımız</a></li>
    <li><a href="sehir.html">Şehrim</a></li>
    <li><a href="cv.html">CV</a></li>
    <li><a href="index.html">Hakkında</a></li>
  </ul>
</div>

  <div class="ortayazi">
  
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'melih.ersoy@sakarya.edu.tr' && 
                  $_POST['password'] == '123456789') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'melih.ersoy@sakarya.edu.tr';
                  
                  header("Location: hosgeldiniz.php");;
               }else {
                  $msg = 'Kullanıcı adı veya Parola Hatalı!!';
               }
            }
         ?>  
      </div>
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <h4>Kullanıcı Adı</h4>
            <input type = "email" class="w3-input w3-border" 
               name = "username" placeholder = "melih.ersoy@sakarya.edu.tr" 
               required autofocus></br>
               <h4>Parola</h4>
            <input type = "password" class="w3-input w3-border"
               name = "password" placeholder = "123456789" required><br>
            <button class="w3-btn w3-black" type = "submit" 
               name = "login">Giriş Yap</button>
         </form>         
      </div> 
  </div>
  

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>