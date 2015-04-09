<?php

/*
 * This file is part of the Cekurte package.
 *
 * (c) João Paulo Cercal <jpcercal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cekurte\ComponentBundle\Tests\Exception;

use Cekurte\ComponentBundle\Exception\ResourceException;
use Cekurte\ComponentBundle\Exception\ResourceManagerRefusedGetLogException;

/**
 * Class ResourceManagerRefusedGetLogExceptionTest
 *
 * @author João Paulo Cercal <jpcercal@gmail.com>
 *
 * @version 2.0
 */
class ResourceManagerRefusedGetLogExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testInheritedOfResourceException()
    {
        $exception = new ResourceManagerRefusedGetLogException();

        $this->assertInstanceOf(
            '\\Cekurte\\ComponentBundle\\Exception\\ResourceManagerRefusedGetLogException',
            $exception
        );
    }

    public function testGetCode()
    {
        $exception = new ResourceManagerRefusedGetLogException();

        $this->assertEquals(ResourceException::RESOURCE_MANAGER_REFUSED_GETLOG_ERROR_CODE, $exception->getCode());
    }
}
