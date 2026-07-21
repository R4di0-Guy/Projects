<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style1.css" rel="stylesheet">
    <title>Firma informatyczna</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="head">
        <h1 class="logo">ITTECH</h1>
        <nav>
            <a href="Firma informatyczna.html" rel="noopener noreferrer" class="nav">Home</a>
            <a href="#aboutus" rel="noopener noreferrer" class="nav">O nas</a>
            <a href="#contact" rel="noopener noreferrer" class="nav">Kontakt</a>
            <a href="#zamow" rel="noopener noreferrer" class="nav">Zamów</a>
        </nav>
    </div>
    </header>
    <div class="line"></div>
    <main id="aboutus">
        <h1>Witamy na sronie firmy informatycznej ItTech!</h1>
        <h3>Firma informatyczna ItTech udostępnia usługi informatyczne takie jak czyszczenie komputera, naprawa systemów komputerowych, diagnostyka. Dla umówienia na wizytę albo na wyjazd technika do domu
użytkownik może złożyć zamówienie na stronie, wprost napisać na mejla albo zadzwonić.</h3>
<h2>Na górze kliknij na interesujący ciebie rozdział oraz usługę</h2>
    </main>
    <!-- <marquee behavior="scroll" direction="left" scrollamount="16">OFERTA</marquee> -->
    <div class="marq">
    <div class="marqinner">
        <span>OFERTA!</span>
        <span>OFERTA!</span>
        <span>OFERTA!</span>
        <span>OFERTA!</span>
        <!-- <span>OFERTA!</span>
        <span>OFERTA!</span>
        <span>OFERTA!</span> -->
    </div>
    </div>
    <main>
    <h1>Halloween w ItTech – strasznie dobre zniżki</h1>
    <div id="halloween_img"><img src="halloween_ittech.png" alt="halloween jack-o-lantern"></div>
        <h3>
            <p>Z okazji Halloween firma ItTech przygotowała wyjątkową promocję, która z pewnością ożywi każdy komputer.
            Tylko do 31 października oferujemy do 30% zniżki na wybrane usługi:
            </p>
            <p>Czyszczenie komputera – usuń kurz i zabrudzenia, które spowalniają pracę Twojego sprzętu.
            </p>
            <p>Naprawa systemów komputerowych – przywrócimy do życia nawet najbardziej oporny system.
            </p>
            <p>Diagnostyka sprzętu – dokładnie sprawdzimy, co powoduje niepokojące objawy Twojego komputera.
            </p>
            <p>Nie pozwól, aby Twój komputer stał się ofiarą technologicznych duchów.
            Skorzystaj z oferty ItTech i oddaj swój sprzęt w ręce specjalistów.
            </p>
        </h3>
        <h2><p>Promocja obowiązuje od 23 do 31 października.
            Więcej informacji dostępnych jest w naszym serwisie lub pod numerem kontaktowym ItTech.</p>
        </h2>
    </main>


     <main>
        <h1>Usługi</h1>
        <div id="serv">
            <div class="services">
                <h3>czyszczenie komputera</h3>
                <img class="service_img" src="cleaning.png" alt="img">
                <h4>70zł</h4>
                <div class="description">
                    <ul>
                        <li>
                        demontaż i czyszczenie wentylatorów i radiatorów, ewentualne usunięcie starej pasty termoprzewodzącej i nałożenie nowej, jeśli to jest częścią usługi</li>
                        <li>
                        sprawdzenie układów chłodzenia (czy wentylatory działają, czy czujniki temperatury poprawnie odczytują), a czasem rekomendacja lub wymiana termopadów/pasty
                        </li>
                        <li>
                        w niektórych wariantach usługi: czyszczenie układu zasilania, kabli, filtrów powietrza, sprawdzenie stanu połączeń i ogólnej kondycji wnętrza komputera
                        </li>
                    </ul>
                </div>
            </div>

            <div class="services">
                <h3>naprawa systemów komputerowych</h3>
                <img class="service_img" src="repairing.png" alt="img">
                <h4>60zł</h4>
                <div class="description">
                    <ul>
                        <li>
                        sprawdzenie podzespołów komputera (płyty głównej, pamięci RAM, dysku, karty graficznej itp.)</li>
                        <li>
                        analiza błędów systemowych i wydajności;
                        </li>
                        <li>
                        testy temperatur, zasilania i stabilności systemu
                        </li>
                        <li>
                        w przypadku problemów software-owych – kontrola działania systemu operacyjnego, sterowników i aktualizacji
                        </li>
                    </ul>
                </div>
            </div>

            <div class="services">
                <h3>diagnostyka komputera</h3>
                <img class="service_img" src="diagnostyka.png" alt="img">
                <h4>55zł</h4>
                <div class="description">
                    
                    <ul>
                        <li>
                        testowanie podzespołów (procesor, pamięć RAM, dysk, karta graficzna, zasilacz)</li>
                        <li>
                        analiza systemu operacyjnego i sterowników
                        </li>
                        <li>
                        kontrola temperatur, napięć i stabilności pracy
                        </li>
                        <li>
                        wykrywanie błędów sprzętowych, uszkodzeń logicznych oraz problemów z oprogramowaniem
                        </li>
                        <li>
                        sporządzenie raportu wraz z rekomendacją dalszych działań naprawczych
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     </main>
     <main>
        <h1>Zamówenie</h1>
            <div id="zamow">
                    <!-- <form action="zamowienie.php" method="post">
                        <h3>Wybierz usługę:</h3>
                        <label><input type="checkbox" name="services" value="service1"> czyszczenie komputera</label><br>
                        <label><input type="checkbox" name="services" value="service2">  naprawa systemów komputerowych</label><br>
                        <label><input type="checkbox" name="services" value="service3"> diagnostyka komputera</label><br><br>

                        <h3>Gdzie musi być okazana usługa:</h3>
                        <label><input type="radio" name="location" value="home" required onclick="toggleAddress(true)">wyjazd technika do domu</label><br>
                        <label><input type="radio" name="location" value="office" onclick="toggleAddress(false)"> wizyta naszego oddziału przez klienta</label><br><br>

                        <div id="address-field" style="display:none;">
                            <label>Adres: <input type="text" name="address" id="address"></label><br><br>
                        </div>

                        <label>Telefon (obowiązkowo): <input type="tel" name="phone" required pattern="\+?[0-9\s\-\(\)]{7,}"></label><br><br>

                        <label>Email (opcjonalnie): <input type="email" name="email"></label><br><br>

                        <button type="submit">Wyślij</button>
                    </form> -->
                    <form id="orderForm" action="zamowienie.php" method="post">
                        <h3>Wybierz usługę:</h3>
                        <label><input type="checkbox" name="services[]" value="Czyszczenie komputera"> czyszczenie komputera</label><br>
                        <label><input type="checkbox" name="services[]" value="Naprawa systemów komputerowych"> naprawa systemów komputerowych</label><br>
                        <label><input type="checkbox" name="services[]" value="Diagnostyka komputera"> diagnostyka komputera</label><br><br>

                        <h3>Gdzie musi być okazana usługa:</h3>
                        <label><input type="radio" name="location" value="home" required onclick="toggleAddress(true)"> wyjazd technika do domu</label><br>
                        <label><input type="radio" name="location" value="office" onclick="toggleAddress(false)"> wizyta naszego oddziału przez klienta</label><br><br>

                        <div id="address-field" style="display:none;">
                            <label>Adres: <input type="text" name="address" id="address"></label><br><br>
                        </div>

                        <label>Telefon (obowiązkowo): <input type="tel" name="phone" required pattern="\+?[0-9\s\-\(\)]{7,}"></label><br><br>

                        <label>Email (opcjonalnie): <input type="email" name="email"></label><br><br>

                        <button type="submit">Wyślij</button>
                    </form>
                    
            </div>
            <script>
                function toggleAddress(show) {
                    document.getElementById('address-field').style.display = show ? 'block' : 'none';
                }

                document.addEventListener('DOMContentLoaded', function() {
                    const form = document.getElementById('orderForm');

                    form.addEventListener('submit', async function(e) {
                        e.preventDefault();

                        const formData = new FormData(form);

                        const selectedServices = Array.from(form.querySelectorAll('input[name="services[]"]:checked'))
                            .map(cb => cb.value);

                        if (selectedServices.length === 0) {
                            alert('Proszę wybrać przynajmniej jedną usługę.');
                            return;
                        }

                        formData.delete('services[]');
                        selectedServices.forEach(service => formData.append('services[]', service));

                        const phone = formData.get('phone');
                        if (!phone || phone.trim().length < 7) {
                            alert('Podaj poprawny numer telefonu!');
                            return;
                        }

                        try {
                            const response = await fetch('zamowienie.php', {
                                method: 'POST',
                                body: formData
                            });

                            if (response.ok) {
                                alert('Zamówienie zostało wysłane pomyślnie! Dziękujemy.');
                                form.reset();
                                toggleAddress(false);
// 
                                window.location.href = 'zamowienie.php';
                            } else {
                                alert('Wystąpił błąd podczas wysyłania zamówienia.');
                            }
                        } catch (error) {
                            console.error('Błąd:', error);
                            alert('Nie udało się połączyć z serwerem.');
                        }
                    });
                });
                </script>

        </main>

    <div class="line"></div>
    <footer>
        <div class="footcont">
            <div class="foottxt" >
                <h3>Zrobili:</h3>
                <p>Varvara Yukhnavets</p>
                <p>Pesenko Ruslan</p>
            </div>
            <div class="foottxt" id="contact">
                <h3>Kontakt: </h3>
                <p>E-mail: ittech.official@corp.com</p>
                <p>Numer telefonu: +48505362461</p>
            </div>
        
        <div id="copyrights">
            <p>ittech&copy; 2025</p>
        </div>
        </div>
    </footer>
</body>

</html>
