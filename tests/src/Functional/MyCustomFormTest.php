<?php

namespace Drupal\Tests\mymodule\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test MyCustomForm of My Module.
 *
 * @group mymodule
 */

class MyCustomFormTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = [
    // load required modules
    'node',
    'mymodule'
  ];

  /**
   * A simple user.
   *
   * @var \Drupal\user\Entity\User
   */
  private $user;


  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    // Make sure to complete the normal setup steps first.
    parent::setUp();

    //create an user
    $this->user = $this->drupalCreateUser(array(
      'administer mycustomform'
    ));

    // Login.
    $this->drupalLogin($this->user);

    //access the page
    $this->drupalGet('my-custom-form');

  }

  /**
   * Tests that the MyCustoMForm page can be reached.
   */
  public function testArticleFormPageExists() {
    $this->assertSession()->statusCodeEquals(200);
  }

  /**
   * Tests that the MyCustoMForm has a field "Select Country".
   */
  public function testArticleTitleFieldExists() {
    $this->assertSession()->fieldExists('Select State');
  }

  /**
   * Tests that the MyCustoMForm "Select Country" field has values.
   */
  public function testArticleTitleFieldHasValue() {
    $this->assertSession()->fieldValueEquals('Select State', 'tn');
  }

}
