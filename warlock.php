<?php
header("Content-Security-Policy: default-src 'self' 'unsafe-inline' 'unsafe-eval' https: data:;");
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Warlock Talents</title>
    
    <link rel="stylesheet" type="text/css" href="./shared/style.css">
    <link rel="stylesheet" type="text/css" href="./shared/global.css">
    
    <link rel="stylesheet" type="text/css" href="./talents/Warlock/talent.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>
<body style="background-color:#30384c" text="#FFFFFF" vlink="#45ACF6" link="#45ACF6" bgcolor="black" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<br>
<center>
<a href="index.html" title="Home"><img src="images/logo.png" alt="logo"></a>
<br>
<div>
<a href="deathknight.php" title="Death Knight"><img src="class-images/class/deathknight.jpg"></a>
<a href="druid.php" title="Druid"><img src="class-images/class/druid.jpg"></a>
<a href="hunter.php" title="Hunter"><img src="class-images/class/hunter.jpg"></a>
<a href="mage.php" title="Mage"><img src="class-images/class/mage.jpg"></a>
<a href="paladin.php" title="Paladin"><img src="class-images/class/paladin.jpg"></a>
<a href="priest.php" title="Priest"><img src="class-images/class/priest.jpg"></a>
<a href="rogue.php" title="Rogue"><img src="class-images/class/rogue.jpg"></a>
<a href="shaman.php" title="Shaman"><img src="class-images/class/shaman.jpg"></a>
<a href="warlock.php" title="Warlock"><img src="class-images/class/warlock.jpg" style="box-shadow: 0 0 5px 1px #8ab4f8;"></a>
<a href="warrior.php" title="Warrior"><img src="class-images/class/warrior.jpg"></a>
</div>
</br>
<div id="replaceMeWithTalents"></div>
</center>

<script>
var pageId = "Warlock";
var variableIsSite = 1;
var theURLtoCopy = "<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']; ?>";
</script>
<script src="talents/Warlock/detection.js"></script>
<script src="talents/Warlock/variables.js"></script>
<script src="talents/Warlock/functions.js"></script>
<script src="talents/Warlock/data.js"></script>
<script src="talents/Warlock/donotlocalize.js"></script>
<script src="talents/Warlock/localize.js"></script>
<script src="talents/Warlock/arraysFill.js"></script>
<script src="talents/Warlock/printOutTop.js"></script>
</body>
</html>
