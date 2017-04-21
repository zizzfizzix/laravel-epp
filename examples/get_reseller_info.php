<?php

require __DIR__.'/autoload.php';

use LaravelEPP\Registrars\Nominets\NominetReseller;

$username = getenv('NOMINET_LIVE_USERNAME');
$password = getenv('NOMINET_LIVE_PASSWORD');
$host = 'epp.nominet.org.uk';

$nr = new NominetReseller();
$nr->setHost($host);
$nr->setUsername($username);
$nr->setPassword($password);

$response = $nr->info(['reference' => '']);

var_dump($response);