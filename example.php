<?php
require('vendor/autoload.php');

use NAMDEVEL\Ktp\Nik;

$nik = new Nik('36740749069XXXXX');
echo $nik->search();
