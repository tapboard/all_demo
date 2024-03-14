@extends('layout.layout')
@section('title')
	About Us Page
@endsection

@section('content')
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"
		href="skip.css">
	<title>About Us</title>
</head>

<body>
	<header>
		<nav>
			<div class="logo">
			GeeksforGeeks
			</div>
			<ul class="nav-links">
				<li><a href="#">
				Home</a>
				</li>
				<li><a href="#">
				About</a>
				</li>
				<li><a href="#">
				Services</a>
				</li>
				<li><a href="#">
				Contact</a>
				</li>
			</ul>
		</nav>
	</header>

	<section class="about">
		<h1>About Us</h1>
		<p style="font-weight: bold">
		GeeksforGeeks is a leading platform...
		</p>
		<div class="about-info">
			<div class="about-img">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20230824153359/
371ba38b-8a03-4bff-916c-c3fa5396ceda.jfif" alt="Geeksforgeeks">
			</div>
			<div>
			<p> GeeksforGeeks is a leading platform
				that provides computer science resources
				and coding challenges for programmers and
				technology enthusiasts,along with interview
				and exam preparations for upcoming aspirants.
				With a strong emphasis on enhancing coding skills
				and knowledge,it has become a trusted destination
				for over 12 million plus registered users worldwide.
			</p>
				<button>Read More...</button>
			</div>
		</div>
	</section>

	<section class="team">
		<h1>Meet Our Team</h1>
		<div class="team-cards">
		
			<!-- Cards here -->
			<!-- Card 1 -->
		
			<div class="card">
				<div class="card-img">
					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20230824122630/
business-office-business-woman-professional.jpg" alt="User 1">
				</div>
				<div class="card-info">
					<h2 class="card-name">Jane</h2>
					<p class="card-role">CEO and Founder</p>
					<p class="card-email">jane@example.com</p>
					<p><button class="button">Contact</button></p>
				</div>
			</div>

			<!-- Card 2 -->
		
			<div class="card">
				<div class="card-img">
					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20230822183347/
man-portrait-businessman-male.jpg" alt="User 2">
				</div>
				<div class="card-info">
					<h2 class="card-name">Miller</h2>
					<p class="card-role">Co-Founder</p>
					<p class="card-email">Miller@example.com</p>
					<p><button class="button">Contact</button></p>
				</div>
			</div>
		
			<!-- Card 3 -->
		
			<div class="card">
				<div class="card-img">
					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20230824122630/
business-office-business-woman-professional.jpg" alt="User 3">
				</div>
				<div class="card-info">
					<h2 class="card-name">Joe</h2>
					<p class="card-role">Co-Founder</p>
					<p class="card-email">Joe@example.com</p>
					<p><button class="button">Contact</button></p>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<p>© 2023 GeeksforGeeks. All Rights Reserved.</p>
	</footer>
</body>

</html>

	
@endsection