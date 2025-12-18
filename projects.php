<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects | Swathikasri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .section {
            padding: 100px 0;
        }
        .title {
            color: #0d6efd;
            font-weight: 700;
        }
        .project-card {
            background: #ffffff;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            overflow: hidden;
            height: 100%;
        }
        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .project-body {
            padding: 20px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">Swathikasri</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="skills.php">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<section class="section">
    <div class="container">
        <h2 class="title text-center mb-5">Projects</h2>

        <div class="row g-4">

            <!-- ERP PROJECT -->
            <div class="col-md-6">
                <div class="project-card">
                    <img src="images/erp1.png" alt="ERP Billing System">
                    <div class="project-body">
                        <h5>ERP Billing System (PHP & MySQL)</h5>
                        <p>
                            Developed an ERP-based billing system with voucher entry,
                            batch-wise inventory management, GST calculation, and
                            real-time stock validation.
                        </p>
                        <p><strong>Technologies:</strong> PHP, MySQL, JavaScript, Bootstrap</p>
                    </div>
                </div>
            </div>

            <!-- RENTAL SERVICE APP -->
            <div class="col-md-6">
                <div class="project-card">
                    <img src="images/erp2.png" alt="Rental Service App">
                    <div class="project-body">
                        <h5>Rental Service Application</h5>
                        <p>
                            Built a real-time rental service application with user
                            management, bookings, payments, and availability tracking.
                        </p>
                        <p><strong>Technologies:</strong> Adalo, Database Design</p>
                    </div>
                </div>
            </div>

            <!-- LIFI PROJECT -->
            <div class="col-md-6">
                <div class="project-card">
                    <img src="images/erp1.png" alt="Li-Fi Project">
                    <div class="project-body">
                        <h5>Hybrid Li-Fi / Wi-Fi V2V System</h5>
                        <p>
                            Designed a vehicle-to-vehicle communication system for
                            accident prevention using Li-Fi and Wi-Fi technologies.
                        </p>
                        <p><strong>Technologies:</strong> Embedded Systems, Sensors</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
