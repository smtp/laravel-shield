<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/laravel-shield
 */

declare(strict_types=1);

namespace Vinkla\Tests\Shield;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Vinkla\Shield\ShieldServiceProvider;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return ShieldServiceProvider::class;
    }

    protected function getUsers()
    {
        return [
            'default' => [Password::hash('user1'), Password::hash('password1')],
            'hasselhoff' => [Password::hash('user2'), Password::hash('password2')],
        ];
    }
}
