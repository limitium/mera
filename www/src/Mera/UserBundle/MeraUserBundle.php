<?php

namespace Mera\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MeraUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
