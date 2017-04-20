<?php

include 'dist/views/config.php';

$q = isset($_GET['q']) ? $_GET['q'] : '';

if($q == '')
{
    $page = 'home';
}
else if($q == 'dashboard')
{
    $page = 'dashboard';
}
else
{
    $page = '404';
}

include 'dist/views/partials/header.php';
include 'dist/views/pages/'.$page.'.php';
include 'dist/views/partials/footer.php';
