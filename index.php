<?php
require dirname(__FILE__) . '/vendor/autoload.php';

use Observer\Controller\WilokeSkypeGroupController;
use Observer\Controller\WilokeMemberController;

$oWilokeGroup = new WilokeSkypeGroupController();
$oTuan = new WilokeMemberController('Tuan');
$oPhuc = new WilokeMemberController('Phuc');
$oWilokeGroup->joinGroup($oTuan);
$oWilokeGroup->joinGroup($oPhuc);
$oTuan->writeMessageInGroup($oWilokeGroup,'Hi, toi la  Tuan');
$oWilokeGroup->notifyOtherPeople();