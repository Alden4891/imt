<?php
include '../dbconnect.php';

$tableName 		=  (isset($_REQUEST['tableName'])?$_REQUEST['tableName']:'');
$valueMember 	=  (isset($_REQUEST['valueMember'])?$_REQUEST['valueMember']:'');
$displayMember 	=  (isset($_REQUEST['displayMember'])?$_REQUEST['displayMember']:'');
$condition 		=  (isset($_REQUEST['condition'])?$_REQUEST['condition']:'');
$selected 		=  (isset($_REQUEST['selected'])?$_REQUEST['selected']:'');
$defaultValue =  (isset($_REQUEST['defaultValue'])?$_REQUEST['defaultValue']:'-1');
$sql =  "SELECT $valueMember, $displayMember FROM `$tableName` WHERE $condition;";
$res = mysqli_query($con, $sql ) OR die ($sql);

	//echo "$selected";
	if ($selected == -1) {
		echo "<option value='$defaultValue' selected>Select</option>";
	}else{
		echo "<option value='$defaultValue'>Select</option>";
	}

while ($r = mysqli_fetch_array($res)){
	$value = addslashes($r[0]);
	$display = $r[1];

	if ($selected == $value){
		echo '<option value="'.$value.'" selected>'.$display.'</option>';
	}else{
		echo '<option value="'.$value.'">'.$display.'</option>';
	}

}
include '../dbclose.php';
?>
