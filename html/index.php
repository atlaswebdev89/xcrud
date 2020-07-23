<?php
require_once 'vendor/autoload.php';

require_once('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('users');
echo $xcrud->render();

