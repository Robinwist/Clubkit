<body>

<section class="content">
    <div id="slider-container">
        <ul>
            <li><img src="images/programs/sponsorballen.jpg"></li>
            <li><img src="images/programs/vriendenmaand.jpg"></li>
            <li><img src="images/programs/bouw-mee.jpg"></li>
            <li><img src="images/programs/eendjesrace.jpg"></li>
            <li><img src="images/programs/adopteer-een-speler.jpg"></li>
        </ul>
    </div>

    <section id="left">
        <h1>Effectief sponsors werven voor je club</h1>
        <p>Is je vereniging op zoek naar nieuwe manieren om succesvol sponsors te werven? Clubkit biedt praktische en vooral effectieve online sponsorprogramma's waardoor leden zich actief inzetten om je club die nieuwe sponsors te bezorgen. Inmiddels zijn er talloze clubs en nationale teams die onze programma's gebruiken om succesvol nieuwe sponsors aan te trekken. Stel de toekomst van je club veilig, gebruik Clubkit en maak van supporters je nieuwe sponsors!</p>
        <p><a class="button" href="">Club gratis aanmelden</a><a class="button" href="">Bekijk de mogelijkheden</a></p>

        <hr>

        <h2>Nieuws</h2>
TEST

        <?
        if(count($news) > 0): ?>
            <? foreach($news as $item): ?>
                <a class="news_item" href="">
                    <div><span class="fa fa-newspaper-o"></span></div>
                </a>
            <? endforeach; ?>
        <? else: ?>
            <p>Er is momenteel geen nieuws.</p>
        <? endif; ?>

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

<h2>Ballenkar was hard nodig, maar tenues konden er ook nog bij!</h2>
<div class="result">
    <figure class="logo">
        <img src="images/home/onze-gezellen.png>">
    </figure>
    <section>
        <h2>Onze Gezellen</h2>
        <span class="sport basketbal">Basketbal</span>
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
            <p>&euro; 1.715,-</p>
        </div>
    </section>
</div>
</section>

<section id="right">
    <a id="tip-a-club" href="tip-een-club">
        <div class="left">
            <img src="images/home/goodiebox.png">
        </div>
        <div class="right">
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

    <h2>Nieuwsbrief</h2>
    <p>Blijf op de hoogte van nieuwe programma's, resultaten en acties.</p>
    <form action="" method="POST" class="newsletter">
        <input type="text" name="email" id="email" placeholder="Uw e-mailadres...">
        <a class="button">Aanmelden</a>
    </form>
    <div class="confirmation">
        <p>Hartelijk dank!</p>
    </div>
</section>
</section>

</body>
