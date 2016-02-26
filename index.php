<?php

require ('classes/Util.php');

require ('includes/config.php');
require ('includes/bootstrap.php');

require('classes/Database.php');

require('classes/Model.php');

require 'includes/head.html';
require 'views/header.php';

switch ($action) {

    case 'home':
        require 'views/home.php';
        break;

    case 'sporten':
        require 'views/sporten.php';
        break;

    case 'acties':
        require 'views/acties.php';
        break;

    case 'workshops':
        require 'views/workshops.php';
        break;

    case 'aanmelden':
        require 'views/register.php';
        break;

    case 'resulaten':
        require 'views/resultaten.php';
        break;

    case 'nieuws':
        require 'views/nieuws.php';
        break;

    case 'contact':
        require 'views/contact.html';
        break;

    default:
        require 'views/home.php';

}

require 'views/footer.html';
