<?php
include '../../dbconnect.php';


$mode = (isset($_REQUEST['mode'])?$_REQUEST['mode']:'none');
$year = (isset($_REQUEST['y'])?$_REQUEST['y']:'none');
$month = (isset($_REQUEST['m'])?$_REQUEST['m']:'none');
$dateObj   = DateTime::createFromFormat('!m', $month);
$monthName = $dateObj->format('F'); // March

$link = mysql_connect($con_host,$con_username,$con_password);
mysql_select_db($con_database);


$last_day = date("t", strtotime($year.'-'.$month.'-15'));	
$fday = 1;
$lday = 15;
$modelabel = "1-15";
if ($mode==2) {
	$fday = 16;
	$lday = $last_day;
	$modelabel = "16-$last_day";	
}

$res_data = mysql_query("

SELECT
 `profile`.`EMP_ID`
, CONCAT('12-',LPAD(`profile`.`EMP_ID`,4,'0')) AS EMP_FULL
,`profile`.`FULLNAME`
, `profile`.`CATEGORY`
, `dtr`.`LOG`
, `dtr`.`TAG`
FROM
`dmcsm`.`profile`
INNER JOIN `dmcsm`.`dtr` 
    ON (`profile`.`EMP_ID` = `dtr`.`EMP_ID`)
WHERE `LOG` BETWEEN CONCAT($year,'-',$month,'-',$fday) AND CONCAT($year,'-',$month,'-',$lday) 
ORDER BY FULLNAME;
					 
",$link);
include '../../dbclose.php';

require('../fpdf/fpdf.php');

class PDF extends FPDF
{
protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';

	function WriteHTML($html)
	{
		// HTML parser
		$html = str_replace("\n",' ',$html);
		$a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
		foreach($a as $i=>$e)
		{
			if($i%2==0)
			{
				// Text
				if($this->HREF)
					$this->PutLink($this->HREF,$e);
				else
					$this->Write(5,$e);
			}
			else
			{
				// Tag
				if($e[0]=='/')
					$this->CloseTag(strtoupper(substr($e,1)));
				else
				{
					// Extract attributes
					$a2 = explode(' ',$e);
					$tag = strtoupper(array_shift($a2));
					$attr = array();
					foreach($a2 as $v)
					{
						if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
							$attr[strtoupper($a3[1])] = $a3[2];
					}
					$this->OpenTag($tag,$attr);
				}
			}
		}
	}

	function OpenTag($tag, $attr)
	{
		// Opening tag
		if($tag=='B' || $tag=='I' || $tag=='U')
			$this->SetStyle($tag,true);
		if($tag=='A')
			$this->HREF = $attr['HREF'];
		if($tag=='BR')
			$this->Ln(5);
	}

	function CloseTag($tag)
	{
		// Closing tag
		if($tag=='B' || $tag=='I' || $tag=='U')
			$this->SetStyle($tag,false);
		if($tag=='A')
			$this->HREF = '';
	}

	function SetStyle($tag, $enable)
	{
		// Modify style and select corresponding font
		$this->$tag += ($enable ? 1 : -1);
		$style = '';
		foreach(array('B', 'I', 'U') as $s)
		{
			if($this->$s>0)
				$style .= $s;
		}
		$this->SetFont('',$style);
	}

	function PutLink($URL, $txt)
	{
		// Put a hyperlink
		$this->SetTextColor(0,0,255);
		$this->SetStyle('U',true);
		$this->Write(5,$txt,$URL);
		$this->SetStyle('U',false);
		$this->SetTextColor(0);
	}

	function writeText($x,$y, $text, $font='Arial',$style='', $size=11){
		$this->SetFont($font,$style,$size);
		$this->SetFontSize($size);


		$this->setXY($x, $y);$this->write(5,$text);
	}
	function validateDate($date, $format = 'Y-m-d')
	{
	    $d = DateTime::createFromFormat($format, $date);
	    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
	    return $d && $d->format($format) === $date;
	}
	function drawLayout(){        	


		//rectangle 1
		$this->SetLineWidth(.5);
		$this->Rect(5,46,103,173);
		//rectangle 2
		$this->Rect(5+107,46,103,173);


		//vlines 1
		$this->SetLineWidth(.3);
		$this->Line(13.5,46,13.5,219); //v1
		$this->Line(21.5,46,21.5,219); //v2
		$this->Line(32.5,53.5,32.5,219); //v3
		$this->Line(44,46,44,219); //v2
		$this->Line(55.5,53.5,55.5,219); //v3
		$this->Line(67,46,67,219); //v2
		$this->Line(75.5,46,75.5,219); //v2
		$this->Line(83.5,46,83.5,219); //v2
		$this->Line(93.5,46,93.5,219); //v2

		//vlines 2
		$this->SetLineWidth(.3);
		$this->Line(107+13.5,46,107+13.5,219); //v1
		$this->Line(107+21.5,46,107+21.5,219); //v2
		$this->Line(107+32.5,53.5,107+32.5,219); //v3
		$this->Line(107+44,46,107+44,219); //v2
		$this->Line(107+55.5,53.5,107+55.5,219); //v3
		$this->Line(107+67,46,107+67,219); //v2
		$this->Line(107+75.5,46,107+75.5,219); //v2
		$this->Line(107+83.5,46,107+83.5,219); //v2
		$this->Line(107+93.5,46,107+93.5,219); //v2

		//hlines 1
		$this->Line(21.5,53.5,107.8,53.5); //v2
		for ($i=0; $i <= 30; $i++) { 
			$this->Line(5,58.6+($i*5.16),107.8,58.6+($i*5.16)); //v2
		}
		//hlines 2
		$this->Line(107+21.5,53.5,107+107.8,53.5); //v2
		for ($i=0; $i <= 30; $i++) { 
			$this->Line(107+5,58.6+($i*5.16),107+107.8,58.6+($i*5.16)); //v2
		}

		//header 1
		$this->writeText(27,12.8,'DEPARTMENT OF SOCIAL WELF. & DEVT.','Arial','B',8);
		$this->writeText(40,16.6,'DAILY TIME RECORD','Arial','B',8);
		$this->writeText(5,28.6,'Name:','Arial','',8);
		$this->writeText(71,28.6,'Emp no.:','Arial','',8);
		$this->writeText(5,36.6,'Entity:','Arial','',8);

		//header 2
		$this->writeText(106+27,12.8,'DEPARTMENT OF SOCIAL WELF. & DEVT.','Arial','B',8);
		$this->writeText(106+40,16.6,'DAILY TIME RECORD','Arial','B',8);
		$this->writeText(106+5,28.6,'Name:','Arial','',8);
		$this->writeText(106+71,28.6,'Emp no.:','Arial','',8);
		$this->writeText(106+5,36.6,'Entity:','Arial','',8);

		//table header 1
		$this->writeText(5,50,'Date    Day','Arial','',8);
		$this->writeText(29,47.5,'A.M.                      P.M.                        OT                   ','Arial','',8);
		$this->writeText(29,45.5,'                                                Late/               REG','Arial','',8);
		$this->writeText(29,48.5,'                                                UT                  HRS','Arial','',8);
		$this->writeText(5,54,'                         IN        OUT         IN          OUT','Arial','',8);


		//table header 2
		$this->writeText(106+5,50,'Date    Day','Arial','',8);
		$this->writeText(106+29,47.5,'A.M.                      P.M.                        OT             ','Arial','',8);
		$this->writeText(106+29,45.5,'                                                 Late/               REG','Arial','',8);
		$this->writeText(106+29,48.5,'                                                 UT                  HRS','Arial','',8);
		$this->writeText(106+5,54,'                         IN        OUT         IN          OUT','Arial','',8);


		//footer 1
		$this->writeText(9,231,'I certify on my honor that the above is a true and correct recport of the ','Arial','',8);
		$this->writeText(9,235.5,'hours of work performed, record of which was made daily at the time','Arial','',8);
		$this->writeText(9,239.5,'of arrival at and departure from office.','Arial','',8);
		$this->writeText(5,250,'_______________________________________________________________','Arial','',8);
		$this->writeText(9,262,'                         Verified as to the prescribed office hours','Arial','',8);
		$this->writeText(5,274,'_______________________________________________________________','Arial','',8);
		$this->writeText(9,278.5,'                         Signature of the Immediate Supervisor','Arial','',8);


		//footer 2
		$this->writeText(106+9,231,'I certify on my honor that the above is a true and correct recport of the ','Arial','',8);
		$this->writeText(106+9,235.5,'hours of work performed, record of which was made daily at the time','Arial','',8);
		$this->writeText(106+9,239.5,'of arrival at and departure from office.','Arial','',8);
		$this->writeText(106+5,250,'___________________________________________________________','Arial','',8);
		$this->writeText(106+9,262,'                         Verified as to the prescribed office hours','Arial','',8);
		$this->writeText(106+5,274,'___________________________________________________________','Arial','',8);
		$this->writeText(106+9,278.5,'                         Signature of the Immediate Supervisor','Arial','',8);

	}



}


$pdf = new PDF();



$CUR_EMP_ID = 0;
$doc_name = "";
while ($rr=mysql_fetch_array($res_data,MYSQL_NUM)) {

        $EMP_ID 		= $rr[0];
        $EMP_FULL 		= $rr[1];
        $FULLNAME 		= $rr[2];
        $CATEGORY 		= $rr[3];
        $LOG 			= $rr[4];
        $TAG 			= $rr[5];
        $LOG_ARR = explode("-", date("Y-m-d-h:i a", strtotime($LOG)));
        $DAY=$LOG_ARR[2];
        $TIME=$LOG_ARR[3];
        $doc_name = "DTR-$CATEGORY-$year-$monthName-$modelabel";
        if ($CUR_EMP_ID != $EMP_ID) {
        	$CUR_EMP_ID = $EMP_ID;

        	

			$pdf->AddPage('P',Array(215.9, 330.2)); //8.5x13
			//$pdf->Image("forms/dtr.jpg",0,0,216,0,'','');
			$pdf->drawLayout();
			$pdf->SetLeftMargin(11);

			$signature = ($year*$month/$lday) % 79;
			$pdf->Image("signature/berries ($signature).gif",10,290,15,15,'','');
			$pdf->Image("signature/berries ($signature).gif",107+10,290,15,15,'','');

			$pdf->SetFont('ARIAL','',9);
			$pdf->SetFontSize(9);

			//HEADER COPY 1
			$mid_x = 53.975; // the middle of the "PDF screen", fixed by now.
			$period_covered = "$monthName $fday-$lday, $year";
			$pdf->Text($mid_x - ($pdf->GetStringWidth($period_covered) / 2), 24, strtoupper($period_covered));

			$pdf->setXY(14, 28.5);$pdf->write(5,strtoupper($FULLNAME));	
			$pdf->setXY(14, 36.5);$pdf->write(5,strtoupper(explode('-',$CATEGORY)[0]));
			$pdf->setXY(83, 28.5);$pdf->write(5,strtoupper($EMP_FULL));


			//HEADER COPY 2
			$pdf->setXY(107+14, 28.5);$pdf->write(5,strtoupper($FULLNAME));	
			$pdf->setXY(107+14, 36.5);$pdf->write(5,strtoupper(explode('-',$CATEGORY)[0]));
			$pdf->setXY(107+83, 28.5);$pdf->write(5,strtoupper($EMP_FULL));

			$pdf->Text(107+$mid_x - ($pdf->GetStringWidth($period_covered) / 2), 24, strtoupper($period_covered));

			//FOOTER COPY 1
			$mid_x = 53.975; // the middle of the "PDF screen", fixed by now.
			$pdf->Text($mid_x - ($pdf->GetStringWidth($FULLNAME) / 2), 252.5, strtoupper($FULLNAME));


			//FOOTER COPY 2
			$mid_x = 53.975; // the middle of the "PDF screen", fixed by now.
			$pdf->Text(107+ $mid_x - ($pdf->GetStringWidth($FULLNAME) / 2), 252.5, strtoupper($FULLNAME));

   		    for ($i=1; $i <= $last_day; $i++) { 
				$dow = date("D", strtotime("$year-$month-$i"));
				

				$pdf->setXY(13, 53.5+($i*5.141));$pdf->write(5,$dow);
				$pdf->setXY(6, 53.5+($i*5.141));$pdf->write(5,$i);


				$pdf->setXY(120, 53.5+($i*5.141));$pdf->write(5,$dow);
				$pdf->setXY(113, 53.5+($i*5.141));$pdf->write(5,$i);


			}
        }
		$DTR_COL = $TAG;        
		$LOG_TIME =  strtotime(date("h:i a", strtotime($LOG )));


/*
//		$LOGIN_MODE = $TAG; //0 FOR IN; 1 FOR OUT

		 $DTR_COL = 0;
		 if ($LOG_TIME < strtotime("9:00 am")  && $LOGIN_MODE==0) {
		 	$DTR_COL = 1;
		  //	console_write( "AM-IN $LOG_TIME" );
		 }else if ($LOG_TIME >= strtotime("12:00 am") && $LOG_TIME <= strtotime("01:00 pm") && $LOGIN_MODE==1)  {
		 	$DTR_COL = 2;
		 //	console_write( "AM-OUT $LOG_TIME" );
		 }else if ($LOG_TIME >= strtotime("12:00 am") && $LOG_TIME <= strtotime("01:00 pm") && $LOGIN_MODE==0)  {
		 	$DTR_COL = 3;
		 	//console_write( "PM-IN $LOG_TIME" );
		 }else if ($LOG_TIME >=  strtotime("04:00 pm")  && $LOGIN_MODE==1)  {
		 	$DTR_COL = 4;
		 	//console_write( "PM-OUT $LOG_TIME" );
		 }
*/



		//copy 1
		$TIME_LABEL =  date("h:i", strtotime($TIME ));
		if ($DTR_COL==1) {$pdf->setXY(22, 53.5+($DAY*5.141));$pdf->write(5,$TIME_LABEL);}
		if ($DTR_COL==2) {$pdf->setXY(33, 53.5+($DAY*5.141));$pdf->write(5,$TIME_LABEL);}
		if ($DTR_COL==3) {$pdf->setXY(45, 53.5+($DAY*5.141));$pdf->write(5,$TIME_LABEL);}
		if ($DTR_COL==4) {$pdf->setXY(56, 53.5+($DAY*5.141));$pdf->write(5,$TIME_LABEL);}

		//copy 2
		$TIME_LABEL =  date("h:i", strtotime($TIME ));
		if ($DTR_COL==1) {$pdf->setXY(107+22, 53.5+($DAY*5.141));$pdf->write(5,$TIME_LABEL);}
		if ($DTR_COL==2) {$pdf->setXY(107+33, 53.5+($DAY*5.141));$pdf->write(5,$TIME_LABEL);}
		if ($DTR_COL==3) {$pdf->setXY(107+45, 53.5+($DAY*5.141));$pdf->write(5,$TIME_LABEL);}
		if ($DTR_COL==4) {$pdf->setXY(107+56, 53.5+($DAY*5.141));$pdf->write(5,$TIME_LABEL);}



/*
$pdf->SetFont('ARIAL','R',9);
$pdf->SetFontSize(9);
$pdf->setXY($x,$y);$pdf->write(5,$label);
*/
}

mysql_free_result($res_data);
mysql_close($link);





$pdf->Output('I',"$doc_name.PDF");
	





?>

