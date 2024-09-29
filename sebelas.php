<?php

use App\Model\Akademik\Dosen;

require_once 'vendor/autoload.php';

$dian = new Dosen(1000121184001, "Dian Prawira", 62111111, "Jln Purnama", "0013118405");

$dian->mengajar();
$dian->getNoHp();