<!DOCTYPE html>
<head>
    <title>Robot 64 Web Play</title>
    <link rel="icon" type="image/x-icon" href="images/r64playweb.ico">
    <style>
        body {
            background-image: url('images/scrollbg.png');
            background-size: 256px 256px;
            background-position: center;
            background-repeat: repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Source Sans Pro', sans-serif;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        #bg {
            position: relative;
            z-index: 2;
        }

        #tboat {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
            font-size: 33px;
            color: white;
            white-space: normal;
            overflow-wrap: break-word;
            width: 132px;
            text-align: center;
        }

        #page {
            position: absolute;
            font-weight: bold;
            font-size: 35px;
            color: white;
            white-space: normal;
            overflow-wrap: break-word;
            width: 200px;
            text-align: left;
        }
        
        #star {
            position: absolute;
            transform: translate(-50%, -50%) scale(0.5);
            cursor: pointer;
        }

        #button {
            position: absolute;
            transform: translate(-50%, -50%) scale(0.9);
            cursor: pointer;
        }


        #Pbut {
            position: absolute;
            color: white;
            white-space: normal;
            overflow-wrap: break-word;
            width: 50px;
            text-align: center;
            cursor: pointer;
        }

        #scr {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -52%);
            overflow-y: auto;
            width: 92%; /* Adjusted width to 80% */
            height: 65%;
            z-index: 3;
            padding: 10px;
            opacity: 1; 
            background-color: rgba(255, 255, 255, 0);
        }

        #scr p {
            margin-top: 0;
        }

        #level {
            width: 98.5%;
            height: 27%;
            display: flex;
        }

        #leveltitle {
            position: absolute;
            left: 30px;
            font-size: 33px;
            color: white;
        }

        #levelcreator {
            position: absolute;
            top: 100px;
            left: 30px;
            font-size: 22.9px;
            color: white;
        }

        #levelstars {
            position: absolute;
            left: 481px;
            font-size: 25px;
            color: white;
            cursor: pointer;
            white-space: normal;
            overflow-wrap: break-word;
            width: 67px;
            text-align: center;
        }
        
        #buttonstar {
            position: absolute;
            height: 19.75%;
            width: auto;
            left: 460px;
            color: white;
            cursor: pointer;
        }

        #buttonplay {
            position: absolute;
            height: 11%;
            width: 17.5%;
            left: 570px;
            color: white;
            cursor: pointer;
        }

        #playtext {
            position: absolute;
            left: 598px;
            font-size: 38px;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <audio autoplay loop>
        <source src="audio/play.ogg" type="audio/ogg">
    </audio>

    <div id="bg">
    <div id="scr">
    <?php
        for ($i = 0; $i < 2; $i++) {
            $topValue = 175 * $i;
                    echo '
                    <image src="images/level.png" id="level">
                    <div>
                        <div id="leveltitle" style="top: ' . (40 + $topValue) . 'px;">' . sanitizeInput($name) . '</div>
                        <div id="levelcreator" style="top: ' . (100 + $topValue) . 'px;">by PRAISEBEETOTHEBUBBLE</div>
                        <img id="buttonstar" style="top: ' . (27 + $topValue) . 'px;"src="images/stick2.png">
                            <img id="star" style="z-index:4; left: 513.3px; bottom: ' . (350 - $topValue) . 'px;" src="images/star2.png">
                            <div id="levelstars" style="z-index:4; top: ' . (87 + $topValue) . 'px;">' . sanitizeInput($stars) . '</div>
                        </img>
                        <img id="buttonplay" style="top: ' . (36 + $topValue) . 'px;"src="images/play.png">
                            <div id="playtext" style="z-index:4;top: ' . (40 + $topValue) . 'px;">Play</div>
                        </img>
                        <img id="buttonplay" style="top: ' . (96 + $topValue) . 'px; left: 602px; height: 6%; width: 9%;" src="images/play.png">
                            <div id="playtext" style="left: 618px; top: ' . (98 + $topValue) . 'px; font-size: 20px;">Edit</div>
                        </img>
                    </div>
                </image>';
        }
     ?>
    </div>
        <div id="tboat" style="top: 5px;left: 85px;">Top Rated</div>
        <div id="tboat" style="top: 25px;left: 242px;font-size: 39px;">Newest</div>
        <div id="tboat" style="top: 5px;">My Levels</div>
        <div id="tboat" style="top: 5px;left: 717.5px;">
            <img id="star" style="top: 42px;" src="images/star.png">
        </div>
        <div id="page" style="bottom: 40px; left: 35px;">Page <?php echo $page; ?>/?</div>
        
        <img src="images/levelplayer.png" style="height: 800px; width: auto;">

        <div id="Pbut" style="bottom: 65px; left: 230px">
            <img id="button" src="images/PLeft.png">
        </div>

        <div id="Pbut" style="bottom: 65px; left: 342px">
            <img id="button" src="images/PRight.png">
        </div>

        <div id="Pbut" style="bottom: 65px; left: 454px">
            <img id="button" src="images/close.png" onclick="alert('This button is purely for cosmetic purposes only')">
        </div>
    </div>
</body>
</html>
