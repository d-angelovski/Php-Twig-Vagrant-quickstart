<?php

use info\angelovski\Controllers\UserController;

require '../vendor/autoload.php';

// Load Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
		'cache' => 'tmp',
));

// do some PHP logic here, that you will get the variables for
// sending to the templates in twig
$uc = new UserController();
$user = $uc->getLoggedInUser();

// store the vars in array like this
$templateVars = array(
		'user'			=> $user,
		'hello'			=> 'Hello'
);

// which template to load for this page
$template = $twig->loadTemplate('index.html.twig');

// In the end, render the template with the vars
echo $template->render($templateVars);