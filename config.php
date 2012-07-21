<?php

/*
 * Edit section
 */
 
// Roots directory
define('_WEBROOT_', '/');

// Site Name
define('_SITENAME_', 'Site name');

/*
 * Edit section
 */
if (_WEBROOT_ == '' || _SITENAME_ == '') echo '<script>alert("Configuration KO!");</script>';
define('_ROOT_', $_SERVER['DOCUMENT_ROOT'] . _WEBROOT_);

// Theme directory
define('_UICSS_', _WEBROOT_ . 'ui/css/');
define('_UIIMG_', _WEBROOT_ . 'ui/img/');
define('_UIJS_', _WEBROOT_ . 'ui/js/');

// Medias directory
define('_MEDIAS_', _WEBROOT_ . 'medias/');

// Third party directory
define('_THIRD_', _WEBROOT_ . 'third/');

?>