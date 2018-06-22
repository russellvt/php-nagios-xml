<?php

# Refs:
#  - https://phpunit.de/
#  - https://phpunit.de/getting-started/phpunit-4.html
#require_once ('PHPUnit/Framework/TestCase.php');
use PHPUnit\Framework\TestCase;

##
## PHPUnit 3.5 Autoloader
##  @requires PHPUnit >=3.5
#function testRequiringNewerPHPUnit() {
  #require_once 'PHPUnit/Autoload.php';
#}

#// Polyfill PHPUnit 6.0 both ways
#// Ref: https://github.com/symfony/symfony/issues/21534#issuecomment-278278352
#if (!class_exists('\PHPUnit\Framework\TestCase', true)) {
#  class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
#} elseif (!class_exists('\PHPUnit_Framework_TestCase', true)) {
#  class_alias('\PHPUnit\Framework\TestCase', '\PHPUnit_Framework_TestCase');
#}

#class PHPNagiosXMLTest extends PHPUnit_Framework_TestCase
final class PHPNagiosXMLTest extends TestCase
{
    #/**
    # * @var PDO
    # */
    #private $pdo;

    public function setUp()
    {
	print "PHPUnit Version: " . PHPUnit_Runner_Version::id() . "\n";
        #$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function tearDown()
    {
        #$this->pdo->query("DROP TABLE hello");
    }

    public function testMe()
    {
        print "Place Holder Test";
    }
}

# vim: syntax=php
