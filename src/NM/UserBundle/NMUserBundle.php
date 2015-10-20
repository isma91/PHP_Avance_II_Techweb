<?php

namespace NM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NMUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
