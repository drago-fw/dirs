<?php

namespace Test;

use Nette\DI\Container;
use Tester\TestCase;


class TestCaseAbstract extends TestCase
{
	/** @var Container */
	protected $container;


	public function __construct(Container $container)
	{
		$this->container = $container;
	}
}
