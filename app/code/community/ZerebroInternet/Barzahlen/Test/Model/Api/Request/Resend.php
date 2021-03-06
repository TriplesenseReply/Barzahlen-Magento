<?php

class ZerebroInternet_Barzahlen_Test_Model_Api_Request_Resend extends EcomDev_PHPUnit_Test_Case {

  /**
   * Sets everything for a new test. parent::setUp() is necessary to enable fixtures.
   */
  public function setUp() {
    parent::setUp();
    $this->object = Mage::getModel('barzahlen/api_request_resend');
  }

  /**
   * Checks getter functions.
   *
   * @test
   */
  public function testGetVariables() {
    $this->assertEquals(null, $this->object->getTransactionId());
  }

  /**
   * Unset everything before the next test.
   */
  protected function tearDown() {

    unset($this->object);
    parent::tearDown();
  }
}
?>