<!DOCTYPE html>
<html>
<head>
    <title>Friends Grid</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="grid-container">

    <div class="header">
        Short Biographies for Friends
    </div>

    <div class="name">Aaron</div>
    <div class="name">Abby</div>
    <div class="name">Prim</div>
    <div class="name">Kc</div>
    <div class="name">Mariyel</div>

    <div class="box"><?php require("friend1.php"); ?></div>
    <div class="box"><?php include("friend2.php"); ?></div>
    <div class="box"><?php include("friend3.php"); ?></div>
    <div class="box"><?php include("friend4.php"); ?></div>
    <div class="box"><?php include("friend5.php"); ?></div>

    <div class="footer">
        Submitted by: Joy Anne Ciaris B. Nuqui
    </div>

</div>

</body>
</html>
