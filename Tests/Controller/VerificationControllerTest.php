<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2015/07/15
 * Time: 1:57
 */

namespace Polidog\VaddyBundle\Tests\Controller;

use Phake;
use Polidog\VaddyBundle\Controller\VerificationController;

/**
 * Class VerificationControllerTest
 * @package Polidog\VaddyBundle\Tests\Controller
 */
class VerificationControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function showVerificationCode()
    {
        $code = 'abcdefghigk';
        $controller = new VerificationController($code);
        $response = $controller->indexAction();
        $this->assertEquals($code, $response->getContent());
    }
}