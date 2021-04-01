<?php

namespace Space\Normal;

use DateTime;

function calculate_time()
{
    return date_diff(new DateTime(), new DateTime("1939-01-01"));
}
