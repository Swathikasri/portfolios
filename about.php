<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Me | Swathikasri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #faf9f8ff;
            font-family: Arial, sans-serif;
        }
        .section {
            padding: 100px 0;
        }
        .title {
            color: #0d6efd;
            font-weight: 700;
        }
        .text {
            color: #555;
            line-height: 1.8;
            font-size: 15px;
        }
        .info-box {
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">Swathikasri</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="skills.php">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="section">
    <div class="container">
        <div class="row">

            <!-- LEFT CONTENT -->
            <div class="col-md-7">
                <h2 class="title mb-3">About Me</h2>

                <p class="text">
                    I am a B.Tech Computer Science and Business Systems student from
                    Panimalar Institute of Technology with strong interest in PHP and
                    MySQL development. I enjoy building database-driven and ERP-style
                    web applications.
                </p>

                <p class="text">
                    I have completed internships in mobile and front-end development,
                    where I worked on real-time applications, UI development, and
                    backend integration using HTML, CSS, JavaScript, and databases.
                </p>

                <p class="text">
                    As part of my academic and personal projects, I developed an
                    ERP-based billing and rental service system involving voucher
                    management, inventory handling, and database design. These
                    experiences helped me gain practical exposure to full-stack
                    development concepts.
                </p>
            </div>

            <!-- RIGHT INFO -->
            <div class="col-md-5">
                <div class="info-box">
                    <h5 class="mb-3">Quick Profile</h5>
                    <p><strong>Name:</strong> Swathikasri</p>
                    <p><strong>Degree:</strong> B.Tech (CSBS)</p>
                    <p><strong>Institute:</strong> Panimalar Institute of Technology</p>
                    <p><strong>Role:</strong> PHP & MySQL Developer</p>
                    <p><strong>Internships:</strong> Web / Mobile / Frontend Development</p>
                    <p><strong>Projects:</strong> ERP Billing System, Rental App</p>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
