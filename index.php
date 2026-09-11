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
                <a href="#About" class="nav-2-text">About</a>
            </div>

            <div class="nav-3">
                <a href="#Login" class="nav-3-l">Login</a>
                <div class="nav-3-r"><a href="#Register" id="nav-3-r">Register</a></div>
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


    <script src="index.js"></script>
</body>

</html>