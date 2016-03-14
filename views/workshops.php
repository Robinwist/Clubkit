<!DOCTYPE HTML>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Header project Clubkit</title>
    <link rel="stylesheet" type="text/css" href="css/ryan.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $(".left-side").addClass("newInfo");
                $(".right-side").addClass("newInfo");
                $(".newInfo_2_l").addClass("newInfo_2");
                $(".newInfo_2_r").addClass("newInfo_2");
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("button.terug").click(function () {
                $(".left-side").removeClass("newInfo");
                $(".right-side").removeClass("newInfo");
                $(".newInfo_2_l").removeClass("newInfo_2");
                $(".newInfo_2_r").removeClass("newInfo_2");
            });
        });
    </script>
    <script>
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 201) {
                $(".nav-section").addClass("fixed");
                $("#wrapper").addClass("blank-space");
            } else {
                $(".nav-section").removeClass("fixed");
                $("#wrapper").removeClass("blank-space");
            }
        });
    </script>


</head>
<div id="wrapper">
    <div class="left-side">
        <h1>WORKSHOP 'SUCCESVOLLE SPONSORACTIES OPZETTEN'</h1>
        <br>
        <br>
        <p>
            Hoe zet je een succesvolle sponsoractie op? Waar moet je aan denken tijdens de voorbereiding? Hoe zorg je dat leden echt enthousiast worden? Hoe voorkom je dat een actie arbeidsintensief wordt? Welke communicatiemiddelen gebruik je om de actie te promoten en hoe belangrijk is het gebruik van social media?
        </p>
        <h2>Deelname</h2>
        <p>Deze en meer vragen zullen behandeld worden in de workshops. Inschrijven? Klik hieronder op een locatie naar keuzen en vermeld je naam, functie binnen de vereniging, naam vereniging en telefoonnummer, dan ontvang je de bevestiging van je deelname. Let op: er is een beperkt aantal plaatsen beschikbaar!
            <br>
            <br>

        <p>De workshops beginnen om 19:00 uur en duren tot ongeveer 21:00 uur en deelname is <strong>gratis</strong>.
        </p>
        <br>
        <select name="" id="events" value="events" placeholder="fhuefhe">
            <option selected="selected" disabled="disabled" value="">event</option>
            <option value="optie1">Optie 1</option>
            <option value="optie2">Optie 2</option>
            <option value="optie3">Optie 3</option>
            <option value="optie4">Optie 4</option>
        </select>

        <select name="" id="plaats">
            <option selected="selected" disabled="disabled" value="">locatie</option>
            <option value="optie1">Optie 1</option>
            <option value="optie2">Optie 2</option>
            <option value="optie3">Optie 3</option>
            <option value="optie4">Optie 4</option>
        </select>

        <select name="" id="datum">
            <option selected="selected" disabled="disabled" value="">datum</option>
            <option value="optie1">Optie 1</option>
            <option value="optie2">Optie 2</option>
            <option value="optie3">Optie 3</option>
            <option value="optie4">Optie 4</option>
        </select>
        <button>Verder</button>
    </div>
    <div class="right-side">
        <div class="faq-box">
            <h1>Heeft u nog vragen?</h1>
            <p class="ruimte-box">Bekijk onze pagina met
                <br>
                <a href="#" class="action-button">Veel gestelde vragen</a>
            </p>
            <p>
                Of neem contact op:
                <br>
                <span class=telefoonnummer>023 531 41 94</span>
            </p>
        </div>
    </div>
    <div class="newInfo_2_l">
        <h1>Aanmelden</h1>
        <br>
        <form action="mail.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="name" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Voorletter + achternaam" required>
            <input type="name" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Naam sportvereniging *" required>
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email adres..." required>
        </form>
        <p>* - indien van toepassing</p>
        <button class="aanmelden">Aanmelden</button>
        <button class="terug">Terug</button>

        <div class="newInfo_2_r">
            <div class="faq-box">
                <h1>Heeft u nog vragen?</h1>
                <p class="ruimte-box">Bekijk onze pagina met
                    <br>
                    <a href="#" class="action-button">Veel gestelde vragen</a>
                </p>
                <p>
                    Of neem contact op:
                    <br>
                    <span class=telefoonnummer>023 531 41 94</span>
                </p>
            </div>
        </div>
    </div>

</div>
