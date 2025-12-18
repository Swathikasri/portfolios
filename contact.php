<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact | Jothimani</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
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
        .contact-box {
            background: #ffffff;
            padding: 25px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            height: 100%;
        }
        .contact-info p {
            margin-bottom: 10px;
            font-size: 15px;
        }
    </style>
</head>

<body>

<!-- ===== NAVBAR ===== -->
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

<!-- ===== CONTACT SECTION ===== -->
<section class="section">
    <div class="container">
        <h2 class="title text-center mb-5">Get in Touch</h2>

        <div class="row g-4">

            <!-- CONTACT INFO -->
            <div class="col-md-5">
                <div class="contact-box contact-info">
                    <h5 class="mb-3">Contact Information</h5>
                    <p><strong>Name:</strong> Swathikasri</p>
                    <p><strong>Email:</strong> jothiswathi262@gmail.com</p>
                    <p><strong>Phone:</strong> +91 90257 22007</p>
                    <p><strong>Location:</strong> Chennai, India</p>
                    <p><strong>LinkedIn:</strong> linkedin.com/in/swathika-6854532</p>
                </div>
            </div>

            <!-- CONTACT FORM -->
            <div class="col-md-7">
                <div class="contact-box">
                    <h5 class="mb-3">Send a Message</h5>

                    <!-- UI only (can be connected to PHP later) -->
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="4" placeholder="Write your message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary px-4">Send Message</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
