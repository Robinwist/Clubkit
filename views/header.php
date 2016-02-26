<header>
    <div class="logo-section">
        <img src="images/logo.svg" alt="">
        <h2>Online sponsorwerving voor sportclubs</h2>
    </div>

    <div class="nav-section">
        <ul>
            <a href="?action=home">
                <li class="<?php echo ($action == "home" ? "nav active" : "")?> nav hvr-underline-reveal">Home</li>
            </a>
            <a href="?action=sporten">
                <li class="<?php echo ($action == "sporten" ? "nav active" : "")?> nav hvr-underline-reveal">Sporten</li>
            </a>
            <a href="?action=acties">
                <li class="<?php if ($action=="acties") {echo "nav active"; } else  {echo "noactive";}?> nav hvr-underline-reveal">Sponsor acties</li>
            </a>
            <a href="?action=workshops">
                <li class="<?php if ($action=="workshops") {echo "nav active"; } else  {echo "noactive";}?> nav hvr-underline-reveal"">Workshops</li>
            </a>
            <a href="?action=aanmelden">
                <li class="<?php if ($action=="aanmelden") {echo "nav active"; } else  {echo "noactive";}?> nav hvr-underline-reveal">Aanmelden</li>
            </a>
            <a href="?action=resulaten">
                <li class="<?php if ($action=="resultaten") {echo "nav active"; } else  {echo "noactive";}?> nav hvr-underline-reveal">Resultaten</li>
            </a>
            <a href="?action=nieuws">
                <li class="<?php if ($action=="nieuws") {echo "nav active"; } else  {echo "noactive";}?> nav hvr-underline-reveal">Nieuws</li>
            </a>
            <a href="?action=contact">
                <li class="<?php if ($action=="contact") {echo "nav active"; } else  {echo "noactive";}?> nav hvr-underline-reveal">Contact</li>
            </a>
        </ul>
    </div>


</header>