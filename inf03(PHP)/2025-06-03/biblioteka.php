<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>BIBLIOTEKA SZKOLNA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h2>STRONA BIBLIOTEKI SZKOLNEJ WIEDZAMIN</h2>
    </header>
    <section>
        <h3>Nasze dzisiejsze propozycje:</h3>
        <table>
            <tr>
                <th>Autor</th>
                <th>Tytuł</th>
                <th>Katalog</th>
            </tr>
            <?php
            $db_connection=mysqli_connect("localhost","root","","biblioteka");
            $query="SELECT autor,tytul,kod FROM ksiazki ORDER BY RAND() LIMIT 5;";

            if($result=mysqli_query($db_connection,$query)){
                foreach($result as $r){
                ?>
                <tr>
                    <td><?=$r["autor"]?></td>
                    <td><?=$r["tytul"]?></td>
                    <td><?=$r["kod"]?></td>
                </tr>
                <?php
                }
            }
            mysqli_close($db_connection)
            ?>
        </table>
    </section>
    <main>
        <article id="pierwszy">
            <img src="ksiazka1.jpg" alt="okładka książki">
            <p>Według różnych podań najpaskudniejsza ropucha nosi w głowie piękny, cenny klejnot.</p>
        </article>
        <article id="drugi">
            <img src="ksiazka2.jpg" alt="okładka książki">
            <p>Panna Stefcia i Maryla nie są to zbyt grzeczne damy, nawet nie słuchają mamy...</p>
        </article>
        <article id="trzeci">
            <img src="ksiazka3.jpg" alt="okładka książki">
            <p>Ratuj mnie, przyjacielu, w ostatniej potrzebie: Kocham piękną Irenę. Rodzice i ona...</p>
        </article>
    </main>
    <footer>
        Stronę wykonał:R
    </footer>
</body>
</html>