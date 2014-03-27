<?php
require_once './library/Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
		'cache' => './tmp/cache',
));
$template = $twig->loadTemplate('hello.phtml');
$params = array(
		'name' => 'Chad',
		'friends' => array(
				array(
						'firstname' => 'Black',
						'lastname' => 'Smith'
				),
				array(
						'firstname' => 'Pickle',
						'lastname' => 'Spears'
				),
				array(
						'firstname' => 'Arm',
						'lastname' => 'Pitt'
				)
		)
);
$template->display($params);
?>