<?php

namespace PhForum\Lib\Auth;

class AnonymousUser implements UserInterface
{
    public function isAuthenticated()
    {
       return false;
    }
}
