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
			height: 50%;

		}
			#rightnav{
			float: left;	
			width: 600px;
			margin-top: 90px;
			
			}

			#leftnav{
			float: left;
			width: 700px;
			margin-left:200px;
			margin-top: 50px; 
				
			}


	</style>
</head>
<body>
	<div id="header">
		<span style="color: #fff; text-decoration: none; font-weight: bold; font-size: 24px;"> My Phonebook App </span>
	</div>
	<div id="content">
		<div id="leftnav">
		<h4>To use this app, register below</h4>
			<form method="post" action="/register">
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
						<td> Username</td>
						<td> <input name="username" type="text"/> </td>

					</tr>
						<tr>
						<td>Password</td>
						<td> <input name="password" type="text"/> </td>

					</tr>
						</tr>
						<tr>
						<td>Phone number</td>
						<td> <input name="phonenumber" type="text"/> </td>

					</tr>
						</tr>
						<tr>
						<td></td>
						<td> <input name="register" type="submit" value="register"/> </td>

					</tr>
				</table>
			</form>
		</div>
		<div id="rightnav">
		<form method="post" action="/Login">
		{{ csrf_field() }}
			<table>
				<tr> 
				<td>Username</td>
				<td><input type="text" name="username"/></td>

				</tr>
				<tr> 
				<td>Password</td>
				<td><input type="password" name="password"/></td>
				
				</tr>
				<tr> 
				<td></td>
				<td><input type="submit" name="login" value="log in"/></td>
				
				</tr>

			</table>

		</form>
			
		</div>
	</div>
	<div id="footer">
		copyright oyindamola musiliu
	</div>
</body>
</html>