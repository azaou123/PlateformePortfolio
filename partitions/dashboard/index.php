<?php
include('../../action/connect.php');
session_start();

// Traitement d'utilisateur 
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);
if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $user = array(
			"id" => $row['id'],
			"username" => $row['username'],
			"nom" => $row['nom'],
			"prenom" => $row['prenom'],
			"email" => $row['email'],
			"password" => $row['password'],
			"status" => $row['status'],
			"biographie" => $row['biographie'],
			"resume" => $row['resume'],
			"photo" => $row['photo'],
			"facebook" => $row['facebook'],
			"instagram" => $row['instagram'],
			"linkedin" => $row['linkedin'],
			"twitter" => $row['twitter'],
			"phone" => $row['phone'],
			"adresse" => $row['adresse'],
			"pColor" => $row['primaryColor'],
			"sColor" => $row['secondaryColor'],
			"aColor" => $row['additionalColor'],
		);
    }
}






// Trailtement de 'Skills' 
$_SESSION['indiceSkills'] = "add"; 
$nbrSkills=0;
$sql="SELECT * FROM userskills WHERE user_id='$id' "; 
$result = $conn->query($sql);
if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $nbrSkills++;
    }
}




// Traitement de Projects  
$nbrProjects=0;
$sql="SELECT * FROM projects WHERE user_id='$id' "; 
$result = $conn->query($sql);
if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $nbrProjects++;
    }
}  





// Traitement des Activities 
$nbrActivities=0;
$sql="SELECT * FROM activities WHERE user_id='$id' "; 
$result = $conn->query($sql);
if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $nbrActivities++;
    }
}      






// Traitement des Languages 
$nbrLangauages=0;
$sql="SELECT * FROM userLanguages WHERE user_id='$id' "; 
$result = $conn->query($sql);
if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $nbrLangauages++;
    }
}  







//Traitement de Habits 
$nbrHabits=0;
$sql="SELECT * FROM Habits WHERE user_id='$id' "; 
$result = $conn->query($sql);
if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $nbrHabits++;
    }
} 


 





?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>PP | Dashboard</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">




	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<?php 	

	?>
</head>

<body onload="showSection(3)">
	<script src="./js/main.js"></script>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand bg-success text-decoration-none">
          			<span class="align-middle ">PP</span>
        		</a>
				<ul class="sidebar-nav">
					<li class="sidebar-item active" id="btnSection0" onclick="showSection(0)">
						<a class="sidebar-link">
							<i class="fa-solid fa-bars"></i> 
							<span class="align-middle">Dashboard</span>
            			</a>
					</li>
					<li class="sidebar-item" id="btnSection1" onclick="showSection(1)">
						<a class="sidebar-link">
						<!-- data-bs-toggle="modal" data-bs-target="#ex1" -->
						<i class="align-middle" data-feather="user"></i> 
							<span class="align-middle">Profile</span>
            			</a>

					</li>
					<li class="sidebar-item" id="btnSection2" onclick="showSection(2)">
						<a class="sidebar-link">
							<i class="fa-sharp fa-solid fa-gears"></i> 
							<span class="align-middle">Skills</span>
            			</a>
					</li>
					<li class="sidebar-item" id="btnSection3" onclick="showSection(3)">
						<a class="sidebar-link">
							<i class="fa-sharp fa-solid fa-hammer"></i> 
							<span class="align-middle">Projects</span>
            			</a>
					</li>
					<li class="sidebar-item" id="btnSection4" onclick="showSection(4)">
						<a class="sidebar-link">
              				<i class="align-middle" data-feather="user-plus"></i> 
							<span class="align-middle">Activities</span>
            			</a>
					</li>
					<li class="sidebar-item" id="btnSection5" onclick="showSection(5)">
						<a class="sidebar-link">
							<i class="fa-solid fa-language"></i> 
							<span class="align-middle">Languages</span>
            			</a>
					</li>
					<li class="sidebar-item" id="btnSection6" onclick="showSection(6)">
						<a class="sidebar-link">
							<i class="fa-sharp fa-regular fa-face-smile"></i>
							<span class="align-middle">Habits</span>
            			</a>
					</li>
					<li class="sidebar-item" id="btnSection7" onclick="showSection(7)">
						<a class="sidebar-link">
							<i class="fa-sharp fa-solid fa-school"></i>
							<span class="align-middle">Education</span>
            			</a>
					</li>
				</ul>
				<div class="sidebar-cta w-100">
					<div class="sidebar-cta-content">
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Logout</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo $user['username'] ; ?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content" id="section0">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Analytics</strong>Dashboard</h1>
					<div class="row">
						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title mb-0">Portfolio Sections</h5>
								</div>
								<div class="card-body py-3">
									<div class="container">
										<div class="row">
											<div class="col-md-6">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title mb-3 pb-2 border-bottom border-primary border-2"><b class="text-dark fw-bold">Resume</b><i class="float-end fa-solid fa-file"></i></h5>
														<h6 class="card-subtitle mb-2 text-muted text-center"><b><?php echo $nbrProjects+$nbrActivities+$nbrHabits+$nbrLangauages+$nbrSkills; ?></b></h6>
														<button class="btn btn-success w-100 mb-1">View</button>
														<button class="btn btn-secondary w-100">Modify</button>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title mb-3 pb-2 border-bottom border-primary border-2"><b class="text-dark fw-bold">Projects</b><i class="float-end fa-sharp fa-solid fa-hammer"></i></h5>
														<h6 class="card-subtitle mb-2 text-muted text-center"><b><?php echo $nbrProjects; ?>
														</b></h6>
														<button class="btn btn-success w-100 mb-1">View</button>
														<button class="btn btn-secondary w-100">Modify</button>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title mb-3 pb-2 border-bottom border-primary border-2"><b class="text-dark fw-bold">Activities</b><i class="float-end fa-solid fa-users-medical"></i></h5>
														<h6 class="card-subtitle mb-2 text-muted text-center"><b><?php echo $nbrActivities; ?>
														</b></h6>
														<button class="btn btn-success w-100 mb-1">View</button>
														<button class="btn btn-secondary w-100">Modify</button>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title mb-3 pb-2 border-bottom border-primary border-2"><b class="text-dark fw-bold">Skills</b><i class="float-end fa-sharp fa-solid fa-gears"></i></h5>
														<h6 class="card-subtitle mb-2 text-muted text-center"><b><?php echo $nbrSkills; ?>
														</b></h6>
														<button class="btn btn-success w-100 mb-1">View</button>
														<button class="btn btn-secondary w-100">Modify</button>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title mb-3 pb-2 border-bottom border-primary border-2"><b class="text-dark fw-bold">Languages</b><i class="float-end fa-solid fa-language"></i></h5>
														<h6 class="card-subtitle mb-2 text-muted text-center"><b><?php echo $nbrLangauages; ?>
														</b></h6>
														<button class="btn btn-success w-100 mb-1">View</button>
														<button class="btn btn-secondary w-100">Modify</button>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title mb-3 pb-2 border-bottom border-primary border-2"><b class="text-dark fw-bold">Habits</b><i class="float-end fa-sharp fa-regular fa-face-smile"></i></h5>
														<h6 class="card-subtitle mb-2 text-muted text-center"><b><?php echo $nbrHabits; ?>
														</b></h6>
														<button class="btn btn-success w-100 mb-1">View</button>
														<button class="btn btn-secondary w-100">Modify</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title mb-0">Abou Me</h5>
								</div>
								<div class="card-body py-3">
								<div class="container">
									<div class="row">
										<div class="col-md-4 border-end">
											<img src="img/avatars/avatar.jpg" alt="Profile Picture" class="img-fluid">
											<h2>John Doe</h2>
											<p>Age: 30</p>
											<p>Location: New York</p>
										</div>
										<div class="col-md-8">
											<h3>About Me</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel eleifend turpis. Suspendisse malesuada orci id luctus elementum. Sed bibendum nulla vitae lacus dapibus mollis. Duis a elit ut leo cursus venenatis. Sed euismod ligula eu mauris facilisis aliquam.</p>
											<h3>Skills</h3>
											<ul>
												<li>HTML</li>
												<li>CSS</li>
												<li>JavaScript</li>
												<li>Bootstrap</li>
											</ul>
											<h3>Education</h3>
											<p>Bachelor of Science in Computer Science, New York University</p>
											<h3>Experience</h3>
											<p>Software Engineer, Google (2018 - Present)</p>
											<p>Web Developer, Microsoft (2016 - 2018)</p>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</main>

			<main class="content" id="section1" style="display:none;">
				<div class="text-center">
					<?php if ($user['photo']!=''){?>
					<img src="../../uploads/profiles/<?php echo $user['photo']; ?>" class="rounded-circle mb-3" width="200">
					<form action="../../action/editProfile.php" method="POST">
						<input type="text" name="todo" value="removePhoto" style="display:none;">
						<input type="text" class="form-control" name="id" id="id" value="<?php echo $user['id']; ?>" style="display:none;">
						<button type="submit" class="btn btn-danger">Remove Photo</button>
					</form>
					<?php }?>
					<br>
				</div>
				<form action="../../action/editProfile.php" method="POST" enctype="multipart/form-data">
					<input type="text" name="todo" value="editProfile" style="display:none;">
					<div class="row mt-4">
						<div class="col-md-4 mb-3" style="display:none;">
							<input type="text" class="form-control" name="id" id="id" value="<?php echo $user['id']; ?>" placeholder="Enter Username">
						</div>
						<div class="col-md-4 mb-3">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" name="username" id="username" value="<?php echo $user['username']; ?>" placeholder="Enter Username">
						</div>
						<div class="col-md-4 mb-3">
							<label for="nom" class="form-label">First Name</label>
							<input type="text" class="form-control" name="nom" id="nom" value="<?php echo $user['nom']; ?>" placeholder="Enter First Name">
						</div>
						<div class="col-md-4 mb-3">
							<label for="username" class="form-label">Last Name</label>
							<input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $user['prenom']; ?>" placeholder="Enter Last Name">
						</div>
						<div class="col-md-4 mb-3">
							<label for="email" class="form-label">Email address</label>
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" placeholder="Enter email">
						</div>
						<div class="col-md-4 mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>" placeholder="Enter Password">
						</div>
						<div class="col-md-4 mb-3">
							<label for="inputBio" class="form-label">Status</label>
							<input class="form-control" id="status" name="status" value="<?php echo $user['status']; ?>" rows="3" placeholder="Your State">
						</div>
						<div class="col-md-4 mb-3">
							<label for="photo" class="form-label">Profile Picture</label>
							<input class="form-control" type="file" id="photo" name="photo" value="<?php echo $user['photo']; ?>">
						</div>
						<div class="col-md-4 mb-3">
							<label for="resume" class="form-label">Your Resume</label>
							<input class="form-control" type="file" id="resume" name="resume" value="<?php echo $user['resume']; ?>">
						</div>
						<div class="col-md-4 mb-3">
							<label for="bio" class="form-label">Biography</label>
							<textarea class="form-control" id="bio" name="bio" rows="4" cols="40"><?php echo $user['biographie']; ?></textarea>
						</div>
						<div class="col-md-3 mb-3">
							<label for="instagram" class="form-label">Instagram</label>
							<input class="form-control" type="text" id="instagram" name="instagram" value="<?php echo $user['instagram']; ?>">
						</div>
						<div class="col-md-3 mb-3">
							<label for="fecabook" class="form-label">Facebook</label>
							<input class="form-control" type="text" id="facebook" name="facebook" value="<?php echo $user['facebook']; ?>">
						</div>
						<div class="col-md-3 mb-3">
							<label for="resume" class="form-label">LonkedIn</label>
							<input class="form-control" type="text" id="linkedin" name="linkedin" value="<?php echo $user['linkedin']; ?>">
						</div>
						<div class="col-md-3 mb-3">
							<label for="twitter" class="form-label">Twitter</label>
							<input class="form-control" type="text" id="twitter" name="twitter" value="<?php echo $user['twitter']; ?>">
						</div>
						<div class="col-md-6 mb-3">
							<label for="phone" class="form-label">Phone</label>
							<input class="form-control" type="text" id="phone" name="phone" value="<?php echo $user['phone']; ?>">
						</div>
						<div class="col-md-6 mb-3">
							<label for="adresse" class="form-label">Adresse</label>
							<input class="form-control" type="text" id="adresse" name="adresse" value="<?php echo $user['adresse']; ?>">
						</div>
						<div class="col-md-4 mb-3">
							<label for="pColor" class="form-label">Primary Color</label>
							<input class="form-control" type="color" id="pColor" name="pColor" value="<?php echo $user['pColor']; ?>">
						</div>
						<div class="col-md-4 mb-3">
							<label for="sColor" class="form-label">Secondary Color</label>
							<input class="form-control" type="color" id="sColor" name="sColor" value="<?php echo $user['sColor']; ?>">
						</div>
						<div class="col-md-4 mb-3">
							<label for="aColor" class="form-label">Additional Color</label>
							<input class="form-control" type="color" id="aColor" name="aColor" value="<?php echo $user['aColor']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-3">
							<button type="reset" class="btn btn-danger w-100">Cancel</button>
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-success w-100">Submit Changes</button>
						</div>
					</div>
				</form>
			</main>

			
			<main class="content" id="section2" style="display:none;">
				<?php if ($user['photo']!=''){?>
					<div class="row justify-content-center">
						<img src="../../uploads/profiles/<?php echo $user['photo']; ?>" class="rounded-circle mb-3 text-center" style="width:15%;">
					</div>
				<?php }?>
				<div class="containerSkills" id="containerSkills">
					<div class="row mb-2">
						<div class="col-md-10"></div>
						<button class="btn btn-success float-end col-md-1" id="nwBtn" onclick="
							document.getElementById('containerSkills').style.display = 'none'
							document.getElementById('formSkills').style.display = ''
							">New</button>
					</div>
					<ul class="list-group">
						<?php
						$sql="SELECT * FROM userskills where user_id='$user[id]'"; 
						$result = $conn->query($sql);
						if ($result->num_rows>0){
							while($row = $result->fetch_assoc()){
								$idSkill = $row['id'];
								$sqlp = "select label from `skills` where id='$idSkill'";
								$resultp=$conn->query($sqlp);
								if ($result->num_rows>0){
									while($rowp = $resultp->fetch_assoc()){
										$label = $rowp['label'];
									}
								}
								?>
								<li class="list-group-item d-flex justify-content-between align-items-center row">
									<span class="fw-bold col-md-7"><?php echo $label ; ?></span>
									<span class="col-md-1"><?php echo $row['score']; ?>/100</span>
									<span class="px-3 rounded-5 col-md-1" style="background-color:<?php echo $row['color']; ?>;">&nbsp;</span>
									<div class="btn-group col-md-3" role="group" aria-label="Item Actions">
										<button type="button" class="btn btn-outline-secondary" onclick="editSkill(<?php echo $idSkill; ?>)">Modify</button>
										<button type="button" class="btn btn-outline-danger">Remove</button>
									</div>
								</li>
							<?php
							}
						}
						?>
					</ul>
				</div>
				<form action="../../action/editSkills.php" method="post" id="formSkills" style="display:none;">
				<?php  
					if($_SESSION['indiceSkills']=="add"){?>
						<h3 class="text-center" id="titleFormSkills">Add Skill</h3>
						<div class="row">
							<input type="text" name="id" value="<?php echo $user['id']; ?>" style="display:none;">
							<input type="text" name="todo" value="addSkill" style="display:none;">
							<div class="col-md-1"></div>
							<div class="col-md-4 mb-3">
								<!-- Select Skills  -->
								<label for="username" class="form-label">Score (/100)</label>
								<select class="form-select" name="skill" id="skill">Select : 
									<option value="">Choose</option>
									<?php
									$sql="SELECT * FROM skills"; 
									$result = $conn->query($sql);
									if ($result->num_rows>0){
										while($row = $result->fetch_assoc()){
											$label = $row['label'];
										?>
											<option value="<?php echo $label; ?>"><?php echo $label; ?></option>
										<?php
										}
									}
									?>
								</select>
							</div>
							<div class="col-md-2">
								<p class="fw-bold pt-4 text-center">Or</p>
							</div>
							<div class="col-md-5 mb-3">
								<label for="username" class="form-label">Label </label>
								<input type="text" class="form-control" name="label" id="label" placeholder="Enter Label">
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5 mb-3">
								<label for="username" class="form-label">Score (/100)</label>
								<input type="number" class="form-control" name="score" id="score" placeholder="Enter Score" required>
							</div>
							<div class="col-md-5 mb-3">
								<label for="username" class="form-label">Color</label>
								<input type="color" class="form-control" name="color" id="color" placeholder="Enter Color" required>
							</div>
						</div>
					<?php 
					} 
					else 
					{
					$indiceSkills = $_SESSION['indiceSkills'];
					$sql="SELECT * FROM userskills WHERE skill_id='$indiceSkills' and user_id='$user[id]' "; 
					$result = $conn->query($sql);
					if ($result->num_rows>0){
						while($row = $result->fetch_assoc()){
							$user_id = $row['user_id'];
							$skill_id = $row['skill_id'];
							$color = $row['color'];
							$score = $row['score'];
						}
					}
					$sql = "select * from `skills` where id='$indiceSkills'";
					$result=$conn->query($sql);
					if ($result->num_rows>0){
						while($row = $result->fetch_assoc()){
							$label = $row['label'];
						}
					}
					?>
						<h3 class="text-center" id="titleFormSkills">Modify Skill</h3>
						<?php
							echo $label ;
							echo $user_id ;
							echo $skill_id ;
							echo $score ;
						?>
						<div class="row">
							<input type="text" name="id" value="<?php echo $user['id']; ?>" style="display:none;">
							<input type="text" name="todo" value="modifySkill" style="display:none;">
							<div class="col-md-5 mb-3">
								<label for="username" class="form-label">Label </label>
								<input type="text" class="form-control" value="<?php echo $label; ?>" name="label" id="label" placeholder="Enter Label">
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5 mb-3">
								<label for="username" class="form-label">Score (/100)</label>
								<input type="number" value="<?php echo $score; ?>" class="form-control" name="score" id="score" placeholder="Enter Score" required>
							</div>
							<div class="col-md-5 mb-3">
								<label for="username" class="form-label">Color</label>
								<input type="color" class="form-control" name="color" id="color" placeholder="Enter Color" required>
							</div>
							<div class="col-md-4"></div>
						</div>
				
				<?php } ?>
					<div class="col-md-4 mb-3 text-center">
						<button class="btn btn-primary text-center px-4">Submit </button>
					</div>
				</form>
				<!-- Js Code  -->
				<script>
					function editSkill(x){
						document.getElementById('idSkillToModify').value = x
						document.getElementById('editThiskill').submit()
					}
				</script>
				<form action="" method="POST" id="editThiskill" style="display:none;">
					<input type="text" name="todo" value="skillToModify">
					<input type="number" name="idSkillToModify" id="idSkillToModify">
				</form>
				<?php
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						if ($_POST['todo']=='skillToModify'){
							$_SESSION['indiceSkills'] = $_POST['idSkillToModify'];
							echo '
								<script>
									document.getElementById("containerSkills").style.display = "none"
									document.getElementById("formSkills").style.display = ""
								</script>
							';
						}
					}
				?>
			</main>


			<main class="content" id="section3" style="display:none;">
				<div>
					<?php if ($user['photo']!=''){?>
						<div class="row justify-content-center">
							<img src="../../uploads/profiles/<?php echo $user['photo']; ?>" class="rounded-circle mb-3 text-center" style="width:15%;">
						</div>
					<?php }?>
					<section id="projects" class="py-5">
						<div class="container">
							<h2 class="text-center mb-5">Your Projects</h2>
								<div class="row g-4">
								<div class="col-lg-4 col-md-6">
									<div class="card">
										<div class="card-body text-center">
											<h5 class="card-title">Project</h5>
											<p class="card-text">Lorem ullamcorper ex sit ameteo sollicitudin, ut pellentesque elit venenatis.</p>
											<a href="#" class="btn btn-success">View More</a>
											<a href="#" class="btn btn-secondary px-4">Delete</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="card">
										<div class="card-body text-center">
											<h5 class="card-title">Project</h5>
											<p class="card-text">Lorem ullamcorper ex sit ameteo sollicitudin, ut pellentesque elit venenatis.</p>
											<a href="#" class="btn btn-success">View More</a>
											<a href="#" class="btn btn-secondary px-4">Delete</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="card">
										<div class="card-body text-center">
											<h5 class="card-title">Project</h5>
											<p class="card-text">Lorem ullamcorper ex sit ameteo sollicitudin, ut pellentesque elit venenatis.</p>
											<a href="#" class="btn btn-success">View More</a>
											<a href="#" class="btn btn-secondary px-4">Delete</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="card">
										<div class="card-body text-center">
											<h5 class="card-title">Project</h5>
											<p class="card-text">Lorem ullamcorper ex sit ameteo sollicitudin, ut pellentesque elit venenatis.</p>
											<a href="#" class="btn btn-success">View More</a>
											<a href="#" class="btn btn-secondary px-4">Delete</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</main>


			<main class="content" id="section4" style="display:none;">
				<form>
					<h2 class="text-center mb-5">Your Activities</h2>
								<div class="row g-4">
								<div class="col-lg-4 col-md-6">
									<div class="card">
										<div class="card-body text-center">
											<h5 class="card-title fw-bold fs-5 pb-3 text-dark border-bottom">Activity</h5>
											<p class="card-text">Lorem ullamcorper ex sit ameteo sollicitudin, ut pellentesque elit venenatis.</p>
											<a href="#" class="btn btn-success">View More</a>
											<a href="#" class="btn btn-danger px-4">Delete</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="card">
										<div class="card-body text-center">
											<h5 class="card-title fw-bold fs-5 pb-3 text-dark border-bottom">Activity</h5>
											<p class="card-text">Lorem ullamcorper ex sit ameteo sollicitudin, ut pellentesque elit venenatis.</p>
											<a href="#" class="btn btn-success">View More</a>
											<a href="#" class="btn btn-danger px-4">Delete</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="card">
										<div class="card-body text-center">
											<h5 class="card-title fw-bold fs-5 pb-3 text-dark border-bottom">Activity</h5>
											<p class="card-text">Lorem ullamcorper ex sit ameteo sollicitudin, ut pellentesque elit venenatis.</p>
											<a href="#" class="btn btn-success">View More</a>
											<a href="#" class="btn btn-danger px-4">Delete</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="card">
										<div class="card-body text-center">
											<h5 class="card-title fw-bold fs-5 pb-3 text-dark border-bottom">Activity</h5>
											<p class="card-text">Lorem ullamcorper ex sit ameteo sollicitudin, ut pellentesque elit venenatis.</p>
											<a href="#" class="btn btn-success">View More</a>
											<a href="#" class="btn btn-danger px-4">Delete</a>
										</div>
									</div>
								</div>
							</div>
				</form>
			</main>


			<main class="content" id="section5" style="display:none;">
				<form>
					<div class="text-center">
						<img src="img/avatars/avatar.jpg" class="rounded-circle" alt="">
						<h2>Languages</h2>
					</div>
					<div class="row row-cols-1 row-cols-md-2 justify-content-center row-cols-lg-3 py-4 g-4 counter-1">
						<div class="col">
							<div class="card card-body shadow">
								<div class="d-inline-flex align-items-center" style="min-height:128px">
									<div class="me-2 border-end">
										<div class="bg-light p-4">
											<i class="fa-solid fa-1 fs-3"></i>
										</div>
									</div>
									<div>
										<span class="fw-bold display-5 mb-5" data-vanilla-counter="" data-start-at="0" data-end-at="125" data-time="1000" data-delay="60" data-format="{}">125</span>
										<p class="lead" editable="inline"><b>Language</b></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card-body shadow">
								<div class="d-inline-flex align-items-center" style="min-height:128px">
									<div class="me-2 border-end">
										<div class="bg-light p-4">
											<i class="fa-solid fa-1 fs-3"></i>
										</div>
									</div>
									<div>
										<span class="fw-bold display-5 mb-5" data-vanilla-counter="" data-start-at="0" data-end-at="125" data-time="1000" data-delay="60" data-format="{}">125</span>
										<p class="lead" editable="inline"><b>Language</b></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card-body shadow">
								<div class="d-inline-flex align-items-center" style="min-height:128px">
									<div class="me-2 border-end">
										<div class="bg-light p-4">
											<i class="fa-solid fa-1 fs-3"></i>
										</div>
									</div>
									<div>
										<span class="fw-bold display-5 mb-5" data-vanilla-counter="" data-start-at="0" data-end-at="125" data-time="1000" data-delay="60" data-format="{}">125</span>
										<p class="lead" editable="inline"><b>Language</b></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card card-body shadow">
								<div class="d-inline-flex align-items-center" style="min-height:128px">
									<div class="me-2 border-end">
										<div class="bg-light p-4">
											<i class="fa-solid fa-1 fs-3"></i>
										</div>
									</div>
									<div>
										<span class="fw-bold display-5 mb-5" data-vanilla-counter="" data-start-at="0" data-end-at="125" data-time="1000" data-delay="60" data-format="{}">125</span>
										<p class="lead" editable="inline"><b>Language</b></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</main>


			<main class="content" id="section6" style="display:none;">
				<form>
					<div class="text-center">
						<img src="img/avatars/avatar.jpg" class="rounded-circle" alt="">
						<h2>Habits</h2>
					</div>
					<div class="row rounded text-center py-4 g-4 bg-light counter-1">
						<div class="col-6 col-lg-3">
							<div class="d-flex justify-content-center mb-2">
								<i class="fa-solid fa-football fs-4"></i>
							</div>
							<p class="lead" editable="inline"><b>FootBall</b></p>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-flex justify-content-center mb-2">
								<i class="fa-solid fa-football fs-4"></i>
							</div>
							<p class="lead" editable="inline"><b>FootBall</b></p>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-flex justify-content-center mb-2">
								<i class="fa-solid fa-football fs-4"></i>
							</div>
							<p class="lead" editable="inline"><b>FootBall</b></p>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-flex justify-content-center mb-2">
								<i class="fa-solid fa-football fs-4"></i>
							</div>
							<p class="lead" editable="inline"><b>FootBall</b></p>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-flex justify-content-center mb-2">
								<i class="fa-solid fa-football fs-4"></i>
							</div>
							<p class="lead" editable="inline"><b>FootBall</b></p>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-flex justify-content-center mb-2">
								<i class="fa-solid fa-football fs-4"></i>
							</div>
							<p class="lead" editable="inline"><b>FootBall</b></p>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-flex justify-content-center mb-2">
								<i class="fa-solid fa-football fs-4"></i>
							</div>
							<p class="lead" editable="inline"><b>FootBall</b></p>
						</div>
					</div>
				</form>
			</main>


			<main class="content" id="section7" style="display:none;">
				<form>
					<div class="text-center">
						<img src="img/avatars/avatar.jpg" class="rounded-circle" alt="">
					</div>
					<section id="education">
						<div class="container">
							<h2 class="text-center mb-2">Education</h2>
							<div class="row mt-2">
								<div class="col-md-6 border-top border-end border-primary border-2 pt-1">
									<div class="education">
									<h3 class="text-secondary">University of XYZ</h3>
									<p>Bachelor of Science in Computer Science</p>
									<p class="fw-bold">Graduated in May 2020</p>
									</div>
								</div>
								<div class="col-md-6 border-top border-end border-primary border-2 pt-1">
									<div class="education">
									<h3 class="text-secondary">University of XYZ</h3>
									<p>Bachelor of Science in Computer Science</p>
									<p class="fw-bold">Graduated in May 2020</p>
									</div>
								</div>
								<div class="col-md-6 border-top border-end border-primary border-2 pt-1">
									<div class="education">
									<h3 class="text-secondary">University of XYZ</h3>
									<p>Bachelor of Science in Computer Science</p>
									<p class="fw-bold">Graduated in May 2020</p>
									</div>
								</div>
								<div class="col-md-6 border-top border-end border-primary border-2 pt-1">
									<div class="education">
									<h3 class="text-secondary">University of XYZ</h3>
									<p>Bachelor of Science in Computer Science</p>
									<p class="fw-bold">Graduated in May 2020</p>
									</div>
								</div>
							</div>
						</div>
					</section>
				</form>
			</main>

					












			












			  <!-- Bootstrap core JS-->
			  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
				<!-- Core theme JS-->
				<script src="js/scripts.js"></script>
				<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
				<!-- * *                               SB Forms JS                               * *-->
				<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
				<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
				<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
			
			

					




			
			
			
			
			
			
					<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>