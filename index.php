<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternLink</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fontawesome-free-7.3.1-web/css/all.min.css" />
</head>

<body>
    <!-- Navigation Links -->
    <section class="header">
        <div class="nav-links">
            <div class="nav-1">
                <div class="nav-1-1"><img src="./pictures/logo.png" alt="logo-img"></div>
                <div><a href="#Home" class="logo-text">InternLink</a></div>
            </div>

            <div class="nav-2">
                <a href="#Jobs" class="nav-2-text">Jobs</a>
                <a href="#Companies" class="nav-2-text">Companies</a>
                <a href="about.php" class="nav-2-text">About</a>
            </div>

            <div class="nav-3">
                <a href="login.php" class="nav-3-l">Login</a>
                <div class="nav-3-r"><a href="register.php" id="nav-3-r">Register</a></div>
            </div>
        </div>
    </section>

    <!--Hero Section-->
    <section>
        <div class="hero-section">
            <div class="hero-sec1">
                <div class="hero-tx">
                    <div>Find Job Opportunities.</div>
                    <div>Build your future.</div>
                </div>

                <div class="hero-tx1">Discover internships and jobs from companies looking for your skills.</div>

                <div class="hero-search">
                    <div class="search-bx"><input type="text" placeholder="Job title or Skills"></div>
                    <div class="search-bx"><input type="text" placeholder="Location"></div>
                    <button class="search-jobs">Search Jobs</button>
                </div>

            </div>
        </div>
    </section>

    <!--Featured Jobs-->
    <section>
        <div class="featured">
            <div class="featured-h">
                <div>Available Jobs</div>
                <div class="view-all"><a href="#View-all">View all<i class="fa-solid fa-arrow-right"></i></a></div>
            </div>

            <div class="full-job-bx">
                <!---->
                <div class="job-card">
                    <div class="job-card-top">
                        <div class="job-logo">TC</div>
                        <div class="job-info">
                            <div class="job-title">
                                Frontend Developer Intern
                                <button class="save-btn"><i class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="job-company">Apple Inc · USA</div>
                        </div>
                    </div>

                    <div class="job-card1">
                        <div class="tag-type">Internship</div>
                        <div class="tag-mode">Remote</div>
                    </div>

                    <div class="job-card-bottom">
                        <div class="job-price">$15-50/mon</div>
                        <a href="#" class="view-btn">View</a>
                    </div>
                </div>

                <!---->
                <div class="job-card">
                    <div class="job-card-top">
                        <div class="job-logo">BD</div>
                        <div class="job-info">
                            <div class="job-title">
                                Backend Developer Intern
                                <button class="save-btn"><i class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="job-company">CGI Inc · Canada</div>
                        </div>
                    </div>

                    <div class="job-card1">
                        <div class="tag-type">Job</div>
                        <div class="tag-mode">Remote</div>
                    </div>

                    <div class="job-card-bottom">
                        <div class="job-price">$25-60/mon</div>
                        <a href="#" class="view-btn">View</a>
                    </div>
                </div>

                <!---->
                <div class="job-card">
                    <div class="job-card-top">
                        <div class="job-logo">UI/UX</div>
                        <div class="job-info">
                            <div class="job-title">
                                UI/UX Intern
                                <button class="save-btn"><i class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="job-company">Samsung Electronics · South Korea</div>
                        </div>
                    </div>

                    <div class="job-card1">
                        <div class="tag-type">Internship</div>
                        <div class="tag-mode">Remote</div>
                    </div>

                    <div class="job-card-bottom">
                        <div class="job-price">$10-30/mon</div>
                        <a href="#" class="view-btn">View</a>
                    </div>
                </div>

                <!---->
                <div class="job-card">
                    <div class="job-card-top">
                        <div class="job-logo">MA</div>
                        <div class="job-info">
                            <div class="job-title">
                                Mobile App Development
                                <button class="save-btn"><i class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="job-company">Ocado Group · UK</div>
                        </div>
                    </div>

                    <div class="job-card1">
                        <div class="tag-type">Job</div>
                        <div class="tag-mode">Remote</div>
                    </div>

                    <div class="job-card-bottom">
                        <div class="job-price">$40-80/mon</div>
                        <a href="#" class="view-btn">View</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Categories-->
    <section>
        <div class="categories-full">
            <div class="categories-tx">
                Popular Categories
            </div>

            <div class="categories-bx">
                <div class="c-bx">
                    <div class="c-bx1"><i class="fas fa-microchip" id="emoji"></i></div>
                    <div class="c-name">Technology</div>
                    <p class="c-count">1,250 jobs</p>
                </div>
                <div class="c-bx">
                    <div class="c-bx1"><i class="fas fa-chart-line" id="emoji"></i></div>
                    <div class="c-name">Marketing</div>
                    <p class="c-count">850 jobs</p>
                </div>
                <div class="c-bx">
                    <div class="c-bx1"><i class="fas fa-pen-nib" id="emoji"></i></div>
                    <div class="c-name">Design</div>
                    <p class="c-count">620 jobs</p>
                </div>
                <div class="c-bx">
                    <div class="c-bx1"><i class="fas fa-briefcase" id="emoji"></i></div>
                    <div class="c-name">Business</div>
                    <p class="c-count">540 jobs</p>
                </div>
                <div class="c-bx">
                    <div class="c-bx1"><i class="fas fa-coins" id="emoji"></i></div>
                    <div class="c-name">Finance</div>
                    <p class="c-count">410 jobs</p>
                </div>
                <div class="c-bx">
                    <div class="c-bx1"><i class="fas fa-book-reader" id="emoji"></i></div>
                    <div class="c-name">Education</div>
                    <p class="c-count">300 jobs</p>
                </div>
            </div>
        </div>
    </section>

    <!--Featured Companies-->
    <section>
        <div class="featured-full">
            <div class="featured-tx">
                Featured Companies

                <div class="view-btn-wrap">
                    <div id="view-all"><a href="#View-all">View all<i class="fa-solid fa-arrow-right"></i></a></div>
                </div>
            </div>

            <div class="f-full">
                <div class="f-bx">
                    <div class="f-name">Google</div>
                </div>

                <div class="f-bx">
                    <div class="f-name">TechCorp</div>
                </div>

                <div class="f-bx">
                    <div class="f-name">Microsoft</div>
                </div>

                <div class="f-bx">
                    <div class="f-name">Amazon</div>
                </div>

                <div class="f-bx">
                    <div class="f-name">Meta</div>
                </div>

                <div class="f-bx">
                    <div class="f-name">200+</div>
                </div>
            </div>
        </div>
    </section>

    <!--How It Works-->
    <section>
        <div class="how-full">
            <div class="how-tx">How InternLink Works</div>

            <div class="how-bx">
                <div class="how-step">
                    <div class="how-num">1</div>
                    <div class="how-name">Create your profile</div>
                    <p class="how-desc">Showcase your skills and experience</p>
                </div>
                <div class="how-step">
                    <div class="how-num">2</div>
                    <div class="how-name">Search opportunities</div>
                    <p class="how-desc">Find the right internships</p>
                </div>
                <div class="how-step">
                    <div class="how-num">3</div>
                    <div class="how-name">Apply</div>
                    <p class="how-desc">Submit your application easily</p>
                </div>
                <div class="how-step">
                    <div class="how-num">4</div>
                    <div class="how-name">Get hired</div>
                    <p class="how-desc">Start your career journey</p>
                </div>
            </div>
        </div>
    </section>

    <!--CTA Banner-->
    <section>
        <div class="cta-full">
            <div class="cta-tx">Ready to take the next step?</div>
            <p class="cta-sub">Join thousands of students and companies on InternLink.</p>
            <div class="cta-btns">
                <a href="#Jobs" class="cta-btn-primary">Find Opportunities</a>
                <a href="#PostJob" class="cta-btn-secondary">Post a Job</a>
            </div>
        </div>
    </section>

    <!--Footer-->
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
                <a href="#Jobs">Jobs</a>
                <a href="#Companies">Companies</a>
            </div>

            <div class="footer-col">
                <div class="footer-h">For Companies</div>
                <a href="#PostJob">Post a Job</a>
                <a href="#Login">Login</a>
            </div>

            <div class="footer-col">
                <div class="footer-h">Company</div>
                <a href="#About">About</a>
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