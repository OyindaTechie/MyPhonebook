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
			tr.showall{
				
				background-color: #e6e7e8;

				width: 100%;

				border-collapse:separate;
    border-spacing: 20px 20px;
			}
			tr.showall>td{
				padding-top: 20px;
				padding-bottom: 20px;
				border-bottom: 1px solid #001634;
			}

			a{
				text-decoration: none;
			}
             #viewall{
             	height: 50%;
             }

	</style>
</head>
<body>
	<div id="header">
		<span style="color: #fff; text-decoration: none;"> My Phonebook App </span>
	</div>
	<div id="intro"> <h2 style="text-align: center; color: #ffffff;"> Welcome {{ $user }} &nbsp &nbsp &nbsp &nbsp &nbsp <a href="/Logout">Log out</a> </h2>  </div>

	
	<div id="viewall">
		<table style="width: 100%; border-collapse: separate;
    dborder-spacindg: 20px 20px;">
			<tr class="showall">
				
				<td>Firstname</td>
				<td>Lastname</td>
				<td>Phonenumber</td>
				<td></td>
				<td></td>
			</tr>
			@foreach ($query as $query)
			<tr class="showall">
				<td> {{ $query-> firstname }} </td>
				<td> {{ $query-> lastname }} </td>
				<td> {{ $query-> phonenumber }} </td>

				<td> <a href="/edit/{{ $query-> id }} "> edit </a></td>
					<td> <a href="/delete/{{ $query-> id }} "> delete </a></td>

			</tr>
			@endforeach
		</table>
	</div>
	<div id="footer">
		copyright oyindamola musiliu
	</div>
</body>
</html>