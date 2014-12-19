<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div><table id="test" name="test" border="1">  <thead><tr><th>sss</th></tr>  </thead><tr><td>test</td></tr></table></div>
<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://googledrive.com/host/0Bzvv-O9jT9r_Rm1WcmhhbHpCTVE/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://googledrive.com/host/0Bzvv-O9jT9r_Rm1WcmhhbHpCTVE/dataTables.tableTools.css">




    <script type="text/javascript" language="javascript" src="https://googledrive.com/host/0Bzvv-O9jT9r_Rm1WcmhhbHpCTVE/DataTable1.10.2.js"></script>
    <script type="text/javascript" language="javascript" src="https://googledrive.com/host/0Bzvv-O9jT9r_Rm1WcmhhbHpCTVE/dataTables.tableTools.js"></script>
<script type="text/javascript">
    alert('test');
            var t = $('#test').DataTable({
                'bProcessing': true,
                'bSort':false,
                'bPaginate':false,
                'bFilter':false,
                'bInfo':false,
                'bDestroy':true,
                'hover':false,

                // "bAutoWidth" : true,
                "sScrollY" : "200",
                "sScrollX" : "100%",
            }
        );
    alert('test11');
    </script>
