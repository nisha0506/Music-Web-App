<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symphony</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

<?php include 'css/music.php' ?>
</head>
<body>
<div class="main_div">
<nav>
          
           <div class="nav-links" id="navLinks">
           
               <ul>
                   <li><a href="#">HOME</a></li>
                   <li><a href="about.php">ABOUT</a></li>
                   <li><a href="">CONTACT US</a></li>
                   <li><a href="logout.php">LOGOUT</a></li>
               </ul>
           </div>
          
       </nav>

<div class="music_container">
<h2 id="title">CLOSER</h2>
<h3 id="artist">The Chainsmokers</h3>
<div class="img_container">
<img src="images/song-1.jpg" alt="">
</div>

<audio src="music/song-1.mp3"> </audio>
<div class="music_controls">
<i class="fas fa-backward" id="prev" title="Previous" ></i>
<i class="fas fa-play main_button" id="play" title="Play" ></i>
<i class="fas fa-forward" id="next" title="Next " ></i>

</div>
</div>
</div>
<script>
    const music=document.querySelector("audio");
    const img= document.querySelector("img");
    const play=document.getElementById("play");
    const artist=document.getElementById("artist");
    const title=document.getElementById("title");
    const prev=document.getElementById("prev");
    const next=document.getElementById("next");

    const songs=[{
        name:"song-1",
        title:"CLOSER",
        artist:"The Chainsmokers",
    },
    {
        name:"song-2",
        title:"GIRLS LIKE YOU",
        artist:"Maroon 5",
    },
    {
        name:"song-3",
        title:"FADED",
        artist:"Alan Walker",
    },
];

    let isPlaying=false;
    const playMusic= ()=>{
        isPlaying=true;
        music.play();
        play.classList.replace("fa-play","fa-pause");
        img.classList.add("anime");
    };

    const pauseMusic= ()=>{
        isPlaying=false;
        music.pause();
        play.classList.replace("fa-pause","fa-play");
        img.classList.remove("anime");
    };

    play.addEventListener("click",()=>{
        if(isPlaying){
            pauseMusic();
        }
        else{
            playMusic();
        }
    });

    const loadSong=(songs)=>{
        title.textContent=songs.title;
        artist.textContent=songs.artist;
        music.src="music/" + songs.name + ".mp3";
        img.src="images/" + songs.name + ".jpg";
    };
    
    songIndex=0;
    const nextSong=()=> {
        songIndex=(songIndex+1)%songs.length;
        loadSong(songs[songIndex]);
        playMusic();
    };

    const prevSong=()=> {
        songIndex=(songIndex - 1 + songs.length) % songs.length;
        loadSong(songs[songIndex]);
        playMusic();
    };

    next.addEventListener("click",nextSong);
    prev.addEventListener("click",prevSong);

</script>
</body>
</html>