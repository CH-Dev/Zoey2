<html>
	<head>
		<title>CoolHeat Comfort Systems</title><!-- What shows in the Tab  -->
		<link rel='stylesheet' type='text/css' href='main.css'>
		<link rel="shortcut icon" href="Resources/icon.ico" />
	</head>
	<body>
		<div class="PageHolder">
			<div class="HeaderHolder">
			<img src="Resources/Top Banner BKGD.png"><!-- Loads the Blue background in the header -->
				<div class="LeftHead">
					<img src="Resources/CH Logo-4.png"><!-- Loads the CoolHeat logo in the top left corner, above the banner -->
				</div><!-- Left Head -->
				<div class="RightHead">
				<br>
					<p class="whiteMedText">Why Rent? Join the Comfort Club!<br>Satisfied Customers Discover More</p>
				</div><!-- Right Head -->
			</div><!-- Head Section -->
			<div class="BodyHolder">
				<div class="BodyHolder1">
					<div class="TopTitle">
						<p class="whiteLarTextV">Why Renting Your Furnace is Better<br>
						 Than Owning it</p>
					</div>
					<div class="MidTitle">
						<p class="whiteMedTextTW">Rent your Furnace for as little as $50 a month<br></p>
					</div>
					<div class="LeftBodyLow">
						<p class="whiteMedTextV">No Upfront Cost!</p>
					</div>
					<div class="RightBodyLow">
						<p class="whiteMedTextV">Next Day Installation</p>
					</div>
					<div class="MidTitleLow">
						<p class="whiteMedTextV">No Service &<br>Installation Fees</p>
					</div>
				</div>
				<div class="BodyHolder2">
					<div class="LeftBody">
						<div class="LeftTitleHigh">
							<p class="whiteLarTextV">Renting</p>
						</div>
						<div class="LeftSetlow">
							<p class="whiteMedTextTW">Affordable Monthly Payments<br><br><br><br>
								Lifetime Parts & Services<br><br><br><br>
								Brand New Energy<br>Efficient Equipment
							</p>
						</div>
					</div>
					<div class="TopTitle">
					<p class="whiteMedTextTW">
					vs
					</p>
					</div>
					<div class="RightBody">
					
					</div>
				</div>
				<div class="BodyHolder3">
					
				</div>
				<div class="BodyHolder4">
					<p class="whiteLarTextV">Satisfied Comfort Club Members</p>
				</div>
				<div class="BodyHolder5">
				<img src="Resources/Join the Comfort Club BKGD.png"><!-- Loads the Red Background for the lower half of the site -->
					<div class="TopTitle">
						<p class="whiteLarTextV">Join the COOLHEAT Comfort Club!</p> <!-- Loads the Lower Title -->
					</div><!-- Top Title -->
					<div class="LeftBody"><!-- fills the Left Side main text box! 65 Characters per Line!-->
						<p class="whiteMedTextTW">Join the CoolHeat Comfort Club and never worry<br>
												about excessiverepair fees again! You can have<br>
												the peace of mind of as our professionally trained<br>
												technicians have you covered. We'll be there for <br>
												all your Comfort Systems service requirements.<br>
												<br>
												just fill out some basic information and one of our <br>technicians will be in touch shortly!</p>
					</div>
					<div class="RightBody">
						<form action="submit.php" method="post"><!-- This is the Form on the right side! -->
						Name:<div class="AlignRight"><input type='text' name='name'></div><br><br>
						Email:<div class="AlignRight1"><input type='email' name='email'></div><br><br>
						Phone:<div class="AlignRight2"><input type='email' name='email'></div><br><br>
							<div class="BottomCenter">
								<button> 
							<img id="my-img" 
							src="Resources/Join the Comfort Club Button.png" 
							 onmouseover="hover(this);" onmouseout="unhover(this);" /><!-- Replace this part with the new button image -->
							
								</button>
								
							</div><!-- Bottom Center -->
						</form>
					</div><!-- Right Body -->
				</div>
			</div><!-- Body Holder -->
		</div><!-- Page Holder -->
	</body>
</html>

<script>
function hover(element) {
    element.setAttribute('src', 
    	    'Resources/Join the Comfort Club Button_onScrollOver.png'//Replace this part with the new button hover image
    	    );
}
function unhover(element) {
    element.setAttribute('src', 
    	    'Resources/Join the Comfort Club Button.png'//Replace this part with the new button image
    	    );
}
</script>