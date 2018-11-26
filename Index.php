<?php

include_once 'Header_Nav.php';
$page = isset($_GET['page']) ? $_GET['page'] : 0;  // tas GET ir superglobāls mainīgais, ir 4 tādi SERVER, POST, GET un.. neatceros


switch ($page) {
    default:
        include_once 'IndexBody.php';
        break;
    case 'Index':
        include_once 'IndexBody.php';
        break;
    case 'Showcase':
        include_once 'Showcase.php';
        break;
    case 'Article1':
        include_once 'Article1.php';
        break;
    case 'Article2':
        include_once 'Article2.php';
        break;
    case 'Article3':
        include_once 'Article3.php';
        break;
    case 'Register':
        include_once 'Register.php';
        break;
    case 'AboutMe':
        include_once 'AboutMe.php';
        break;
}

include_once 'z_footer.php';
