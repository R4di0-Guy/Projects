<?php 
    $db_connection=mysqli_connect("localhost","root","","medica");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Przychodnia Medica</title>
    <link rel="stylesheet" href="sryl.css">
    <link rel="shortcut icon" href="obraz2.png">
</head>
<body>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>
    <article>
        <?php
        $query1="SELECT nazwa,cena,opis FROM Abonamenty";
        if($result=mysqli_query($db_connection,$query1)){
            foreach($result as $r){
                ?>
                <h3>Pakiet<?=$r["nazwa"]?> - cena <?=$r["cena"]?></h3>
                <p><?=$r["opis"]?></p>
                <?php
            };
        };
        ?>
        <br>
        <a href="opis.html">Dowiedz się więcej</a>
    </article>
    <main>
        <section>
            <h2>
               Standardowy 
            </h2>
            <ul>
                <?php
        $query2="SELECT Abonamenty.nazwa,Cechy.cecha FROM Abonamenty JOIN SzczegolyAbonamentu ON Abonamenty.id=SzczegolyAbonamentu.Abonamenty_Id JOIN Cechy ON Cechy.id=SzczegolyAbonamentu.Cechy_Id WHERE Abonamenty.id=1";
        if($result2=mysqli_query($db_connection,$query2)){
            foreach($result2 as $r2){
                ?>
                <li><?=$r2["cecha"]?></li>
                <?php
            };
        };
        ?>
            </ul>
        </section>
        <section>
            <h2>
               Premium 
            </h2>
            <ul>
                <?php
        $query3="SELECT Abonamenty.nazwa,Cechy.cecha FROM Abonamenty JOIN SzczegolyAbonamentu ON Abonamenty.id=SzczegolyAbonamentu.Abonamenty_Id JOIN Cechy ON Cechy.id=SzczegolyAbonamentu.Cechy_Id WHERE Abonamenty.id=2";
        if($result3=mysqli_query($db_connection,$query3)){
            foreach($result3 as $r3){
                ?>
                <li><?=$r3["cecha"]?></li>
                <?php
            };
        };
        ?>
            </ul>
        </section>
        <section>
            <h2>
               Dziecko 
            </h2>
            <ul>
                <?php
        $query4="SELECT Abonamenty.nazwa,Cechy.cecha FROM Abonamenty JOIN SzczegolyAbonamentu ON Abonamenty.id=SzczegolyAbonamentu.Abonamenty_Id JOIN Cechy ON Cechy.id=SzczegolyAbonamentu.Cechy_Id WHERE Abonamenty.id=3";
        if($result4=mysqli_query($db_connection,$query4)){
            foreach($result4 as $r4){
                ?>
                <li><?=$r4["cecha"]?></li>
                <?php
            };
        };
        ?>
            </ul>
        </section>
    </main>
    <footer>
        <p><img src="obraz2.png" alt="przychodnia">Stronę przygotował:R</p>
    </footer>
</body>
</html>