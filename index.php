<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("vendor/autoload.php");

use Samhk222\ActiveHousingReqres\Models\V1\User;

$cool_user = (new User)->getById(112313123);
$users = (new User)->getUsers(2);

dd($cool_user);
die();

dd($cool_user, $users);
