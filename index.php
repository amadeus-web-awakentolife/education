<?php
define('SITEPATH', __DIR__);
include_once '../../../dawn/spring/entry.php';

DEFINE('SUBSITES', [
	'atl' => 'sites/for-vidya/awakentolife',
	'atl-edu' => 'sites/for-vidya/education',
]);

runFrameworkFile('site/begin');
