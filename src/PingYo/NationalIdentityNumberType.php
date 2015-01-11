<?php

namespace PingYo;

class NationalIdentityNumberTypes
{
    const NationalInsurance = 1;
    const SocialSecurity = 2;

    public static function validation_set()
    {
        return [
            self::NationalInsurance,
            self::SocialSecurity
        ];
    }
}