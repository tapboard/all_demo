<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>@yield('title')</title>

	<style type="text/css">
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    background: gray;
    display: flex;
    justify-content: space-between;
    align-items: center;
    backdrop-filter: blur(10px);
    border-bottom: 2px solid rgba(255, 255, 255, .2);
}
.header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .4), transparent);
  }
.header:hover::before {
    left: 100%;
}
.logo {
    color: #fff;
    font-size: 25px;
    text-decoration: none;
    font-weight: 600;
    cursor: default;
}
.navbar a {
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    margin-left: 35px;
    transition: .3s;
}
.navbar a:hover {
    color: #f00;
}

footer {
  position: fixed;
  bottom:0;
    
    width: 100%;
    padding: 15px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 2px solid rgba(255, 255, 255, .2);
     background: gray;
}
    	</style>
</head>
<body>
<header class="header">
        <a href="profile" class="logo">Profile</a>
        <nav class="navbar">
            <a href="controlstructures">Home</a>
            <a href="student_lce">Student</a>
            <a href="aboutus">About Us</a>
            <a href="dashboard">Dashboard</a>
            <a href="contactus">Contact Us</a>
        </nav>
    </header>


	@yield('content')



<!-- Site footer -->
    <footer class="site-footer">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by </p>
    </footer>
</body>
</html>