<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="projp.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
</head>
<body>
    <!-- video  -->
    <video autoplay muted loop id="bgVideo">
        <source src="bgProgramming.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
    <div class="container">
        <div class="pic"></div>
        <div class="name"> <h1>Collin Kimball</h1></div>
        <div class="title"><h2>Projects
        </h2></div>
        <!-- project cards -->
        <div class="project">
            <div class="project1 pstyle">P1</div>
            <div class="project2 pstyle">P2</div>
            <div class="project3 pstyle">P3</div>
            <div class="project4 pstyle">P4</div>
            <div class="project5 pstyle">P5</div>
            <div class="project6 pstyle">P6</div>
            
            </div>
            <!-- line seperator -->
            <hr>

            <!-- icon bar -->

        <div class="icon-bar">
            <!-- home page icon -->
            <div class="icon1 pad"><a href="home.html"><i class="fas fa-home"></i></a></div>

            <!-- about me icon -->
            <div class="icon2 pad"><a href="about.html"><i class="fas fa-info-circle"></i></a></div>

            <!-- git hub icon -->
            <div class="icon3 pad"><a href="https://github.com/Digital-Rubato"><i class="fab fa-github"></i></a>
            </div>

            <!-- linked in icon -->
            <div class="icon4 pad"><a href="https://www.linkedin.com/in/collin-kimball-8452151b1/"><i class="fab fa-linkedin"></i></a></div>         

            
        </div>
        
    </div>

    <!-- pause / play video button -->
    <button id="myBtn" onclick="myFunction()">Pause Video!</button>
    
    </div>
    
</body>

<!-- font awesome icon script. -->
<script src="https://kit.fontawesome.com/2d2be9352f.js" crossorigin="anonymous"></script>
<!-- video pause/play script -->
<script>
    var video = document.getElementById("bgVideo");

    var btn = document.getElementById("myBtn");

    function myFunction(){
        if (video.paused){
            video.play();
             btn.innerHTML = "Pause Video!";
        }else{
            video.pause();
            btn.innerHTML = "Play Video!";
        }
    }
</script>