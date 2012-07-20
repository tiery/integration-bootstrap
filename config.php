<?php

// Roots directory
define('_WEBROOT_', '');
if (_WEBROOT_ == '') echo '<script>alert("ERROR PHP : _WEBROOT_ n\'est pas définie dans config.php");</script>';

define('_ROOT_', $_SERVER['DOCUMENT_ROOT'] . _WEBROOT_);

// Theme directory
define('_UICSS_', _WEBROOT_ . 'ui/css/');
define('_UIIMG_', _WEBROOT_ . 'ui/img/');
define('_UIJS_', _WEBROOT_ . 'ui/js/');

// Medias directory
define('_MEDIAS_', _WEBROOT_ . 'medias/');

// Third party directory
define('_THIRD_', _WEBROOT_ . 'third/');

// Site Name
define('_SITENAME_', '');

?>