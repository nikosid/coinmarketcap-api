<?php

require_once("../vendor/autoload.php");

use coinmarketcap\api\CoinMarketCap;

$ticker = CoinMarketCap::getTicker(0, 10, "USD");
var_dump($ticker);
