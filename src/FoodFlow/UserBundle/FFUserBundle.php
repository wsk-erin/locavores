<?php

namespace FoodFlow\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FFUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
