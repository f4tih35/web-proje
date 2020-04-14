<!DOCTYPE html>
<html>
    <head>
        <title>Mesajınız Gönderildi!</title>
    </head>
    <body>
        <h2>Mesajınız gönderildi!</h2>
        Ad: <?php echo $_POST['ad'];?><br/>
        Soyad: <?php echo $_POST['soyad'];?><br/>
        Cinsiyet: <?php echo $_POST['cinsiyet'];?><br/>
        Mail: <?php echo $_POST['mail'];?><br/>
        Telefon Numarası: <?php echo $_POST['telefon']; ?><br/>
        Sitemizi nasıl keşfettiniz?: <?php echo $_POST['kesif'];?><br>
        Parola: <?php echo $_POST['parola'];?><br/>
        Mesaj: <?php echo $_POST['mesaj']; ?><br/>
    </body>
</html>