<?php
$db=mysqli_connect("localhost","root","","korona2") or die("nah");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Korona gór polskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header id="head1"><img src="logo.png" alt="Logo"></header>
    <header id="head2"><h2>Korona Gór Polskich</h2></header>
    <main>
    <?php
    $q1="SELECT id,nazwa FROM szczyty ORDER BY wysokosc DESC;";
    if($result=mysqli_query($db,$q1)){
        foreach($result as $r){
            echo "
            <span><a href='szczyty.php?nazwa=".$r["nazwa"]."'>".$r["nazwa"]."</a></span>
            ";
        }
    }
        
        ?>
    </main>
    <section>
    <?php
    $q2="SELECT plik,nazwa FROM szczyty LIMIT 10;";
    if($result2=mysqli_query($db,$q2)){
        foreach($result2 as $r2){
            echo "
            <img class='miniatury' src='".$r2["plik"]."' alt='".$r2["nazwa"]."'>
            ";
        }
    }
        ?>
    </section>
    <footer id="foot1">
        <h3>Kontakt</h3>
        <ul>
            <li>Zadzwoń do nas: 111 222 333</li>
            <li><a href="korona@gory.pl">Napisz do nas</a></li>
        </ul>
    </footer>
    <footer id="foot2">
        <h3>© Wykonane przez: R</h3>
    </footer>
</body>
</html>