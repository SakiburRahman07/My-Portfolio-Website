<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sakibur Rahman</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="images/about-us-image.jpg" />
    <link rel="stylesheet" href="blog-style.css" />
    <link rel="stylesheet" href="images/gallery.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class="main-content">
    <header class="section sec1 header active" id="home">
      <div class="header-content">
        <div class="wrapper-animation">
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
          <div class="div-bubble"><span class="dot"></span></div>
        </div>
        <div class="left-header">
          <div class="h-shape"></div>
          <div class="image">
            <img
              id="profile-picture"
              src="images/hero.jpg"
              alt="Sakibur Rahman"
            />
          </div>
        </div>
        <div class="right-header">
          <div class="logo-sakib">
            <img src="images/sakib-logo.jpeg" alt="logo" />
          </div>
          <h1 class="name">
            <span id="salam">Assalamu Alaikum, I'm</span> <br /><span
              >Md. <span style="color: red">Sakib</span>ur Rahman</span
            >
          </h1>
          <div class="text-animation">
            <p>I am a</p>
            <div class="words">
              <span>student</span>
              <span>programmer</span>
              <span>android developer</span>
              <span>web developer</span>
              <span>student</span>
            </div>
          </div>
          <p id="home-des">
          I'm currently in my third year, pursuing Computer Science and Engineering at Khulna University of Engineering and Technology.
          </p>
          <div class="btn-con">
            <a href="resume.pdf" class="main-btn">
              <span class="btn-text">Download CV</span>
              <span class="btn-icon"><i class="fas fa-download"></i></span>
            </a>

            <form action="/My portfolio website 2/crud/login.php" method="post">
            <div id="admin-btn">
              <button type="submit" action="crud/contact-me-form-recerive.php" >
                <span class="btn-text">ADMIN PANEL</span>
                <span class="btn-icon"><i class="fa-solid fa-user"></i></span>
              </button>
            </div>
          </form>

          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="section sec2 about" id="about">
        <div class="about-us-body">
          <div class="bg"></div>
          <div class="bg bg2"></div>
          <div class="bg bg3"></div>

          <div class="main-title about-us-title">
            <!-- <h2 class="heading-text-effect">About <span>me</span> </h2> -->
            <div class="heading-text-effect">
              <h2 id="second-h2">ABOUT ME</h2>
              <h2>ABOUT ME</h2>
            </div>
          </div>

          <!-- about me section with photo  -->

          <div class="about-container">
            <div class="textandimage">
              <div class="read-more-container id="readmore">

                <?php
                $conn = mysqli_connect("localhost:3307", "root", "", "portfolio") or die("Connection Failed"); 
                $sql = "SELECT about_me_description,about_me_description_2 from about_me";
                $result = mysqli_query($conn, $sql) or die("Query Failed");
                if(mysqli_num_rows($result) >
            0){ ?>

<?php
                    while($row = mysqli_fetch_assoc($result)){
                   
                    ?>

                <div class="container-readmode">
                    <p>
                    <?php echo $row['about_me_description']; ?>
                        <span class="read-more-text">
                        <?php echo $row['about_me_description_2']; ?>
                        </span>
                    </p>
                    <br>
                    <span class="read-more-btn">Read More...</span>
                </div>

                <?php } } ?>
        
                
        
            </div>

            <div class="image-section">
              <img src="images/about-us-image.jpg" alt="MSR" />
            </div>
            </div>
            <!-- <div class="content">
              <div class="article">
          

             
                <h3></h3>
                <p></p>
                <div class="button">
                  <a href="">Read More</a>
                </div>
               
              </div>
            </div> -->
           
            <div class="social">
              <a href="https://www.facebook.com/sakibur.rahman.1020"><i class="fab fa-facebook-f"></i></a>
              <a href="twitter.com"><i class="fa-brands fa-twitter"></i></a>
              <a href="instragram.com"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://github.com/SakiburRahman07"><i class="fa-brands fa-github"></i></a>
              <a href="https://codeforces.com/profile/msr11"><i class="fa-solid fa-code"></i></a>
            </div>
          </div>

          <!-- education section  -->

          <?php
                $conn = mysqli_connect("localhost:3307", "root", "", "portfolio") or die("Connection Failed"); 
                $sql = "SELECT * from education";
                $result = mysqli_query($conn, $sql) or die("Query Failed");
                if(mysqli_num_rows($result) >
            0){ ?>


          <div class="educationbody">
            <div class="container">
              <div class="heading-text-effect">
                <h2 id="second-h2">EDUCATION</h2>
                <h2>education</h2>
              </div>
              <br />
              <input type="radio" name="dot" id="one" />
              <input type="radio" name="dot" id="two" />
              <div class="main-card">
                <div class="cards">
                  <?php for($i=0; $i<3; $i++) { 
                    $rows=mysqli_fetch_assoc($result);
                    ?>
                  <div class="card">
                    <div class="content">
                      <div class="img">
                        <img src="images/<?php echo $rows['image']?>" alt="" />
                      </div>
                      <div class="details">


                      
                        <div class="name">
                          <?php echo $rows['name']; ?>
                        </div>
                        <br />
                        <div class="job">
                          <?php echo $rows['title']; ?>
                        </div>
                      </div>
                      <div class="media-icons">
                        <a href="<?php echo $rows['web']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $rows['fb']; ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $rows['twitter']; ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $rows['youtube']; ?>"><i class="fab fa-youtube"></i></a>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                 
                </div>
                <div class="cards">
                  <?php for($i=3; $i<mysqli_num_rows($result); $i++) { 
                    $rows=mysqli_fetch_assoc($result);
                    ?>
                  <div class="card">
                    <div class="content">
                      <div class="img">
                        <img src="images/<?php echo $rows['image']?>" alt="" />
                      </div>
                      <div class="details">
                        <div class="name"> <?php echo $rows['name']; ?></div>
                        <br />
                        <div class="job"> <?php echo $rows['title']; ?></div>
                      </div>
                      <div class="media-icons">
                        <a href=" <?php echo $rows['web']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href=" <?php echo $rows['fb']; ?>"><i class="fab fa-twitter"></i></a>
                        <a href=" <?php echo $rows['twitter']; ?>"><i class="fab fa-instagram"></i></a>
                        <a href=" <?php echo $rows['youtube']; ?>"><i class="fab fa-youtube"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } }?>
              </div>
              <div class="button">
                <label for="one" class="active one"></label>
                <label for="two" class="two"></label>
              </div>
            </div>
          </div>

          <!-- timeline  -->

          <div class="timelinebody">
            <br />

            <div class="heading-text-effect">
              <h2 id="second-h2">TIMELINE</h2>
              <h2>TIMELINE</h2>
            </div>
            <br />
                
            <?php
                $conn = mysqli_connect("localhost:3307", "root", "", "portfolio") or die("Connection Failed"); 
                $sql = "SELECT * from timeline";
                $result = mysqli_query($conn, $sql) or die("Query Failed");
                if(mysqli_num_rows($result) >
            0){ ?>

                    

            <div class="timeline">
            <?php
                    while($row = mysqli_fetch_assoc($result)){
                   
                    ?>
              <div class="timeline-container <?php echo $row['class']?>" >
                <img src="images/<?php echo $row['image']?>" alt="" />
                <div class="text-box">
                  <h2><?php echo $row['title'] ?></h2>
                  <small><?php echo $row['date'] ?></small>
                  <p><?php echo $row['description'] ?></p>
                  <span class="<?php echo $row['class']?>-arrow"></span>
                </div>
              </div>
                      <?php }  ?>
              <!-- <div class="timeline-container right-container">
                <img src="images/kuetLogo.png" alt="kuet" />
                <div class="text-box">
                  <h2>Jamuna College</h2>
                  <small>2018-2020</small>
                  <p>Higher Secondary Education</p>
                  <span class="right-container-arrow"></span>
                </div>
              </div>

              <div class="timeline-container left-container">
                <img src="images/kuetLogo.png" alt="kuet" />
                <div class="text-box">
                  <h2>Mohera Ananda High School</h2>
                  <small>2012-2018</small>
                  <p>Secondary Education</p>
                  <span class="left-container-arrow"></span>
                </div>
              </div>

              <div class="timeline-container right-container">
                <img src="images/kuetLogo.png" alt="kuet" />
                <div class="text-box">
                  <h2>7 no. Gobra Govt Primary School</h2>
                  <small>2008-2012</small>
                  <p>Primary Education</p>
                  <span class="right-container-arrow"></span>
                </div>
              </div> -->
            </div>
            <?php } ?>
          </div>

          <!-- skill section  -->
          <div class="heading-text-effect">
            <h2 id="second-h2">SKILLS</h2>
            <h2>SKILLS</h2>
          </div>
          <br />
          <div class="skill-container">
            <div class="skills">
              <div class="skill">
                <div class="skill-name">HTML</div>
                <div class="skill-bar">
                  <div class="skill-per" per="90%" style="max-width: 90%"></div>
                </div>
              </div>

              <div class="skill">
                <div class="skill-name">CSS</div>
                <div class="skill-bar">
                  <div class="skill-per" per="90%" style="max-width: 90%"></div>
                </div>
              </div>

              <div class="skill">
                <div class="skill-name">Javascript</div>
                <div class="skill-bar">
                  <div class="skill-per" per="85%" style="max-width: 85%"></div>
                </div>
              </div>
              <div class="skill">
                <div class="skill-name">PHP</div>
                <div class="skill-bar">
                  <div class="skill-per" per="90%" style="max-width: 90%"></div>
                </div>
              </div>

              <div class="skill">
                <div class="skill-name">ASP.NET</div>
                <div class="skill-bar">
                  <div class="skill-per" per="85%" style="max-width: 85%"></div>
                </div>
              </div>

              <div class="skill">
                <div class="skill-name">Java</div>
                <div class="skill-bar">
                  <div class="skill-per" per="92%" style="max-width: 92%"></div>
                </div>
              </div>
              <div class="skill">
                <div class="skill-name">C++</div>
                <div class="skill-bar">
                  <div class="skill-per" per="95%" style="max-width: 95%"></div>
                </div>
              </div>

              <div class="skill">
                <div class="skill-name">C</div>
                <div class="skill-bar">
                  <div class="skill-per" per="95%" style="max-width: 95%"></div>
                </div>
              </div>
            </div>

            <div class="personalskill">
              <div class="personalskill-container">
                <div class="progress" style="--i: 85; --clr: #43f94a">
                  <h3>85<span>%</span></h3>
                  <h4>Creativity</h4>
                </div>
                <div class="progress" style="--i: 75; --clr: #43f9e1">
                  <h3>75<span>%</span></h3>
                  <h4>Team Work</h4>
                </div>
                <div class="progress " style="--i: 90; --clr: #a143f9">
                  <h3>90<span>%</span></h3>
                  <h4>Project Management</h4>
                </div>
                <div class="progress" style="--i: 85; --clr: #f9bf43">
                  <h3>85<span>%</span></h3>
                  <h4>Communication</h4>
                </div>
              </div>
            </div>
          </div>

          <!-- photo gallery  -->
          <div class="gallery-body" id="gallery-background">
            <div class="heading-text-effect">
              <h2 id="second-h2">TRAVEL & <span>PHOTOGRAPHY</span></h2>
              <h2>TRAVEL & <span>PHOTOGRAPHY</span></h2>
            </div>
           

            <div class="gallery-container">
              <div class="gallery">
                <div class="img-box"><h3>CTG</h3></div>
                <div class="img-box"><h3>Sylhet</h3></div>
                <div class="img-box"><h3>Sundarban</h3></div>
                <div class="img-box"><h3>Cox's Bazar</h3></div>
              </div>
            </div>
          </div>

          <!-- Achivement  -->

          <div class="achivement-container">
            <br />
            <div class="heading-text-effect">
              <h2 id="second-h2">Achivement</h2>
              <h2>Achivement</span></h2>
            </div>
            <br />
            <div class="wrapper">
              <div class="box">
                <h3>Dean's Award</h3>
                <p>
                  Department of CSE, Khulna University of Engineering &
                  Technology
                </p>
                <!-- <a href="#"><button>learn more</button></a> -->
              </div>

              <div class="box">
                <h3>Merit Scholarship</h3>
                <p>
                  For securing position among top 3 students among Tangail
                  District, Secondary School Certificate Examination 2018
                </p>
                <!-- <a href="#"><button>learn more</button></a> -->
              </div>
              <div class="box">
                <h3>Merit Scholarship</h3>
                <p>
                  For securing position among top 10 students among Mirzapur
                  Upzilla, Junior School Certificate Examination 2015
                </p>
                <!-- <a href="#"><button>learn more</button></a> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section sec3 portfolio" id="portfolio">
        <div class="backgroundd" id="div-ani"></div>
        <div class="foregroundd" id="div-ani"></div>
        <!-- filter  -->

        <div class="project-body">
          <div class="heading-text-effect">
            <h2 id="second-h2">Project</h2>
            <h2>project</h2>
          </div>

          <br />

          <div class="filter">
            <div class="toggle-filter" onclick="toggleFilter()">
              <div class="toggle-icon"></div>
            </div>
            <div class="filter-buttons">
              <button
                onclick="filterProjects('')"
                class="gradient-bg filter-button"
              >
                All
              </button>
              <button
                onclick="filterProjects('web')"
                class="gradient-bg filter-button"
              >
                Web Development
              </button>
              <button
                onclick="filterProjects('android')"
                class="gradient-bg filter-button"
              >
               Android Development
              </button>
              <button
                onclick="filterProjects('cpp')"
                class="gradient-bg filter-button"
              >
                C++
              </button>
              <button
                onclick="filterProjects('se')"
                class="gradient-bg se filter-button"
              >
                Software Engineering
              </button>
              <button
                onclick="filterProjects('peripherals')"
                class="gradient-bg peripherals filter-button"
              >
                Peripherals
              </button>
              <button
                onclick="filterProjects('db')"
                class="gradient-bg db filter-button"
              >
                Database
              </button>
            </div>
          </div>

          <?php
                $conn = mysqli_connect("localhost:3307", "root", "", "portfolio") or die("Connection Failed"); 
                $sql = "SELECT * from project";
                $result = mysqli_query($conn, $sql) or die("Query Failed");
                if(mysqli_num_rows($result) >
            0){ ?>

          <div class="projects">

          <?php
                    while($row = mysqli_fetch_assoc($result)){
                   
                    ?>

            <div class="project" data-category="<?php echo $row['category']?>">
              <img
                src="images/<?php echo $row['image']?>"
                alt="Background Image"
                class="project-background"
              />
              <h2><?php echo $row['name']?></h2>

              <div class="project-content">
                <p><?php echo $row['description']?></p>
                <div class="project-links">
                  <a href="<?php echo $row['github']?>"
                    ><i class="fa-brands fa-github"></i
                  ></a>
                  <a href="<?php echo $row['youtube']?>"
                    ><i class="fa-brands fa-youtube"></i
                  ></a>
                </div>
              </div>
            </div>

            <?php }  ?>

         

            <!-- Add more projects as needed -->
          </div>

          <?php } ?>
        </div>
      </section>
      <section class="section sec4 blogs" id="blogs">
        <div class="blog-body">
          <header>
            <div class="nav container">
              <a  class="logo">SAKIBUR <span>RAHMAN</span></a>
              <a class="login">SR</a>
            </div>
          </header>

          <section class="home" id="home">
            <div class="home-text container">
              <h2 class="home-title">Sakib Sphere</h2>
              <span class="home-subtitle">Personal Blogging Site</span>
            </div>
          </section>

          <section class="about container" id="about">
            <div class="contentBx">
              <h2 class="titleText">Embark on a Trend-Trek: Navigating Life's Labyrinth of Latest and Greatest on My Personal Blog!</h2>
              <p class="title-text">
              Hello there! I am Md. Sakibur Rahman, currently navigating the exciting landscape of computer science and engineering at Khulna University of Engineering and Technology. My roots trace back to the enchanting town of Tangail, where every corner holds memories of my journey so far. As a student in the realm of computer science and engineering, I find myself constantly drawn to the allure of innovation and problem-solving. Beyond the algorithms and code, I cherish the vibrant tapestry of lifes experiences.


                <br />Movies are my escape, a realm where captivating narratives and visuals transport me to different worlds. Music is my constant companion, with the rhythm and melody of favorite songs serving as a backdrop to my daily adventures. Travel is my thrill, a journey of discovery that fuels my curiosity and broadens my perspective. Amidst the whirlwind of activities, I hold a deep appreciation for the people who make life special. Spending quality time with my family and friends is a treasure, grounding me in the warmth of meaningful connections. In essence, I am Md. Sakibur Rahman – not just a student but a passionate explorer of life, from the intricacies of technology to the simple joys of shared moments with loved ones.
              </p>
              
            </div>
            <div class="imgBx">
              <img src="images/about-us-image.jpg" alt="" class="fitBg" />
            </div>
          </section>

          <div class="post-filter container">
            <span class="filter-item active-filter" data-filter="all">All</span>
            <span class="filter-item" data-filter="dsa">DSA</span>
            <span class="filter-item" data-filter="android">Android Development</span>
            <span class="filter-item" data-filter="web">Web Development</span>
          </div>

          <div class="post container">
            <!-- Post 1 -->
            <div class="post-box dsa">
              <img src="images/dsa.jpg" alt="" class="post-img" />
              <h2 class="category">Tech</h2>
              <a class="post-title"
                >Decoding the Symphony of Algorithms: A Dive into the World of Data Structures and Algorithms</a
              >

              <span class="post-date">12 Feb 2024</span>
              <p class="post-description">
                In the intricate dance between computers and data, lies the heart of efficient problem-solving - Data Structures and Algorithms (DSA). As the keystones of computer science, DSA form the backbone of countless applications, from simple search algorithms to complex artificial intelligence. In this blog, we embark on a journey to unravel the elegance and power hidden within the realm of Data Structures and Algorithms.
              </p>
              <div class="profile">
                <img src="images/hero.jpg" alt="" class="profile-img" />
                <span class="profile-name">Sakib</span>
              </div>

              <!-- Form with hidden id variable -->
              <form action="showblog.php" method="POST">
                <input type="hidden" name="id" value="1">
                <button type="submit" class="blog-show-button">Read</button>
              </form>
            </div>
            <!-- Post 2 -->
            <div class="post-box android">
              <img src="images/android.jpg" alt="" class="post-img" />
              <h2 class="category">Tech</h2>
              <a class="post-title"
              >All Aboard - Setting Up Android Studio</a>
              <span class="post-date">7 Feb 2024</span>
              <p class="post-description">
              Embark on your Android development adventure by boarding the virtual express known as Android Studio. This chapter is your quick guide to setting up the essential platform that will serve as your digital canvas for crafting innovative mobile applications. Just like getting a ticket for an exciting journey, installing Android Studio marks the beginning of your immersive experience in the dynamic world of app development. So, fasten your seatbelt, as we navigate through the process, ensuring you're ready to unleash your creativity onto the digital landscape. Let the coding odyssey begin!
              </p>
              <div class="profile">
                <img src="images/hero.jpg" alt="" class="profile-img" />
                <span class="profile-name">Sakib</span>
              </div>
              <form action="showblog.php" method="POST">
                <input type="hidden" name="id" value="2">
                <button type="submit" class="blog-show-button">Read</button>
              </form>
            </div>
            <!-- Post 3 -->
            <div class="post-box web">
              <img src="images/web.jpg" alt="" class="post-img" />
              <h2 class="category">Food</h2>
              <a href="#" class="post-title"
                >Web Development Unveiled: A Quick Dive into Building the Digital Frontier</a>
              <span class="post-date">11 Nov 2023</span>
              <p class="post-description">
              Embark on the exhilarating journey of web development, where the magic of code transforms digital landscapes. Begin by setting up your coding toolkit with essential tools. Dive into the artistry of HTML and CSS, crafting visually appealing web pages. Navigate JavaScript waters to add interactivity and dynamic elements, breathing life into your creations. Explore the world of APIs and data handling to infuse your projects with real-time information. Sail smoothly through testing and debugging, ensuring your web endeavors are free of glitches. As you conclude this quick guide, remember that every click, scroll, and interaction is fueled by lines of code. So, armed with the basics, let curiosity be your compass, and set forth into the exciting realm of web development. Happy coding!
              </p>
              <div class="profile">
                <img src="images/hero.jpg" alt="" class="profile-img" />
                <span class="profile-name">Sakib</span>
              </div>
              <form action="showblog.php" method="POST">
                <input type="hidden" name="id" value="3">
                <button type="submit" class="blog-show-button">Read</button>
              </form>
            </div>
          
           
          </div>

          <footer>
            <div class="footer-container">
              <div class="sec aboutus">
                <h2>About Us</h2>
                <p>
                Passionate blogger sharing insights and experiences to inspire and connect with readers on a journey of self-discovery and growth. Welcome to my world of words!
                </p>
                <ul class="sci">
                  <li>
                    <a href="https://www.facebook.com/sakibur.rahman.1020"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="https://instragram.com"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="https://github.com/SakiburRahman07"><i class="fa-brands fa-github"></i></a>
                  </li>
                </ul>
              </div>
              <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                  <li><a href="https://youtube.com">YOUTUBE</a></li>
                  <li><a href="https://kuet.ac.bd">KUET</a></li>
                </ul>
              </div>
              <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                  <li>
                    <span><i class="bx bxs-map"></i></span>
                    <span
                      >Tangail, Dhaka,  <br />
                      Bangladesh </span
                    >
                  </li>
                  <li>
                    <span><i class="bx bx-envelope"></i></span>
                    <p>
                      <a href="mailto:rahman2007007@stud.kuet.ac.bd"
                        >rahman2007007@stud.kuet.ac.bd</a
                      >
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </footer>

          <script src="blog-script.js"></script>
        </div>
      </section>
      <section class="section sec5 contact" id="contact">
        <div class="container-animation">
          <div class="inner-div-animation">
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
          </div>
        </div>

        <div class="contact-container">
          <div class="main-title">
            <div class="heading-text-effect">
              <h2 id="second-h2">Contact me</h2>
              <h2>contact me</h2>
            </div>
          </div>
          <div class="contact-content-con">
            <div class="left-contact">
              <h4>Contact me here</h4>
              <p>
              Passionate and creative individual with a love for learning, exploring diverse interests, and connecting with others through the power of words.
              </p>
              <div class="contact-info">
                <div class="contact-item">
                  <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Location</span>
                  </div>
                  <p>:Tangail, Dhaka, Bangladesh</p>
                </div>
                <div class="contact-item">
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                    <span>Email</span>
                  </div>
                  <p>
                    <span>: rahman2007007@studbd</span>
                  </p>
                </div>
                <div class="contact-item">
                  <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                    <span>Education</span>
                  </div>
                  <p>
                    <span>:KUET</span>
                  </p>
                </div>
                <div class="contact-item">
                  <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                    <span>Mobile Number</span>
                  </div>
                  <p>
                    <span>: 01794111768</span>
                  </p>
                </div>
                <div class="contact-item">
                  <div class="icon">
                    <i class="fas fa-globe-africa"></i>
                    <span>Languages</span>
                  </div>
                  <p>
                    <span>: Bangla, English, Hindi</span>
                  </p>
                </div>
              </div>
              <div class="contact-icons">
                <div class="contact-icon">
                  <a href="www.facebook.com" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="fab fa-github"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="fab fa-youtube"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="right-contact">
              <form action="crud/contact-me-form-recerive.php" method="POST" class="contact-form">
                <div class="input-control i-c-2">
                  <input type="text" name="name" required placeholder="YOUR NAME" />
                  <input type="email" name="email" required placeholder="YOUR EMAIL" />
                </div>
                <div class="input-control">
                  <input type="text" name="subject" required placeholder="ENTER SUBJECT" />
                </div>
                <div class="input-control">
                  <textarea
                    name="messege"
                    id=""
                    cols="15"
                    rows="8"
                    placeholder="Message Here..."
                  ></textarea>
                </div>
                <div class="submit-btn">
                  <button type="submit" action="crud/contact-me-form-recerive.php"  class="main-btn">
                    <span class="btn-text">SUBMIT</span>
                    <span class="btn-icon"
                      ><i class="fa-solid fa-envelope-circle-check"></i></span>
                  </button>
                </div>
              </form>
            </div>
          </div>

          





        </div>
      </section>
    </main>

    <div class="controlls">
      <div class="control btn control-1 active-btn" data-id="home">
        <i class="fas fa-house"></i>
      </div>
      <div class="control btn control-2" data-id="about">
        <i class="fas fa-address-card"></i>
      </div>
      <div class="control btn control-3" data-id="portfolio">
        <i class="fas fa-user-tie"></i>
      </div>
      <div class="control btn control-4" data-id="blogs">
        <i class="fas fa-blog"></i>
      </div>
      <div class="control btn control-5" data-id="contact">
        <i class="fas fa-address-book"></i>
      </div>
    </div>

    <div class="theme-btn btn">
      <i class="fas fa-adjust"></i>
    </div>

    <script src="images/scroll.js"></script>

    <script src="script.js"></script>
  </body>
</html>
