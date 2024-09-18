<?php

require_once 'vendor/autoload.php';

use App\Admin\Dosen;

$dian = new Dosen();

$dian->setNama("Dian Prawira");
$dian->setNip(198411132015041001);
$dian->setNoHp(no_hp: 62111111);
$dian->setAlamat("Jln Purnama");
$dian->setNidn(nidn: "0013118405");

$dian->mengajar();