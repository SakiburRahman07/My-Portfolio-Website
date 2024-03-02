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
            I'm a Web Developer, I love to create beautiful and functional
            websites. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Officia, libero? Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Neque blanditiis sed aut!
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
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
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
                        <img src="images/kuetLogo.png" alt="" />
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
                        <img src="images/kuetLogo.png" alt="" />
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
                <img src="images/kuetLogo.png" alt="kuet" />
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
                  <div class="skill-per" per="70%" style="max-width: 70%"></div>
                </div>
              </div>

              <div class="skill">
                <div class="skill-name">Javascript</div>
                <div class="skill-bar">
                  <div class="skill-per" per="60%" style="max-width: 60%"></div>
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
                  <div class="skill-per" per="70%" style="max-width: 70%"></div>
                </div>
              </div>

              <div class="skill">
                <div class="skill-name">Java</div>
                <div class="skill-bar">
                  <div class="skill-per" per="60%" style="max-width: 60%"></div>
                </div>
              </div>
              <div class="skill">
                <div class="skill-name">C++</div>
                <div class="skill-bar">
                  <div class="skill-per" per="70%" style="max-width: 70%"></div>
                </div>
              </div>

              <div class="skill">
                <div class="skill-name">C</div>
                <div class="skill-bar">
                  <div class="skill-per" per="60%" style="max-width: 60%"></div>
                </div>
              </div>
            </div>

            <div class="personalskill">
              <div class="personalskill-container">
                <div class="progress" style="--i: 85; --clr: #43f94a">
                  <h3>85<span>%</span></h3>
                  <h4>Creativity</h4>
                </div>
                <div class="progress" style="--i: 62; --clr: #43f9e1">
                  <h3>62<span>%</span></h3>
                  <h4>Team Work</h4>
                </div>
                <div class="progress less" style="--i: 35; --clr: #a143f9">
                  <h3>35<span>%</span></h3>
                  <h4>Project Management</h4>
                </div>
                <div class="progress" style="--i: 78; --clr: #f9bf43">
                  <h3>78<span>%</span></h3>
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
                <div class="img-box"><h3>Sylhet</h3></div>
                <div class="img-box"><h3>Sylhet</h3></div>
                <div class="img-box"><h3>Sylhet</h3></div>
                <div class="img-box"><h3>Sylhet</h3></div>
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
                  District, Secondary School Certificate Examination 2015
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

          <div class="projects">
            <div class="project" data-category="web">
              <img
                src="images/about-us-image.jpg"
                alt="Background Image"
                class="project-background"
              />
              <h2>Web Project 1</h2>

              <div class="project-content">
                <p>Description of the project...</p>
                <div class="project-links">
                  <a href="https://github.com"
                    ><i class="fa-brands fa-github"></i
                  ></a>
                  <a href="https://youtube.com"
                    ><i class="fa-brands fa-facebook"></i
                  ></a>
                </div>
              </div>
            </div>

            <!-- Add more projects as needed -->
          </div>
        </div>
      </section>
      <section class="section sec4 blogs" id="blogs">
        <div class="blog-body">
          <header>
            <div class="nav container">
              <a href="#" class="logo">Code <span>myhobby</span></a>
              <a href="#" class="login">Sign Up</a>
            </div>
          </header>

          <section class="home" id="home">
            <div class="home-text container">
              <h2 class="home-title">Trend Blogger</h2>
              <span class="home-subtitle">Your source of great content</span>
            </div>
          </section>

          <section class="about container" id="about">
            <div class="contentBx">
              <h2 class="titleText">Catch up with the trending topics</h2>
              <p class="title-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                eos consequuntur voluptate dolorum totam provident ducimus
                cupiditate dolore doloribus repellat. Saepe ad fugit similique
                quis quam. Odio suscipit incidunt distinctio.
                <br />Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Sed blanditiis libero pariatur ipsum suscipit voluptates aut,
                repellendus quos dolor autem, natus laboriosam consectetur
                maxime cumque, sunt magni optio? Veritatis, ea?
              </p>
              <a href="#" class="btn2">Read more</a>
            </div>
            <div class="imgBx">
              <img src="images/about.png" alt="" class="fitBg" />
            </div>
          </section>

          <div class="post-filter container">
            <span class="filter-item active-filter" data-filter="all">All</span>
            <span class="filter-item" data-filter="tech">Tech</span>
            <span class="filter-item" data-filter="food">Food</span>
            <span class="filter-item" data-filter="news">News</span>
          </div>

          <div class="post container">
            <!-- Post 1 -->
            <div class="post-box tech">
              <img src="images/img1.jpg" alt="" class="post-img" />
              <h2 class="category">Tech</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
            <!-- Post 2 -->
            <div class="post-box food">
              <img src="images/img2.jpg" alt="" class="post-img" />
              <h2 class="category">Tech</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
            <!-- Post 3 -->
            <div class="post-box food">
              <img src="images/img3.jpg" alt="" class="post-img" />
              <h2 class="category">Food</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
            <!-- Post 4 -->
            <div class="post-box news">
              <img src="images/img4.jpg" alt="" class="post-img" />
              <h2 class="category">Tech</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
            <!-- Post 5 -->
            <div class="post-box tech">
              <img src="images/img5.jpg" alt="" class="post-img" />
              <h2 class="category">Tech</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
            <!-- Post 6 -->
            <div class="post-box news">
              <img src="images/img4.jpg" alt="" class="post-img" />
              <h2 class="category">News</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
            <!-- Post 7 -->
            <div class="post-box tech">
              <img src="images/img7.jpg" alt="" class="post-img" />
              <h2 class="category">Tech</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
            <!-- Post 1 -->
            <div class="post-box news">
              <img src="images/img8.jpg" alt="" class="post-img" />
              <h2 class="category">News</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
            <!-- Post 9 -->
            <div class="post-box food">
              <img src="images/img10.jpg" alt="" class="post-img" />
              <h2 class="category">Food</h2>
              <a href="#" class="post-title"
                >How to create the best UI with Figma</a
              >
              <span class="post-date">12 Feb 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur, similique, rerum excepturi harum, vitae facilis
                corrupti vel modi debitis est perferendis aut quasi ea unde
                repudiandae iste architecto. Corporis, voluptates.
              </p>
              <div class="profile">
                <img src="images/testi1.jpg" alt="" class="profile-img" />
                <span class="profile-name">MKHB</span>
              </div>
            </div>
          </div>

          <footer>
            <div class="footer-container">
              <div class="sec aboutus">
                <h2>About Us</h2>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Ducimus quisquam minus quo illo numquam vel incidunt pariatur
                  hic commodi expedita tempora praesentium at iure fugiat ea,
                  quam laborum aperiam veritatis.
                </p>
                <ul class="sci">
                  <li>
                    <a href="#"><i class="bx bxl-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="bx bxl-linkedin"></i></a>
                  </li>
                </ul>
              </div>
              <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                </ul>
              </div>
              <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                  <li>
                    <span><i class="bx bxs-map"></i></span>
                    <span
                      >6444 London street <br />
                      Brighton PA 33445 <br />
                      Uk</span
                    >
                  </li>
                  <li>
                    <span><i class="bx bx-envelope"></i></span>
                    <p>
                      <a href="mailto:codemyhobby9@gmail.com"
                        >Codemyhobby9@gmail.com</a
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                laborum numquam? Quam excepturi perspiciatis quas quasi.
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
