
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Pose 2</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="../css/home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="../timer/style.css">
    <script src="../timer/script.js" defer></script>
</head>
<body style="height: 80%;">
    <div class="welcome">
        <div class="nav_bar">
            <a href="yoga_start.php" class="active"><img class="bimg" src="../images/back.png" alt="Header animal" class="img"></a>
            <a class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        </div>
        <div class="menu_section">
            <a class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            <div class="details">
                <table class="">
                    <tr>
                        <th>
                            <a href="chatbot/index.html" style="text-decoration: none; color: black;">
                                <table class="menu_options">
                                    <tr>
                                        <td class="menu_img" width="45%"><img src="../images/chat.png"></td>
                                        <td><p>Chat with me</p></td></a>
                                    </tr>
                                </table>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <a href="yogaSection.html" style="text-decoration: none; color: black;">
                                <table class="menu_options">
                                    <tr>
                                        <td class="menu_img" width="45%"><img src="../images/yoga.png"></td>
                                        <td><p>Yoga</p></td></a>
                                    </tr>
                                </table>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <a href="gameSection.html" style="text-decoration: none; color: black;">
                                <table class="menu_options">
                                    <tr>
                                        <td class="menu_img" width="45%"><img src="../images/game.png"></td>
                                        <td><p>Games for you</p></td></a>
                                    </tr>
                                </table>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <a href="readingSection.html" style="text-decoration: none; color: black;">
                                <table class="menu_options">
                                    <tr>
                                        <td class="menu_img" width="45%"><img src="../images/reading.png"></td>
                                        <td><p>Reading Time</p></td></a>
                                    </tr>
                                </table>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <a href="meditationSection.html" style="text-decoration: none; color: black;">
                                <table class="menu_options">
                                    <tr>
                                        <td class="menu_img" width="45%"><img src="../images/meditation.png"></td>
                                        <td><p>Meditation</p></td></a>
                                    </tr>
                                </table>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <a href="Music Player/index.html" style="text-decoration: none; color: black;">
                                <table class="menu_options">
                                    <tr>
                                        <td class="menu_img" width="45%"><img src="../images/music.png"></td>
                                        <td><p>Music</p></td></a>
                                    </tr>
                                </table>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <a href="#" style="text-decoration: none; color: black;">
                                <table class="menu_options">
                                    <tr>
                                        <td class="menu_img" width="45%"><img src="../images/drawing.png"></td>
                                        <td><p>Paint with me</p></td></a>
                                    </tr>
                                </table>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <a href="writingSpace.html" style="text-decoration: none; color: black;">
                                <table class="menu_options">
                                    <tr>
                                        <td class="menu_img" width="45%"><img src="../images/writing.png"></td>
                                        <td><p>writing Space</p></td></a>
                                    </tr>
                                </table>
                            </a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <table class="yoga_des">
            <tr>
                <th>
                    <table class="yoga_options_detail">
                        <tr>
                            <td style="text-align: left;"><p class="yoga_title">Mountain pose (Tadasana)</p></td></a>
                        </tr>
                        <tr>
                            <th width="100%"><img style="border-radius: 20%;" src="../images/yoga_img_2.1.png" alt=""></th>
                        </tr>
                        <tr>
                            <td style="text-align: left; font-weight: 500;">
                                <div class="yoga_dis">
                                    <h3>Instructions</h3>
                                    <p>
                                        <ol>
                                            <li>Begin by standing at the top of your mat with your feet hip-distance apart and your arms by your sides.</li>
                                            <li>Press your feet into the ground and engage your leg muscles to lift your kneecaps.</li>
                                            <li>Draw your shoulder blades down and back, and lengthen your spine by lifting the crown of your head toward the ceiling.</li>
                                            <li>Bring your palms together in front of your heart center, or raise your arms overhead with your palms facing each other.</li>
                                            <li>Take a few deep breaths, feeling the grounding and stabilizing energy of the pose.</li>
                                            <li>To release the pose, lower your arms and step your feet together.</li>
                                        </ol>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div>
                                    <div class="timer_btn" onclick="myFunction1()"><button class="ybtn">Start</button></div>
                                    <div class="timer" onclick="myFunction1()" id="countdown">00:00:30</div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                          <th>
                            <div class="msg">
                                <audio id="myAudio">
                                    <source src="timer/music.mp3" type="audio/mpeg">
                                </audio>
                                <p id="msg">Times Up.. <a style="color: green;" href="posture_2.php">Restart</a></p>
                            </div>
                          </th>
                        </tr>
                    </table>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>