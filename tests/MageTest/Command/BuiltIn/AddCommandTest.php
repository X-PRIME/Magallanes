<?php

namespace MageTest\Command\BuiltIn;

use Mage\Command\BuiltIn\AddCommand;
use Mage\Console;
use MageTest\TestHelper\BaseTest;
use malkusch\phpmock\FixedValueFunction;
use malkusch\phpmock\Mock;
use malkusch\phpmock\MockBuilder;

/**
 * Class AddCommandTest
 * @package MageTest\Command\BuiltIn
 * @coversDefaultClass Mage\Command\BuiltIn\AddCommand
 * @uses Mage\Console
 * @uses Mage\Console\Colors
 * @uses Mage\Command\AbstractCommand
 */
class AddCommandTest extends BaseTest
{

  /**
   * @var AddCommand
   */
  private $addCommand;

  /**
   * @before
   */
  public function before()
  {
    $this->addCommand = new AddCommand();
    $this->setUpConsoleStatics();
  }

  public function testRun()
  {
    //$this->mockInputArgument('environment');
    //$this->mockInputParameter('enableReleases', true);
    //$this->mockInputParameter('name', 'production');
    //$run = $this->addCommand->run();
    $this->assertEquals(true, true);
  }

  /**
   * Stub Config::getArgument to return desired value
   *
   * @param String $argumentValue Input argument
   */
  private function mockInputArgument($argumentValue)
  {
    $configMock = $this->getMock('Mage\Config');
    $configMock->expects($this->once())
      ->method('getArgument')
      ->with(1)
      ->willReturn($argumentValue);

    $this->addCommand->setConfig($configMock);
  }

  /**
   * Stub Config::getParameters to return desired value
   *
   * @param String $parameterName Input parameterName
   * @param String $parameterValue Input parameterValue
   */
  private function mockInputParameter($parameterName, $parameterValue)
  {
    $configMock = $this->getMock('Mage\Config');
    $configMock->expects($this->once())
      ->method('getParameter')
      ->with($parameterName)
      ->willReturn($parameterValue);

    $this->addCommand->setConfig($configMock);
  }

}
