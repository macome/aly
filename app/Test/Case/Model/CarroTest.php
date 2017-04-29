<?php
App::uses('Carro', 'Model');

/**
 * Carro Test Case
 *
 */
class CarroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.carro',
		'app.cliente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Carro = ClassRegistry::init('Carro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Carro);

		parent::tearDown();
	}

}
