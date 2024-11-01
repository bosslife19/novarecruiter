<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Novarecruiter</title>
    <link rel="stylesheet" href="/assets/css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    />
  </head>
  <body>
    
    
    <!-- Header Section -->
    <header>
      <img src="/assets/logo.webp" alt="Logo" />

      <!-- Menu Toggle (Hamburger) -->
      <div class="menu-toggle">
        <i class="fas fa-bars"></i>
      </div>

      <div class="nav">
        <!-- Menu items for navigation and login -->
        <div class="menu">
          <div class="nav2">
            <a href="#">About Us</a>
            <a href="#">Job seekers</a>
            <a href="#">Employers</a>
            <a href="#">Contact</a>
            <a href="#" class="cv">Send Your CV</a>
          </div>
          <div class="log">
            <a href="/login"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
    </header>


    <!-- Hero Section -->
    <section class="hero">
      <video autoplay muted loop playsinline class="hero_video">
        <source src="/assets/videos/vid.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <div class="hero_text">
        <div>
          <h2>
            WELCOME TO
            <span style="color: rgb(226, 60, 60)">NOVA</span> RECRUITMENT
          </h2>
          <h5 style="padding-bottom: 40px">
            EXPERT ADVICE, EXCEPTIONAL RESULTS
          </h5>
        </div>

        <div style="padding-bottom: 80px">
          <input type="search" name="" id="" placeholder="search" />
        </div>

        <div>
          <p>"Discover a job that unlocks <br />your full potential."</p>
        </div>

        <!-- Social Media Icons -->
        <div class="social-icons">
          <a href="#" aria-label="Facebook"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="#" aria-label="LinkedIn"
            ><i class="fab fa-linkedin-in"></i
          ></a>
        </div>
      </div>
    </section>


    
    <!-- about section -->
    <section id="about">
      <div class="about">
        <div class="about1">
          <h2>YOUR IDEAL IT RECRUITMENT PARTNER</h2>

          <p style="margin-bottom: 25px">
            Nova Recruiter has been a trusted specialist in tech and
            transformation recruitment since 2005.
          </p>
          <p>
            With a well-established footprint across the United States, UK, and
            Europe, we support businesses of all sizes in expanding their teams
            effectively, ensuring the seamless execution of projects throughout
            North America.
          </p>

          <div class="list">
            <b style="font-size: 20px">Benefits for Employers:</b>
            <ul>
              <li>Expanded access to a wider talent pool</li>
              <li>Increased time and cost efficiency</li>
              <li>
                Flexible hiring solutions (temporary, contract, and permanent
                roles)
              </li>
              <li>Valuable industry insights and market trends</li>
              <li>Enhanced candidate experience and engagement</li>
              <li>Expertise in matching candidates to roles</li>
            </ul>
          </div>

          <div class="list">
            <b style="font-size: 20px">Benefits for Candidates:</b>
            <ul>
              <li>Access to exclusive job opportunities</li>
              <li>
                Personalized job matching based on skills and career goals
              </li>
              <li>Expert guidance throughout the hiring process</li>
              <li>Support with resume improvement and interview preparation</li>
              <li>Insight into industry trends and salary benchmarks</li>
              <li>Opportunities for temporary or contract work</li>
            </ul>
          </div>
        </div>
        <div><img src="/assets/about.webp" alt="" srcset="" /></div>
      </div>
    </section>

    <!-- banner section -->
    <section id="banner">
      <div class="banner">
        <a class="req" href="/login">request a call</a>
        <div class="re">
          find your ideal <br />
          position
        </div>
        <a class="req" href="#">send your resume</a>
      </div>

      <!-- banner2 -->
      <div class="banner2">
        <video autoplay muted loop playsinline class="banner_video">
          <source src="/assets/videos/ban.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <div class="overlay">
          <h2>OUR VALUES</h2>
          <div class="ban">
            <div class="bann">
              <img src="/assets/acc.webp" alt="Accountability" />
              <h2>Accountability</h2>
              <p>
                We strive for excellence with our staff, candidates and clients.
              </p>
            </div>
            <div class="bann">
              <img src="/assets/inter.webp" alt="Integrity" />
              <h2>Integrity</h2>
              <p>We will always do our best to help others.</p>
            </div>
            <div class="bann">
              <img src="/assets/team.webp" alt="Teamwork" />
              <h2>Teamwork</h2>
              <p>We build successful relationships that last.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- services -->
    <section>
      <div class="service">
        <div class="bann">
          <i class="fas fa-chalkboard-teacher fa-2x" style="color: #e74c3c"></i>
          <h1>Expert Guidance</h1>
          <p>
            ​At Nova Recruiter, we provide expert guidance to help candidates
            select the right jobs for their careers. Our knowledgeable team
            takes the time to understand each individual's skills and
            aspirations, offering tailored advice. With insights into market
            trends and company cultures, we empower candidates to make informed
            decisions for their professional growth and success.
          </p>
        </div>
        <div class="bann">
          <i class="fas fa-headset fa-2x" style="color: #3498db"></i>
          <h1>24/7 Support</h1>
          <p>
            We pride ourselves on offering 24/7 support to both our clients and
            candidates. Whether you're navigating a hiring challenge or seeking
            guidance on a new opportunity, our dedicated team is always
            available to assist you. This round-the-clock service ensures
            seamless communication, timely responses, and the flexibility to
            accommodate your needs, no matter the time zone or urgency.
          </p>
        </div>
        <div class="bann">
          <i class="fas fa-briefcase fa-2x" style="color: #2ecc71"></i>
          <h1>Empowering Opportunities</h1>
          <p>
            Dedicated to serving all individuals and businesses within our
            region of establishment. Our team connects job seekers, from recent
            graduates to seasoned professionals, with opportunities that align
            with their skills. Our commitment to inclusivity ensures that
            everyone can access our expertise, empowering them to thrive in
            their professional journeys.
          </p>
        </div>
        <div class="bann">
          <i class="fas fa-shield-alt fa-2x" style="color: #f1c40f"></i>
          <h1>Trusted & Guarantee</h1>
          <p>
            We partner with verified employers to ensure that job seekers have
            access to reliable and reputable job opportunities. Our thorough
            vetting process guarantees that all listed positions meet high
            standards for workplace culture, benefits, and growth potential.
            This commitment to quality helps candidates feel confident in their
            job search and fosters trust in the hiring process.
          </p>
        </div>
      </div>
    </section>

    <!-- banner3 -->
    <section>
      <div class="banner3">
        <p>
          If you’d like more information about our services, get in touch today.
        </p>
        <a href="http://">Get in Touch</a>
      </div>
    </section>

    <script src="/assets/js/nav.js"></script>
  </body>
</html>