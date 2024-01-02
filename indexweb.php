<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bishal-WebDesigner-Programmer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style type="text/css">
    </style>
    <style>

th{
    text-align: left;
}

.col-md-6 {
    display: flex;
    flex-wrap: wrap;
}

.skill-box {
    margin-top: 15px;
    width: 100%;
    padding: 15px;
  /*  margin-bottom: 15px;
   /* border: 1px solid #ccc;
    box-sizing: border-box; */
    position: relative;
}  

.skill-name {
    font-weight: bold;
    margin-bottom: 10px;
}

.skill-progress {
    height: 20px;
    background-color: #757574;
    border-radius: 5px;
    position: relative;
}

.progress-bar {
    height: 100%;
    border-radius: 5px;
    background-color: #faea07;
    position: absolute;
    top: 0;
    left: 0;
}

.progress-label {
    position: absolute;
    top: 45%;
    left: 88%;
    transform: translate(-50%, -50%);
    color: #ffffff;
}

h5{
color: gold;
font-size: 30px;
font-weight: bold;
font-family: 'Times New Roman', Times, serif;
}
.navbar2 {
    text-align: center;

    padding: 15px 0;
}

.navbar2 li {
    display: inline-block;
    margin: 0 15px;
    color: #fff;
    text-decoration: none;
    cursor: pointer;
}

.navbar li.active-tab {
    color: yellow;
}

.portfolio {
    text-align: center;
    padding: 20px;
}

.project {
    display: none;
    margin-top: -15px;
}

.project.active {
    display: block;
}

.project img {
    width: 30%;
    margin-top: 20px ;
  /*  margin: 0 1%; */
    box-sizing: border-box;
    cursor: pointer;
}

.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
}

.modal-content {
    max-width: 80%;
    max-height: 80%;
    margin: auto;
    position: relative;
}

.modal-content img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.close {
    position: absolute;
    top: 15px;
    right: 15px;
    color: #fff;
    font-size: 32px;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.close:hover {
    transform: scale(1.2);
}

.contact-info .row2 p{
    text-align: left;
}
.contact-info h6{
    text-align: left;
}


footer {
  margin-top: 20px;
  width: 100%;
  background-color: #1e1e1e; /* Set your darker footer background color */
  /* Set your top border color */
  color: #fff; /* Set text color to white or any other color that suits your design */
  padding: 20px;
  text-align: center;
}

    </style>
</head>
<body>
    <!--Navigation bar-->
      <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar fixed-top bg-body-tertiary">
            <div class="container-fluid">
              <h1><b>B</b> L A Z E</h1>
              <ul>
                <li class="nav-item">
                    <a class="navbar-brand section-link" href="#home">Home</a>
                    <a class="navbar-brand section-link" href="#about">About</a>
                    <a class="navbar-brand section-link" href="#skill">Skill</a>
                    <a class="navbar-brand section-link" href="#services">Services</a>
                    <a class="navbar-brand section-link" href="#contact">Contact Me</a>
              </li>
              </ul>
            </div>
      </nav>
<!-- Animation-->
<div class="banner-card" id="home">
      <div class="banner-card">
        <img src="blaz.jpg" alt="">
        <div class="banner-text">
          <h3>I AM <b>BLAZE</b> !!!</h3>
         <div class="wrapper">
        <div class="static-text">I AM A</div>
          <ul class="dyamic-text">
            <li><span>YOUTUBER</span></li>
            <li><span>DESIGNER</span></li>
            <li><span>DEVELOPER</span></li>
            <li><span>FREELINCER</span></li>
          </ul>
         </div>
         <p>When GOD Wants you to grow,He makes you uncomfortable</p>
         
        </div>
        </div> 
    </div>
      
      <!--Navigation bar end-->
      <!--My Intro-->
      <!--<video autoplay loop muted plays-inline class="vedio">
        <source src="hdk.mp4" type="video/mp4">
      </video> -->
    
      <!--About Section-->
   
      <div class="container" id="about">
        <div class="container">
          <h3>----ABOUT-----</h3> 
          
          <div class="row">
            <div class="col-md-12">
              <h4>ABOUT MYSELF</h4>
            </div>
            <div class="col-md-12">
              <p> Your Story May Not Have Such A Happy Beginning But That Doesnt Define Who You are
              It is The Rest of your Story Who You Choose to be
             </p>
            </div>
              <div class="col-md-6">
                  <p>I'm A It Student. Currently Bachleor Running , I have done html and css course from https://chaudharyprakash.com.np/ (Mr.Prakash Sir)
                    I have A Decent Knowledge About Web Development.
                    <p>I am Mastered In Basic & Diploma in Computer. Also I Am A Graphic Designer, Vedio editor.
                    I am Tuition Teacher of Secondary level Student.</p>
                    <p>I was a Science Student in High School.I Pass out My High School from Aadarsh Secondary School Located in Surkhet Road,Nepalgunj-Banke
                    https://www.adarshsschoolnpj.edu.np/ With GPA of 2.97.</p> 
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut veritatis sequi voluptatum aut, facere eveniet est quisquam consectetur tempora labore nostrum porro minus laborum dignissimos aperiam eius accusantium. Exercitationem minus temporibus cumque.</p>
                    <table >
                      <thead>
                          <tr>
                              <th>Name: Bishal Khanal</th>
                              <th>Contact:  9804550747</th>
                          </tr>
                      </thead>
                      
                      <thead>
                          <tr>
                              <th>Email:  meblaze502@gmail.com</th>
                              <th>Address:  Kohalpur Banke, Nepalgunj</th>
                          </tr>
                      </thead>
                      
                  </table>
              
              </div>
              
              <div class="col-md-6">
                <img width="500" height="500"  src="blaze.jpg">
              </div>


          </div>
      </div>  
      </div>
<!--About Section End-->
      <!-- Skill Section-->
       
    <div class="container" id="skill">
      <div class="container">
        <h2>-----SKILL-----</h2>
        <div class="row">
          <div class="col-md-12">
              <h4>KNOWLEDGE/DEVELOPMENT SKILL</h4>
          </div>
          <div class="col-md-12">
            <P>An Investment in Skill Development Pays The Best Intrest</P>
        </div>
        <div class="col-md-6">
          <h5>About My Professional Skill</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id ab impedit veniam omnis saepe doloribus ipsa quas sunt voluptatum, esse excepturi et cumque minus mollitia libero! Quo quis quos necessitatibus asperiores ducimus odit sint!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum minima unde natus porro consectetur illo voluptatibus fugit nisi accusantium commodi?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio at deserunt maiores veniam sint incidunt tenetur magni, a possimus mollitia animi. Assumenda perspiciatis temporibus sunt maxime hic alias sed it</p>
</div>

<div class="col-md-6">
  <div class="skill-box">
      <div class="skill-name">BASIC COMPUTER</div>
      <div class="skill-progress">
          <div class="progress-bar" style="width: 98%;"></div>
      </div>
      <div class="progress-label">98%</div>
  </div>

  <div class="skill-box">
      <div class="skill-name">Web-Design</div>
      <div class="skill-progress">
          <div class="progress-bar" style="width:75%;"></div>
      </div>
      <div class="progress-label">75%</div>
  </div>

  <div class="skill-box">
      <div class="skill-name">Graphic-Design</div>
      <div class="skill-progress">
          <div class="progress-bar" style="width: 90%;"></div>
      </div>
      <div class="progress-label">90%</div>
  </div>

  <div class="skill-box">
      <div class="skill-name">C Language</div>
      <div class="skill-progress">
          <div class="progress-bar" style="width: 80%;"></div>
      </div>
      <div class="progress-label">80%</div>
  </div>

  <div class="skill-box">
      <div class="skill-name">C++ Language</div>
      <div class="skill-progress">
          <div class="progress-bar" style="width: 60%;"></div>
      </div>
      <div class="progress-label">60%</div>
  </div>

  <div class="skill-box">
      <div class="skill-name">Laundi-Baji(Love Guru)</div>
      <div class="skill-progress">
          <div class="progress-bar" style="width: 100%;"></div>
      </div>
      <div class="progress-label">100%</div>
  </div>
</div>
</div>
        </div>
        </div>
<!--Skill Section end-->
<!--Experience Section -->

          <div class="main-container">
              <div class="container">
                  <div class="icon"><img src="llo.png" alt=""></div>
                  <h5>4+</h5>
                  <p>years of Experience</p>
              </div>
          
              <div class="container">
                  <div class="icon"><img src="iol.png" alt=""></div>
                  <h5>15+</h5>
                  <p>projects done</p>
              </div>
          
              <div class="container">
                  <div class="icon">😊</div>
                  <h5>50+</h5>
                  <p>clients</p>
              </div>
          </div>
<!--Experence Section end-->
  <!--Services Section-->        
  <div class="container" id="services">
<div class="container">
  <h3>-----Services-----</h3>
  <div class="row">
    <div class="col-md-12">
      <h4>WHAT I DO</h4>
      <p>One day you will wake up and there won't be any more time to do the things you've always wanted to do. So do it now.</p>
    </div>
    <div class="container2">
      <div class="box">
        <h2>01.</h2>
        <h3>WEB DESIGN</h3>
        <div class="icon"><img src="hola.png" alt=""></div>
        <p>Our approach to website design is to create a website that strengthens your company’s brand while ensuring ease of use and simplicity for your audience.</p>
      </div>
    
      <div class="box">
        <h2>02.</h2>
        <h3>GRAPHIC-DESIGN</h3>
        <div class="icon"><img src="hora.png" alt=""></div>
        <p>Our goal is to design a professional yet creative banner, logo that reflects your company’s spirit and leaves a lasting, memorable effect.</p>
      </div>
    
      <div class="box">
        <h2>03.</h2>
        <h3>VEDIO-EDITING</h3>
        <div class="icon"><img src="kina.png" alt=""></div>
        <p>Our passion lies in transforming ordinary footage into extraordinary stories, making your visuals captivating and unforgettable.</p>
      </div>
    </div>
    
  </div>
</div>
</div>
<!--Services Section Is end -->

<!--Portfolio-->
 
<div class="container" id="portfolio">
<div class="container">
  <H3>----Portfolio----</H3>
  <div class="row">
    <div class="col-md-12">
      <H4>RECENT-PROJECT</H4>
      <p>If your actions inspire others to dream more, learn more, do more and become more, you are a leader..</p>
    </div>
   <div class="col-md-12">
    <div class="navbar2">
      <ul>
          <li onclick="filterProjects('all')" class="active-tab">All</li>
          <li onclick="filterProjects('personal')">Personal</li>
          <li onclick="filterProjects('professional')">Professional</li>
      </ul>
  </div>

  <div class="portfolio">
      <div class="row project all active">
          <!-- All projects go here -->
          <img src="blaz.jpg" alt="Project 1" onclick="openModal('blaz.jpg')">
          <img src="blaze.jpg" alt="Project 2" onclick="openModal('blaze.jpg')">
          <img src="ooo.jpeg" alt="Project 3" onclick="openModal('ooo.jpeg')">
          <img src="hola.png" alt="Personal Project 1" onclick="openModal('hola.png')">
          <img src="hora.png" alt="Personal Project 2" onclick="openModal('hora.png')">
          <img src="kina.png" alt="Personal Project 3" onclick="openModal('kina.png')">
          <!-- Add more images as needed -->
      </div>
      <div class="row project personal">
          <!-- Personal projects go here -->
          <img src="hola.png" alt="Personal Project 1" onclick="openModal('hola.png')">
          <img src="hora.png" alt="Personal Project 2" onclick="openModal('hora.png')">
          <img src="kina.png" alt="Personal Project 3" onclick="openModal('kina.png')">
          <!-- Add more images as needed -->
      </div>
      <div class="row project professional">
          <!-- Professional projects go here -->

          <img src="iol.png" alt="Professional Project 1" onclick="openModal('iol.png')">
          <img src="poll.jpg" alt="Professional Project 2" onclick="openModal('poll.jpg')">
          <img src="llo.png" alt="Professional Project 3" onclick="openModal('llo.png')">
          <!-- Add more images as needed -->
      </div>
  </div>

  <div id="myModal" class="modal">
      <div class="modal-content">
          <span class="close" onclick="closeModal()">&times;</span>
          <img id="modalImage" src="" alt="Modal Image">
      </div>
  </div>

  <script>
      function filterProjects(category) {
          // Update active tab
          document.querySelectorAll('.navbar2 li').forEach(function(tab) {
              tab.classList.remove('active-tab');
          });

          // Highlight the active tab
          event.currentTarget.classList.add('active-tab');

          // Hide all projects
          document.querySelectorAll('.project').forEach(function(project) {
              project.classList.remove('active');
          });

          // Show projects based on category
          document.querySelectorAll('.project.' + category).forEach(function(project) {
              project.classList.add('active');
          });
      }

      function openModal(imageSrc) {
          var modal = document.getElementById('myModal');
          var modalImage = document.getElementById('modalImage');
          modal.style.display = 'flex';
          modalImage.src = imageSrc;
      }

      function closeModal() {
          var modal = document.getElementById('myModal');
          modal.style.display = 'none';
      }
  </script>


  </div>
  </div>
  </div>
</div>

<!--Contact Section-->

<div class="container fade-in" id="contact">
<div class="container">
    <H3>----Contact Me----</H3>
    <div class="row">
        <div class="col-md-12">
            <h4>GET IN TOUCH</h4>
            <p1>Life becomes a celebration when friends keep in touch, so let’s celebrate our life by keeping in touch with each other.</p1>
        </div>
        <div class="col-md-4">
            <div class="contact-info">
                <div class="row2">
                    <div class="col-md-12">
                        <h6>Email</h6>
                        <p class="email">bkhanal054@gmail.com</p>
                    </div>
                </div>
                <div class="row2">
                    <div class="col-md-12">
                        <h6>Phone</h6>
                        <p class="number">9804550747</p>
                    </div>
                </div>
                <div class="row2">
                    <div class="col-md-12">
                        <h6>Address</h6>
                        <p class="address">Kohalpur-8, Banke</p>
                    </div>
                </div>
                <div class="row2">
                    <div class="col-md-12">
                        <h6>Social Media</h6>
                        <p class="social-icons">
                            <a href="https://www.facebook.com/your-facebook-profile" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="https://www.instagram.com/your-instagram-profile" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                            <a href="https://www.youtube.com/your-youtube-channel" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                            <a href="https://www.twitter.com/your-twitter-profile" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <form action="index.php" method="post">
                <div class="form-group">

                    <input type="text" name="name" class="form-control"  id="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                 
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                </div>
                <div class="form-group">
                  
                    <input type="text" name="number" class="form-control"  id="contact" placeholder="Number">
                </div>
                <div class="form-group">
                  
                    <input type="email" name="email" class="form-control"  id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                 
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary">Send Message</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

</div>
</div>
<!-- Contact Section end-->

<!--Footer section-->

<footer>
   Copyright &copy; 2023 &copy; Bishal-WebDesigner-Programmer
  </footer>


 <!--Footer Section End-->


 <script>
// Add fade-in animation to sections
$(window).scroll(function () {
  $(".fade-in").each(function () {
    var position = $(this).offset().top;
    var scroll = $(window).scrollTop();
    if (position < scroll + $(window).height()) {
      $(this).addClass("visible");
    }
  });
});
 </script>


</body>
</html>

