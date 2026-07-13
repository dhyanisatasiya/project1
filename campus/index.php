
<?php include 'header.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
  <link rel="stylesheet" href="index.css">
<!-- ================= HERO SLIDER START ================= -->


<section class="hero-slider">

    <div class="slide active">

        <img src="img/slider-1.jpg" alt="Campus">

        <div class="overlay"></div>

        <div class="hero-content">

            <h4>WELCOME TO</h4>

            <h1>Hari Bhai Godhani Campus</h1>

            <p>
                Building Future Leaders through Quality Education,
                Innovation and Excellence.
            </p>

            <div class="hero-btn">
                <a href="#" class="btn1">Apply Now</a>
                <a href="#" class="btn2">Explore Campus</a>
            </div>

        </div>

    </div>

    <div class="slide">

        <img src="img/silder-2.webp" alt="Campus">

        <div class="overlay"></div>

        <div class="hero-content">

            <h4>ADMISSION OPEN</h4>

            <h1>Academic Year 2026-27</h1>

            <p>
                Admissions are now open for various Undergraduate and
                Postgraduate Courses.
            </p>

            <div class="hero-btn">
                <a href="#" class="btn1">Admission</a>
                <a href="#" class="btn2">Courses</a>
            </div>

        </div>

    </div>

    <div class="slide">

        <img src="img/silder-3.jpg" alt="Campus">

        <div class="overlay"></div>

        <div class="hero-content">

            <h4>QUALITY EDUCATION</h4>

            <h1>Your Future Starts Here</h1>

            <p>
                Modern Infrastructure • Experienced Faculty • Career Opportunities
            </p>

            <div class="hero-btn">
                <a href="#" class="btn1">Contact Us</a>
                <a href="#" class="btn2">Read More</a>
            </div>

        </div>

    </div>

</section>

<!-- ================= NOTICE BAR ================= -->

<section class="notice-section">

    <div class="container">

        <div class="notice-title">
            Latest Updates
        </div>

        <marquee>

            Admission Open 2026 • Scholarship Available • Placement Drive •
            Annual Function • Sports Week • Seminar • Workshop

        </marquee>

    </div>

</section>

<!-- ================= QUICK LINKS ================= -->

<section class="quick-links">

    <div class="container">

        <div class="section-title">

            <h5>OUR SERVICES</h5>

            <h2>Quick Links</h2>

        </div>

        <div class="quick-grid">

            <div class="card">

                <i class="fa-solid fa-user-graduate"></i>

                <h3>Admission</h3>

                <p>Apply Online for New Admission</p>

            </div>

            <div class="card">

                <i class="fa-solid fa-book-open"></i>

                <h3>Courses</h3>

                <p>Explore Academic Programs</p>

            </div>

            <div class="card">

                <i class="fa-solid fa-building-columns"></i>

                <h3>Departments</h3>

                <p>Professional Departments</p>

            </div>
			

            <div class="card">

                <i class="fa-solid fa-chalkboard-user"></i>

                <h3>Faculty</h3>

                <p>Experienced Teachers</p>

            </div>

            <div class="card">

                <i class="fa-solid fa-briefcase"></i>

                <h3>Placements</h3>

                <p>Career Support & Training</p>

            </div>

            <div class="card">

                <i class="fa-solid fa-images"></i>

                <h3>Gallery</h3>

                <p>Campus Life & Events</p>

            </div>

        </div>

    </div>

</section>


<!-- ================= HERO SLIDER JS ================= -->

<script>

let slides=document.querySelectorAll(".slide");

let index=0;

function changeSlide(){

slides[index].classList.remove("active");

index++;

if(index>=slides.length){

index=0;

}

slides[index].classList.add("active");

}

setInterval(changeSlide,5000);

</script><!-- ================= WHY CHOOSE US ================= -->

<section class="why-choose">

    <div class="container">

        <div class="section-title">
            <h5>WHY CHOOSE US</h5>
            <h2>Why Students Choose Hari Bhai Godhani Campus</h2>
        </div>

        <div class="why-grid">

            <div class="why-box">
                <i class="fa-solid fa-user-graduate"></i>
                <h3>Experienced Faculty</h3>
                <p>
                    Learn from qualified and experienced professors committed
                    to student success.
                </p>
            </div>

            <div class="why-box">
                <i class="fa-solid fa-building"></i>
                <h3>Modern Infrastructure</h3>
                <p>
                    Smart classrooms, laboratories, digital library and
                    advanced campus facilities.
                </p>
            </div>

            <div class="why-box">
                <i class="fa-solid fa-briefcase"></i>
                <h3>Placement Support</h3>
                <p>
                    Career guidance, internships and placement opportunities
                    with reputed companies.
                </p>
            </div>

            <div class="why-box">
                <i class="fa-solid fa-trophy"></i>
                <h3>Academic Excellence</h3>
                <p>
                    Quality education with practical learning and
                    skill development.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- ================= DEPARTMENTS ================= -->

<section class="departments">

    <div class="container">

        <div class="section-title">
            <h5>ACADEMIC DEPARTMENTS</h5>
            <h2>Explore Our Departments</h2>
        </div>

        <div class="department-grid">

            <div class="department-card">
                <i class="fa-solid fa-computer"></i>
                <h3>BCA</h3>
                <p>Bachelor of Computer Applications</p>
                <a href="#">Read More</a>
            </div>

            <div class="department-card">
                <i class="fa-solid fa-chart-line"></i>
                <h3>BBA</h3>
                <p>Bachelor of Business Administration</p>
                <a href="#">Read More</a>
            </div>

            <div class="department-card">
                <i class="fa-solid fa-calculator"></i>
                <h3>B.Com</h3>
                <p>Bachelor of Commerce</p>
                <a href="#">Read More</a>
            </div>

            <div class="department-card">
                <i class="fa-solid fa-laptop-code"></i>
                <h3>MCA</h3>
                <p>Master of Computer Applications</p>
                <a href="#">Read More</a>
            </div>

        </div>

    </div>

</section>

<!-- ================= COURSES ================= -->

<section class="courses">

    <div class="container">

        <div class="section-title">
            <h5>OUR PROGRAMS</h5>
            <h2>Popular Courses</h2>
        </div>

        <div class="course-grid">

            <div class="course-card">

                <img src="images/course1.jpg" alt="BCA">

                <div class="course-content">

                    <h3>BCA</h3>

                    <p>
                        Modern Computer Education with Practical
                        Learning and Industry Exposure.
                    </p>

                    <a href="#">Know More</a>

                </div>

            </div>

            <div class="course-card">

                <img src="images/course2.jpg" alt="BBA">

                <div class="course-content">

                    <h3>BBA</h3>

                    <p>
                        Management Education for Future
                        Business Leaders.
                    </p>

                    <a href="#">Know More</a>

                </div>

            </div>

            <div class="course-card">

                <img src="images/course3.jpg" alt="B.Com">

                <div class="course-content">

                    <h3>B.Com</h3>

                    <p>
                        Commerce Education with
                        Professional Skills and Knowledge.
                    </p>

                    <a href="#">Know More</a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= COUNTER ================= -->

<section class="counter">

    <div class="container">

        <div class="counter-grid">

            <div>
                <h2>5000+</h2>
                <p>Students</p>
            </div>

            <div>
                <h2>250+</h2>
                <p>Faculty Members</p>
            </div>

            <div>
                <h2>30+</h2>
                <p>Courses</p>
            </div>

            <div>
                <h2>100%</h2>
                <p>Placement Support</p>
            </div>

        </div>

    </div>

</section><!-- ================= CHAIRMAN MESSAGE ================= -->

<section class="chairman">

    <div class="container chairman-grid">

        <div class="chairman-img">
            <img src="img/campus.webp" alt="Chairman">
        </div>

        <div class="chairman-content">

            <h5>MESSAGE FROM CHAIRMAN</h5>

            <h2>Welcome to Hari Bhai Godhani Campus</h2>

            <p>
                Education is the foundation of a successful future.
                Our mission is to provide quality education,
                innovation, discipline and opportunities
                for every student.
            </p>

            <p>
                We believe in creating responsible citizens,
                future leaders and skilled professionals
                who contribute positively to society.
            </p>

            <a href="#" class="read-btn">
                Read Full Message
            </a>

        </div>

    </div>

</section>

<!-- ================= CAMPUS FACILITIES ================= -->

<section class="facilities">

    <div class="container">

        <div class="section-title">

            <h5>OUR FACILITIES</h5>

            <h2>World Class Campus Facilities</h2>

        </div>

        <div class="facility-grid">

            <div class="facility-card">

                <i class="fa-solid fa-book"></i>

                <h3>Digital Library</h3>

                <p>
                    Modern digital library with thousands of books and journals.
                </p>

            </div>

            <div class="facility-card">

                <i class="fa-solid fa-computer"></i>

                <h3>Computer Lab</h3>

                <p>
                    Latest computer labs with high-speed internet.
                </p>

            </div>

            <div class="facility-card">

                <i class="fa-solid fa-flask"></i>

                <h3>Science Lab</h3>

                <p>
                    Practical learning with modern laboratory equipment.
                </p>

            </div>

            <div class="facility-card">

                <i class="fa-solid fa-bus"></i>

                <h3>Transportation</h3>

                <p>
                    Safe and comfortable transport facilities.
                </p>

            </div>

            <div class="facility-card">

                <i class="fa-solid fa-wifi"></i>

                <h3>Free WiFi</h3>

                <p>
                    High-speed WiFi available throughout the campus.
                </p>

            </div>

            <div class="facility-card">

                <i class="fa-solid fa-futbol"></i>

                <h3>Sports</h3>

                <p>
                    Indoor and outdoor sports facilities for students.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= CAMPUS LIFE ================= -->

<section class="campus-life">

    <div class="container">

        <div class="section-title">

            <h5>CAMPUS LIFE</h5>

            <h2>Experience Student Life</h2>

        </div>

        <div class="life-grid">

            <div class="life-box">

                <img src="img/culture.webp" alt="">

                <h3>Cultural Events</h3>

            </div>

            <div class="life-box">

                <img src="images/life2.jpg" alt="">

                <h3>Workshops</h3>

            </div>

            <div class="life-box">

                <img src="img/Sports.jpg" alt="">

                <h3>Sports Activities</h3>

            </div>

        </div>

    </div>

</section>

<!-- ================= PHOTO GALLERY ================= -->

<section class="gallery">

    <div class="container">

        <div class="section-title">

            <h5>PHOTO GALLERY</h5>

            <h2>Campus Moments</h2>

        </div>

        <div class="gallery-grid">

            <img src="img/mument.webp" alt="">
            <img src="img/mument1.webp" alt="">
            <img src="img/mument-2.jpg" alt="">
            <img src="img/mument3.jpg" alt="">
            <img src="images/gallery5.jpg" alt="">
            <img src="images/gallery6.jpg" alt="">

        </div>

    </div>

</section><!-- ================= NEWS & EVENTS ================= -->

<section class="news">

    <div class="container">

        <div class="section-title">
            <h5>NEWS & EVENTS</h5>
            <h2>Latest Campus Updates</h2>
        </div>

        <div class="news-grid">

            <div class="news-card">

                <img src="images/news1.jpg" alt="">

                <div class="news-content">

                    <span>12 July 2026</span>

                    <h3>Admission Open 2026</h3>

                    <p>
                        Applications are invited for various undergraduate
                        and postgraduate courses.
                    </p>

                    <a href="#">Read More</a>

                </div>

            </div>

            <div class="news-card">

                <img src="images/news2.jpg" alt="">

                <div class="news-content">

                    <span>20 July 2026</span>

                    <h3>Placement Drive</h3>

                    <p>
                        Top companies are visiting our campus
                        for recruitment.
                    </p>

                    <a href="#">Read More</a>

                </div>

            </div>

            <div class="news-card">

                <img src="images/news3.jpg" alt="">

                <div class="news-content">

                    <span>30 July 2026</span>

                    <h3>National Seminar</h3>

                    <p>
                        Industry experts sharing knowledge
                        with our students.
                    </p>

                    <a href="#">Read More</a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= RECRUITERS ================= -->

<section class="recruiters">

    <div class="container">

        <div class="section-title">

            <h5>PLACEMENT PARTNERS</h5>

            <h2>Our Recruiters</h2>

        </div>

        <div class="logo-slider">

            <img src="images/company1.png" alt="">
            <img src="images/company2.png" alt="">
            <img src="images/company3.png" alt="">
            <img src="images/company4.png" alt="">
            <img src="images/company5.png" alt="">
            <img src="images/company6.png" alt="">

        </div>

    </div>

</section>

<!-- ================= TESTIMONIAL ================= -->

<section class="testimonial">

    <div class="container">

        <div class="section-title">

            <h5>TESTIMONIALS</h5>

            <h2>What Students Say</h2>

        </div>

        <div class="testimonial-grid">

            <div class="testimonial-card">

                <img src="images/student1.jpg" alt="">

                <h3>Rahul Patel</h3>

                <p>
                    The campus environment is excellent and
                    the faculty members are very supportive.
                </p>

            </div>

            <div class="testimonial-card">

                <img src="images/student2.jpg" alt="">

                <h3>Priya Shah</h3>

                <p>
                    Modern infrastructure and placement support
                    helped me build my career.
                </p>

            </div>

            <div class="testimonial-card">

                <img src="images/student3.jpg" alt="">

                <h3>Amit Joshi</h3>

                <p>
                    Wonderful learning experience with
                    practical education.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= ADMISSION ================= -->

<section class="admission-section">

    <div class="container">

        <div class="admission-content">

            <h5>ADMISSION OPEN 2026-27</h5>

            <h2>Start Your Journey With Hari Bhai Godhani Campus</h2>


            <p>

                Admissions are open for Undergraduate and
                Postgraduate Programs. Apply today and secure
                your future.

            </p>

            <div class="admission-btn">

                <a href="#" class="apply-btn">Apply Now</a>

                <a href="#" class="contact-btn">Contact Us</a>

            </div>

        </div>

    </div>

</section>

<!-- ================= EVENTS ================= -->

<section class="events">

    <div class="container">

        <div class="section-title">

            <h5>UPCOMING EVENTS</h5>

            <h2>Campus Activities</h2>

        </div>

        <div class="event-grid">

            <div class="event-card">

                <h3>15</h3>

                <span>August</span>

                <h4>Independence Day</h4>

                <p>Flag Hoisting & Cultural Program</p>

            </div>

            <div class="event-card">

                <h3>22</h3>

                <span>August</span>

                <h4>AI Seminar</h4>

                <p>Guest Speaker from IT Industry</p>

            </div>

            <div class="event-card">

                <h3>05</h3>

                <span>September</span>

                <h4>Teachers Day</h4>

                <p>Student Cultural Activities</p>

            </div>

        </div>

    </div>

</section>

<!-- ================= ACHIEVEMENTS ================= -->

<section class="achievement">

    <div class="container">

        <div class="section-title">

            <h5>OUR ACHIEVEMENTS</h5>

            <h2>Achievements & Recognition</h2>

        </div>

        <div class="achievement-grid">

            <div class="achievement-box">

                <i class="fa-solid fa-award"></i>

                <h3>25+</h3>

                <p>Years of Excellence</p>

            </div>

            <div class="achievement-box">

                <i class="fa-solid fa-user-graduate"></i>

                <h3>5000+</h3>

                <p>Graduated Students</p>

            </div>

            <div class="achievement-box">

                <i class="fa-solid fa-user-tie"></i>

                <h3>300+</h3>

                <p>Experienced Faculty</p>

            </div>

            <div class="achievement-box">

                <i class="fa-solid fa-briefcase"></i>

                <h3>100+</h3>

                <p>Placement Partners</p>

            </div>

        </div>

    </div>

</section>

<!-- ================= CONTACT STRIP ================= -->

<section class="contact-strip">

    <div class="container contact-grid">

        <div>

            <i class="fa-solid fa-location-dot"></i>

            <h4>Campus Address</h4>

            <p>Hari Bhai Godhani Campus, Junagadh</p>

        </div>

        <div>

            <i class="fa-solid fa-phone"></i>

            <h4>Call Us</h4>

            <p>+91 98765 43210</p>

        </div>

        <div>

            <i class="fa-solid fa-envelope"></i>

            <h4>Email</h4>

            <p>info@haribhaigodhanicampus.edu.in</p>

        </div>

    </div>

</section>

<!-- ================= GOOGLE MAP ================= -->

<section class="map-section">

    <div class="container">

        <div class="section-title">

            <h5>OUR LOCATION</h5>

            <h2>Find Us On Google Map</h2>

        </div>

        <iframe
            src="https://www.google.com/maps?q=Junagadh,Gujarat&output=embed"
            width="100%"
            height="450"
            style="border:0;"
            loading="lazy">
        </iframe>

    </div>

</section>

</body>
</html>
<?php include 'footer.php'; ?>
