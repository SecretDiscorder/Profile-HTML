
<!DOCTYPE html>
<html lang="id">
    <head>
        <title>BIMA PROFILE SecretDiscorder</title>

        <style>


            nav {
                margin: auto;
                text-align: center;
                width: 100%;
                
	color: green;
                font-family: arial;
            }

            .foo {
                width: 1000px;
            }

            // Mobile:
            @media (max-width: 600px) {
                .foo {
                    width: 500px;
                }
            }

            nav ul {
                background: #101a21;
                padding: 0 20px;
                list-style: none;
                position: fixed;
                display: inline-table;
                width: 100%;
            }

            nav ul li {
                float: left;
            }

            nav ul li:hover {
                background: #d01a21;
            }

            nav ul li:hover a {}

            nav ul li a {
                display: block;
                padding: 25px;
                
	color: green;
                text-decoration: none;
            }

            .card-view3 {
                border-radius: 10px;
                margin: 0px auto 0px auto;
                opacity: 1;
                width: 100%;
                background-color: #001a33;;
            }


            table,
            th,
            td {
                background-color: #101a21;
                border: 5px solid;
                border-radius: 20px;
                border-color: #101a21;
	color: green;
                text-align: left;
            }

            ul,
            li {
                border-radius: 20px;
            }
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

img {
  display: block;
  	border-radius: 25%;
}
ul {
  list-style: none;
}

/* Utilities */
.card::after,
.card img {
  border-radius: 25%;
}


.card {
  padding: 2.5rem 2rem;
  border-radius: 10px;
                background-color: #001a33;
  height:auto;
  width:auto;
  box-shadow: 0 0 30px rgba(0, 0, 0, .15);

  position: relative;
  overflow: hidden;
  	align:0px auto 0px auto;
	opacity: 1;
    
	color: green;
}


  .card img {
    box-shadow: 0 0 0 5px #FFF;
	justify-content: center;
  }
  

.infos {
  margin-left: 1.5rem;
}
:root {
  --shadow-color: #FF9E9E;
  --shadow-color-light: white;
}

.name {
  animation: neon 3s infinite;
  font-family: 'Poppins', sans-serif;
  display: block;
  margin: 0px auto 0px auto;

  position: relative;
  color: gold;
  font-size: 4rem;
  height: auto;
  text-align: center;
}

@keyframes neon {
  0%, 100% {
    text-shadow: 0 0 10px var(--shadow-color-light),
                  0 0 20px var(--shadow-color-light),
                  0 0 30px var(--shadow-color),
                  0 0 40px var(--shadow-color),
                  0 0 50px var(--shadow-color);
  }
  50% {
    text-shadow: 0 0 5px var(--shadow-color-light),
                  0 0 15px var(--shadow-color-light),
                  0 0 25px var(--shadow-color),
                  0 0 35px var(--shadow-color),
                  0 0 45px var(--shadow-color);
  }
}

.text {
    
	color: green;
  margin-bottom: 1rem;
}

.stats {
  margin-bottom: 1rem;
}
.stats li {
  min-width: 5rem;
}
.stats li h3 {
  font-size: .99rem;
}
.stats li h4 {
  font-size: .75rem;
}
#button{
    border-radius: 20px;
    background-color: #111a21; 
	width:500;
	height: 500;
	opacity: 0.5;
}
.links button {
  font-family: 'Poppins', sans-serif;
  height: 50;
  width: 50;
  opacity: 0.5;
  padding: .5rem;
  border: 1px solid #101a21;
  border-radius: 5px;
  font-weight: bold;
  cursor: pointer;
  transition: all .25s linear;
}
.links .follow,
.links .view:hover {
  background-color: #101a21;
  color: #FFF;
}
.links .view,
.links .follow:hover{
  background-color: transparent;
  color: #222;
}

@media screen and (max-width: 450px) {
  .card {
    display: block;
  }
  .infos {
    margin-left: 0;
    margin-top: 1.5rem;
  }
  .links button {
    min-width: 100px;
  }
}

.clock, marquee {
    font-family: 'Poppins', sans-serif;
    color: #00ff00; /* Green text color */
    text-align: center;
    background-color: #000; /* Background color for dark mode */
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 255, 0, 0.5); /* Green box shadow for a glowing effect */

    /* Optional: Add animation for a blinking effect */
    animation: blink 1s infinite;
}

/* Optional: Define a blink animation */
@keyframes blink {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}


 p, b{
    color: green;
	opacity: 100%;
}
table, th, td {
                background-color: #011a33;
border: 5px solid;
border-radius: 20px;
border-color: #011a33; 

	color: green;
text-align: left;
}
ul, li{

	border-radius: 20px;
	background-color: white;
}
            .card img {
                box-shadow: 0 0 0 5px #FFF;
                justify-content: center;
            }

            .infos {
                margin-left: 1.5rem;
            }

#btn{
	width: 99%;
	padding: 3%;
	margin-bottom: 8%;
	background: cyan;
	font-family: 'Open Sans', sans-serif;
	color: #101a21;
	outline: none;
	border: none;
	cursor: pointer;
	font-weight:500;
	border-radius: 5px;
	transition: 0.5s;
	-webkit-appearance:none;
	-webkit-transition: 0.5s;
	-moz-transition: 0.5s;
	-o-transition: 0.5s;
	-ms-transition: 0.5s;
}
        iframe {
            border: none;
            width: 100%;
            height: 50vh; /* Adjust the height as needed */
            overflow: hidden; /* Hide scrollbars */
        }
#btn:hover{
	color:#fff;
}


.card_view2 {
                    width: 100%;
                margin-left: auto;
                margin-right: auto;
                    padding: 7.5rem 4rem;
                border-radius: 10px;
                background-color: #100a3d;
                box-shadow: 0 0 30px rgba(0, 0, 0, .15);
                margin: 0px auto 0px auto;
                align: 0px auto 0px auto;
                border-radius: 30px;
                opacity: 1;
}


            .button {
                border-radius: 30%;
                background-color: #101a21;
                box-shadow: 0 0 30px #011a33;
                opacity: 1;
                
	color: green;
                text-align: center;
            }


            .card {
                margin: 0px auto 0px auto;
                position: relative;
                padding: 2.5rem 2rem;
                border-radius: 10px;
                background-color: #011a33;
                height: auto;
                color: green;
                width: 100%;
                box-shadow: 0 0 30px rgba(0, 0, 0, .15);
            }

.pengaturan_tengah {
 color: green;
                        width: 100%;
                margin: 0px auto 0px auto;
                margin-left: auto;
                margin-right: auto;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    background-color: #8B0000;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
}


        </style>
        <title>Belajar HTML Dasar | Jago Ngoding</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=980">
    <meta property="og:title" content="BIMAKHZDEV">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta property="og:description" content="HI.. THIS BIODATA WEB PROFILE">
    <meta property="og:url" content="https://bimakhzdev.my.id">
            <link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">

        <!--slider-->
        <script type='text/javascript' src="web/js/jquery.min.js"></script>
        <script type='text/javascript' src="web/js/jquery.mobile.customized.min.js"></script>
        <script type='text/javascript' src="web/js/jquery.easing.1.3.js"></script>
        <script type='text/javascript' src="web/js/camera.min.js"></script>
        <title>BIMA PROFILE | SecretDiscorder</title>
    </head>
<body>
        <div class="pengaturan_tengah" align="center">
           
                <div class="card_view2">
                
                    <div class="img" align="center">
                        <img src="1703604416612.png" height="250" width="250" align="left">
                    </div>
                    <br>
                    <div class="name">
                        <h2>AdhiKHz</h2>
                        <h4>@SecretDiscorder</h4>
                    </div>
                    <div class="audio-container">
                        <iframe src="lagu.mp3" allow="autoplay" id="audio" style="display: none">
                            <audio id="player" autoplay loop>
                                <source src="lagu.mp3" type="audio/mpeg">
                            </audio>
                            <audio id="myaudio" autoplay>
                                <source src="lagu.mp3" type="audio/mpeg">
                            </audio>
                            <script>
                                document.getElementById('myaudio').play();
                            </script>
                        </iframe>
                    </div>
                    
                    <div class="card">
                    <table align="center">
                            <th>
                                <h1>Name Card</h1>
                            </th>
                            <tr>
                                <th>Nama</th>
                                <th> AdhiKHz</th>
                            </tr>
                            <tr>
                                <th>Born</th>
                                <th> Jepara 28/02/2007</th>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th> Sendang, Kalinyamatan Jepara</th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>Tidak Akan Menikah</th>
                            </tr>
                            <tr>
                                <th>Hobby</th>
                                <th> Programer</th>
                            </tr>
                            <tr>
                                <th>Favorite</th>
                                <th>Silently Situation, and Lonely</th>
                            </tr>
                            <tr>
                                <th>Skill</th>
                                <th>
                                    <ul>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/badge-HTML-orange">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/badge-CSS-lightblue">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/badge-CMS-white">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/Kodular-JAVA-brown">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/badge-PYTHON-yellow">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/Informatics-Logic-black">
                                        </li>
                                    </ul>
                                </th>
                            <tr>
                                <th>Dream</th>
                                <th>
                                    <ul>
                                        <li>- A Programings teacher and software Enginering</li>
                                    </ul>
                                </th>
                            </tr>
                            </tr>
                        </table>
                        <br>
                        <br>
                    <p class="text"> Im a Basic Developer, follow me to be the first who see my new work. </p>
</br><br>
<p></p>
    <iframe src="https://bimakhzdev.my.id/project/index.php" frameborder="0" height="100%" width="100%"></iframe>
                    </div>
                    <br>
                    <br>
                            <div class="card" align="left">
                            <table align="left">
                                <tr>
                                    <font color="red"><h1>Life Map</h1></font>
                                </tr>
                                <tr>
                                    <h2>2012-2013: Tarbiyatul Athfal TK</h2>
                                </tr>
                                <tr>
                                    <h2>2014-2017: SDN 1 Sendang</h2>
                                </tr>
                                <tr>
                                    <h2>2017-2019: SDN 1 Margoyoso</h2>
                                </tr>
                                <tr>
                                    <h2>2019-2022: SMP N 1 Pecangaan</h2>
                                </tr>
                                <tr>
                                    <h2>2022-Now : SMA N 1 Pecangaan</h2>
                                </tr>
                                <tr>
                                    <th></th>
                                    <font color="red"><h1>Competition and Experience</h1></font>
                                </tr>
                                <tr>
                                    <h2>18/04/2013: 2nd Lomba Mendongeng Kinder</h2>
                                </tr>
                                <tr>
                                    <h2>2016-02-28: Pesta Siaga at Jepara City</h2>
                                </tr>
                                <tr>
                                    <h2>2017: 2nd FLS2N Mendongeng Kalinyamatan</h2>
                                </tr>
                                <tr>
                                    <h2>2015-2018: Pararel Rank 1st</h2>
                                </tr>
                                <tr>
                                    <h2>2017: Persami Penggalang 3rd at Pendosawalan</h2>
                                </tr>
                                <tr>
                                    <h2>2018: MAPSI CERIS at Central Java</h2>
                                </tr>
                                <tr>
                                    <h2>2018: 4th Siswa Teladan City Jepara</h2>
                                </tr>
                                <tr>
                                    <h2>2018: Last UN </h2>
                                </tr>
                                <tr>
                                    <h2>2018: 1st Nihai Imtihan at Kecamatan</h2>
                                </tr>
                                <tr>
                                    <h2>2017-Dec: 3rd Pidato madrasah at Jepara</h2>
                                </tr>
                                <tr>
                                    <h2>2019: 3rd Red Cross Kudus Provinsi LCC</h2>
                                </tr>
                                <tr>
                                    <h2>2019-2020: Pararel Rank</h2>
                                </tr>
                                <tr>
                                    <h2>2022: International English Festival Olympiad 1st</h2>
                                </tr>
                                <tr>
                                    <h2>2022: Silver PSSO Sociology</h2>
                                </tr>
                                <tr>
                                    <h2>2023: Bronze Computer IYSO</h2>
                                </tr>
                                <tr>
                                    <h2>2023: 1st Winner National ICT AWARDS TANGSEL 2023</h2>
                                </tr>
                                <tr>
                                    <h2> OSN/year but never won</h2>
                                </tr>
                                <tr>
                                    <h2>Scout, RedCroos, Programing ExtraCuricula</h2>
                                </tr>
                                <tr>
                                    <h2>Now Passion and my skill is Pemrograman Basic wkwkwk :)</h2>
                                </tr>
                                </td>
                               </table>
                        </div>
                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                    <p></p>
                    <br>
                    <marquee width="60%" direction="left" >"Demi Masa, sesungguhnya manusia berada dalam kerugian, Kecuali Orang yang beriman, sabar dan menasehati dalam kebaikan"</marquee>
                    <script src="./script.js"></script>
                    <br>
                    <h2>
                        <b> Follow Me On</b>
                        <div class="name"><i align="center">SecretDiscorder©</i></div>
                    </h2>
                    <br>
                    <br>
 
                            <a href="https://github.com/SecretDiscorder">
                                <img src="github.png" height="25" width="25">
                            </a>
                            <a href="">
                                <img src="yt.png" height="25" width="25">
                            </a>
                            <a href="">
                                <img src="ig.png" height="25" width="25">
                            </a>
                        </div>
                    </div>
                   </div>

        </div>
    </body>
</html> <?php
// Tutup koneksi ke database
$conn->close();
?>