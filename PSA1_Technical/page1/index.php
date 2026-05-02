<?php
//general information
  $firstName = "Alezzandra Isabel";
  $lastName = "Gregorio";
  $userAge = 20;
  $course = "BS Information Technology";
  $specialization = "Cybersecurity";
  $university = "FEU Institute of Technology";

//contacts
  $personalEmail = "gregorio.alezzandra@gmail.com";
  $schoolEmail = "abgregorio@fit.edu.ph"

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Me</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jersey+20&display=swap" rel="stylesheet" />

  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Jersey 20", sans-serif;
}

body {
    height: 100vh;
    background-color: black;
    color: white;
    display: flex;
}

.layout {
    display: flex;
    width: 100%;
}

.sidebar {
    padding: 2rem 1rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    border-right: 2px solid #0a24fe;
    min-width: 220px;
    align-items: center;
    justify-content: center;
}

.nav-btn {
    text-align: center;
    padding: 1rem;
    width: 100%;
    max-width: 180px; 
    color: #f9ff00;
    border: 2px solid #0a24fe;
    background-color: black;
    text-decoration: none;
    transition: all 0.3s ease;
    cursor: pointer;
    animation: scale 1s;
}

.bot-btn {
    display: flex;
    gap: 10px;
    flex-wrap: nowrap;
}

.nav-btn:hover {
    background-color: #f9ff00;
    color: black;
    border-color: #f9ff00;
}

.content {
    flex: 1.5;
    padding: 3rem;
    animation: fadeIn 1s ease-in-out;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.screen {
    border: #0a24fe 2px solid;
    height: 100%;
}

.content h1 {
    font-size: 1.7rem;
    color: #f9ff00;
    background-color: #0a24fe;
    text-align: center;
}

.profile {
    max-width: 25%;
    max-width: 150px;
    height: auto;
    display: block;
    margin: 1rem auto;
    border: #0a24fe 2px solid;
}

.screen {
    border: #0a24fe 2px solid;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow-y: auto;
    scroll-behavior: smooth;
    padding-bottom: 3rem;
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 1rem;
    padding: 2em;
    color: white;
    font-size: 0.9rem;
}

td {
    padding: 1rem;
    vertical-align: top;
    border: 1px solid #0a24fe;
    background-color: rgba(10, 36, 254, 0.1);
    font-family: Verdana, Geneva, Tahoma, sans-serif; 
}   


.intro-section {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
}

.profile {
    width: 150px;
    height: auto;
    border: #0a24fe 2px solid;
    margin-bottom: 1rem;
}

.head {
    font-size: 2rem;
    color: #f9ff00;
    background-color: #0a24fe;
    width: 100%;
}

.intro-text h2 {
    padding-top: 5%;
    font-size: 1rem;
    letter-spacing: 2px;
}

.name {
    color: #f9ff00;
    font-size: 1.5rem;
}

.intro-text h4 {
    max-width: 500px;
    font-size: .8rem;
    line-height: 1.6;
    margin-top: 0.5rem;
    color: white;
    letter-spacing: 1px;
    font-family: Verdana, Geneva, Tahoma, sans-serif
}

.section-nav {
    padding-top: 5%;
}

#education, #extra-curriculars, #achievements, #contacts {
    padding-top: 3rem;
    margin-top: 3rem;
    width: 100%;
    max-width: 800px;
}

.scroll-top {
    position: fixed;
    bottom: 4.5rem;
    right: 5rem;
    background-color: #f9ff00;
    color: black;
    border: 2px solid #0a24fe;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 999;
}

.scroll-top:hover {
    background-color: #c6cc00;
}

#achievements {
    text-align: center;
}

#achievements img {
    margin: 1rem;
    width: auto;
    height: 15rem;
    border: #0a24fe 2px solid;
    margin-bottom: 1rem;
    left: 50%;
}

.images {
    transition: transform 0.3s ease;
    max-width: 20rem;
    width: 45%;
    aspect-ratio: 4 / 3;
    object-fit: cover;
    border: 0.2rem solid #0a24fe;
}

.images:hover {
  transform: scale(1.5);
}


@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scale {
    0% {
        transform:scale(.70);
        opacity: 0;
    }
    100% {
        transform:scale(1);
        opacity: 1;
    }
}

::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  background: black;
  border-left: 2px solid #0a24fe;
}

::-webkit-scrollbar-thumb {
  background-color: #f9ff00;
  border: 2px solid #0a24fe;
}

::-webkit-scrollbar-thumb:hover {
  background-color: #c6cc00;
}
  </style>
</head>
<body>
  <div class="layout">
    <!-- <aside class="sidebar">
      <a href="" class="nav-btn">About Me</a>
      <a href="" class="nav-btn">Hobbies and Skills</a>
      <a href="" class="nav-btn">Organizations</a>
      <a href="" class="nav-btn">Gallery</a>
      <div class="bot-btn">
        <a href="" class="nav-btn">Exit</a>
        <a href="" class="nav-btn">Nav</a>
      </div>
    </aside> -->

    <main class="content">
      <div class="screen">
        <h1 class="head">About Me</h1>
        <div class="intro-section">
          <div class="intro-text">
            <img src="../assets/img/profile.jpg" alt="Profile Image" class="profile" />
            <h2>Hi! I am <span class="name"><?php echo $firstName . " " . $lastName; ?></span></h2>
            <h4>
              I am a <?php echo $course; ?> student specializing in <?php echo $specialization; ?> at <?php echo $university; ?>.
              I aim to improve my knowledge and skills to achieve my goals in life.
            </h4>
          </div>

          <nav class="section-nav">
          <a class="nav-btn" href="#education">Education</a>
          <a class="nav-btn" href="#extra-curriculars">Extra-Curriculars</a>
          <a class="nav-btn" href="#achievements">Achievements</a>
          <a class="nav-btn" href="#contacts">Contacts</a>
        </nav>
      </div>
          <div id="education">
            <h1>Education</h1>
            <table>
              <tr>
                <td>2022 - 2024</td>
                <td>STI Ortigas-Cainta Campus
                <br>Senior High School
                <br>Mobile App and Web Development Program</td>
              </tr>
              <tr>
                <td>2018 - 2021</td>
                <td>Cainta Catholic College
                <br>A. Bonifacio Ave., Poblacion Cainta, Rizal
              </tr>
            </table>
          </div>
          <div id="extra-curriculars">
            <h1>Extra-Curricular Activities</h1>
            <table>
              <tr>
                <td>June 1-2, 2023</td>
                <td>ICT Expo (Fair Guide)</td>
              </tr>
            </table>
          </div>
          <div id="achievements">
            <h1>Achievements</h1>
            <img class="images" src="../assets/img/recognition.jpg" alt="grade 11 recognition cetificate">
            <img class="images" src="../assets/img/comprog5.jpg" alt="comprog 5 Certificate">
            <img class="images" src="../assets/img/mobileApp.jpg" alt="mobile app certificate">
            <img class="images" src="../assets/img/cetification.jpg" alt="HTML and CSS certificate">
          </div>
          <div id="contacts">
            <h1>Contacts</h1>
            <table>
              <tr>
                <td>Personal Email</td>
                <td><?php echo $personalEmail; ?></td>
              </tr>
              <tr>
                <td>School Email</td>
                <td><?php echo $schoolEmail; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <button class="scroll-top" onclick="scrollToTop()">↑</button>
    </main>
  </div>
  <script src="assets/js/scripts.js"></script>
</body>
</html>
<script>
  function scrollToTop() {
    document.querySelector('.screen').scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
</script>