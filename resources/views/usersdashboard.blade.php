<html>
<head>
	<title>My phonebook App</title>
	<link rel="stylesheet" type="text/css" />
	<style type="text/css">
		
		#header{
			width: auto;
		
			padding:50px 0px 50px 0px;
			background-color:#001634;


		}
		#header{
			text-align: center;
		}

		#footer{
			width: auto;
		
			padding:50px 0px 50px 50px;
			background-color:#001634;
			color: #ffffff;
				}
		#content{

			width: 1200px;
			height: 50%;

			padding:50px 0px 50px 50px;


		}
			#rightnav{

			float: left;
			width: 500px;
			height: auto;
			display: inline-block;
			}

			#leftnav{
			float: left;

			width: 700px;	

			}
			#intro{
				padding: 20px 0px 20px 0px;
				background-color: #000000;
			}


	</style>
</head>
<body>
	<div id="header">
		<span style="color: #fff; text-decoration: none;"> My Phonebook App </span>
	</div>
	<div id="intro"> <h2 style="text-align: center; color: #ffffff;"> Welcome {{ $user }} &nbsp &nbsp &nbsp &nbsp &nbsp <a href="/Logout">Log out</a> </h2>  </div>

	
	<div id="content">
		<div id="leftnav">
		<p><a href="/addup"> <img src="/images/addcontacticon.png"/> </a> </p>
		
		<p> <a> Add new contact</a> </p>
		</div>
		<div id="rightnav">
		<p> <a href="/viewallcontact"><img src="/images/viewcontact2.jpeg"/> </a></p>
		<p> <a>view all contact </a> </p>
		</div>
	</div>
	<div id="footer">
		copyright oyindamola musiliu
	</div>
</body>
</html>