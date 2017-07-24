<!DOCTYPE HTML>

<html>

<head>
	<title>Self Catering Apartments Richmond UK</title>
	<link href="css_cascading_style_script/styles.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="java_script/jquery_js.js"></script>
	<script type="text/javascript" src="java_script/jquery_ui.js"></script>
	<script language="javascript" type="application/javascript">
	
	var $cpn = Math.floor(Math.random()*9000)+1000;
	
	$( document ).ready(function() {
		
		$("#cpimg").attr('src', 'http://www.shipplets.com/dd_DynamicGraphic.php?text=' + $cpn);
	});
	
	function captChk() {
    	if (document.forms["myForm"]["input_code"].value==$cpn) {
			document.forms["myForm"]["code"].value = ($cpn*1111-1)*2-1;
        	return true;
    	} else {

			//alert("Please enter the code correctly and then click submit.");
			$("#errorBox").slideDown();

			return false;
    	}
	}	
	</script>
	
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-91396136-1', 'auto');
  		ga('send', 'pageview');

	</script>
	
</head>
	
<body>

<div id="wrapper">
	
	<div id="top">
		<div id ="background" style="background-image:url('images/index/river-banner.jpg');">
		</div>
			<img id ="door_logo_1" alt="Door logo" src="images/index/door-logo.png">
			<img id ="door_logo_2" alt="Door logo" src="images/index/door-logo-2.png">
			<h1>Larkfield Apartments</h1>
	</div>
			
	<div id="topnav">
	
		<table>
	
			<tr id="table1"> 
				<td><a href="index.html">HOME</a></td>
				<td><a href="location.html">LOCATION AND ATTRACTIONS</a></td>
				<td><a href="booking.php">BOOKING AND TARIFFS</a></td>
			</tr>
			
		</table>
					
				
		<table id="table2">
			<tr>	
				<td><a href="studio.html">STUDIO APARTMENT</a></td>
				<td><a href="one-bedroom.html">ONE BEDROOM APARTMENT</a></td>
				<td><a href="two-bedroom-apt.html">TWO BEDROOM APARTMENT</a></td>
				<td><a href="two-bedroom-house.html">TWO BEDROOM HOUSE</a></td>
				<td><a href="reviews.html">REVIEWS</a></td>
			</tr>

		</table> 
	
	</div>
	
	<div id="booking_page">
			
		<h1>Booking Information and Contact</h1>
		<br>
		
		<h2>Booking</h2>
		<p>There is a one week minimum stay.
		A deposit of 10% is required to confirm your booking, to be balanced on arrival by cash or cheque supported by banker's card.
		The deposit is non-returnable if cancelled.</p>
		<br>
				
		<h2>Arrival and Departure</h2>
		<p>The apartment is normally available after 4pm.
		Please provide notification of your expected time of arrival so we can be there to welcome you and answer any questions.
		Check out time is 10am, or later by prior arrangement.</p>
		<br>
		
		<h2>Pets</h2>
		<p>We regret no pets allowed.</p>
		<br>
					
	<h2>Prices</h2>
					
	<ul style="list-style-image: url('images/index/swan-bullet.png'); text-align:left; padding-left:500px; font-size:17px">
		<li> Studio Apartment: &sim;£95 to £110 per day.</li>
		<li> One Bedroom Apartment: &sim;£100 to £125 per day.</li>
		<li> Two Bedroom : &sim;£120 to £150 per day.</li>
		<li> Two Bedroom House: &sim;£125 to £160 per day.</li>
	</ul>
	
	<p><strong>Please note: rates vary depending on the number of occupants and the length of stay.</strong></p>
	
	<br>
	<h2 style="font-size:24px;">Please fill out the form below for any booking enquiries:</h2>
	<br>
	
	</div>
	
	<div style="text-align:center; font-size:17px;">
		<form action="grantsscript.php" name="myForm" method="post" id="booking_form" onsubmit="return captChk();">
			
			Contact Name <strong>(required)</strong><br>
			<input type="text" name="name" class="input1"><br><br>
	
			Address<br>
			<textarea type="text" name="address" rows="2" class="text_area1"></textarea>
			<br><br>
	
			Telephone <strong>(required)</strong><br>
			<input type="text" name="telephone" class="input1"><br><br>
	
			Email <strong>(required)</strong><br>
			<input type="text" name="email" class="input1"><br><br>

			Date of Arrival<br>
			<input type="text" name="arrival" class="input1"><br><br>
			
			Date of Departure<br>
			<input type="text" name="departure" class="input1"><br><br>
	
			Number of People<br>
			<input type="text" name="number_of_people" class="input1"><br><br>
			
			Will you Require Parking?<br>
			<input type="text" name="parking" class="input1"><br><br>
	
			Enter any enquiries you may have in the box below<br>
			<textarea name="enquiry" rows="8" class="text_area2"></textarea><br><br>
	
			<div style="margin:15px 0px 15px 0px;">
				<img src="http://www.shipplets.com/dd_DynamicGraphic.php?text=0000" id="cpimg" alt="" />
			</div>
			<input name="code" type="hidden" value="0" />
			<p><strong>Please enter the code above in the box below and then select submit.</strong></p>
			
			<input name="input_code" type="text" maxlength="4" class="input2" />
			
			<br><br>
            
            <p style="color:red; display:none;" id="errorBox">
  				<strong>Please enter the code correctly and then click submit.</strong>
			</p>
			<input type="reset" value="reset" class="input_button">
			<input type="submit" name="submit" value="submit" class="input_button">
						
		</form>
	</div>
	<br>	
	
	<div style="clear:both;">

		<br><br><br>

		<div class="email_box" style="margin:auto; width:360px; font-size:17px">
			<a href="mailto:shipplets@ukgateway.net?subject=Accommodation enquiry to Larkfield Apartments">
			You can alternatively email us directly at:
			</a>
			<br><span style ="font-size:20px">shipplets@ukgateway.net</span></div>
		<br>
		<a href="mailto:shipplets@ukgateway.net?subject=Accommodation enquiry to Larkfield Apartments">
		<div style="text-align:center">
		<img src="images/index/email-logo.jpg" alt="Email us" style ="width:85px; height:83px;">
		</div>
		</a>
		
		<table align="center">
			<tr>
				<td colspan="2" style="font-size:16px; text-align:center">
					<br><br>
					<strong><div style="color:#006666;">Correspondence Address:</div></strong>
					<br>
					Larkfield Apartments
					<br>
					Ground Floor, 19 Larkfield Road
					<br>
					Richmond-Upon-Thames, Surrey TW9 2PG
					<br>Tel: +44 (0) 208 948 6620
				</td>
			</tr>
		</table>

		<br><br><br>

		<table id="table_bottom2">
			<tr>
				<td><a href="index.html">Home</a></td>
				<td><a href="studio.html">Studio Apartment</a></td>
				<td><a href="one-bedroom.html">One Bedroom<br>Apartment</a></td>
				<td><a href="two-bedroom-apt.html">Two Bedroom<br>Apartment</a></td>
				<td><a href="two-bedroom-house.html">Two Bedroom<br>House</a></td>
				<td><a href="location.html">Location</a></td>
				<td><a href="booking.php">Booking</a></td>
			</tr>
		</table>
	</div>

	<br><br>
	

</div>

</body>


</html>