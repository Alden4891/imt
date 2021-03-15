<?php

$optionRegion = isset($_REQUEST['optionRegion'])?$_REQUEST['optionRegion']:'XII';
$optionProvince = isset($_REQUEST['optionProvince'])?$_REQUEST['optionProvince']:-1;
$optionMunicipality = isset($_REQUEST['optionMunicipality'])?$_REQUEST['optionMunicipality']:-1;
$optionBarangay = isset($_REQUEST['optionBarangay'])?$_REQUEST['optionBarangay']:-1;
$optionReportType = isset($_REQUEST['optionReportType'])?$_REQUEST['optionReportType']:-1;

$filter = '1=1';
$a_coverage = "";

if ($optionBarangay != -1) {
	$filter = "`swdi`.`psgc_city`='$optionMunicipality' and `swdi`.`psgc_brgy`='$optionBarangay'";
	$a_coverage = "Brgy. $optionBarangay, $optionMunicipality, $optionProvince";
}elseif ($optionMunicipality != -1){
	$filter = "`swdi`.`psgc_city`='$optionMunicipality'";
	$a_coverage = "$optionMunicipality, $optionProvince";
}elseif ($optionProvince != -1){
	$filter = "`swdi`.`psgc_province`='$optionProvince'";
	$a_coverage = "$optionProvince";
}else{
	//load entire records of the selected region
	$filter = "`swdi`.`psgc_region`='$optionRegion'";
	$a_coverage = "Region $optionRegion";
}

if ($optionReportType == 'imt_es')       include 'imt_es.php';
if ($optionReportType == 'imt_sa')       include 'imt_sa.php';
if ($optionReportType == 'imt_internal') include 'imt_int.php';
if ($optionReportType == 'imt_external1') include 'imt_ext1.php';
if ($optionReportType == 'imt_external2') include 'imt_ext2.php';
if ($optionReportType == 'imt_masterlist') include 'imt_masterlist.php';

if ($optionReportType == 'imt_sa_ml')       include 'imt_sa_ml.php';
if ($optionReportType == 'imt_internal_ml') include 'imt_int_ml.php';
if ($optionReportType == 'imt_external1_ml') include 'imt_ext1_ml.php';
if ($optionReportType == 'imt_external2_ml') include 'imt_ext2_ml.php';


?>
