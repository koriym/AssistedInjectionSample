<?php
namespace Amashige\Test\Resource\Page;

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testAssistedInjectionWorks()
    {
        $GLOBALS['argv'] = ['', 'get', '/test'];
        ob_start();
        (require dirname(__DIR__, 3) . '/bootstrap.php')('cli-api-app');
        $actual = ob_get_clean();
        $this->assertStringContainsString('injected": true', $actual);
    }
}
