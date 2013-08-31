<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "guests_interface";
$route['404_override'] = '';

/***************************************************** GENERAL INTRERFACE *************************************************/
/*************************************************** AJAX INTRERFACE ***********************************************/
$route['camp/register'] = "ajax_interface/campRegister";
$route['camp/payment'] = "ajax_interface/campPayment";
/*************************************************** GUEST INTRERFACE ***********************************************/
$route['camp'] = "guests_interface/camp";
