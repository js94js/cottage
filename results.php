<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	
	<body style="background-color:rgb(79,79,79)">
			<div class="jumbotron jumbotron-fluid" style="display:flex;flex-direction:column;justify-content:space-between;height:50%;background-image: url('images/ST-SummerNights_1025x400.jpg');background-size:cover">
				<div class="pt-3 px-5 pb-5 mb-5">
					<p style="color:white;font-size:1.25em">www.suffolk-holidays.co.uk</p>
				</div>
				
				
				<div class="p-3 px-5 mt-5" style="font-size:1.5em;text-align:right;background:rgba(0,0,0,.5);color:white">
					Want to buy this domain?
				</div>
				
				
				
			</div>
			
				<div class="p-5 container-fluid row">
					<div class="col">
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="table-responsive" >
							<table class="table">
								<tr style="color:white">
									<th>Title:</th><td><?php echo $_POST['Title']; ?></td>
								</tr>
								<tr style="color:white">
									<th>Surname:</th><td><?php echo $_POST['Surname']; ?></td>
								</tr>
								<tr style="color:white">
									<th>Email:</th><td><?php echo $_POST['Email']; ?></td>
								</tr>
								<tr style="color:white">
									<th>Message:</th><td><?php echo $_POST['Message']; ?></td>
								</tr>
							</table>
						</div>
						<div style="width:100%">
							<a href="form.php"><button style="width:100%" class="btn btn-secondary">Go back</button></a>
						</div>
					</div>
					<div class="col">
					</div>
			
					
				</div>
		
	</body>
</html>