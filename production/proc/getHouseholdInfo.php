<?php  
include '../dbconnect.php';
$hhid 		=  (isset($_REQUEST['hhid'])?$_REQUEST['hhid']:0); 

$res = mysqli_query($con, "
SELECT
  HOUSEHOLD_ID,
  CONCAT(r.FIRST_NAME,' ', r.MID_NAME, ' ', r.LAST_NAME, ' ', r.EXT_NAME) AS GRANTEE,
  SEX,
  BIRTHDAY,
  AGE,
  REGION,
  PROVINCE,
  MUNICIPALITY,
  BARANGAY,
  CLIENT_STATUS,
  IP_AFFILIATION,
  CONCAT(HH_SET, SET_GROUP) AS 'SET'
FROM roster r
WHERE HOUSEHOLD_ID = '$hhid'
    AND HH_GRANTEE = 'GRANTEE'
") OR die (MYSQLI_ERROR());

  
	$r = mysqli_fetch_array($res, MYSQLI_ASSOC);
	$HOUSEHOLD_ID = $r['HOUSEHOLD_ID'];
	$GRANTEE = $r['GRANTEE'];
	$SEX = $r['SEX'];
	$BIRTHDAY = $r['BIRTHDAY'];
	$AGE = $r['AGE'];
	$REGION = $r['REGION'];
	$PROVINCE = $r['PROVINCE'];
	$MUNICIPALITY = $r['MUNICIPALITY'];
	$BARANGAY = $r['BARANGAY'];
	$CLIENT_STATUS = $r['CLIENT_STATUS'];
	$IP_AFFILIATION = $r['IP_AFFILIATION'];
	$SET = $r['SET'];

	echo "$HOUSEHOLD_ID|$GRANTEE|$SEX|$BIRTHDAY|$AGE|$REGION|$PROVINCE|$MUNICIPALITY|$BARANGAY|$CLIENT_STATUS|$IP_AFFILIATION|$SET";


include '../dbclose.php';
?>


