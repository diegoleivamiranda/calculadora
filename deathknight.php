<?php
header("Content-Security-Policy: default-src 'self' 'unsafe-inline' 'unsafe-eval' https: data:;");
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Death Knight Talents</title>
    
    <link rel="stylesheet" type="text/css" href="./shared/style.css">
    <link rel="stylesheet" type="text/css" href="./shared/global.css">
    
    <link rel="stylesheet" type="text/css" href="./talents/Deathknight/talent.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>
<body style="background-color:#30384c" text="#FFFFFF" vlink="#45ACF6" link="#45ACF6" bgcolor="black" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<br>
<center>
<a href="index.html" title="Home"><img src="images/logo.png" alt="logo"></a>
<br>
<div>
<a href="Deathknight.php" title="Death Knight"><img src="class-images/class/deathknight.jpg" style="box-shadow: 0 0 5px 1px #8ab4f8;"></a>
<a href="druid.php" title="Druid"><img src="class-images/class/druid.jpg"></a>
<a href="hunter.php" title="Hunter"><img src="class-images/class/hunter.jpg"></a>
<a href="mage.php" title="Mage"><img src="class-images/class/mage.jpg"></a>
<a href="paladin.php" title="Paladin"><img src="class-images/class/paladin.jpg"></a>
<a href="priest.php" title="Priest"><img src="class-images/class/priest.jpg"></a>
<a href="rogue.php" title="Rogue"><img src="class-images/class/rogue.jpg"></a>
<a href="shaman.php" title="Shaman"><img src="class-images/class/shaman.jpg"></a>
<a href="warlock.php" title="Warlock"><img src="class-images/class/warlock.jpg"></a>
<a href="warrior.php" title="Warrior"><img src="class-images/class/warrior.jpg"></a>
</div>
</br>
<div id="replaceMeWithTalents"></div>
</center>

<script>
var pageId = "Deathknight";
var variableIsSite = 1;
var theURLtoCopy = "<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']; ?>";
</script>
<script src="talents/Deathknight/detection.js"></script>
<script src="talents/Deathknight/variables.js"></script>
<script src="talents/Deathknight/functions.js"></script>
<script src="talents/Deathknight/data.js"></script>
<script src="talents/Deathknight/donotlocalize.js"></script>
<script src="talents/Deathknight/localize.js"></script>
<script src="talents/Deathknight/arraysFill.js"></script>
<script src="talents/Deathknight/printOutTop.js"></script>
</body>
</html>
