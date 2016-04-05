<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>THETA-16</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript" language="javascript" src="js/jquery-1.8.2.min.js"></script>
<script src="assets/js/script.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/tab.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="assets/countdown/jquery.countdown.css" />

<script type="text/javascript" src="js/inner-banner.js"></script>

<!-- common  jQuery -->

<!-- Countdown -->

<script type="text/javascript" src="js/script.js"></script>



		<script src="assets/countdown/jquery.countdown.js"></script>
		
<!-- tab  jQuery -->
<script type="text/javascript" src="js/tytabs.jquery.min.js"></script>

<!-- scroller -->
<script type="text/javascript" language="javascript">
			$(function() {

				//	Basic carousel, no options
				$('#foo0, #foo2').carouFredSel();
			});
		</script>
		<script type="text/javascript" language="javascript" src="js/carouFredSel.js"></script>
        

</head>

<body>


 <script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="ajax1.js"></script>

<script type="text/javascript">

/*
function a()
{
	//alert("dddd");
	if(document.registration.gender.value=="Male")
	{

		document.registration.Basketball.disabled=false;
		document.registration.Volleyball.disabled=false;
		document.registration.Kabbadi.disabled=false;
		document.registration.Chess.disabled=false;
		document.registration.TableTennis(Singles).disabled=false;
		document.registration.TableTennis(Doubles).disabled=false;
		document.registration.100Mts.disabled=false;
		document.registration.800Mts.disabled=false;
		document.registration.3KMts.disabled=false;
		document.registration.LongJump.disabled=false;
		document.registration.ShotPut.disabled=false;
		document.registration.4x100Relay.disabled=false;
		document.registration.KhoKhob.disabled=false;
		document.registration.5MenFootball.disabled=false;
	}


}

*/

function b()
{
	//alert("dddd");
	if(document.registration.gender.value=="Male")
	{

		document.registration.Basketball.disabled=false;
		document.registration.Volleyball.disabled=false;
		document.registration.Kabbadi.disabled=false;
		document.registration.Chess.disabled=false;
		document.getElementById("11").disabled=false;
		document.getElementById("12").disabled=false;
		document.getElementById("15").disabled=false;
		document.getElementById("17").disabled=false;
		document.getElementById("19").disabled=false;
		document.getElementById("21").disabled=false;
		document.getElementById("22").disabled=false;
		document.getElementById("91").disabled=false;



		document.getElementById("2").disabled=true;
		document.getElementById("4").disabled=true;
		document.getElementById("8").disabled=true;
		document.getElementById("10").disabled=true;
		document.getElementById("94").disabled=true;
		document.getElementById("14").disabled=true;
		document.getElementById("16").disabled=true;
		document.getElementById("18").disabled=true;
		document.getElementById("20").disabled=true;
		document.getElementById("13").disabled=true;


	}
	else if(document.registration.gender.value=="Female")
		{
		document.getElementById("2").disabled=false;
		document.getElementById("4").disabled=false;
		document.getElementById("8").disabled=false;
		document.getElementById("10").disabled=false;
		document.getElementById("94").disabled=false;
		document.getElementById("14").disabled=false;
		document.getElementById("16").disabled=false;
		document.getElementById("18").disabled=false;
		document.getElementById("20").disabled=false;
		document.getElementById("13").disabled=false;



		document.registration.Basketball.disabled=true;
		document.registration.Volleyball.disabled=true;
		document.registration.Kabbadi.disabled=true;
		document.registration.Chess.disabled=true;
		document.getElementById("11").disabled=true;
		document.getElementById("12").disabled=true;
		document.getElementById("15").disabled=true;
		document.getElementById("17").disabled=true;
		document.getElementById("19").disabled=true;
		document.getElementById("21").disabled=true;
		document.getElementById("22").disabled=true;
		document.getElementById("91").disabled=true;
		//document.registration.100Mts.disabled=false;
		/*
		document.registration.100Mts.disabled=false;
		document.registration.800Mts.disabled=false;
		document.registration.3KMts.disabled=false;
		document.registration.LongJump.disabled=false;
		document.registration.ShotPut.disabled=false;
		document.registration.4x100Relay.disabled=false;
		document.registration.KhoKhob.disabled=false;
		document.registration.5MenFootball.disabled=false;
		*/
		}

	else
	{
		document.getElementById("2").disabled=true;
		document.getElementById("4").disabled=true;
		document.getElementById("8").disabled=true;
		document.getElementById("10").disabled=true;
		document.getElementById("94").disabled=true;
		document.getElementById("14").disabled=true;
		document.getElementById("16").disabled=true;
		document.getElementById("18").disabled=true;
		document.getElementById("20").disabled=true;
		document.getElementById("13").disabled=true;
		document.registration.Basketball.disabled=true;
		document.registration.Volleyball.disabled=true;
		document.registration.Kabbadi.disabled=true;
		document.registration.Chess.disabled=true;
		document.getElementById("11").disabled=true;
		document.getElementById("12").disabled=true;
		document.getElementById("15").disabled=true;
		document.getElementById("17").disabled=true;
		document.getElementById("19").disabled=true;
		document.getElementById("21").disabled=true;
		document.getElementById("22").disabled=true;
		document.getElementById("91").disabled=true;
	}

}







var xmlhttp;
function GetXmlHttpObject()
{
	if (window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}
	if (window.ActiveXObject)
	{
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
	return null;
}


function stateChanged()
{
		
	if (xmlhttp.readyState==4)
	{
    document.getElementById("branch").innerHTML=xmlhttp.responseText;
	//document.getElementById("branchcode").innerHTML=xmlhttp.responseText;
	}
}






function dd()
{
	if(document.registration.branch.value=="select")
	{
		alert("select branch");
	//	return false;
	}
	else
	{
		
	var str=document.registration.branch.value;
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	}

	var url="branchAJAX.php";
	url=url+"?cc="+str;
	

	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
	}

}


function dd22()
{
	//alert("dd")	
	
	if(document.registration.branch.value=="automobile")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=false;
		document.registration.CrashDay.disabled=false;
	}

	else if(document.registration.branch.value=="CSE"||document.registration.branch.value=="IT"||document.registration.branch.value=="mca")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=false;
		document.registration.XGaming.disabled=false;
		document.registration.OnlineTreasureHunt.disabled=false;
		document.registration.CircuitTreasure.disabled=true;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}

	else if(document.registration.branch.value=="civ")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=false;
		document.registration.cad.disabled=false;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}
	
	else if(document.registration.branch.value=="MECH" || document.registration.branch.value=="mechtro")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=false;
		document.registration.OTDorogo.disabled=false;
		document.registration.RoboSoccer.disabled=false;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}

		else if(document.registration.branch.value=="ECE")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=false;
		document.registration.ValianTronics.disabled=false;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}

		else if(document.registration.branch.value=="EEE")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=false;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}

else
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=true;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}



}

</script>

<div class="header-inner">
    <div class="header-in">
    	<div class="logo"><a href="index.php"><img src="images/logo.png" align="bottom" width="252" height="78" /></a> </div>
		
		   <div class="social">

		
		
                 <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="logbox" id="logtopbox" style="display:none">
            

			
<h2></h2> 

           <p></p>
           
        </div>
            	<div class="fl-left mar-right"><a href="https://twitter.com/srctheta16"><img src="images/twitter.png" border="0" /></a></div>
              <div class="fl-left mar-right"><a href="https://www.facebook.com/srctheta16"><img src="images/facebook.png" border="0" /></a></div>
           <!--<div  class="fl-left mar-right"><a href="#"><img src="images/youtube.png" border="0" /></a></div>
              <div  class="fl-left"><a href="#"><img src="images/google-plus.png" border="0" /></a></div>-->

			  <div  class="fl-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>


          </div>
       <div class="menu">
        	<ul><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            	
               
                

		 <li><a  id="activator" style="border:none; cursor:pointer">Contact Us</a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="box" id="box" style="display:none">
            <a class="boxclose" id="boxclose"></a>
            <h1>Contact Us </h1>
           <p></p>
           <ul>
          <li class="quries">For queries regarding participation, mail us at <p>theta2k16@gmail.com</p></li>

		  <li class="address"><strong>Convenor</strong><br/>
				Dr. T. RadhaKrishnan<br/>
				Mob: +91-9894211193 </li>

				 <li class="address"><strong>Co-Convenors</strong><br/>
				Dr. A.Srinivasan<br/>
				Mob: +91-9842478191 <br>
				
				Dr. S.Meganathan<br/>
				Mob: +91-9443384450 </li>
                <li class="address"><strong>Coordinators</strong><br/>
				Jayesh KR - +91-8608139029  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pradhyumnan M - +91-9629702244<br>
				</li>
				
				
				<li class="address"><strong>Co-Coordinators</strong><br/>
				B.Ajay Kumar - +91-9994070053  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P.Shivram Biju - +91-9944003929<br>
				S.Gautham Viswanath - +91-9940731118  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S.Nandha Kumar - +91-9092718410<br>
				</li>
				
				

				
				<li class="map">SASTRA University - SRC<br/>
				                Kumbakonam - 612 001<br/>
								Tamil Nadu</li>
				
				<!--<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				

				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>-->
           </ul>		  
        </div></li>
        <li><a href="gaming.php">Gaming</a></li>
<li><a href="#" id="event5">Workshops</a></li>

			<li><a href="robotics.php" >Robotics</a></li>

			 <li><a href="emulsion.php" id="event3">Emulsion</a></li>

			 <li><a href="#" id="event2">Technical</a></li>
          <li><a id="register" style=" cursor:pointer">Registration</a></li>
		    <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="logbox" id="regbox" style="display:none">
            <a class="boxclose" id="regboxclose"></a>
            <h1><div align="center"> Visit Main - PR  </div></h1>
           <p><center><img src="images/registration_closed.png"></center></p>
				 
               <!-- <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="box" id="regbox" style="display:none">
          
           <a class="boxclose" id="regboxclose"></a>
            <h1>Registration Form </h1>
       
     









<form action="registrationb.php"  method="post" name="registration" onSubmit="return all123()">

<font color="red"><b><div class="stm" id="stmts" ></div></b></font>



<table border="0" style="margin-left:0px"cellpadding="0" cellspacing="0" align="center" width="100%">


<tr><td width="140" height="35"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>First Name:</font></td>
    <td width="175"><input type="text" size="20" name="fname" id="fname1" onBlur="fval(this.value)"/></td>
    <td width="166"><div id="fname2"></div></td><td width="166"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Reg No :</font></td>
	<td width="257"><input type="text" name="cid"   value="Your College Reg. no" onFocus="colgidchk()" onBlur="clgchk(this.value)"></td><td width="126"><div id="cid2"></div></td>
</tr>
<tr><td height="35"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Last&nbsp;Name:</font></td> 
    <td><input type="text" size="20" name="lname" id="lname1" onBlur="lval(this.value)"/></td>
	<td><div id="lname2"></div></td><td><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Branch&nbsp;ID:</font></td>
	<td><select name="branch" style="width: 147px" onchange="br(this.value)">
	<option value="">Select one</option>
	<option value="IT">IT</option>
	<option value="CSE">CSE</option>
	<option value="ECE">ECE</option>
	<option value="EEE">EEE</option>
	<option value='CHEM'>Chem</option>
	<option value="MECH">MECH</option>
    <option value="bio">BIO-TECH</option>
    <option value="civ">CIVIL</option>
    <option value="mechtro">MECHATRONICS</option>
    <option value="eie">EIE</option>
    <option value="ecm">ECM</option>
	<option value="pharmacy">PHARMACY</option>
	<!--<option value="mba">MBA</option>
	<option value="bbm">BBM/BBA</option>-->
	<!--<option value="mca">MCA</option>
	<option value="automobile">Automobile Engineering</option>
	<option value="es">Embedded Systems</option>
	<option value="vlsi">VLSI</option>
	<option value="mme">MME</option>


	</select></td>
	<td><div id="bid2"></div></td>
</tr>
<tr><td height="35"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Gender</font></td>
    <td><select name="gender" style="width: 147px" onBlur="showhide(this.value)">
		<option value="" selected="selected">Select one</option>
		<option value='Male'>Male</option>
	    <option value="Female">Female</option>
		</select></td>
	<td><div id="gen"></div></td>
	<td><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>State:</font></td><td><select  style="width: 147px" name="state" onChange="setcity(this.value)">
		<option value="sl" selected="selected">Select one</option>
		<option value="Andhra Pradesh">Andhra Pradesh</option>
	    <option value="Arunachal pradesh">Arunachal pradesh</option>
		<option value="Assam">Assam</option>
		<option value="Bihar">Bihar</option>
		<option value="Delhi">Delhi</option>
		<option value="Gujarat">Gujarat</option>
		<option value="Haryana">Haryana</option>
		<option value="Himachal Pradesh">Himachal Pradesh</option>
		<option value="Jammu And Kashmir">Jammu And Kashmir</option>
		<option value="Jharkhand">Jharkhand</option>
		<option value="Kerala">Kerala</option>		
	    <option value="karnataka">karnataka</option>
		<option value="Madhya Pradesh">Madhya Pradesh</option>
		<option value="Maharashtra">Maharashtra</option>
		<option value="Manipur">Manipur</option>
		<option value="Meghalaya">Meghalaya</option>
		<option value="Mizoram">Mizoram</option>
		<option value="Nagaland">Nagaland</option>
		<option value="Orissa">Orissa</option>
		<option value="Pondicherry">Pondicherry</option>
		<option value="Punjab">Punjab</option>
		<option value="Rajasthan">Rajasthan</option>
		<option value="Sikkim">Sikkim</option>
		<option value="Tamilnadu">Tamilnadu</option>
		<option value="Telangana">Telangana</option>
		<option value="Tripura">Tripura</option>
		<option value="Uttaranchal">Uttaranchal</option>
		<option value="West Bengal">West Bengal</option>
		</select></td>
	<td><div id="state1"> </div> </td>
</tr>
<tr><td height="51"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Phone&nbsp;No:&nbsp;&nbsp;+91</font></td>
    <td><input type="text" name="phno" onBlur="phcheck(this.value)" value="" maxlength=10></td><td><div id="ph"></div></td>
	<td><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>District</font></td>
	<td><select style="width: 147px" name="city" onChange="setcol(this.value)"><option value="city" >Select one</option></select></td><td><div id="city1"></div></td>
</tr>
<tr><td valign="top"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Email&nbsp;Id</font></TD>
   	<td valign="top"><INPUT TYPE="text" id="emailid" NAME="email" onBlur="return validate_reg()" value=""></td>
	<td valign="top"><div id="em"></div></td>
    <td valign="top" ><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>College</font> </td>
    <td valign="top" height="80"><select name="college">
	<option value="college" >Select one</option></select><br><br><input type="checkbox" id="newnae" name="newcollege" value="new col" onClick="newcol()"><font size="2"><b>Check if college not present</font>
	<div id="newcol" style="visibility:hidden"><input type="text" name="ncol" onBlur = "return myfunction()"></div></td>
	<td valign="top"><div id="nc"></div></td>
</tr>

</table>


<table width="100%"><tr><td height="42" align="right"><INPUT TYPE="submit" name="submit" value="submit"></td><td height="42" align="left"><input type="reset" value="Reset"></td></tr></table>
</form></td></tr></table>


<br>
<h2>&nbsp; </h2>-->
















        </div></li>     
                

				
          <li><a href="index.php" class="selected">Home</a></li> 
				
                

				
               
				
				
              <!-- <li><a  href="#" id="event4">Man I Fest</a></li>-->
               
		     
            </ul>
			<!-- <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><font size="" color="#ffffff">Participants should bring their college ID & Bonafied Certificate</font></marquee>-->
        </div>
    </div>
</div>

<div class="banner">

<div class="banner-in-page">

<div class="flagship"  style="margin:0 auto">
    <div style=" padding:30px 30px; margin:0 auto">
      <div  class="flagimg pix"><a href="ashwamedha.html" class="thumb"><img src="images/Flagship/ASHWAMEDHA.jpg"  /></a></div>
	  <div  class="flagimg pix"><a href="kalpavriksha.html" class="thumb"><img src="images/Flagship/kalpa.jpg"  /></a></div>
	  <div  class="flagimg pix"><a href="chanakya.html" class="thumb"><img src="images/Flagship/chanakya.jpg"  /></a></div>
      <div  class="flagimg pix"><a href="chainreaction.html" class="thumb"><img src="images/Flagship/CHAIN-REACTION.jpg"  /></a></div>
      <div  class="flagimg pix"><a href="financeleague.html" class="thumb"><img src="images/Flagship/fin-league.jpg"  /></a></div>
      <div  class="flagimg pix"><a href="gordianknot.html" class="thumb"><img src="images/Flagship/GORDIAN-KNOT.jpg"  /></a></div>
	  <div  class="flagimg pix"><a href="jigyaasa.html" class="thumb"><img src="images/Flagship/jigyaasa.jpg" /></a></div>
      <div  class="flagimg pix"><a href="#" class="thumb"><img src="images/Flagship/KLUELESS.jpg" alt="Coming Soon" /></a></div>
    </div>
  </div>
  <div class="event" style="margin:0 auto">
    <div style=" padding:30px 60px; margin:0 auto">
     <!--<div  class="eventimg pic"><a href="shrutilaya.php" class="thumb"><img src="images/Events/classicalsing.jpg" /></a><div class="etitle"><font size="1" color="">Swara&nbsp;Mahostav(Sruthui Laya)&nbsp;&nbsp;</font></div></div>-->
	  <div  class="eventimg pic"><a href="music.php" class="thumb"><img src="images/Events/musiczone.jpg"  /></a><div class="etitle">Music Zone</div></div>

      <div  class="eventimg pic"><a href="dance.php" class="thumb"><img src="images/Events/dance.jpg" /></a><div class="etitle"><font size="1" color="">Dance Zone</font> &nbsp;&nbsp;</div></div>

	  <!-- <div  class="eventimg pic"><a href="roots.php" class="thumb"><img src="images/Events/dance1.jpg" /></a><div class="etitle">Janapada (Folk Dance)-Solo/Group&nbsp;&nbsp;</div></div>-->

	   
      <div  class="eventimg pic"><a href="admaking.php" class="thumb"><img src="images/Events/admaking.jpg" /></a><div class="etitle">Pracharak (Ad-Making)</div></div>
      
     
      <div  class="eventimg pic"><a href="spotlight.php" class="thumb"><img src="images/Events/spotlight.jpg" /></a><div class="etitle">Curtain Call(Skits)</div></div>
     
  <div  class="eventimg pic"><a href="bolthiband.php" class="thumb"><img src="images/Events/mime.jpg"  /></a><div class="etitle">Pushpak(Mime)</div></div>

  <div  class="eventimg pic"><a href="mrnmrs.php" class="thumb"><img src="images/Events/mrmrs.jpg"  /></a><div class="etitle">Mister & Miss Mohotsav</div></div>

  <div  class="eventimg pic"><a href="shortfilm.php" class="thumb"><img src="images/Events/shortfilm.jpg"  /></a><div class="etitle">Laghu Chitra(Short&nbsp;Film&nbsp;Making)</div></div>

 
   <div  class="eventimg pic"><a href="fashionshow.php" class="thumb"><img src="images/Events/fashionshow.jpg"  /></a><div class="etitle">Sogasu&nbsp;Chuda&nbsp;Tharama(fashion&nbsp;show)</div></div>

   <p align="center" ><b>
   &nbsp;&nbsp;<br><br><br>
    <u>Coordinators</u><br><br>
   R.Hemanth Kumar - (8977703858)<br>
   G.Ragavendhra - (9701031037)<br>
   T.Vamsidhar - (7382864123)<br>
    </b>



</p>
      <div class="clearfix"></div>
    </div>
  </div>


   <div class="event1" style="margin:0 auto">
   <div style=" padding:30px 60px; margin:0 auto">
     <div  class="eventimg pic"><a href="debating.php" class="thumb"><img src="images/Events/debate.jpg" /></a><div class="etitle">Debating</div></div>
      <!--<div  class="eventimg pic"><a href="wordsmithsarena.php" class="thumb"><img src="images/Events/creative writing.jpg" /></a><div class="etitle">Word&nbsp;Smith's&nbsp;Arena </div></div>-->

	   <div  class="eventimg pic"><a href="Jam.php" class="thumb"><img src="images/Events/speak.jpg" /></a><div class="etitle">Jam</div></div>

	   <div  class="eventimg pic"><a href="groupdiscussion.php" class="thumb"><img src="images/Events/gd.jpg" /></a><div class="etitle">Group Discussion</div></div>

	   <div  class="eventimg pic"><a href="technicalloveletter.php" class="thumb"><img src="images/Events/techloveletter.jpg" /></a><div class="etitle">Technical Love Letter</div></div>

	   <div  class="eventimg pic"><a href="spirit.php" class="thumb"><img src="images/Events/spirit.jpg" /></a><div class="etitle">Spiritual sojourn</div></div>
	    <div  class="eventimg pic"><a href="entertainmentquiz.php" class="thumb"><img src="images/Events/generalquiz.jpg" /></a><div class="etitle">Entertainment Quiz</div></div>
		 <div  class="eventimg pic"><a href="historyquiz.php" class="thumb"><img src="images/Events/historyquiz.jpg" /></a><div class="etitle">History Quiz</div></div>

	    
      <div  class="eventimg pic"><a href="mockparliament.php" class="thumb"><img src="images/Events/parliament.jpg" /></a><div class="etitle">Mock Parliament</div></div>
	   <div  class="eventimg pic"><a href="spellbee.php" class="thumb"><img src="images/Events/spellbee.jpg" /></a><div class="etitle">SPELL BEE</div></div>
      
     
      

  
      <div class="clearfix"></div>
    </div>
  </div>

   <div class="event2" style="margin:0 auto">
    <div style=" padding:30px 60px; margin:0 auto">
     <div  class="eventimg pic"><a href="informatica.php" class="thumb"><img src="images/Events/informatica.png" /></a><div class="etitle">INFORMATICA</div></div>
     <div  class="eventimg pic"><a href="emulsion.php" class="thumb"><img src="images/Events/emulsion.png" /></a><div class="etitle">EMULSION</div></div>
     <div  class="eventimg pic"><a href="mathematica.php" class="thumb"><img src="images/Events/mathematica.png" /></a><div class="etitle">MATHEMATICA</div></div>
     <div  class="eventimg pic"><a href="optica.php" class="thumb"><img src="images/Events/optica.png" /></a><div class="etitle">OPTICA</div></div>
     <div  class="eventimg pic"><a href="robotics.php" class="thumb"><img src="images/Events/robotics.png" /></a><div class="etitle">ROBOTICS</div></div>
     <div  class="eventimg pic"><a href="biogenesis.php" class="thumb"><img src="images/Events/biogenesis.png" /></a><div class="etitle">BIO-GENESIS</div></div>
      <div  class="eventimg pic"><a href="equilibria.php" class="thumb"><img src="images/Events/equlibria.png" /></a><div class="etitle">EQUILIBRIA</div></div>

	   <div  class="eventimg pic"><a href="strategia.php" class="thumb"><img src="images/Events/strategia.png" /></a><div class="etitle">STRATEGIA</div></div>

	   <div  class="eventimg pic"><a href="electronica.php" class="thumb"><img src="images/Events/electronica.png" /></a><div class="etitle">ELECTRONICA</div></div>
	    
		<div  class="eventimg pic"><a href="pabajja.php" class="thumb"><img src="images/Events/pabajja.png" /></a><div class="etitle">PABAJJA</div></div>
      <!--<div  class="eventimg pic"><a href="xgaming.php" class="thumb"><img src="images/Events/xbox.jpg" /></a><div class="etitle">X-Box Gaming - CSE Dept</div></div>
      
     
      <div  class="eventimg pic"><a href="robosoccer.php" class="thumb"><img src="images/Events/robo.jpg" /></a><div class="etitle">Robo Soccer-Mech Dept</div></div>
     
  <div  class="eventimg pic"><a href="workshop.php" class="thumb"><img src="images/Events/workshop.jpg"  /></a><div class="etitle">Workshops-CSE/Mech/ECE Depts</div></div>

  <div  class="eventimg pic"><a href="robo.php" class="thumb"><img src="images/Events/robot.jpg"  /></a><div class="etitle">Robo Rodentia-Mech Dept</div></div>

  <div  class="eventimg pic"><a href="autocad.php" class="thumb"><img src="images/Events/autocad.jpg"  /></a><div class="etitle">Auto CAD-Mech Dept</div></div>
   <div  class="eventimg pic"><a href="electr.php" class="thumb"><img src="images/Events/electr.jpg"  /></a><div class="etitle">ELECTR-O-HUNT</div></div>-->
      <div class="clearfix"></div>
    </div>
  </div>

   <div class="event3" style="margin:0 auto">
    <div style=" padding:30px 60px; margin:0 auto">
     <div  class="eventimg pic"><a href="rangoli.php" class="thumb"><img src="images/Events/rangoli.jpg" /></a><div class="etitle">Muthyala Muggu</div></div>
      <div  class="eventimg pic"><a href="powerofsilence.php" class="thumb"><img src="images/Events/dumb-charades.jpg" /></a><div class="etitle"><font size="1" color="">Khamoshiyan (Dumb Charades)&nbsp;&nbsp;</font></div></div>

	   <div  class="eventimg pic"><a href="rangdebasanthi.php" class="thumb"><img src="images/Events/painting.jpg" /></a><div class="etitle">Rang De Basanthi (Painting)</div></div>

	    
      <div  class="eventimg pic"><a href="artexhibition.php" class="thumb"><img src="images/Events/art.jpg" /></a><div class="etitle">He'Art' Exhibition</div></div>
      <div  class="eventimg pic"><a href="memoriesmade.php" class="thumb"><img src="images/Events/photography.jpg" /></a><div class="etitle">Memories Made (Photography)</div></div>
     
      

  
      <div class="clearfix"></div>
    </div>
  </div>

<div class="event4" style="margin:0 auto">
   <div style=" padding:30px 60px; margin:0 auto">
     <div  class="eventimg pic"><a href="paperpresentation.php" class="thumb"><img src="images/Events/ppt.jpg" /></a><div class="etitle"><font size="2" color="">Maniquest &nbsp;&nbsp;</font></div></div>
      

	   <div  class="eventimg pic"><a href="bquiz.php" class="thumb"><img src="images/Events/bquiz.jpg" /></a><div class="etitle">Knowledge - o Brain&nbsp;&nbsp;</div></div>

	   
      <div  class="eventimg pic"><a href="stockgamer.php" class="thumb"><img src="images/Events/stock.jpg" /></a><div class="etitle">Warren's Wallet</div></div>
       <div  class="eventimg pic"><a href="mavericks.php" class="thumb"><img src="images/Events/forex-market-makers.jpg" /></a><div class="etitle"><font size="2" color="">Mavericks of Market</font> &nbsp;&nbsp;</div></div>
     
      <div  class="eventimg pic"><a href="youngtrunks.php" class="thumb"><img src="images/Events/young.jpg" /></a><div class="etitle">Vignan's Young Turks</div></div>
     
  <div  class="eventimg pic"><a href="mgmt.php" class="thumb"><img src="images/Events/manager.jpg"  /></a><div class="etitle">Management Maestro</div></div>
 <!-- <p align="justify"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After getting exposure to several theories and concepts about management, business, and markets in the classroom, it is time to put these into practice. Let your knowledge of management be tested by MAN i FEST 2K14. It is not only about just being a manager; it is also about showing the right personality. This B-School meet will help to spot the management skills in you. So, Are You Ready? Have fun, frolic, dance, masti and lots of learning, all at one place - MAN i FEST 2K14.</b>



</p>
<center><p>This time MAN i FEST is being conducted as a part of the Mega Youth Festival Mahotsav'14.<p>
<b>Come !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		Join !!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		Share the spirit of Management!!!</b><br><br>
<b>ALL THE STUDENTS OF BBM and MBA ARE ELIGIBLE TO PARTICIPATE
</b><br>
For any queries send an e-mail to: mahotsav14_mba@vignanuniversity.org
</center>-->

        <div class="clearfix"></div>
    </div>
  </div>

  <div class="event5" style="margin:0 auto"><br><font size="4" color="#000000" style="padding-left:80px;padding-top:20px;"><b>Workshop Events:</b></font>
     <div style=" padding:10px 60px; margin:0 auto">
	
     <div  class="eventimg pic"><a href="workshops/IOT.pdf" class="thumb"><img src="images/Events/IOT.jpg" /></a><div class="etitle"><font size="" color="">INTERNET OF THINGS</font></div></div>
      <div  class="eventimg pic"><a href="workshops/web.pdf" class="thumb"><img src="images/Events/web.jpg" /></a><div class="etitle"><font size="" color="">WEB DEVELOPMENT</font> &nbsp;&nbsp;</di



	     <<div  class="eventimg pic"><a href="presentations.php" class="thumb"><img src="images/Events/powerpoint1.jpeg" /></a><div class="etitle"></div></div>


	   
      
 
      
    </div><font size="4" color="#000000" style="padding-left:80px;"><b></b></font><ul style="padding-left:95px;"><li><font size="" color="#00000"><a href="phvollyball.php" style="text-decoration:none;"><font size="" color="#333333"><b></b></font></a></font></li><li><font size="" color="#000000"><a href="phthrowball.php" style="text-decoration:none;"><font size="" color="#333333"><b></b></font></a></font></li></ul>
<!--<font size="4" color="#000000" style="padding-left:80px;"><b>Seminar:</b></font><ul style="padding-left:95px;"><li><font size="" color="#00000">"<a href="seminar.php"  style="text-decoration:none;"><font size="" color="#3333333">A clinical approach to treatment of diabetes mellitus</font></a>"</li></ul>

	<font size="4" color="#000000" style="padding-left:80px;"><b><a href="medicalcamp.php"  style="text-decoration:none;"><font size="" color="#333333">Medical Camp</font></a></b></font>-->
 
  <div class="clearfix"></div>
   
  </div>
 


   </div>





</div>

<div class="clr"></div>
<div class="countdown">
    <div class="countdown-in">
<div class="pageheader"><h1>EMULSION</h1></div>
  
      	
 <div class="eventdiv">
<div class="event-counter">
		   <div id="countdown"></div>
        
	   </div>
	   <div class="eheading"><strong>THETA-16</strong> COUNTDOWN</div></div>
      </div>
</div>

<div class="clr"></div>
<div class="inner-banner">
	<div class="inner-banner-in"><img src="images/about-banner.jpg" width="1073" height="224"  style="border-radius: 25px;"/></div>
</div>
<div class="clr"></div>
<div class="container">
	<div class="container-in">
    	<div class="leftdiv">
           
            <div id="tabsholder">

       <ul class="tabs">
            <li id="tab1">Events</li>
            <!--<li id="tab1">Mock CAT</li>
            <li id="tab3">Mock GATE</li>
            <!--<li id="tab4">Important Dates</li>
            <!--<li id="tab5">Prizes</li>
            <!<li id="tab6">Mock GRE</li>-->
        </ul>
        <div class="contents marginbot">

            <!--<div id="content1" class="tabscontent">
				<p><b><font size="" color="#cc3366">Auto CAD Description</font></b></p>
			</div>-->
            <div id="content1"width="800px;">
			<table><tr><td>
			<div  class="eventimg pic"><a href="EMULSION/shortfilm.pdf" class="thumb"><img src="images/Events/shortfilm.jpg" /></a><div class="etitle">SHORT FILM</div></div></td><td>
      
     
      <div  class="eventimg pic"><a href="EMULSION/Klickography.pdf" class="thumb"><img src="images/Events/spotlight.jpg" /></a><div class="etitle">KLICKOGRPHY</div></div></td><td>
     
  <div  class="eventimg pic"><a href="EMULSION/Ad.pdf" class="thumb"><img src="images/Events/admaking.jpg"  /></a><div class="etitle">AD FILM</div></div></td></tr><tr><td>

  

   </table>
            </div>
         
        </div>
<div style="align:right; float:right;"></div>
    </div>
            
        </div>
       <div class="rightdiv">
        	<div class="notice">
                <h2>THETA-16 Notice Board</h2>


				
            	<ul style="margin-top:10px;">
                    <li><a href="#">Entry FREE!!!</a></li>
                    <li><a href="#">You can attend any nmber of events all the events are FREE.</a></li>
                    <li><a href="#">Participant need to haveTHETA-16 ID cards to participate in events.</a></li>
          
                    <li><a href="#">Extra amount will be charged for Workshops. </a></li>
                    
                   
                </ul>
</div>			<div class="clr"></div>
        	           
        	<div class="partner">
	        	<div class="heading">THETA's Gallery</div>
			   <div class="list_carousel">
           
				<ul id="foo0">
					<li><img src="images/1.jpg" /></li>
					<li><img src="images/2.jpg" /></li>
					<li class="rborder-none"><img src="images/3.jpg" /></li>
					<li><img src="images/4.jpg" /></li>
                                        <li><img src="images/5.jpg" /></li>
                                        <li class="rborder-none"><img src="images/6.jpg" /></li>
				</ul>
                <ul id="foo2">
                                        <li><img src="images/7.jpg" /></li>
					<li><img src="images/8.jpg" /></a></li>
					<li class="rborder-none"><img src="images/9.jpg" /></li>
					<li><img src="images/10.jpg" /></li>
                                        <li><img src="images/11.jpg" /></li>
                                        <li class="rborder-none"><img src="images/12.jpg" /></a></li>
				</ul>

			</div>
               <div class="clearfix"></div>
			
		   </div>			</div>
    </div>
</div>
<div class="clearfix"></div>
<div class="footer">
	<div class="footer-in">

        	
          <div class="copy-right">
          &copy;All Rights Reserved to  <a href="https://www.facebook.com/kr.jayesh94" target="_blank">Jayesh Katta</a>, Developed by TEAM THETA.</div>

    </div>
</div><!-- scroller -->



</body>


</html>
