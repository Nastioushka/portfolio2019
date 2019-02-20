<?php


//navigation - rubriques

if ($_GET!=null)
{
	$page = $_GET['page'];
	switch ($page)
	{
	case 'accueil' :
		include 'index.phtml';
		break;
	case 'experience-profesionnelle':
		include 'experience.phtml';
		break;
	case 'recherche':
		include 'recherche.phtml';
		break;
	case 'personalite':
		include 'personalite.phtml';
		break;
	default:
		include 'index.phtml';
		break;
	};
}
else
{
	include 'index.phtml';
};
