<?php

namespace PingYo;

class ResidentialStatusTypes
{

    const HomeOwner = 1;
    const PrivateTenant = 2;
    const CouncilTenant = 3;
    const LivingWithParents = 4;
    const LivingWithFriends = 5;

    public static function validation_set()
    {
        return [
            self::HomeOwner,
            self::PrivateTenant,
            self::CouncilTenant,
            self::LivingWithParents,
            self::LivingWithFriends
        ];
    }
}