<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='shortcut icon' type='image/x-icon' href='ps.jpg'/>
<title>Prarthna Sabharwal. Full Stack Mobile, Web Developer | Android Developer | iOS Developer | Machine learning</title>
<head>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Abel|Arvo|Indie+Flower" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js" type="text/javascript"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript">
  window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Skillset",
                fontFamily:  "'Indie Flower', cursive",
                fontColor: "black",
                fontSize: 40

            },
             toolTip:{
   				enabled: false,
 			},
            animationEnabled: true,
            axisY: {
                tickThickness: 0,
                lineThickness: 0,
                valueFormatString: " ",
                gridThickness: 0                    
            },
            axisX: {
                tickThickness: 0,
                lineThickness: 0,
                labelFontSize: 18,
                labelFontColor: "black"

            },
            data: [
            {
                indexLabelFontSize: 17,
                //toolTipContent: "<span style='\"'color: {color};'\"'><strong>{indexLabel}</strong></span><span style='\"'font-size: 20px; color:black '\"'><strong>{y}</strong></span>",

                indexLabelPlacement: "inside",
                indexLabelFontColor: "white",
                indexLabelFontWeight: 100,
                indexLabelFontFamily: "'Abel', sans-serif",
                color: "orange",
                type: "bar",
                toolTip: false,
                dataPoints: [
                    { y: 50, label: "50%", indexLabel: "Machine Learning" },                
                    { y: 90, label: "80%", indexLabel: "Product Design" },                
                    { y: 80, label: "80%", indexLabel: "DevOps" },                
                    { y: 75, label: "75%", indexLabel: "iOS" },
                    { y: 86, label: "85%", indexLabel: "LAMP Stack" },
                    { y: 90, label: "90%", indexLabel: "API Development" },
                    { y: 95, label: "95%", indexLabel: "Android Full Stack" }


                ]
            }
            ]
        });

        chart.render();
    }
  </script>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded',function(event){
  		var dataText = [ "PRARTHNA SABHARWAL"];
  
  // type one text in the typwriter
  // keeps calling itself until the text is finished
  		function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    		if (i < (text.length)) {
      // add next character to h1
    	 		document.querySelector("h1").innerHTML = text.substring(0, i+1) +'<span class="typing" aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      			setTimeout(function() {
        			typeWriter(text, i + 1, fnCallback)
      			}, 100);
    			}
    // text finished, call callback if there is a callback function
    			else if (typeof fnCallback == 'function') {
      // call callback after timeout
      				setTimeout(fnCallback, 700);
   	 			}
  			}
  // start a typewriter animation for a text in the dataText array
		   function StartTextAnimation(i) {
			    if (typeof dataText[i] == 'undefined'){
			        setTimeout(function() {
			          StartTextAnimation(0);
			        }, 20000000000000000000);
			     }
	     // check if dataText[i] exists
			    if (i < dataText[i].length) {
			      // text exists! start typewriter animation
			     	typeWriter(dataText[i], 0, function(){
			       // after callback (and whole text has been animated), start next text
			       StartTextAnimation(i + 1);
			     });
			    }
			  }
		  // start the text animation
		  		StartTextAnimation(0);
		});
	</script>

<style type="text/css">
	@keyframes slideInFromLeft {
  		0% {
    		transform: translateX(-100%);
  		}
  		100% {
    		transform: translateX(0);
  		}
	}
	@font-face {
		font-family: leaf;
		src: url("leafy.otf") format("opentype");
	}
	@font-face {
		font-family: matrix;
		src: url("matrix.ttf") format("opentype");
	}

	.white_font {
		color: white;
		font-family: matrix;
	}
	.black_font {
		color:black;
	}

	.karmatop {
		margin-top: 10px;
	}
	.name {
		font-size: 80px;
		margin-top: 30px;
	}
	.caption {
		font-size: 30px;
		  animation: 0.6s slideInFromLeft;
		}
	.display_picture {
		width: 150px;
		height: 150px;
		border-radius: 50%;
		margin-top: 5% 
	}
	.about {
		margin-top: 10px;
		font-size: 40px;
		font-family: 'Indie Flower', cursive;
	}
	.about_content {
		font-family: 'Abel', sans-serif;
		font-size: 20px;
			color: black;
	}	

	.alcatel {
		width: 300px;
		height: 100px;
		float: left;
	}

	.canvasjs-chart-credit {
		display: none;
	}

	@media only screen and (min-width: 320px) {
		.black_backgound {
			background-color: black;
			height: 270px; 
		}
		.name {
			font-size: 25px;
		}
		.caption {
			font-size: 17px;
		}
	}
	@media only screen and (min-width: 400px) {
		.black_backgound {
			background-color: black;
			height: 250px; 
		}
		.name {
			font-size: 30px;
		}
		.caption {
			font-size: 20px;
		}
	}

	@media only screen and (min-width: 600px) {
		.black_backgound {
			background-color: black;
			height: 325px; 
		}
		.name {
			font-size: 50px;
		}
		.caption {
			font-size: 30px;
		}

	}

	@media only screen and (min-width: 800px) {
		.black_backgound {
			background-color: black;
			height: 325px; 
		}
		.name {
			font-size: 60px;
		}
	}
/*		.upper_fold {
			height: 80%;
		}*/
	@media only screen and (min-width: 1000px) {
		.black_backgound {
			background-color: black;
			height: 325px; 
		}
		.name {
			font-size: 80px;
		}
		.caption {
			font-size: 30px;
		}
	}
/*		.upper_fold {
			height: 50%;
		}*/
	@media only screen and (min-width: 1200px) {
		.black_backgound {
			background-color: black;
			height: 330px; 
		}
		.name {
			font-size: 80px;
		}
	}
/*		.upper_fold {
			height: 50%;
		}*/
	@media only screen and (min-width: 1300px) {
		.black_backgound {
			background-color: black;
			height: 330px; 
		}
		.name {
			font-size: 80px;
		}
	/*	.upper_fold {
			height: 38%;
		}	*/

	}	


	.typing {
  		border-right: .05em solid;
  		animation: caret 1s steps(1) infinite;
	}

	.footer {
		background-color: black;
		color: white;
		font-family: matrix;
		padding: 10px;
		font-size: 20px;
	}

	.sukor {
		width: 220px;
		height: 160px;
	}

	.about_and_graph {
		margin-top: 70px; 
	}
	 .sukor_font{
	 	font-family: 'times-new-roman';
	 	font-size: 20px;
	 	color: dark-blue;
	 }

	 .job_title {
	 	font-size: 25px;
	 	font-family: 'Indie Flower', cursive ;
	 }
	 .jobs {
	 	margin-top: 50px;
	 }
	 .companies {
	 	margin-top: 30px;
	 }
	 .list {
	 	margin-top: 20px;
	 }
	 .contact_logo {
	 	width: 300px;
	 	height: 300px;
	 }
	 .email {
	 	font-size: 200px;
	 }



	@keyframes caret {
		50% {
			border-color: transparent;
		}
	}
</style>
</head>

<body>
<div class="upper_fold black_backgound">
	<div class="container">
		<h1 class="white_font text-center name">
		</h1>
		<div class="white_font caption text-center">
			 Full stack mobile, web developer and Machine Learning Enthu.
		</div>
		<div class="text-center">
			<img class="display_picture" src="ps.jpg">
		</div>
	</div>
</div>
<div class="container about_and_graph">
	<div class="col-md-12 about_container">
		<div class="col-md-6 clearfix" id="chartContainer" style="height: 400px;"></div>
		<div class="black_font about col-md-6 clearfix">About Me 
		  <div class="about_content">My name is Prarthna Sabharwal. I have been passionate about technology from a very tender age and I always wanted to solve common yet complex problems around us. I started my career with a multi-national as a cloud engineer. I later worked with passionate entrepreneurs as a Product developer. I expertise in full stack android development, front-end web development and backend development. I have also worked with iOS platform, giving me control over the whole technology stack with the start-ups I have worked with. I am open to innovative and challenging products, which make a world of a difference. I am also a Machine Learning entusiast and wish to work with products that like to crunch data to drive their business in the right direction. When I am not coding I like to read books and paint.</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-12 companies">
		<div class="black_font about">Companies I have worked with</div>
	</div>
	<div class="col-xs-12 karmatop">
		<div class="karma_image col-md-4">	
			  	<a href="http://www.karmacircles.com/" target="_blank"><img class="karma" src="karmacircles.png"></a>
		</div>
		<div class="col-md-8">
			<div class="job_title"> KarmaCircles - Technology Lead : Android, Web and iOS </div> <br>
			<div class="about_content"> KarmaCircles is a platform for finding skilled people, request them for an online/phone/in-person meeting and then thank them for the time & help given by them through KarmaNote.</div>
			<ul class="about_content list">
				<li> Handled Android, Web and iOS products end-to-end</li>
				<li> Responsible for feature design, development, implementation, quality assuarance and code quality</li>
				<li> Worked closely with founders and the partners to decide the product stratergy</li>
				<li> Managed junior devs, interns and trained them to give them ownership of the features</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-12 jobs">
		<div class="sukor_image text-center col-md-4">	
			  	<a href="http://www.sukor.in/" target="_blank"><img class="sukor" src="sukor.png">
			  	</a>
		</div>
		<div class="col-md-8">
			<div class="job_title">Sukor Consulting - Senior Consultant : Android and API Development</div> <br>
			<div class="about_content"> Sukor is a Hyderabad based Product development company focuing on developing websites and applications thereby fulfilling the role of the technology department of their clients. The clients benefit from their real-time weekly updates and transparent system of functioning to develop actionable recommendations tailored to address their specific challenges. Sukor believes in building a scalable and resilient operation, helping unleash the global potential of your product.</div>
			<ul class="about_content list">
				<li> Built Rest APIs in Laravel 5.0 for muliple products</li>
				<li> Worked on an android product for a leading food start-up which is successfully operating in Bangalore</li>
				<li> Remotely mananged the requirements and delivered the code on time wihtout compromising the quality</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>	
	<div class="col-xs-12 jobs">
		<div class="sukor_image text-center col-md-4">	
			  	<a href="http://www.kleverkid.in/" target="_blank"><img src="klevekid.jpg">
			  	</a>
		</div>
		<div class="col-md-8">
			<div class="job_title">Kleverkid.In - Lead Product Developer : Android</div> <br>
			<div class="about_content"> KleverKid is your one-stop-shop to find the best possible program, after-school activity, tutor, or coach for your kid. Kleverkid loves to build stuff that helps parents and kids make smarter decisions for all the children out there to succeed.</div>
			<ul class="about_content list">
				<li> Responsible for end-to-end development of the android product from ideation to releases</li>
				<li> Worked closely with the web and the backend team to design APIs keeping in mind optimzation and code quality</li>
				<li> Interacted with the CEO and the CTO, marketing teams to build an app for parents to take the best decisions</li>
				<li> Managed to take android dev completely in-house within 6 months</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>	
	<div class="col-xs-12 jobs">
		<div class="text-center col-md-4">	
			  	<a href="http://enterprise.alcatel-lucent.com/" target="_blank"><img class="pull-left alcatel" src="alcatel.png">
			  	</a>
		</div>
		<div class="col-md-8">
			<div class="job_title">Alcatel Lucent - Software Developer : Cloud Computing</div> <br>
			<div class="about_content"> Alcatel is a leading provider of enterprise communications solutions and services, from the office to the cloud, marketed under the Alcatel-Lucent Enterprise brand. Building on our established heritage of innovation and entrepreneurial spirit, we operate globally with 2700+ employees in 100+ countries worldwide, with headquarters near Paris, France.</div>
			<ul class="about_content list">
				<li> Implemented Bash scripting, SOAP/XML scripts for configuring, provisioning and integration of Network elements involved in a call providing a substantial improvement in the should-take-hours.</li>
				<li>  Worked with Linux servers for installation of OpenStack, KVM and porting the Network elements to a virtualized environment.</li>
				<li> Implemented a Dashboard Tool to capture, analyze, venture and archive the critical performance metrics for data analysis, graph plots and automatic report generation.
				</li>
				<li> Worked on an agile automated framework AIR (Automated IMS Readiness), which involved making calls using a simulator and testing call scenarios based on multiple checkpoints.</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>	
	<div class="get_in_touch jobs col-md-12">
	<div class="about text-center"> Looking to build the next big thing? <br> Let's get in touch :) </div>
	<div class="col-md-4">
		<a href="https://www.linkedin.com/in/prarthna-sabharwal-09068751/" target="_blank">
			<img class="contact_logo" src="linkedin.png">
		</a>	
	</div>
	<div class="col-md-4">
		<a href="https://angel.co/prarthna-sabharwal" target="_blank">
			<img class="contact_logo" src="angel.png">
		</a>	
	</div>
	<div class="col-md-4 text-center">
		<a href="mailto:prarthna.sl@gmail.com?Subject=Hello%20again" target="_top"><i class="fa fa-envelope email text-center"></i>
		<div style="font-family: leaf; font-size: 30px;"> prarthna.sl@gmail.com </div></a>
	</div>
	</div>		
</div>

<footer class="footer">
	<div class="container text-center" style="height: 50px;"> Built with <i class="fa fa-heart" style="color: red"></i> by Prarthna Sabharwal (PS) </div>
</footer>
</body>
