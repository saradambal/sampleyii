<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/* uncomment the following to provide test database connection*/
            'db'=>array(
                'connectionString'=>'mysql:host=localhost;dbname=test;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock',
//                'connectionString' => 'mysql:host=192.168.1.134;dbname=test',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
            ),

		),
	)
);
