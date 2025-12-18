<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swathikasri | PHP & MySQL Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        /* ===== HERO WITH BACKGROUND IMAGE ===== */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(
                rgba(0,0,0,0.6),
                rgba(0,0,0,0.6)
            ),
            url("images/bg.jpg") center/cover no-repeat;
            animation: zoomBg 12s infinite alternate;
            color: #fff;
        }

        @keyframes zoomBg {
            from { background-size: 100%; }
            to { background-size: 110%; }
        }

        .hero h1 {
            font-weight: 700;
        }

        .hero p {
            font-size: 16px;
            color: #e0e0e0;
        }

        /* ===== PROFILE IMAGE ===== */
        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 5px solid #fff;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .btn-custom {
            padding: 10px 22px;
            font-size: 15px;
        }
    </style>
</head>

<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Swathikasri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="skills.php">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ===== HERO SECTION ===== -->
<section class="hero text-center">
    <div class="container">

        <!-- PROFILE IMAGE -->
        <img src="images/profile.jpeg" alt="Swathikasri" class="profile-img">

        <h1>Hi, I'm Swathikasri</h1>
        <h5 class="text-warning mt-2">PHP & MySQL Developer</h5>

        <p class="mt-4">
            I build ERP billing systems and dynamic web applications using
            PHP, MySQL, and modern frontend technologies.
        </p>

        <div class="mt-4">
            <a href="projects.php" class="btn btn-primary btn-custom me-2">View Projects</a>
            <a href="assests/resume.pdf" class="btn btn-outline-light btn-custom" target="_blank">
                Download Resume
            </a>
        </div>

    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
