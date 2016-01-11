<!doctype html>
<html>

	<head>
		<?php include 'layout/core.php'; ?>

		<!-- Title of the current page -->
		<title>Gideon Appoh's Portfolio</title>
	</head>

	<body>
		<?php include 'layout/header.php' ?>

		<div id="wrapper" class="container-fluid">
			<div class="row">
				<div id="intro" class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3 quicksand center">
					<p>
						Hi there! <b class="highlight">Gideon Appoh</b> is my name<br>
						I am currently a web developer at Scopic Software<br>
						I am a self-taught web developer with 3years of work experience<br>
						I am also a freshman in Kwame Nkrumah University of Science & Technology<br>
						I am currently looking for a job which I will work remotely<br>
						Hope to hear from you soon
					</p>

					<a href="#skillset"><img id="dropdown" src="images/icons/dropdown.png"></a>
				</div>
			</div>

			<div id="skillset" class="row category">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<img class="pull-right" src="images/categories/skillset.png">
				</div>

				<div class="col-lg-6 col-md-6 col-sm-8 quicksand center">
					<a name="skillset"></a>
				
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 center">
							<h2>Skillset</h2>
						</div>
					</div>

					<div class="row marginated">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<h3>Front-End Development</h3>
							<p>Proficient<br>
							HTML, CSS, JavaScript, JQuery, AngularJS</p>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<h3>Back-End Development</h3>
							<p>Above Proficient<br>
							PHP, MySQL, MariaDB, REST, APIs, Laravel, Yii</p>
						</div>
					</div>

					<div class="row marginated">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<h3>Source Control & FTP</h3>
							<p>Proficient<br>
							SVN, GIT, Filezilla, SSH</p>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<h3>Tools</h3>
							<p>Above Proficient<br>
							Sublime Text, Tortoise SVN, GIT BASH</p>
						</div>
					</div>
				</div>
			</div>

			<div id="personality" class="row quicksand category">
				<div class="col-lg-4 col-md-4 col-sm-4 pull-right">
					<img src="images/categories/personality.png">
				</div>

				<div class="col-lg-6 col-md-6 col-sm-8 pull-right">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 center">
							<h2>Personality</h2>
						</div>
					</div>

					<div class="row marginated">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<ul>
								<li>Goal oriented</li>
								<li>Great team spirit</li>
								<li>Quick learner and thinker</li>
								<li>Good time management and delivers on time</li>
								<li>Passionate about building innovative and creative products</li>
								<li>Experience working as a professional web developer (3+ professional years)</li>
								<li>Good communication skills and able to deliver complex concepts in a clear manner</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="profile" class="row quicksand category">
				<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 center">
							<h2>Online Profiles</h2>
						</div>
					</div>

					<div class="row marginated center">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<a href="https://www.linkedin.com/in/gideon-appoh-aa1b12bb"><img src="images/profiles/linkedin.png"></a><br><br>
							<a href="https://github.com/Tech-Emiretus"><img src="images/profiles/github.png"></a>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<a href="http://stackoverflow.com/users/4814030/gideon-appoh"><img src="images/profiles/stackoverflow.png"></a><br><br>
							<a href="https://www.quora.com/profile/Gideon-Appoh"><img src="images/profiles/quora.png"></a>
						</div>
					</div>
				</div>
			</div>

			<?php include 'layout/footer.php' ?>
		</div>
	</body>
	
</html>