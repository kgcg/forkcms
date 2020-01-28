<?php

namespace Backend\Modules\Authentication\Tests\Action;

use Backend\Core\Tests\BackendWebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

class LogoutTest extends BackendWebTestCase
{
    public function testLogoutActionRedirectsYouToLoginAfterLoggingOut(Client $client): void
    {
        $this->login($client);

        $this->assertGetsRedirected($client, '/private/en/authentication/logout', '/private/en/authentication/index');
    }
}
