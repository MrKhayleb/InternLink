<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - InternLink</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fontawesome-free-7.3.1-web/css/all.min.css" />
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="header">
        <div class="nav-links">
            <div class="nav-1">
                <div class="nav-1-1"><img src="./pictures/logo.png" alt="logo-img"></div>
                <div><a href="index.php#Home" class="logo-text">InternLink</a></div>
            </div>

            <div class="nav-2">
                <a href="index.php#Jobs" class="nav-2-text">Jobs</a>
                <a href="index.php#Companies" class="nav-2-text">Companies</a>
                <a href="about.php" class="nav-2-text">About</a>
            </div>

            <div class="nav-3">
                <a href="login.php" class="nav-3-l">Login</a>
                <div class="nav-3-r"><a href="register.php" id="nav-3-r">Register</a></div>
            </div>
        </div>
    </section>

    <section>
        <div class="about-hero">
            <div class="about-hero-tx">About InternLink</div>
            <p class="about-hero-sub">We're on a mission to close the gap between students and the opportunities they deserve.</p>
        </div>
    </section>

    <section>
        <div class="about-mission">
            <div class="about-mission-tx">
                <h2>Our Mission</h2>
                <p>Finding internships and entry-level roles as a student is harder than it should be. Listings are scattered, hard to search by skill, and often outdated. InternLink was built specifically to close that gap — connecting students directly with companies who are actively looking to hire them.</p>
            </div>

            <div class="about-stats">
                <div class="stat-bx">
                    <div class="stat-num">1,250+</div>
                    <div class="stat-label">Active Jobs</div>
                </div>
                <div class="stat-bx">
                    <div class="stat-num">200+</div>
                    <div class="stat-label">Companies</div>
                </div>
                <div class="stat-bx">
                    <div class="stat-num">5,000+</div>
                    <div class="stat-label">Students</div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="cta-full">
            <div class="cta-tx">Ready to take the next step?</div>
            <p class="cta-sub">Join thousands of students and companies on InternLink.</p>
            <div class="cta-btns">
                <a href="index.php#Jobs" class="cta-btn-primary">Find Opportunities</a>
                <a href="register.php" class="cta-btn-secondary">Post a Job</a>
            </div>
        </div>
    </section>

    <footer class="footer-full">
        <div class="footer-top">
            <div class="footer-brand">
                <div class="footer-logo">
                    <div class="nav-1-1"><img src="./pictures/logo.png" alt="logo-img"></div>
                    <span>InternLink</span>
                </div>
                <p class="footer-tagline">Connecting students with opportunities.</p>
            </div>

            <div class="footer-col">
                <div class="footer-h">For Students</div>
                <a href="index.php#Jobs">Jobs</a>
                <a href="index.php#Companies">Companies</a>
            </div>

            <div class="footer-col">
                <div class="footer-h">For Companies</div>
                <a href="register.php">Post a Job</a>
                <a href="login.php">Login</a>
            </div>

            <div class="footer-col">
                <div class="footer-h">Company</div>
                <a href="about.php">About</a>
                <a href="#Contact">Contact</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 InternLink. All rights reserved.</p>
        </div>
    </footer>

    <script src="index.js"></script>
</body>

</html>