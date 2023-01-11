<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="main.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>tre</title>
</head>
<body>

    <?php
    
        echo "ciao drs"; 

    ?>

    <div id="topBarId" class="topBarClass">
        
        <img id="image1" class="homeImageClass" src="Foto/Foto1.jpg" onclick="imageClick()">
        <h3 id="contattiId" class="contattiClass">Contattaci</h3>
        <img id="cerca" class="cercaClass" src="Foto/magnifying-glass.png">
        <img id="menu" class="menuClass" src="Foto/menu.png">
    </div>

    

    <h1 id="dimensioni"></h1>
    
    <div> 
        <h2 onclick="goToLink('https://www.instagram.com/villagiade/')" id="instagram">Instagram</h2>
        <h2 onclick="goToLink('https://www.facebook.com/villagiade/')" id="facebook">Facebook</h2>
    </div>
</body>
</html>

