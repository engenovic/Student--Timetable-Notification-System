<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Meru Timetable Notification System - Student Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logoo.jpg" alt="">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">New Student Registration</h4>
							<form method="POST" class="my-login-validation" action="reg.php">
								<div class="form-group">
									<label for="name"> Your Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>
								<div class="form-group">
									<label for="name">Enter Phone Number</label>
									<input id="name" type="text" class="form-control" name="phone" required autofocus>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>
								
								<div class="form-group">
									<label for="name">Course of Study</label>
									<select name="course" class="form-control mt-3">
                                                <option>
                                               Select Course
                                                </option>
																								<?php
																									include_once 'display.php';
                                                  foreach($courses as $course) {
                                                    echo "<option value=\"{$course['id']}\" >{$course['name']}</option>";
                                                  }
                                                  ?>

                                                </select>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>
								<div class="form-group">
									<label for="name">Year of Study</label>
									<select name="year" class="form-control mt-3">
                                                <option>
                                               Select Year
                                                </option>
                                              <option value="1">1</option>
                                                <option value="2">2</option>
																								<option value="3">3</option>
                                                <option value="4">4</option>
                                                </select>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Choose Password</label>
									<input id="password" type="password" class="form-control" name="pass" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

						

								<div class="form-group m-0">
									<button type="submit" name="submit"  class="btn btn-primary btn-block"style="background-color:#5fcf80;">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="login.html">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; Meru
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>