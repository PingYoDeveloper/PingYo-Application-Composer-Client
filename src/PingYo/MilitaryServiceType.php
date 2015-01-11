<?php

namespace PingYo;

class MilitaryServiceTypes
{
    const None = 1;
    const Veteran = 2;
    const Reserves = 3;
    const ActiveDuty = 4;

    public static function validation_set()
    {
        return [
            self::None,
            self::Veteran,
            self::Reserves,
            self::ActiveDuty
        ];
    }
}