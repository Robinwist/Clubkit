<?php

//Define project status
define('PROJECT_STATUS', 'development');

//set to Dutch
setlocale(LC_ALL, 'nl_NL');

//get functions from Util
$action = Util::getSafeGetVar('action');