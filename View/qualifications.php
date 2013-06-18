<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Qualifications</title>
    <style type="text/css">
        .auto-style1
        {
            width: 100%;
        }
        .auto-style2
        {
        }
        .auto-style4
        {
        }
        .auto-style5
        {
            width: 241px;
        }
        .auto-style6
        {
            width: 241px;
            height: 28px;
        }
        .auto-style7
        {
            height: 28px;
        }
       
        fieldset
        {
            background:#F0F8FF; 
            margin-left:25%; 
            width:500PX;
        }
        legend
        {
            background:#D3D3D3;
        }
        input
        {
            width:200px;
        }
        p
        {
            margin-left:29%;
        }
        .style1
        {
            width: 487px;
        }
        span
        {
			color:red;
		}
    </style>
</head>
<body>
<?php
	$period1Val=0;
	$qualificationVal=0;
	$institutionVal=0;
	$tertiarySubject1Val=0;
	$tertiarySubject2Val=0;
	$tertiarySubject3Val=0;
	$tertiarySubject4Val=0;
	
	$period2Val=0;	
	$schoolVal=0;
	$secondarySubject1Val=0;
	$secondarySubject2Val=0;
	$secondarySubject3Val=0;
	$secondarySubject4Val=0;
	$secondarySubject5Val=0;
	$secondarySubject6Val=0;
	$secondarySubject7Val=0;
	
	if(isset($_POST["submit"]))
	{
		if($_POST["period1"]==null)
		$period1Val=1;
		if($_POST["qualification"]==null)
			$qualificationVal=1;
		if($_POST["institution"]==null)
			$institutionVal=1;
		if($_POST["tertiarySubject1"]==null)
			$tertiarySubject1Val=1;
		if($_POST["tertiarySubject2"]==null)
			$tertiarySubject2Val=1;
		if($_POST["tertiarySubject3"]==null)
			$tertiarySubject3Val=1;
		
		if($_POST["period2"]==null)
			$period2Val=1;
		if($_POST["school"]==null)
			$schoolVal=1;
		if($_POST["secondarySubject1"]==null)
			$secondarySubject1Val=1;
		if($_POST["secondarySubject2"]==null)
			$secondarySubject2Val=1;
		if($_POST["secondarySubject3"]==null)
			$secondarySubject3Val=1;
		if($_POST["secondarySubject4"]==null)
			$secondarySubject4Val=1;
		if($_POST["secondarySubject5"]==null)
			$secondarySubject5Val=1;
		if($_POST["secondarySubject6"]==null)
			$secondarySubject6Val=1;
		if($_POST["secondarySubject7"]==null)
			$secondarySubject7Val=1;	
		
	}
	
		
?>
    <form action="qualifications.php" method="post"  >
    <h1>Academic Qualifications</h1>
    <table class="auto-style1">
        <tr>
            <td class="style1">
                <hr style="width:1000px;" />
            </td>
            <td>
                &nbsp;
			</td>
        </tr>
    </table>
    <fieldset>
        <legend>TERTIARY</legend>
    <table class="auto-style1">
        
        <tr>
            <td class="auto-style5">Period (in year)</td>
            <td>
                <input id="Text1" name="period1" type="text" />
				<span>*</span>
				<?php if($period1Val) echo"<span> enter period</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Qualification</td>
            <td>
                <input id="Text2" name="qualification" type="text" />
				<span>*</span>
				<?php if($qualificationVal) echo"<span> enter qualification</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Institution Name</td>
            <td>
                <input id="Text3" name="institution" type="text" />
				<span>*</span>
				<?php if($institutionVal) echo"<span> enter institution</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style2" colspan="2">FINAL OR CURRENT YEAR SUBJECTS</td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 1</td>
            <td>
                <input id="Text4" name="tertiarySubject1" type="text" />
				<span>*</span>
				<?php if($tertiarySubject1Val) echo"<span> enter first subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 2</td>
            <td>
                <input id="Text5" name="tertiarySubject2" type="text" />
                <span>*</span>
				<?php if($tertiarySubject2Val) echo"<span> enter second subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 3</td>
            <td>
                <input id="Text6" name="tertiarySubject3" type="text" />
                <span>*</span>
				<?php if($tertiarySubject3Val) echo"<span> enter third subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 4</td>
            <td>
                <input id="Text7" name="tertiarySubject4" type="text" />
                <span>*</span>
				<?php if($tertiarySubject4Val) echo"<span> enter fourth subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 5</td>
            <td>
                <input id="Text8" name="tertiarySubject5" type="text" /></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 6</td>
            <td>
                <input id="Text9" name="tertiarySubject6" type="text" /></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 7</td>
            <td>
                <input id="Text10" name="tertiarySubject7" type="text" /></td>
        </tr>
        <tr>
            <td class="auto-style5"></td>
            <td></td>
        </tr>        
        </table>
        </fieldset>
    <p></p>
        <fieldset>
            <legend>SECONDARY</legend>
        <table>
        <tr>        
            <td class="auto-style5">Period (in years)</td>
            <td>
                <input id="Text11" name="period2" type="text" />
				<span>*</span>
				<?php if($period2Val) echo"<span> enter period</span>"; ?>
				</td>
        </tr>
        <tr>
            <td class="auto-style5">Name of School</td>
            <td>
                <input id="Text12" name="school" type="text" />
				<span>*</span>
				<?php if($schoolVal) echo"<span> enter school</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style4" colspan="2">FINAL YEAR SUBJECTS</td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 1</td>
            <td>
                <input id="Text13" name="secondarySubject1" type="text" />
				<span>*</span>
				<?php if($secondarySubject1Val) echo"<span> enter first subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 2</td>
            <td>
                <input id="Text14" name="secondarySubject2" type="text" />
				<span>*</span>
				<?php if($secondarySubject2Val) echo"<span> enter second subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 3</td>
            <td>
                <input id="Text15" name="secondarySubject3" type="text" />
				<span>*</span>
				<?php if($secondarySubject3Val) echo"<span> enter third subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style6">Subject 4</td>
            <td class="auto-style7">
                <input id="Text16" name="secondarySubject4" type="text" />
				<span>*</span>
				<?php if($secondarySubject4Val) echo"<span> enter fourth subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 5</td>
            <td>
                <input id="Text17" name="secondarySubject5" type="text" />
				<span>*</span>
				<?php if($secondarySubject5Val) echo"<span> enter fifth subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 6</td>
            <td>
                <input id="Text18" name="secondarySubject6" type="text" />
				<span>*</span>
				<?php if($secondarySubject6Val) echo"<span> enter sixth subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">Subject 7</td>
            <td>
                <input id="Text19" name="secondarySubject7" type="text" />
				<span>*</span>
				<?php if($secondarySubject7Val) echo"<span> enter sventh subject</span>"; ?></td>
        </tr>
        <tr>
            <td class="auto-style5">&nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
        </table>
    </fieldset>
    <p>
        <input id="Button1" name="submit" type="submit" value="Next" /></p>
    <p>
        &nbsp;</p>
    </form>
<?php
	if(isset($_POST["submit"]))
	{		
		
	$period1=$_POST["period1"];
	$qualification=$_POST["qualification"];
	$institution=$_POST["institution"];
/* @var $tertiarySubject1 type */
	$tertiarySubject1=$_POST["tertiarySubject1"];
	$tertiarySubject2=$_POST["tertiarySubject2"];
	$tertiarySubject3=$_POST["tertiarySubject3"];
	$tertiarySubject4=$_POST["tertiarySubject4"];
	$tertiarySubject5=$_POST["tertiarySubject5"];
	$tertiarySubject6=$_POST["tertiarySubject6"];
	$tertiarySubject7=$_POST["tertiarySubject7"];
	
	
	$period2=$_POST["period2"];
	//$tertiarySubject1=$_POST["tertiarySubject1"];
	$school=$_POST["school"];
	$secondarySubject1=$_POST["secondarySubject1"];
	$secondarySubject2=$_POST["secondarySubject2"];
	$secondarySubject3=$_POST["secondarySubject3"];
	$secondarySubject4=$_POST["secondarySubject4"];
	$secondarySubject5=$_POST["secondarySubject5"];
	$secondarySubject6=$_POST["secondarySubject6"];
	$secondarySubject7=$_POST["secondarySubject7"];
	
	
	echo"tertiary period :".$period1."<br/>";
	echo"qualification :".$qualification."<br/>";
	echo"institution :".$institution."<br/>";
	echo"tertiary subject 1 :".$tertiarySubject1."<br/>";
	echo"tertiary subject 2 :".$tertiarySubject2."<br/>";
	echo"tertiary subject 3 :".$tertiarySubject3."<br/>";
	echo"tertiary subject 4 :".$tertiarySubject4."<br/>";
	echo"tertiary subject 5 :".$tertiarySubject5."<br/>";
	echo"tertiary subject 6 :".$tertiarySubject6."<br/>";
	echo"tertiary subject 7 :".$tertiarySubject7."<br/>";
	echo"<br/>";
	echo"secondary period :".$period2."<br/>";
	echo"name of school :".$school."<br/>";
	echo"secidary subject 1 :".$secondarySubject1."<br/>";
	echo"secidary subject 2 :".$secondarySubject2."<br/>";
	echo"secidary subject 3 :".$secondarySubject3."<br/>";
	echo"secidary subject 4 :".$secondarySubject4."<br/>";
	echo"secidary subject 5 :".$secondarySubject5."<br/>";
	echo"secidary subject 6 :".$secondarySubject6."<br/>";
	echo"secidary subject 7 :".$secondarySubject7."<br/>";
	}
?>
</body>
</html>