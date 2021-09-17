<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="stylesheet2.css" rel="stylesheet" type="text/css">
	<link href="css/hover.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">	  
  </head>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid" style="padding-bottom: 0px;">
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-white"></span>Menu
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mr-auto">
		<li class="nav-item">
          <a class="nav-link hvr-underline-from-center text-light" href="https://www.lamanlibrary.org/trd_staff">Dashboard
          <span class="sr-only">(current)</span>
          </a>
		  </li>
        <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bolder" href="https://www.lamanlibrary.org/trd_staff/view">View</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bolder" href="https://www.lamanlibrary.org/trd_staff/new">New Entry</a>
        </li>
		<li class="nav-item">
          <a class="nav-link text-light hvr-underline-from-center font-weight-bolder" href="https://www.lamanlibrary.org/Database">TRD Front-End</a>
        </li>
		      </ul>
    </div>
	 <div class="navbar-brand text-white">
		Staff Dashboard
							  </div>
  </div>
</nav>
	<body class="bg-light d-flex flex-column min-vh-100">
   
        <div class="container mt-4 mb-4 pb-4">
		
                    
            <div class="row">
                    
                    <form class="col-lg-12 bg-dark pl-5 pr-5 text-light pt-3 pb-5 dropshadow" action="insert.php" method="post">
						  <h2 class="text-center">Database Form</h2>
						<p class="text-center">Please fill this form and submit to add a directory item to Teen Database. If you are not authorized to add items to database, please do not.</p>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Category</label><br>
                            <select class="form-control" name="Category">
							<option value="Food Pantries">Food Pantries</option>
							<option value="Adult Education">Adult Education</option>
							<option value="Community Centers">Community Centers</option>
							<option value="Health Care">Health Care</option>
							<option value="Dating Violence">Dating Violence</option>
							<option value="Pregnancy Information">Pregnancy Information</option>
							<option value="Mental Health">Mental Health</option>
							<option value="Recreation Centers">Recreation Centers</option>
							<option value="Substance Abuse">Substance Abuse</option>
							<option value="LGBTQ+">LGBTQ+</option>
							<option value="Transportation">Transportation</option>
							<option value="Mentor">Mentor</option>
							<option value="Shelters">Shelters</option>
						  </select>
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <input type="url" name="URL" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="City" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Keyword</label>
                            <input type="text" name="Keyword" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Address</label>
                            <input type="text" name="Address" class="form-control">
                        </div>
						<div class="form-group">
                            <label>State</label>
                            <input type="text" name="State" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Phone</label>
                            <input type="mobile" name="Phone" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Description</label>
                            <input type="text" name="Description" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary float-right" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
       
   
</body>
<footer class="mainfooter mt-auto bg-dark" role="contentinfo">
	<div class="row">
		<div class="col-md-12 text-white">
			<p class="text-center">&copy; Copyright 2020 - Laman Library.  All rights reserved.</p>
		</div>
	</div>


  </div>
  </div>
</footer>
</html>