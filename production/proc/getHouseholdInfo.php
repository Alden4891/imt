<?php
include '../dbconnect.php';
$hhid 		=  (isset($_REQUEST['hhid'])?$_REQUEST['hhid']:0);

$res = mysqli_query($con, "
SELECT
  r.HOUSEHOLD_ID,
  CONCAT(r.FIRST_NAME,' ', r.MID_NAME, ' ', r.LAST_NAME, ' ', r.EXT_NAME) AS GRANTEE,
  r.SEX,
  r.BIRTHDAY,
  r.AGE,
  r.REGION,
  r.PROVINCE,
  r.MUNICIPALITY,
  r.BARANGAY,
  r.CLIENT_STATUS,
  r.IP_AFFILIATION,
  CONCAT(r.HH_SET, r.SET_GROUP) AS 'SET'

  ,s.ES1,s.ES2, s.ES3, s.ES4
  ,s.HCS1,s.HCS2, s.NC1, s.NC2, S.WCS1, S.WCS2,S.WCS3
  ,s.HC1,s.HC2, s.HC3, S.HC4
  ,s.EC1,s.EC2
  ,s.RP1,s.RP2, S.RP3
  ,s.FA1,s.FA2, S.FA3
  ,SocAdeq, EconSuff, SWDI_SCORE, LOWB

FROM roster r
INNER JOIN swdi s
ON r.HOUSEHOLD_ID = s.HOUSEHOLD_ID
WHERE r.HOUSEHOLD_ID = '$hhid'
    AND HH_GRANTEE = 'GRANTEE'
") OR die (MYSQLI_ERROR());

  //basic info (1-12)
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

  //economic sofficiency (13-16)
  $ES1 = $r['ES1'];
  $ES2 = $r['ES2'];
  $ES3 = $r['ES3'];
  $ES4 = $r['ES4'];

  //health (17-23)
  $HCS1 = $r['HCS1'];
  $HCS2 = $r['HCS2'];
  $NC1 = $r['NC1'];
  $NC2 = $r['NC2'];
  $WCS1 = $r['WCS1'];
  $WCS2 = $r['WCS2'];
  $WCS3 = $r['WCS3'];

  //housing (24-27)
  $HC1 = $r['HC1'];
  $HC2 = $r['HC2'];
  $HC3 = $r['HC3'];
  $HC4 = $r['HC4'];

  //education
  $EC1 = $r['EC1'];
  $EC2 = $r['EC2'];

  //role PERFORMANCE
  $RP1 = $r['RP1'];
  $RP2 = $r['RP2'];
  $RP3 = $r['RP3'];

  //FAMILY AWARENESS
  $FA1 = $r['FA1'];
  $FA2 = $r['FA2'];
  $FA3 = $r['FA3'];

  //SWDI RESULTS
  $SocAdeq = $r['SocAdeq'];
  $EconSuff = $r['EconSuff'];
  $SWDI_SCORE = $r['SWDI_SCORE'];
  $LOWB = $r['LOWB'];

  $LOWB_DESC = '';
  if ($LOWB == 1) $LOWB_DESC = 'Survival';
  if ($LOWB == 2) $LOWB_DESC = 'Subsistence';
  if ($LOWB == 3) $LOWB_DESC = 'Self-Sufficient';

  //basic INFORMATION
  echo "$HOUSEHOLD_ID|$GRANTEE|$SEX|$BIRTHDAY|$AGE|$REGION|$PROVINCE|$MUNICIPALITY|$BARANGAY|$CLIENT_STATUS|$IP_AFFILIATION|$SET|";

  //economic Sufficiency;
  echo "$ES1|$ES2|$ES3|$ES4|";

  //HEALTH
  echo "$HCS1|$HCS2|$NC1|$NC2|$WCS1|$WCS2|$WCS3|";

  //housing
  echo "$HC1|$HC2|$HC3|$HC4|";

  //education
  echo "$EC1|$EC2|";

  //role performance
  echo "$RP1|$RP2|$RP3|";

  //family awareness
  echo "$FA1|$FA2|$FA3|";

  //swdi results
  echo "$SocAdeq|$EconSuff|$SWDI_SCORE|$LOWB|$LOWB_DESC";


include '../dbclose.php';
?>
