<?php

/**
 * Change the following URL based on your server configuration
 * Make sure the URL ends with a slash so that we can use relative URLs in test cases
 */
define('TEST_BASE_URL','http://localhost/yii/demos/blog/index-test.php/');

class WebTestCase extends CWebTestCase
{
    /**
     * Sets up before each test method runs.
     * This mainly sets the base URL for the test application.
     */
//    public $fixtures = array(
//        'somes' => 'LoginForm',
//    );

    protected function setUp()
    {
        parent::setUp();
        $this->setBrowserUrl(TEST_BASE_URL);
    }

public function testurl(){
    $this->open('site/contact');
    $this->assertTextPresent('Contact Us');
    $this->assertElementPresent('name=ContactForm[name]');
    $this->type('name=ContactForm[name]','tester');
    $this->type('name=ContactForm[email]','tester@example.com');
    $this->type('name=ContactForm[subject]','test subject');
    $this->click("//input[@value='Submit']");
    $this->waitForTextPresent('Body cannot be blank.');
}

}