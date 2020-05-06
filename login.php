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
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.html">Fatih Melih Ersoy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Hakkımda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sehir.html">Şehrim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="cv.html">CV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iletisim.html">İletişim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Giriş Yap</a>
        </li>
    </div>  
  </nav>

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
                  
                  header("Location: hosgeldiniz.html");;
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
  

</body>
</html>