<html>
<head>
	<title>My phonebook App</title>
	<link rel="stylesheet" type="text/css" />
	<style type="text/css">
		
		#header, #footer{
			width: auto;
		
			padding:50px 0px 50px 0px;
			background-color:#001634;


		}
		#header{
			text-align: center;
		}

		#content{

			width: auto;

		}
		#intro{
				padding: 20px 0px 20px 0px;
				background-color: #000000;
			}
			#rightnav{
			ggfloat: right;	
			width: 400px;
			}

			#leftnav{
			float: left;
			width: 900px;	
			}


	</style>
</head>
<body>
	<div id="header">
		<span style="color: #fff; text-decoration: none;"> My Phonebook App </span>
	</div>
	<div id="content">
		<div id="intro"> <h2 style="text-align: center; color: #ffffff;"> Welcome {{ $user }} &nbsp &nbsp &nbsp &nbsp &nbsp <a href="/Logout">Log out</a> </h2>  </div>

		<h4>Enter your phone contact</h4>
			<form method="post" action="/addupnumbers">
			{{ csrf_field() }}

				<table>
					<tr>
						<td>First name</td>
						<td> <input name="firstname" type="text"/> </td>

					</tr>
						<tr>
						<td> Last name</td>
						<td> <input name="lastname" type="text"/> </td>

					</tr>
						<tr>
						<td> phonemumber</td>
						<td> <input name="phonenumber" type="text"/> </td>

					</tr>
					
				
						<tr>
						<td></td>
						<td> <input name="addup" type="submit" value="Add up"/> </td>

					</tr>
				</table>
			</form>
		
	</div>
	<div id="footer">
		copyright oyindamola musiliu
	</div>
</body>
</html>