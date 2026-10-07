<?php
namespace App\Controllers;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class HomeTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomeRouteIsWorking()
    {
        $result = $this->call('get', '/');
        $result->assertOK();
        $result->assertSee('Elevate Your');
    }

    public function testShopRouteIsWorking()
    {
        $result = $this->call('get', 'home/shop');
        $result->assertOK();
        $result->assertSee('Aura Wireless Pro');
    }
}
