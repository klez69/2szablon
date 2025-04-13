<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja Strona Osobista</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="container">
        <header class="header">
            <div class="image-container">
                <img src="a1.jpg" alt="Moje zdjęcie">
                <div class="text-overlay">
                    <h1>Witaj na mojej stronie osobistej</h1>
                    <p>Programista i entuzjasta technologii</p>
                </div>
            </div>
        </header>
        
        <nav>
            <ul>
                <li><a href="#o-mnie">O mnie</a></li>
                <li><a href="#umiejetnosci">Umiejętności</a></li>
                <li><a href="#projekty">Projekty</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>
        </nav>

        <div class="content">
            <div class="section" id="o-mnie">
                <h2>O mnie</h2>
                <p>
                    Cześć! Jestem programistą z pasją do tworzenia nowoczesnych aplikacji internetowych. Uwielbiam rozwiązywać skomplikowane problemy i uczyć się nowych technologii. 
                    Moje doświadczenie obejmuje pracę z różnymi językami programowania, takimi jak PHP, JavaScript, oraz frameworkami, takimi jak Laravel i Symfony. 
                    Zawsze staram się tworzyć wydajne, skalowalne i intuicyjne rozwiązania, które spełniają potrzeby użytkowników.
                </p>
                <p>
                    Poza programowaniem interesuję się również projektowaniem interfejsów użytkownika (UI/UX), co pozwala mi lepiej zrozumieć, jak tworzyć produkty przyjazne dla użytkownika. 
                    W wolnym czasie rozwijam swoje umiejętności, uczestnicząc w kursach online, czytając blogi technologiczne i eksperymentując z nowymi narzędziami.
                </p>
                <p>
                    Jestem otwarty na współpracę przy ciekawych projektach, które pozwalają mi rozwijać się zawodowo i zdobywać nowe doświadczenia. 
                    Jeśli masz pomysł na projekt lub chcesz porozmawiać o technologii, zapraszam do kontaktu!
                </p>
            </div>
            
            <div class="section" id="umiejetnosci">
                <h2>Moje umiejętności</h2>
                <ul>
                    <li>Programowanie w PHP</li>
                    <li>Tworzenie stron internetowych (HTML, CSS, JavaScript)</li>
                    <li>Bazy danych (MySQL, PostgreSQL)</li>
                    <li>Frameworki (Laravel, Symfony)</li>
                    <li>Systemy kontroli wersji (Git)</li>
                </ul>
            </div>
            
            <div class="section" id="projekty">
                <h2>Moje projekty</h2>
                <ul>
                    <li>Aplikacja do zarządzania zadaniami</li>
                    <li>System rezerwacji online</li>
                    <li>Portal informacyjny</li>
                    <li>Sklep internetowy</li>
                </ul>
            </div>
            
            <div class="section" id="kontakt">
                <h2>Kontakt</h2>
                <p>Jeśli chcesz się ze mną skontaktować, możesz to zrobić poprzez:</p>
                <ul>
                    <li>Email: kontakt@example.com</li>
                    <li>LinkedIn: linkedin.com/in/twojprofil</li>
                    <li>GitHub: github.com/twojprofil</li>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.github.com" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </footer>
    
    <script src="script.js"></script>
    <script>
        document.body.innerHTML += '<footer><p>&copy; 2023 Moja Strona Osobista. Wszelkie prawa zastrzeżone.</p></footer>';
    </script>

</body>
</html>
