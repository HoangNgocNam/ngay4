<?php
include "User.php";

$use = new User();
$use->setName('nam');
$use->setEmail('hong');
$use->setRole(2);
$use->getInfo();