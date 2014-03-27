<?php
require_once './library/Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
		'cache' => './tmp/cache',
));
$template = $twig->loadTemplate('hello.phtml');
$params = array(
		'name' => 'Krzysztof',
		'friends' => array(
				array(
						'firstname' => 'John ssss',
						'lastname' => 'Smith'
				),
				array(
						'firstname' => 'Britney',
						'lastname' => 'Spears'
				),
				array(
						'firstname' => 'Brad',
						'lastname' => 'Pitt'
				)
		)
);
$template->display($params);
?>