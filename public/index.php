<?php
require __DIR__ . '/../vendor/autoload.php';
use Carbon\Carbon;
date_default_timezone_set('Europe/Paris');
$whoops = new \Whoops\Run;
$whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
use League\Csv\Reader;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'new_article':
            require('./controller/article_controller.php');
            break;
        case 'contact':
            require('./controller/contact_controller.php');
            break;
        default:
            require('./controller/index_controller.php');
            break;
    }
}
else{
    require('./controller/index_controller.php');
}

