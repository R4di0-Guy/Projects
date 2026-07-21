<?php
    $db=mysqli_connect("localhost","root","","motory") or die("nah");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <img id='motor' src="motor.png" alt="motocykl">
    <header>
        <h1>Motocykle - moja pasja</h1>
    </header>
    <section id="lewy">
        <h2>Gdzie pojechać?</h2>
            <?php
            $q="SELECT nazwa,opis,poczatek,zdjecia.zrodlo FROM `wycieczki` JOIN zdjecia ON wycieczki.zdjecia_id=zdjecia.id;";
            if($result=mysqli_query($db,$q)){
                foreach($result as $r){
                    echo"
                    <div class='terminy'>
                    ".$r["nazwa"]." rozpoczyna się w ".$r["poczatek"].", <a href='".$r['zrodlo'].".jpg'>zobacz zdjęcie</a>
                    </div>
                    <div class='element_definicji'>
                    ".$r['opis']."
                    </div>
                    ";
                }
            }
            ?>
    </section>
    <section class="prawy">
        <h2>Co kupić</h2>
        <ol>
            <li>Honda CBR125R</li>
            <li>Yamaha YBR125</li>
            <li>Honda VFR800i</li>
            <li>Honda CBR1100XX</li>
            <li>BMW R1200GS LC</li>
        </ol>
    </section>
    <section class="prawy">
        <h2>Statystyki</h2>
        <p>Wpisanych wycieczek:
            <?php
            $q2="SELECT COUNT(*) FROM wycieczki;";
            if($result2=mysqli_query($db,$q2)){
                foreach($result2 as $r2){
                    echo $r2['COUNT(*)'];
                }
            }
            ?>
        </p>
        <p>Użytkowników forum: 200</p>
        <p>Przesłanych zdjęć: 1300</p>
    </section>
    <footer>
        <p>Stronę wykonał:R</p>
    </footer>
</body>
</html>