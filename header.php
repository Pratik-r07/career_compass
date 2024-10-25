<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff; /* white background */
        }
        header {
            background-color: #000; /* black header */
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        nav ul {
            
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: left;
            display:inline
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: #fff; /* white text */
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
            border-radius: 20px;
            background-color: #000; /* black background */
            transition: background-color 0.3s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav ul li a:hover {
            background-color: white; /* darkened background color on hover */
        }
        .content {
            margin-top: 80px; /* Adjust this value based on your header height */
            padding: 20px;
        }
        .logo {
      font-size: 30px;
      font-style: italic;
      font-weight: 600; 
      font-family:  'Lato', sans-serif;
      color:#fff; 
      margin-right: 20px;
    }
    </style>
</head>
<body>
    <header>
        <nav>
         
            <ul>
            <div class="logo">CareerCompass</div> <div>
                <li><a href="main.php">Home</a></li>
                <li><a href="blog.php">Knowledge</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <!-- Your page content goes here -->
    </div>
</body>
</html>
