<!DOCTYPE html>
<html>
<head>
<title> </title> 
<style type = "text/css">

@import url('https://fonts.googleapis.com/css2?family=Jost:wght@100&display=swap');
*,
*::before,
*::after{
margin:0;
padding:0%;
box-sizing: border-box;
}
html{
font-size: 62.5%;
font-family: "Jost",sans-serif;
}
.main_div {
width: 100vw;
height: 100vh;
background-color: #f6f6f6;
display: grid;
place-items:center;
background-image:url('https://th.bing.com/th/id/R.901f9c7ca27fb792fa735126fc5f5c84?rik=pBhZvUz6%2bB8tjA&riu=http%3a%2f%2fwallup.net%2fwp-content%2fuploads%2f2017%2f03%2f29%2f477743-headphones-pink-white.jpg&ehk=842%2bwb03zlB9itj1LaE19Yc0MNHi4ZQOIbyBoQO0Sq0%3d&risl=&pid=ImgRaw'); 
 background-repeat:no-repeat;
 background-position:center;
  background-size:cover;
  
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img
{
    width: 150px;

}
.nav-links
{
    flex:1;
    text-align: center;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
    
}

.nav-links ul li a{
   color:black;
   font-family: 'Times New Roman', Times, serif;
   text-decoration: none;
   font-size: 13px;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: hsl(0, 20%, 25%) ;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;

}


.music_container {
width: 35rem;
height:55rem;
background-color:#ffffff;
border-radius: 2rem;
box-shadow: 0 1.2rem 3rem 0.5rem rgba(0,0,0,0.2);
padding: 3rem;
text-align: center;
}

.music_container #title {
    text-transform: uppercase;
    letter-spacing: 0.2rem;
    word-spacing: 0.5rem;
    color: #171717;
    margin: 2.5rem 0 0.7rem 0;
    font-size: 2.5rem;
    font-weight: 900;
    text-shadow: 0 0.5rem 0.7rem rgba(0,0,0,0.3);
    
    }

.music_container #artist{
color: #cccaca;
text-transform: capitalize;
letter-spacing : 0.1rem;
font-size : 2rem;
margin-bottom : 4rem;
font-weight: 700;
}

.img_container {
width: 25rem;
height: 25rem;
margin: auto;
}

img{
width: 100%;
height: 100%;
border-radius: 50%;
object-fit: cover;
box-shadow:0 1.2rem 3rrem 0.5rem rgba(0,0,0,0.4);
}

.music_controls{
    width: 20rem;
    display:flex;
    justify-content: space-between;
    align-items:center;
    margin:auto;
    margin-top: 5rem;
}

.music_controls .fas{
    color: #111111;
    font-size:2rem;
    cursor:pointer;
    filter: drop-shadow(0 1.2rem 3rem 0.5rem rgba(0,0,0,0.4));

}

.music_controls .main_button{
    width: 5rem;
    height: 5rem;
    border-radius: 50%;
    background-color:#111;
    color: #f6f6f6;
    display:flex;
    justify-content:center;
    align-items: center;
    font-size:1.4rem;
}

.music_controls .fas:hover{
    color: grey;
}

.music_controls .fa-play:hover{
    background-color:#f6f6f6;
    color:#111;
    box-shadow: 0 1rem 2rem 0.2rem rgba(0,0,0,0.4);
}

.anime{
    animation: rotatePlayer 4s linear infinite;
}

@keyframes rotatePlayer{
    from{ transform: rotate(0deg);
    }
    to{
        transform: rotate(360deg);
    }
}

</style>
</head>
<body>
</body>
</html>