<?php
require_once('./model/contact_model.php');

if (isset($_POST['send'])){
    sendMail();
}

require_once('./view/contact_view.php');
