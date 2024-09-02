<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Health Journal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Health Journal</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="jumbotron jumbotron-fluid text-center text-white" style="background-image: url('images/health-banner.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4" style="color: black;">Welcome to My Health Journal</h1>
            <p class="lead" style="color: black;">Track your meals, exercise, and mood daily to live a healthier life.</p>
            <a href="register.php" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </header>

    <section class="container my-5 text-center">
        <h2>Why Track Your Health?</h2>
        <p class="lead">Keeping a daily health journal helps you understand your habits and make better lifestyle choices. By monitoring your meals, exercise, and mood, you can identify patterns that affect your well-being.</p>
        <div class="row my-5">
            <div class="col-md-4">
                <img src="tm.webp" class="img-fluid rounded-circle" alt="Healthy Meals">
                <h4 class="mt-3">Track Your Meals</h4>
                <p>Log your daily meals to ensure a balanced diet and discover which foods make you feel your best.</p>
            </div>
            <div class="col-md-4">
                <img src="cm.webp" class="img-fluid rounded-circle" alt="Exercise">
                <h4 class="mt-3">Monitor Exercise</h4>
                <p>Record your workouts and physical activities to stay motivated and track your fitness progress.</p>
            </div>
            <div class="col-md-4">
                <img src="mood.webp" class="img-fluid rounded-circle" alt="Mood Tracking">
                <h4 class="mt-3">Mood Tracking</h4>
                <p>Note your daily moods and feelings to understand how your lifestyle choices impact your mental health.</p>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 text-center">
        <div class="container">
            <h2>Join the MyHealth Community</h2>
            <p class="lead">Connect with others on the same journey and share tips, recipes, and encouragement.</p>
            <a href="register.php" class="btn btn-success btn-lg">Sign Up Now</a>
        </div>
    </section>

    <footer class="text-center py-4 bg-dark text-white">
        <div class="container">
            <p>&copy; 2024 MyHealth Journal. All rights reserved.</p>
            <p>
                <a href="#" class="text-white">Privacy Policy</a> | 
                <a href="#" class="text-white">Terms of Service</a> | 
                <a href="#" class="text-white">Contact Us</a>
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
