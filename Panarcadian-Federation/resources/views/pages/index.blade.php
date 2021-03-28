<?php use App\Controllers\UserInfoMessageController;?>
<!DOCTYPE html>

<style>

	a{ 
		cursor: url('./images/pointinghand.png'), auto;
	}

	#subttn{ 
		cursor: url('./images/pointinghand.png'), auto;
	}

	button input{ 
		cursor: url('./images/pointinghand.png'), auto;
	}

	#mobile-ddbox a{

	 	cursor: url('./images/pointingcircle.png'), auto;
	 }
	
	#phone{
		background: url(./images/telephone.png) no-repeat scroll 10px 16px;
	}

	#email{
		background: url(./images/email.png) no-repeat scroll 10px 16px;
	}

	@media(min-width: 960px){

		#census{

			background: url(./images/bg2.png) top center no-repeat;
			background-size: cover;
			height: 744px;
		}

	}

</style>

<html>
	<head>
		<link href="{{asset('/css/styles.css')}}" rel="stylesheet" />
        <title>{{config('app.name', 'PF')}}</title>
	</head>
	<body class="invisible sm:visible">

		<!-- Header-Slide -->
		<header class=" sm:h-480 md:h-550 lg:h-750" style=" background: url('/images/bg.png') bottom center no-repeat; background-size: cover;">
			<div class="group-foo sm:block lg:hidden relative h-30 w-40 my-0 mx-auto left-1/4 ">
				<a href="#"><img src="./images/burger.png" class="relative top-15 left-50 my-0 mx-auto" ></a>
				<div id="mobile-ddbox"  class="absolute group-foo-hover:block hidden shadow-2xl h-600 w-300 bg-white z-10 top-0 -left-200  group-hover:block ">
						<div class="flex-row h-45 w-cover bg-white-dark ">
							<div class="relative flex-1 w-50 h-50 p-10 -left-10"><a><img class="relative left-15" src="./images/close.png"></a></div>
							<div class="ml-240 -mt-38 w-30 "><img  src="./images/GR.png"alt="displayed language Greek"></div>
							<div class=" group-bar relative block w-20 mt-3 ml-20 -top-20 left-250 " >
								<a href="#" id="downicon1" class="w-cover h-10 "><img  src="./images/down-black.png" ></a>
								<div class="relative group-bar-hover:block hidden bg-white w-60 h-80 rounded shadow-xl z-30 -top-20 right-25">
									 <div class="h-40 w-60 rounded-sm border-b">
				   						 <a href="#"> <img class="relative left-10 top-10" src="./images/GR.png" alt=" language Greek"> </a>
				   						 <a href="#"><img class="relative left-40 bottom-8" src="./images/up.png" ></a>
			   						 </div>
			    					 <a href="#"> <img class="relative top-10 left-10" src="./images/GB.png" alt=" language English"> </a>
			  					</div>
		  					</div>
						</div>
						<div  class="flex-row h-45 w-cover rounded-sm border-b ">
							<div class="w-30 mt-9 ml-60 mr-0"><img src="./images/user-blue.png"></div>
							<a href="#" class="relative -top-25 left-90 font-SourceSansPro font-bold color-page-blue text-page-blue text-14 text-left leading-loose no-underline align-middle hover:text-a-red "><h2>Εγγραφή / Σύνδεση</h2></a>
						</div>
						<div  class="text-page-blue font-bold font-SourceSansPro text-14">
							<div class="group flex-row justify-between mt-20 mx-20 no-underline ">
		   						<a href="#" class="hover:text-a-red ">Η ΟΜΟΣΠΟΝΔΙΑ</a>
		   						<a href="#" class="relative -top-20 left-245 "><img  src="./images/right.png"></a>
		   						<div class="absolute group-hover:block hidden w-290 h-600 bg-white-dark z-30 top-0 left-10">
		   							 <div class="flex-row h-45 w-cover bg-white-dark ">
			   							 <a href="#" class="w-20 h-20 "><img class="relative top-10 left-10 " src="./images/left.png" ></a>
			   							 <a href="#" class="relative inline font-normal text-14 text-left no-underline align-bottom -top-14 left-35  ml-0">ΕΠΙΣΤΡΟΦΗ</a> 
		   							 </div>
		   							 <a href="#" class="block align-top text-14 text-left  my-10 ml-25 hover:text-a-red" >Ιστορία</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Διοικητικό Συμβούλιο</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Πρόεδρος - Βιογραφικό Σημείωμα</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Μήνυμα Προέδρου</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Districts</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Διατελεσαντες Προέδροι</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Αποστολή - Αξίες</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Πορεία - Εξέλιξη</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Ο Έλληνας πρέσβης στην Ουάσιγκτον</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Ο Πρέσβης ΗΠΑ στην Αθήνα</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Ο Οικουμενικός Πατριάρχης</a>
		    						 <a href="#" class="block align-top text-14 text-left  my-15 ml-25 hover:text-a-red">Ο Αρχιεπίσκοπος Αμερικής</a>
		  						</div>
		  					</div>
		  					<div class="flex-row justify-between  mx-20 ">
		    					<a class="hover:text-a-red">ΑΡΚΑΔΩΝ ΕΡΓΑ</a>
		    					<a href="#" class="relative -top-20 left-245"><img  src="./images/right.png"></a>
		    				</div>
		    				<div class="flex-row justify-between  mx-20 ">
								<a class="hover:text-a-red" >ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a>
								<a href="#" class="relative -top-20 left-245"><img  src="./images/right.png"></a>
							</div>
							<div class="flex-row justify-between mx-20 ">
								<a class="hover:text-a-red">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a>
								<a href="#" class="relative -top-20 left-245"><img  src="./images/right.png"></a>
							</div>
							<div class="flex-row justify-between  mx-20 ">
								<a class="hover:text-a-red">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a>
								<a href="#" class="relative -top-20 left-245"><img  src="./images/right.png"></a>
							</div>
							<div class="flex-row justify-between  mx-20 ">
								<a class="hover:text-a-red">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a>
								<a href="#" class="relative -top-20 left-245"><img  src="./images/right.png"></a>
							</div>
	  					</div>
					</div>
				</div>

				<div class="flex flex-row h-70 pb-2 pl-1 lg:w-11/12 max-w-screen-xl lg:mx-auto sm:justify-center lg:justify-between lg:mb-6 ">
					<!-- Εδώ τοποθετούνται όσα αντικείμενα εμφανίζονται πάνω από το menu πλοήγησης του header -->
					<div class="justify-center w-600 flex flex-row">
					<div class="relative block h-34 w-75 border-none font-SourceSansPro text-white text-center mt-15 mx-auto right-26 lg:h-44 lg:w-88 lg:pt-14 lg:ml-242 lg:mr-0 lg:mt-6 lg:right-0 lg:leading-tight ">
						<h3 class="mx-24 my-0 w-45 h-13 text-10 font-bold lg:mx-26 lg:w-69 lg:h-12 lg:text-12 lg:tracking-widest lg:pt-2 ">ΑΡΚΑΔΙΑ</h3>
						<img src="./images/clock.png" alt=" Greece's local time" class="relative inline w-16 h-16 m-0 lg:h-20 lg:w-20 lg:-top-5">
						<h2 class="inline my-0 h-25 w-41 text-18 font-normal font-ProximaNova ml-1 lg:h-32 lg:w-60 lg:text-26 lg:ml-1 ">13:28</h2>
					</div>

					<div  class="block h-34 w-75 border-none pt-14 text-white font-SourceSansPro text-center align-top mx-auto relative left-26 lg:h-44 lg:w-102  lg:ml-18  lg:mt-4 lg:left-0 ">
						<h3 class="w-53 h-13 my-0 mx-23 font-bold text-10 lg:mx-26 lg:w-59 lg:h-12 lg:text-12 lg:tracking-widest lg:leading-tight lg:pt-4 ">ΚΑΤΑΙΓΙΔΑ</h3>
						<img src="./images/cloud.png" alt=" rainy weather" class="relative inline w-16 h-16 m-0 lg:h-20 lg:w-20 lg:-top-5 ">
						<h2 class="inline ml-1 h-25 w-54 font-SourceSansPro text-18 lg:m-0 lg:h-32 lg:w-73 lg:text-26 font-ProximaNova ">12°C<span class="text-white text-opacity-50" >°F</span></h2>
					</div>		
					</div>			
					
					<div  class="hidden block lg:relative lg:inline h-64 w-260 border-none pt-23  ">

						<img src="./images/user.png" class="inline w-24 h-24 ">
						<a href="#"  class="inline w-119 h-18 relative top-5"><h2 class="inline w-cover h-18 font-SourceSansPro font-bold text-white text-14 text-left no-underline m-0 align-top hover:opacity-50">Εγγραφή / Σύνδεση</h2></a>
						<div class="inline">
							<img class="w-28 h-20 ml-40 relative bottom-19 left-150" src="./images/GR.png"alt="displayed language Greek">
							<!-- Drop down menu για την επιλογή της γλώσσας -->
							<div class=" group relative bottom-22 left-221">
								<a><img src="./images/down.png" class="relative bottom-14 hover:opacity-50"></a>
								<div  class="hidden relative block bottom-35 -left-14 bg-white w-60 h-80 rounded-sm shadow-xl z-20 group-hover:block">
									 <div class="h-40 w-60  border-b border-solid border-gray-200 rounded-sm">
				   						 <a href="#"> <img  src="./images/GR.png" alt=" language Greek" class="relative top-10 left-9"> </a>
				   						 <a href="#"><img  src="./images/up.png" class="relative bottom-10 left-37"></a>
			   						 </div>
			    					 <a href="#"> <img  src="./images/GB.png" alt=" language English" class="relative top-10 left-9"> </a>
			  					</div>
		  					</div>
		  				</div>
					</div>
			
				</div>	

				<nav  class="relative flex h-60 m-0 rounded-2x1 justify-center lg:mx-auto lg:w-11/12 lg:max-w-screen-xl lg:bg-white lg:rounded lg:block   ">
					<!-- Drop down menu που εμφανίζεται κατά το πέρασμα του mouse-pointer πάνω από το logo που βρίσκεται αριστερά, στο μενού πλοήγησης  -->
					<div  class="group">
						<a href="#"  class="relative block mx-auto border-none cursor-default  lg:w-200 lg:h-200 lg:absolute lg:left-52 lg:-top-70 lg:shadow-custome1 lg:border-10 lg:border-solid lg:border-dark-red lg:rounded-full "><img class="relative h-100 w-100 -top-85 lg:top-0 lg:h-180 lg:w-200"src="./images/logo.png" alt="Panarcadian federation logo"></a>
						<div  class="hidden absolute  mr-45 w-230 h-352 top-70 rounded bg-white shadow-custome1 z-20  left-238 lg:group-hover:block">
	   						 <a href="#" class="block h-58 w-230 p-0 border-b border-solid border-gray-200 border-opacity-50 text-center text-page-blue text-14 text-left font-SourceSansPro font-bold no-underline bg-transparent pt-25 hover:text-a-red leading" id="first-li">ΜΕΛΗ PFA</a>
	    					 <a href="#" class="block h-58 w-230 p-0 border-b border-solid border-gray-200 border-opacity-50 text-center text-page-blue text-14 text-left font-SourceSansPro font-bold no-underline bg-transparent  pt-25  hover:text-a-red leading">ΟΙ ΑΞΙΕΣ ΜΑΣ</a>
	    					 <a href="#" class="block h-58 w-230 p-0 border-b border-solid border-gray-200 border-opacity-50 text-center text-page-blue text-14 text-left font-SourceSansPro font-bold no-underline bg-transparent pt-25  hover:text-a-red leading">ΤΟ ΟΡΑΜΑ ΜΑΣ</a>
	    					 <a href="#" class="block h-58 w-230 p-0 border-b border-solid border-gray-200 border-opacity-50 text-center text-page-blue text-14 text-left font-SourceSansPro font-bold no-underline bg-transparent pt-25  hover:text-a-red leading">ΑΠΟΣΤΟΛΗ ΜΑΣ</a>
	    					 <a href="#" class="block h-58 w-230 p-0 border-b border-solid border-gray-200 border-opacity-50 text-center text-page-blue text-14 text-left font-SourceSansPro font-bold no-underline bg-transparent pt-25  hover:text-a-red leading">ΠΟΡΕΙΑ ΕΞΕΛΙΞΗ</a>
	    					 <a href="#" class="block h-58 w-230 p-0 border-b border-solid border-gray-200 border-opacity-50 text-center text-page-blue text-14 text-left font-SourceSansPro font-bold no-underline bg-transparent pt-25  hover:text-a-red leading">ΙΣΤΟΡΙΑ</a>
	  					</div>
	  				</div>

	  				<ul  class="hidden lg:flex lg:flex-row relative h-60 m-0 pr-20 pl-262 2lg:pl-272 xl:pl-282  pt-18 justify-between align-middle ">
						<!-- Drop down menu που εμφανίζεται κατά το πέρασμα του mouse-pointer πάνω από την επιλογή "ΟΜΟΣΠΟΝΔΙΑ" του μενού πλοήγησης  -->
						<div  class="group " >
							<li><a class=" text-page-blue border-none no-underline text-8 2lg:text-10 xl:text-12 2xl:text-14 font-SourceSansPro font-bold bg-inherit pb-40 align-center text-left hover:text-a-red group-hover:block cursor-custome1 ">Η ΟΜΟΣΠΟΝΔΙΑ</a></li>
							<div id="menu-ddbox" class="group-hover:block hidden absolute w-275 h-365 top-70 left-245 rounded bg-white shadow-custome1 z-20 ">
	   							 <a href="#" id="first-li" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro  pl-20 pt-10 mt-5 mb-10 hover:text-a-red">Ιστορία</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Διοικητικό Συμβούλιο</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Πρόεδρος - Βιογραφικό Σημείωμα</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Μήνυμα Προέδρου</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Districts</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Διατελεσαντες Πρόεδροι</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Αποστολή - Αξίες</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Πορεία - Εξέλιξη</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10  pt-10 pl-20 hover:text-a-red">Ο Έλληνας πρέσβης στην Ουάσιγκτον</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Ο Πρέσβης ΗΠΑ στην Αθήνα</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Ο Οικουμενικός Πατριάρχης</a>
	    						 <a href="#" class="block h-18 text-page-blue text-14 no-underline font-bold font-SourceSansPro mb-10 pt-10 pl-20 hover:text-a-red">Ο Αρχιεπίσκοπος Αμερικής</a>
	  						</div>
	  					</div>

						<li><a class=" text-page-blue border-none no-underline text-8 2lg:text-10 xl:text-12 2xl:text-14 font-SourceSansPro font-bold bg-inherit pb-40 align-center text-left hover:text-a-red">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
						<li><a class=" text-page-blue border-none no-underline text-8 2lg:text-10 xl:text-12 2xl:text-14 font-SourceSansPro font-bold bg-inherit pb-40 align-center text-left hover:text-a-red" id="more-space">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
						<li><a  class=" text-page-blue border-none no-underline text-8 2lg:text-10 xl:text-12 2xl:text-14 font-SourceSansPro font-bold bg-inherit pb-40 align-center text-left hover:text-a-red">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a></li>
						<li><a  class=" text-page-blue border-none no-underline text-8 2lg:text-10 xl:text-12 2xl:text-14 font-SourceSansPro font-bold bg-inherit pb-40 align-center text-left hover:text-a-red">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
						<li><a  class=" text-page-blue border-none no-underline text-8 2lg:text-10 xl:text-12 2xl:text-14 font-SourceSansPro font-bold bg-inherit pb-40 align-center text-left hover:text-a-red">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
						<li><a href="#contactForm" id="mail-icon"><img class="lg:mt-5 2lg:mt-2 lg:w-18 lg:h-18 2lg:w-20 2lg:h-20 xl:w-24 xl:w-24" src="./images/mail.png">
							</a>
						</li>
					</ul>
					<div class="hidden lg:block w-261  h-23 mt-20 ml-250  ">
					<img class="" src="./images/bname.png"><br>
 
				</div>
				</nav>	

				<div class="block relative w-261  h-23  -mt-30 mb-65 mx-auto   lg:hidden ">
					<img class="" src="./images/bname.png"><br>
 
				</div>
				<div  class="sm:w-320 sm:h-320 my-0 mx-auto text-center text-white p-20 relative right-5 bottom-60   lg:w-447 lg:h-450 lg:p-40 lg:bottom-0 lg:mt-85 z-0" style=" background: url('./images/circle.png') 0 0  no-repeat; background-size: 100% 100%;">

					<svg class="mt-18 mb-4 ml-130 lg:mt-28 lg:mx-auto" id="logo2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M13.2214 0.000107481V8.7293H19.5107V4.48616H17.4535V6.60773H15.2786V2.12168H21.9428V10.9392H2.05716V2.12168H8.7215V6.60773H6.54647V4.48616H4.4893V8.7293H10.7786V0.000107481H0V10.9392V13.0608V24H10.7786V15.2708H4.4893V19.5137H6.54647V17.3922H8.7215V21.8784H2.05716V13.0608H21.9428V21.8784H15.2786V17.3922H17.4535V19.5137H19.5107V15.2708H13.2214V24H24V0.000107481H13.2214Z" fill="white"/>
						<mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M13.2214 0.000107481V8.7293H19.5107V4.48616H17.4535V6.60773H15.2786V2.12168H21.9428V10.9392H2.05716V2.12168H8.7215V6.60773H6.54647V4.48616H4.4893V8.7293H10.7786V0.000107481H0V10.9392V13.0608V24H10.7786V15.2708H4.4893V19.5137H6.54647V17.3922H8.7215V21.8784H2.05716V13.0608H21.9428V21.8784H15.2786V17.3922H17.4535V19.5137H19.5107V15.2708H13.2214V24H24V0.000107481H13.2214Z" fill="white"/>
						</mask>
						<g mask="url(#mask2)">
							<rect width="24" height="24" fill="white"/>
						</g>
					</svg>


					<h3 class="mb-10 text-12 font-SourceSansPro font-bold tracking-wider lg:mt-5 lg:mb-30 lg:h-15 lg:text-12">ΚΑΛΩΣ ΗΛΘΑΤΕ</h3>
					<h2 class="mb-15 text-18 font-SourceSansPro font-bold leading-20 lg:mb-20 lg:h-30">Η αποστολή μας</h2>
					<p class="w-219 text-14 leading-25 text-center font-normal leading-tight tracking-normal m-0 relative left-30 lg:inline-block lg:w-360 lg:h-160 lg:leading-relaxed lg:left-0 ">Ο Παναρκαδικής Ομοσπονδίας Αμερικής είναι μια πανεθνική μη κερδοσκοπικού αδελφό <br>    
					   ελληνικό-αμερικανική οργάνωση<span class="sm:hidden m:hidden lg:inline">τα μέλη της οποίας κατεβαίνουν από την περιοχή της 
					   Αρκαδίας στην Πελοπόννησο, στη νότια Ελλάδα</span>…
					</p>
					<a href="#" class="inline-flex w-140 h-40 mt-20 text-white pt-7 no-underline font-SourceSansPro font-bold justify-center border border-solid border-wide rounded lg:relative lg:text-14 lg:w-200 lg:h-50 lg:-mt-10 lg:pt-15 lg:bottom-20 hover:bg-a-red">ΠΕΡΙΣΣΟΤΕΡΑ</a>
				</div>

		</header>

		<!-- Slide απογραφής -->
		<section id="census">
			<div class="mx-auto my-0" >

				<img src="./images/tree.png" alt="an icon that symbolizes a tree" class="relative block w-235 h-120 mx-auto  top-29 lg:top:40 lg:w-255 lg:h-142  ">
				<h1 class="block w-280 h-86 mx-auto mt-61 mb-0 pl-10 text-center text-a-red text-32 font-SourceSansPro font-bold leading-tight lg:text-48 lg:w-750 lg:pl-2">Μετριόμαστε, γιατί μετράμε!</h1>

				<!-- Αριστερό τμήμα slide απογραφής -->
				<div class="lg:block lg:w-919 xl:w-999 lg:mx-auto">
					<div class="flex flex-col w-320 h-245 mx-auto lg:inline-grid lg:grid-cols-2 lg:w-919 lg:h-245 xl:w-999  ">
						<div  class="w-275 h-288 ml-20 lg:w-424 lg:h-245 lg:mt-18 lg:relative lg:right-20 xl:w-464">
							<h3 class="w-cover h-60 text-page-blue text-center text-16 font-bold font-SourceSansPro  leading-tight mt-5 lg:text-left lg:h-40 lg:relative lg:-top-15 lg:-left-3 ">Γενική απογραφή  των αποδήμων Αρκάδων στις ΗΠΑ και επαναπατρισθέντων από τις ΗΠΑ</h3>
							<p class="block w-270 h-80 pl-5  mt-10 text-center text-14 text-a-darkgray font-normal  leading-normal lg:w-460 lg:text-left lg:m-0 lg:pt-2 lg:pl-5 lg:text-left xl:text-16 xl:w-520">Η Παναρκαδική Ομοσπονδία Αμερικής πραγματοποιεί απογραφή των Αρκάδων που διαμένουν και εργάζονται στις ΗΠΑ, (ανεξαρτήτως υπηκότητας). </p>
							<h4 class="relative  mt-6 mb-0 text-a-darkgray text-16 text-center font-bold leading-normal lg:text-left lg:w-460 ">Το αποτύπωμα της Αρκαδικής γης μας συνδέει!</h4>
							<p  class="block w-270 h-80 pl-5 m-0 text-center text-14 text-a-darkgray font-normal  relative top-15 leading-normal lg:w-460 lg:text-left lg:h-55 xl:text-16 xl:w-520">Όση χιλιομετρική απόσταση και αν μας χωρίζει, όσες γενιές και να <span class="hidden lg:contents">έχουμε...ψηλώσει πέρα απο τις ρίζες μας, η Αρκαδία, μας ενώνει!</span></p>
						</div>

						<!-- Δεξί τμήμα slide απογραφής -->
	  					<div  class="hidden lg:block lg:w-435 lg:h-235 xl:w-500 lg:relative lg:-left-20 xl:left-20">
	  						<h3 class="w-cover h-20 mb-40 mt-0 font-bold font-SourceSansPro text-18 text-left text-page-blue relative top-4 left-60">Απογραφόμαστε...</h3>
	  						
	  						<ul class="relative w-cover h-175 lg:left-80 lg:top-0" style="list-style-image: url('./images/lipointer.png');">
	  							<li  class="relative -left-5"><p class="relative w-cover h-25 -left-10 mb-10 mt-0 text-a-darkgray text-left text-14 leading-relaxed font-SourceSansPro font-normal xl:text-16  ">Για να γνωρίσουμε ο ένας τον άλλο.</p></li>
	  							<li  class="relative -left-5"><p class="relative w-cover h-25 -left-10 mb-5 mt-0 -left-10 text-a-darkgray text-left text-14 leading-relaxed font-SourceSansPro font-normal xl:text-16">Για να αντλήσουμε δύναμη απο  τις ρίζες μας και την καταγωγή μας.</p></li>
	  							<li  class="relative -left-5 "><p class="relative w-cover h-50 -left-10  text-a-darkgray text-left text-14 leading-relaxed font-SourceSansPro font-normal xl:text-16">Για να είμαστε χρήσιμοι και να  παρεμβαίνουμε δημιουργικά για τις ΗΠΑ την Ελλάδα και την Αρκαδία.</p></li>
	  							<li class="relative -left-5"><p class="relative w-cover h-25  mb-10 mt-0 -left-10 text-a-darkgray text-left text-14 leading-relaxed font-SourceSansPro font-normal xl:text-16">Για να υλοποιήσουμε τα σχέδια και τα οραματά μας.</p></li>
	  							<li class="relative -left-5"><p class="relative w-cover h-25  mb-10 mt-0 -left-10 text-a-darkgray text-left text-14 leading-relaxed font-SourceSansPro font-normal xl:text-16">Για να είμαστε ισχυροί.</p></li>
	  						</ul>
	  					</div>
					</div>
				</div>
				<h3  class="relative block w-161 h-20 mt-44 mb-5 mx-auto text-a-red text-18 text-left font-SourceSansPro font-bold -left-5 lg:text-18 ">ΤΕΛΕΤΗ ΕΝΑΡΞΗΣ</h3>	
				<h2 class="relative block w-222 h-43 mt-10 mb-9 mx-auto text-page-blue text-24 text-center font-SourceSansPro font-bold -left-5 lg:w-550 lg:h-43 lg:text-34">Παρασκευή<br class="lg:hidden"> 20 Απριλίου 2018</h2>
				<h3 class="relative block w-112 h-20 mt-40 mb-60 mx-auto text-page-blue text-18 text-center  font-SourceSansPro font-bold -left-5 lg:left-5 lg:mt-9 lg:-left-8">ΝΕΑ ΥΟΡΚΗ</h3>
				
			</div>
		</section> 

		<!-- Slide με έργα της ομοσπονδίας και αξιοθέατα της Aρκαδίας -->
		<section  class="bg-custom1 bg-cover h-650" >
			<div  class="lg:w-919 xl:w-1240 mx-auto max-w-1460 " >

				<div class="block w-24 mx-auto pt-40">
					<svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M13.2214 0.000107481V8.7293H19.5107V4.48616H17.4535V6.60773H15.2786V2.12168H21.9428V10.9392H2.05716V2.12168H8.7215V6.60773H6.54647V4.48616H4.4893V8.7293H10.7786V0.000107481H0V10.9392V13.0608V24H10.7786V15.2708H4.4893V19.5137H6.54647V17.3922H8.7215V21.8784H2.05716V13.0608H21.9428V21.8784H15.2786V17.3922H17.4535V19.5137H19.5107V15.2708H13.2214V24H24V0.000107481H13.2214Z" fill="white"/>
						<mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M13.2214 0.000107481V8.7293H19.5107V4.48616H17.4535V6.60773H15.2786V2.12168H21.9428V10.9392H2.05716V2.12168H8.7215V6.60773H6.54647V4.48616H4.4893V8.7293H10.7786V0.000107481H0V10.9392V13.0608V24H10.7786V15.2708H4.4893V19.5137H6.54647V17.3922H8.7215V21.8784H2.05716V13.0608H21.9428V21.8784H15.2786V17.3922H17.4535V19.5137H19.5107V15.2708H13.2214V24H24V0.000107481H13.2214Z" fill="white"/>
						</mask>
						<g mask="url(#mask2)">
							<rect width="24" height="24" fill="white"/>
						</g>
					</svg>	
				</div>
				<h3 class="w-192 h-15  mt-10 mx-auto text-white text-12 text-center tracking-wider font-SourceSansPro font-bold">ΕΡΓΑ & ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ</h3>

				<!-- Πλαίσιο που χωρίζεται σε 4 ισομερή μικρότερα τμήματα, ένα για καθένα από τα 4 αξιοθέατα που παρουσιάζονται στην ιστοσελίδα -->
				<div  class="inline-grid grid-cols-4   ml-20 w-1140 h-413 mt-20 lg:w-919 lg:mx-auto xl:w-1240 " >

					<!-- 1ο τμήμα -->
					<div class="w-315 h-413 lg:w-260 xl:w-315">
						<img src="./images/hospital.jpg" alt="The General Hospital of Tripolis" class="w-10/12 h-200 xl:w-11/12">
						<h2 class="w-240 h-40 text-white text-18 text-left mt-10 font-SourceSansPro font-bold xl:text-24 xl:w-300">Γενικό Παναρκαδικό Νοσοκομείο Τρίπολης</h2>
						<p class="w-234 h-95 text-white text-16 text-left mt-20 font-SourceSansPro font-normal leading-relaxed lg:text-14 lg:w-210 xl:text-16 xl:w-300 xl:mt-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor. </p>

						<svg class="inline-block w-24 h-24 relative top-8 left-10 xl:top-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="3.5" y="11.5" width="17" height="1" rx="0.5" fill="#D8D8D8" stroke="#979797"/>
							<mask id="mask6" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="11" width="18" height="2">
								<rect x="3.5" y="11.5" width="17" height="1" rx="0.5" fill="white" stroke="white"/>
							</mask>
							<g mask="url(#mask6)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H24V24H0V0Z" fill="#BF0A30"/>
							</g>
						</svg>

						<a href="#" class="w-116 h-46 text-white text-14 text-left ml-10 pt-5 no-underline font-SourceSansPro font-bold relative top-10 xl:top-0">ΠΕΡΙΣΣΟΤΕΡΑ</a>
					</div>

					<!-- 2ο τμήμα -->
	  				<div  class="w-315 h-413 lg:w-260 xl:w-315">

	  					<img src="./images/leonidio.jpg" alt="The traditional settlement of Leonidio"  class="w-10/12 h-200 xl:w-11/12">
						<h2 class="w-240 h-40 text-white text-18 text-left mt-10 font-SourceSansPro font-bold xl:text-24 xl:w-300">Ο  παραδοσιακός οικισμός του Λεωνιδίου</h2>
						<p class="w-234 h-95 text-white text-16 text-left mt-20 font-SourceSansPro font-normal leading-relaxed lg:text-14 lg:w-210 xl:text-16 xl:w-300 xl:mt-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor. </p>

						<svg class="inline-block w-24 h-24 relative top-8 left-10 xl:top-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="3.5" y="11.5" width="17" height="1" rx="0.5" fill="#D8D8D8" stroke="#979797"/>
							<mask id="mask6" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="11" width="18" height="2">
								<rect x="3.5" y="11.5" width="17" height="1" rx="0.5" fill="white" stroke="white"/>
							</mask>
							<g mask="url(#mask6)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H24V24H0V0Z" fill="#BF0A30"/>
							</g>
						</svg>

						<a href="#" class="w-116 h-46 text-white text-14 text-left ml-10 pt-5 relative top-10 no-underline font-SourceSansPro font-bold xl:top-0">ΠΕΡΙΣΣΟΤΕΡΑ</a>
	  						
					</div>

					<!-- 3ο τμήμα -->
					<div  class="w-315 h-413 lg:w-260 xl:w-300">

	  					<img src="./images/parnonas.jpg" alt="A Parnonas river"  class="w-10/12 h-200 xl:w-11/12">
						<h2 class="w-240 h-40 text-white text-18 text-left mt-10 font-SourceSansPro font-bold xl:text-24 xl:w-300">Κυνουρία, Εκεί που δεσπόζει ο Πάρνωνας</h2>
						<p class="w-234 h-95 text-white text-16 text-left mt-20 font-SourceSansPro font-normal leading-relaxed lg:text-14 lg:w-210 xl:text-16 xl:w-300 xl:mt-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor. </p>

						<svg class="inline-block w-24 h-24 relative top-8 left-10 xl:top-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="3.5" y="11.5" width="17" height="1" rx="0.5" fill="#D8D8D8" stroke="#979797"/>
							<mask id="mask6" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="11" width="18" height="2">
								<rect x="3.5" y="11.5" width="17" height="1" rx="0.5" fill="white" stroke="white"/>
							</mask>
							<g mask="url(#mask6) ">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H24V24H0V0Z" fill="#BF0A30"/>
							</g>
						</svg>

						<a href="#" class="w-116 h-46 text-white text-14 text-left ml-10 pt-5 relative top-10 no-underline font-SourceSansPro font-bold xl:top-0">ΠΕΡΙΣΣΟΤΕΡΑ</a>
	  						
					</div>

					<!-- 4ο τμήμα -->
					<div class="w-315 h-413 lg:w-260 xl:w-300" >

	  					<img src="./images/parks.jpg" alt="A park located in a greek City" class="w-10/12 h-200 xl:w-11/12">
						<h2 class="w-240 h-40 text-white text-18 text-left mt-10 font-SourceSansPro font-bold xl:text-24 xl:w-300">Οι ελληνικές πόλεις με τα καλύτερα πάρκα!</h2>
						<p class="w-234 h-95 text-white text-16 text-left mt-20 font-SourceSansPro font-normal leading-relaxed lg:text-14 lg:w-210 xl:text-16 xl:w-300 xl:mt-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor. </p>

						<svg class="inline-block w-24 h-24 relative top-8 left-10 xl:top-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="3.5" y="11.5" width="17" height="1" rx="0.5" fill="#D8D8D8" stroke="#979797"/>
							<mask id="mask6" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="11" width="18" height="2">
								<rect x="3.5" y="11.5" width="17" height="1" rx="0.5" fill="white" stroke="white"/>
							</mask>
							<g mask="url(#mask6)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H24V24H0V0Z" fill="#BF0A30"/>
							</g>
						</svg>

						<a href="#" class="w-116 h-46 text-white text-14 text-left ml-10 pt-5 relative top-10 no-underline font-SourceSansPro font-bold xl:top-0 ">ΠΕΡΙΣΣΟΤΕΡΑ</a>
	  						
					</div>
				</div>

				<!-- Κουμπί για εμφάνιση περισσότερων -->
				<div class="w-280 mx-auto">
					<div class="inline-flex w-280 h-50 rounded justify-center border border-solid border-white mt-30 mx-auto mb-40 lg:w-200 hover:bg-a-red ">
						<a class="inline-flex font-bold font-SourceSansPro text-14 text-white no-underline  pt-15"href="#">ΠΕΡΙΣΣΟΤΕΡΑ</a>
						<img class="sm:hidden" id="rightArrow" src="./images/rightArrow.png">
					</div>
				</div>
			</div>
		</section> 

		<!-- Slide για επικοινωνία του χρήστη με την ομοσπονδία -->
		<section class=" bg-white h-636 w-cover" >
			<div class="h-636 mx-auto w-cover lg:w-920 xl:1240 " >

				<!-- Φόρμα επικοινωνίας -->
				<form method="POST" action="/">

					@csrf

					<div class="mt-32 mb-32">
						<h5 class="w-92 h-15 text-center tracking-wider mx-auto text-12 text-page-blue font-SourceSansPro font-bold">ΕΠΙΚΟΙΝΩΝΙΑ</h5>
					</div>
					<div class="h-410 w-cover max-w-740 border-b border-solid border-gray-200 lg:border-t">
				

						<div class=" mt-12 mx-auto w-10/12 max-w:620 h-67 max-w-620">
			  				<label class="block h-15 w-cover font-SourceSansPro font-normal text-a-darkgray text-12 text-left" for="name">Ονοματεπώνυμο</label>
 							<input class="{{$errors->has('name')? 'border-red-400 ' : 'border-contact-box '}}inline-flex h-46 w-full border border-solid  rounded mt-5 mb-13" pattern="[ά-ώα-ωΑ-Ωa-zA-Z\s]+" type="text" id="name" name="name" value="{{old('name')}}" required >
							@if($errors->has('name'))
								<p class="help is-danger relative bottom-15 text-red-500 text-12">{{$errors->first('name')}}</p>
			  				@endif
						</div>
			  			<div class=" mt-12 mx-auto w-10/12 max-w:620 h-67 max-w-620">
			 				<label class="block h-15 w-cover font-SourceSansPro font-normal text-a-darkgray text-12 text-left" for="phone">Τηλέφωνο</label>
							<input class="{{$errors->has('phone')? 'border-red-400 ' : 'border-contact-box '}} inline-flex h-46 w-full border border-solid  rounded mt-5 mb-13 pl-30" pattern="[0-9]{10}" type="tel" id="phone" name="phone" value="{{old('phone')}}"  required>
							@if($errors->has('phone'))
								<p class="help is-danger relative bottom-15 text-red-500 text-12">{{$errors->first('phone')}}</p>
			  				@endif
						</div>
			  			<div class=" mt-12 mx-auto w-10/12 max-w:620 h-67 max-w-620 ">
			  				<label class="block h-15 w-cover font-SourceSansPro font-normal text-a-darkgray text-12 text-left" for="email">Email</label>
			  				<input class="{{$errors->has('email')? 'border-red-400 ' : 'border-contact-box '}} inline-flex h-46 w-full border border-solid rounded mt-5 mb-13 pl-30 " type="email" id="email" name="email" value="{{old('email')}}" required>
							@if($errors->has('email'))
								<p class="help is-danger relative bottom-15 text-red-500 text-12">{{$errors->first('email')}}</p>
			  				@endif
						</div>
			  			<div class=" mt-12 mx-auto w-10/12 max-w:620 h-67 max-w-620 h-140 mb-13" >
			  				<label class="block h-15 w-cover font-SourceSansPro font-normal text-a-darkgray text-12 text-left" for="message">Μήνυμα</label>
			  				<textarea class="{{$errors->has('message')? 'border-red-400 ' : 'border-contact-box '}} inline-flex h-119 w-full border border-solid  rounded mt-5 mb-13 pt-0 pl-0 " type="text" id="message" name="message" value="{{old('message')}}" required></textarea>
			  				@if($errors->has('message'))
								<p class="help is-danger relative bottom-15 text-red-500 text-12">{{$errors->first('message')}}</p>
			  				@endif
							
						</div>
			  				<button id="subttn" class="relative inline-flex justify-center align-center w-130 h-50 border-none rounded mt-52  mb-53 bg-page-blue right-30 md:right-60 lg:right-75  hover:bg-a-red float-right lg:w-240" type="submit">
								<input class="bg-transparent border-none text-white font-SourceSansPro font-bold relative left-10 top-14 text-14 " type="submit" id="submitbutton"  value="ΑΠΟΣΤΟΛΗ" >
								<img class="inline-flex relative left-8 top-13 w-24 h-24 lg:left-55" id="rightArrow" src="./images/rightArrow.png">
							</button>
							@if(($errors->has('name'))|| ($errors->has('phone'))||($errors->has('email'))||($errors->has('message')))
								<p class="help is-danger relative left-100 top-20 text-red-500 text-12 float-right lg:top-20">{{'The message was not sent.'}}</p>
			  				@endif
							@if(session('notification'))
								<p class=" relative left-100 top-20 text-green-500 text-12 float-right lg:top-20">{{session('notification')}}</p>
			  				@endif  
		  				</div>
				</form> 
			</div>
		</section>

		<!-- Footer slide -->
		<footer class="bg-page-blue bg-cover h-630 lg:h-420">
			<div  class="w-cover  mx-auto" >
				<a href="#"><img  src="./images/totop.svg" class="hidden absolute -mt-22 lg:block lg:justify-between align-center float-right relative right-110 "></a>
				<img  src="./images/logo.png" alt=" Panarcadian federeation logo " class="block relative top-30 lg:left-30 mx-auto w-140 h-140 lg:w-180 lg:h-180 ">
				<img  src="./images/bname.png" class="block mt-30 pt-20 mx-auto">
				<div  class="grid grid-cols-5 gap-x-5 mt-37 mx-auto w-240 h-40 lg:mt-37 lg:w-320 lg:justify-between" >	
					<a href="#"><img src="./images/fb.png" alt=" hyperlink to facebook page"></a>
					<a href="#"><img src="./images/twitter.png" alt=" hyperlink to twitter page"></a>
					<a href="#"><img src="./images/linkedin.png" alt=" hyperlink to linkedin page"></a>
					<a href="#"><img src="./images/instagram.png" alt=" hyperlink to instagram page"></a>
					<a href="#"><img src="./images/youtube.png" alt=" hyperlink to youtube channel"></a>
				</div>
				<ul  class="flex flex-col gap-y-10 w-220 text-center justify-center align-center  mx-auto mt-20 list-none  lg:flex-row lg:h-30 lg:w-11/12 max-w-screen-xl lg:justify-between"><!--8elw cursor-->
						<li><a href="#" class="text-white  text-14 no-underline font-SourceSansPro font-bold hover:text-a-red lg:text-10 2lg:text-12 xl:text-14
							">Η ΟΜΟΣΠΟΝΔΙΑ</a></li>
						<li><a href="#" class="text-white  text-14 no-underline font-SourceSansPro font-bold hover:text-a-red lg:text-10 2lg:text-12 xl:text-14">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
						<li><a href="#" class="text-white  text-14 no-underline font-SourceSansPro font-bold hover:text-a-red lg:text-10 2lg:text-12 xl:text-14">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
						<li><a href="#" class="text-white  text-14 no-underline font-SourceSansPro font-bold hover:text-a-red lg:text-10 2lg:text-12 xl:text-14">ΝΕΑ-ΕΝΗΜΕΡΩΣΗ</a></li>
						<li><a href="#" class="text-white  text-14 no-underline font-SourceSansPro font-bold hover:text-a-red lg:text-10 2lg:text-12 xl:text-14">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
						<li><a href="#" class="text-white  text-14 no-underline font-SourceSansPro font-bold hover:text-a-red lg:text-10 2lg:text-12 xl:text-14">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
						<li><a href="#" class="text-white  text-14 no-underline font-SourceSansPro font-bold hover:text-a-red lg:text-10 2lg:text-12 xl:text-14">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
				</ul>
				<div  class="w-290 h-20 mx-auto lg:hidden">
					<a href="#topbar" class="block relative bottom-25 float-right"><img id="totop2" src="./images/totop.svg"></a>
				</div>
				<h3 class="block w-300 align-top mt-30 mb-24 mx-auto font-SourceSansPro font-bold text-white opacity-50 text-center text-14 lg:mt-10 ">©2018 Pan Arcadian Federation of America</h3>
			</div>
		</footer>

	</body>
</html>