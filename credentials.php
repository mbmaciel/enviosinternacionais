<?php
//Change these values below.

define('FEDEX_ACCOUNT_NUMBER', '740561073');
define('FEDEX_METER_NUMBER', '1101234567');
define('FEDEX_KEY', 'l74097977c92a94713a2d7bcc569f049ed');
define('FEDEX_PASSWORD', '');


if (!defined('FEDEX_ACCOUNT_NUMBER') || !defined('FEDEX_METER_NUMBER') || !defined('FEDEX_KEY') || !defined('FEDEX_PASSWORD')) {
    die("The constants 'FEDEX_ACCOUNT_NUMBER', 'FEDEX_METER_NUMBER', 'FEDEX_KEY', and 'FEDEX_PASSWORD' need to be defined in: " . realpath(__FILE__));
}