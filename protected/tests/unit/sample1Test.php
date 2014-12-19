<?php
/**
 * Created by PhpStorm.
 * User: SSOMENS-021
 * Date: 15/12/14
 * Time: 2:48 PM
 */

namespace unit;

//require_once('../../../framework/yii.php');
class sample1Test extends \CDbTestCase  {
    public $fixtures = array(
        'login' => ':login',
    );
    protected function setUp() {
        parent::setUp();
        // your code....
    }
public function testsamle(){
    $test=new \LoginForm();
    echo 'test';
    $ss= $test->login();
//    print_r($ss);
//    $this->assertNotEquals(NULL, Yii::app()->db);
//
    $login = $this->login;
    print_r($login);
}
}
 