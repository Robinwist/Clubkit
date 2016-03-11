
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Header project Clubkit</title>
    <link rel="stylesheet" type="text/css" href="css/ryan.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="css/lightbox.css" rel="stylesheet">
    <script>
        lightbox.option({
            'resizeDuration': 20
        })
    </script>
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
    <div class="nieuws">
        <h2>Filters:</h2>
        <input type="radio" id="recent" name="color" />
        <label for="recent">RECENT NIEUWS</label>
        <input type="radio" id="oud" name="color" />
        <label for="oud">OUD NIEUWS</label>
        <input type="radio" id="belangrijk" name="color" />
        <label for="belangrijk">BELANGRIJK NIEUWS</label>
        <input type="radio" id="reset" name="color" />
        <label for="reset">RESET FILTER</label>
        <div class="container oud">

            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_twirlen.png" data-lightbox="clubkit" data-title="Voorbeeld1"><img src="images/twirlen.png" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 29 December 2011</p>
        </div>
        <div class="container recent">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_kzhiltex-record.jpg" data-lightbox="clubkit" data-title="Voorbeeld2"><img src="images/kzhiltex-record.jpg" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 9 Maart 2016</p>
        </div>
        <div class="container recent">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_airfloor.jpg" data-lightbox="clubkit" data-title="Voorbeeld3"><img src="images/airfloor.jpg" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 2 Maart 2016</p>
        </div>
        <div class="container oud">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_hazenkamp.png" data-lightbox="clubkit" data-title="Voorbeeld4"><img src="images/hazenkamp.png" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 29 December 2011</p>
        </div>
        <div class="container belangrijk">


            <strong>Clubkit STOPT met werven van sponsors</strong>
            <p>
                <a href="images/big_twirlen.png" data-lightbox="clubkit" data-title="Voorbeeld1"><img src="images/twirlen.png" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 19 December 2013</p>
        </div>
        <div class="container belangrijk">
            <strong>Clubkit STOPT met werven van sponsors</strong>
            <p>
                <a href="images/big_kzhiltex-record.jpg" data-lightbox="clubkit" data-title="Voorbeeld2"><img src="images/kzhiltex-record.jpg" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 9 Maart 2016</p>
        </div>
        <div class="container recent">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_airfloor.jpg" data-lightbox="clubkit" data-title="Voorbeeld3"><img src="images/airfloor.jpg" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 5 Maart 2016</p>
        </div>
        <div class="container oud">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_hazenkamp.png" data-lightbox="clubkit" data-title="Voorbeeld4"><img src="images/hazenkamp.png" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 9 Februari 2009</p>
        </div>
        <div class="container recent">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_twirlen.png" data-lightbox="clubkit" data-title="Voorbeeld1"><img src="images/twirlen.png" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 27 Februari 2016</p>
        </div>
        <div class="container recent">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_kzhiltex-record.jpg" data-lightbox="clubkit" data-title="Voorbeeld2"><img src="images/kzhiltex-record.jpg" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 9 Maart 2016</p>
        </div>
        <div class="container recent">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_airfloor.jpg" data-lightbox="clubkit" data-title="Voorbeeld3"><img src="images/airfloor.jpg" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 8 Maart 2016</p>
        </div>
        <div class="container oud">
            <strong>Clubkit komt met update van de Vriendenmaand.</strong>
            <p>
                <a href="images/big_hazenkamp.png" data-lightbox="clubkit" data-title="Voorbeeld4"><img src="images/hazenkamp.png" align="right" ; style="margin-left: 20px;" /></a>Afgelopen tijd is er achter de schermen van Clubkit gewerkt aan een update van de Vriendenmaand, en met succes. Deze Vriendenmaand heeft een compleet nieuwe look. Het is nu mogelijk om vrienden te worden van een speler en van een team, hierdoor kunnen er meer vrienden geworven worden.

            </p>
            <br>
            <p>Op de hoofdpagina van de nieuwe Vriendenmaand staan de sponsorpakketten gelijk zichtbaar en ook nieuw is een ranglijst van de best presterende leden en teams van de vereniging. De website bied meer mogelijkheden voor aankleding van met foto’s en plaatjes, zodat de sponsorsite meer club-eigen wordt.</p>
            <p></p>
            <br>
            <p>Bekijk hier de nieuwe website: <a href="http://hazenkampvriendenmaand.clubkit.nl/">http://hazenkampvriendenmaand.clubkit.nl/</a></p>
            <br>
            <p class="oud">Datum: 23 Oktober 2001</p>
        </div>
    </div>
</div>

<body>

<script src="js/lightbox.js"></script>
