<?php
/**
 * Created by PhpStorm.
 * User: SSOMENS-021
 * Date: 15/12/14
 * Time: 2:11 PM
 */

class sampleTest extends CTestCase  {
public function testsample(){
    echo 'test';
    $return_flag=1;
    $this->assertEquals(1, $return_flag);
    $test=new Product;
}
}
 