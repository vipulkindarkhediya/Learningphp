<?php


echo  $_COOKIE["user"];

setcookie("user", "", time() - (10 * 2), "/");
