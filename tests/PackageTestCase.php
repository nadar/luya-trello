<?php

namespace malankateam\luya\trello\tests;

use luya\testsuite\cases\WebApplicationTestCase;

class PackageTestCase extends WebApplicationTestCase
{
    public function getConfigArray()
    {
        return [
            'id' => 'packagetest',
            'basePath' => __DIR__,
            'language' => 'en',
        ];
    }
}
