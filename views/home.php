<body>

<div id="impressie">

    <div id="impressieText">
        <h1>Effectief sponsors werven voor je club</h1>
        <p>Is je vereniging op zoek naar nieuwe manieren om succesvol sponsors te werven? Clubkit biedt praktische en vooral effectieve online sponsorprogramma's waardoor leden zich actief inzetten
            <br>
            om je club die nieuwe sponsors te bezorgen.</p>
        <p>

            <div class="impressieButton">
                <a class="button" href="?action=contact">Club gratis aanmelden</a>
        </div>

        <div class="impressieButton">
                <a class="button2" href="?action=acties">Bekijk de mogelijkheden</a>
        </div>

        </p>
    </div>

</div>

<section class="content">
<!--    <div id="slider-container">-->
<!--        <ul>-->
<!--            <li><img src="images/programs/sponsorballen.jpg"></li>-->
<!--            <li><img src="images/programs/vriendenmaand.jpg"></li>-->
<!--            <li><img src="images/programs/bouw-mee.jpg"></li>-->
<!--            <li><img src="images/programs/eendjesrace.jpg"></li>-->
<!--            <li><img src="images/programs/adopteer-een-speler.jpg"></li>-->
<!--        </ul>-->
<!--    </div>-->

    <section id="left">

        <h2>Nieuws</h2>

<a class="news_item">
        <?php
            require('models/News.php');

            $newsModel = new News();

            $allNews = $newsModel->getNews();

            include('views/showNews.php');
        ?>
</a>

<div id="quotes-container">
    <ul>
        <li>
            <div class="quote">
                <img src="images/home/sew.svg">
                <div class="text">
                    <p>"Met ons Dames 1 team hebben we in enkele weken &euro; 3.720,- opgehaald om zaalhuur te bekostigen."</p>
                    <p>Hans Huibers, voorzitter Westfriesland SEW</p>
                </div>
            </div>
        </li>
        <li>
            <div class="quote">
                <img src="images/home/sew.svg">
                <div class="text">
                    <p>"Dat we &euro; 12.000,- in een maand zouden ophalen, hield niemand binnen de club rekening mee."</p>
                    <p>Loek Caris, bestuurslid PR van Turnz Amsterdam Gymnastics</p>
                </div>
            </div>
        </li>
        <li>
            <div class="quote">
                <img src="images/home/sew.svg">
                <div class="text">
                    <p>"Met slechts &eacute;&eacute;n team hebben wij in enkele weken al &euro; 1.000,- binnengehaald."</p>
                    <p>Jans-Frits, penningmeester van Westfriesland SEW</p>
                </div>
            </div>
        </li>
        <li>
            <div class="quote">
                <img src="images/home/sew.svg">
                <div class="text">
                    <p>"Met slechts &eacute;&eacute;n team hebben wij in enkele weken al &euro; 1.000,- binnengehaald."</p>
                    <p>Jans-Frits, penningmeester van Westfriesland SEW</p>
                </div>
            </div>
        </li>
    </ul>
</div>

<h2>Magnesiumjacht: wie verzamelt de meeste magnesiumblokjes?</h2>
<div class="result">
    <figure class="logo">
        <img src="images/home/turnz.svg">
    </figure>
    <section>
        <h2>Turning Spirit/Turnz</h2>
        <span class="sport turnen">Turnen</span>
        <div>
            <strong>Actie</strong>
            <p>Sponsorballen</p>
        </div>
        <div class="time">
            <strong>Looptijd</strong>
            <p>1 maand</p>
        </div>
        <div class="amount">
            <strong>Opbrengst</strong>
            <p>&euro; 12.000,-</p>
        </div>
    </section>
</div>

<div class="clear"></div>

<hr class="gray">

<!--<h2>Ballenkar was hard nodig, maar tenues konden er ook nog bij!</h2>-->
<!--<div class="result">-->
<!--    <figure class="logo">-->
<!--        <img src="images/home/onze-gezellen.png">-->
<!--    </figure>-->
<!--    <section>-->
<!--        <h2>Onze Gezellen</h2>-->
<!--        <span class="sport basketbal">Basketbal</span>-->
<!--        <div>-->
<!--            <strong>Actie</strong>-->
<!--            <p>Sponsorballen</p>-->
<!--        </div>-->
<!--        <div class="time">-->
<!--            <strong>Looptijd</strong>-->
<!--            <p>1 maand</p>-->
<!--        </div>-->
<!--        <div class="amount">-->
<!--            <strong>Opbrengst</strong>-->
<!--            <p>&euro; 1.715,-</p>-->
<!--        </div>-->
<!--    </section>-->
<!--</div>-->

        <a id="tip-a-club" href="tip-een-club">
            <div class="left">
                <img src="images/home/goodiebox.png">
            </div>
            <div class="left">
                <h2>Tip een club</h2>
                <p>Informeer een vereniging over Clubkit en maak kans op een Clubkit-goodiebox.</p>
            </div>
        </a>

        <h2>Like, deel en help je club</h2>
        <p>Maak je club bekend met Clubkit via Twitter, Facebook en Google+.</p>

        <div id="social-media-links">
            <a href="https://www.facebook.com/clubkitnl" target="_blank"><img src="images/facebook.svg"></a>
            <a href="https://www.twitter.com/clubkitnl" target="_blank"><img src="images/twitter.svg"></a>
            <a href="https://plus.google.com/100750598648777817557/about" target="_blank"><img src="images/google_plus.svg"></a>
        </div>

</section>

<section id="right">

    <div id="sport_section">
        <h1>Sport top 4</h1>

        <div class="een">
            <div class="box">
                <img src="http://zizo-online.be/sites/default/files/field/image/voetbal_travel2riga.jpg" height="210" width="auto">
            <span class="caption fade-caption">
                <h3>Voetbal</h3>
            </span>
            </div>
        </div>

        <div class="twee">
            <div class="box">
                <img src="http://mariarade.nl/wp-content/uploads/2016/01/28798-1.jpg" height="310" width="auto">
            <span class="caption fade-caption">
                <h3>Korfbal</h3>
            </span>
            </div>
        </div>

        <div class="drie">
            <div class="box">
                <img src="http://joelletel.nl/wp-content/uploads/turnhal-amsterdam1.jpg" height="240" width="auto">
            <span class="caption fade-caption">
                <h3>Turnen</h3>
            </span>
            </div>
        </div>

        <div class="vier">
            <div class="box">
                <img src="http://www.ogresnovads.lv/images/notikumu_kalendars/sports/handbols_bumba.jpg" height="310" width="auto">
            <span class="caption fade-caption">
                <h3>Handbal</h3>
            </span>
            </div>
        </div>
    </div>






</section>
</section>

</body>
