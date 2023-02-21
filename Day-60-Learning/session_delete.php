<?php

session_start();

session_unset();

if (session_destroy()) {
     echo 1;
} else {
     echo 0;
}
