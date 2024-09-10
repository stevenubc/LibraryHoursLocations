<?php

namespace App\Utils;

use DateInterval;
use DateTime;
use DateTimeZone;

class DateUtils
{

    public static function getCurrentDateTime()
    {
        return new DateTime('now', new DateTimeZone('UTC'));
    }
}
