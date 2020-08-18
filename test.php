
<?php

$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
ob_start();
$objWriter->save("php://output");
$xlsData = ob_get_contents();
ob_end_clean();

$response =  array('op' => 'ok',
                 'file' => "data:application/vnd.ms-excel;base64,".base64_encode($xlsData)
                 );

die(json_encode($response));

?>
