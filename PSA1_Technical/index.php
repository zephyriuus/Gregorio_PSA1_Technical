<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Jersey 20", sans-serif;
}

html, body {
    height: 100dvh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
}

.fullscreen-img {
    object-fit: cover;
    height: 100%;
    display: block;
    position: absolute;
    z-index: -1;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;

    display: flex;
    flex-direction: column;
    align-items: center;
}


.title {
    max-width: 60%;
    animation: slideDown 1s;
}

.title:hover {
    transform:scale(1.08);
    transition: transform 0.2s ease-in-out;
}

.play-btn {
    background-color: black;
    color: #f9ff00;
    border: 2px solid #0a24fe;
    text-decoration: none;
    font-size: 1.5rem;
    letter-spacing: 2px;
    padding: 0.5rem 1.5rem;
    font-weight: bold;
    transition: background 0.3s, color 0.3s;
    display: inline-block;
    animation: scale 1s;
}

.play-btn:hover {
    background-color: #f9ff00;
    border: 2px solid #f9ff00;
    color: black;
    transform:scale(1.08);
    transition: transform 0.2s ease-in-out;
}

#jump {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: -1;
  pointer-events: none;
}

#jump.animate {
  display: block;
}

.jade {
  max-width: 100%;
  border-radius: 10px;
  animation: jadeHi 1.5s ease forwards;
}

#jump.animate .jade {
  animation: jadeHi 1.5s ease forwards;
}

audio {
  display: none;
}

@keyframes jadeHi {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  60% {
    transform: scale(4);
    opacity: 0;
    z-index: 9999;
  }
  100% {
    transform: scale(1);
    opacity: 0;
    z-index: 0;
  }
}

@keyframes slideDown {
    0% {
        transform: translateY(-10%);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes scale {
    0% {
        transform:scale(.80);
        opacity: 0;
    }
    100% {
        transform:scale(1);
        opacity: 1;
    }
}
    </style>
</head>
<body>
    <img src="assets/img/background.gif" alt="background" class="fullscreen-img">
    <div class="middle">
        <img src="./assets/img/title.png" alt="Main Title" class="title" onClick="pop()">
        <a href="page1/index.php" class="play-btn">PLAY</a>
    </div>
    <div id="jump">
        <img class="jade" src="https://i.pinimg.com/564x/7f/8f/a8/7f8fa802c2d877a540d049c57e234f06.jpg"/>
    </div>
    <audio preload="auto" id="jade-sound">
        <source src="assets/mp3/jade-sound.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <script src="assets/js/script.js"></script>
</body>
</html>