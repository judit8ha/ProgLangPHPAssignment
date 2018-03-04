<?php
/**
 * Created by PhpStorm.
 * User: juditholiveros
 * Date: 2/26/18
 * Time: 9:21 PM
 */
class User{
    public $Playlist;
    public $userName= "guest";
    public $password= "password";
    public $photo = "https://www.summitpost.org/images/large/886509.gif";

}

// == CREATING AN INSTANCE OF USER CLASS == //
        $currentUser = new User();

// == HANDLES USER NAME AND PASSWORD == //
    $userIn=$_POST['User'];
    $passIn=$_POST['Password'];

        $handle = fopen("users", "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $userInfo = explode(" ", $line);
            if (($userIn == $userInfo[0]) && ($passIn == $userInfo[1])) {
                $currentUser->userName = $userInfo[0];
                $currentUser->photo = $userInfo[2];
                break;

            }

            if (($userIn == $userInfo[0]) && !($passIn == $userInfo[1])):?>
                <h2>--WRONG USER NAME OR PASSWORD--</h2>
                <form action="MyMusicPage.php" , method="post">
                    <p/>
                    <input type="submit" value="TRY AGAIN">
                </form>

            <?php endif; ?>
            <?php

            }
        global $fromUser;
        $fromUser = $currentUser->name;


            fclose($handle);

    }

?>
<!DOCTYPE html>
<html>
<head>

    <title>My Music Page</title>

    <meta name="" content="Xochitl J Oliveros" />
    <meta name="MusicPg" content="all your music in one place" />

    <!-- CSS -->
    <link rel="stylesheet" href="profilePageStyleSheet.css" type="text/css" />
</head>


<!-- WEB CONTENT  -->
<body>

<div id="page">
    <div id="logo">
        <h1><a href="MyMusicPage.php" id="logoLink">My Music Page</a></h1>


        <img src= <?php echo $currentUser->photo ?> title =<?php echo $currentUser->userName ?>, width="245" height="345" align = "left">

    </div>
    <div id = "nav">
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #ff6000;
                text-align: center;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #291c07;
            }
        </style>




        <?php              echo"<table>"
            ."<caption>Your Music</caption>"
            ."<tr>"
            ."<th>Options</th>"."<th>Title</th><th>Artist</th><th>Tag</th>";
        $handle = @fopen("Songs", "r");
        if ($handle) {
            while (($buffer = fgets($handle, 4096)) !== false) {
                // echo $buffer;
                $usrSng = explode("-", $buffer);

                echo"<tr><td>".$usrSng[0]."</td>"."<td>".$usrSng[1]."</td><td>"."</td>"
                    . "<td><form action=\"MyMusicPage.php\" method=\"post\">"
                    . "<input type=\"text\" name =\"tag\">"
                    . "<input type=\"submit\" value=\"add Tag\">"
                    . "</form></td></tr>";

                if(isset($_POST['add'])){
                    $songsFile = 'Songs';
                    $handle = fopen($songsFile, 'a') or die('Cannot open file:  '.$songsFile);
                    $data = "$fromUser".$_POST["$value"];
                    fwrite($handle, $data);
                    $new_data = "\n".'New data line 2';
                }

            }
            if (!feof($handle)) {
                echo "Error: unexpected fgets() fail\n";
            }
            fclose($handle);
        }

        echo"</table>";
        ?>
        <!--SETTING UP TABLE FOR PLAYLIST -->
  <!--      --><?php
/*        function printTable($usr)
        {
            $userSongs = array(); // array of arrays for song details
            $pList = fopen("Songs", "r");
            if ($pList) {
                //$i=0;
                while (($line = fgets($pList)) !== false) {
                    $pListInfo = explode(" - ", $line);
                    if (($usr == $pListInfo[0])) {
                        $userSongs[] = $pListInfo;
                        echo $line;
                    }
                }
                fclose($pList);
            }
        }
        printTable($currentUser);*/
        ?>




            <form action="ProfilePage.php" , method="post" , id="nameform">
                Remove song #<input type= number name="">
                <input type="submit" value="Remove from playlist">
            </form>




    </div>



    <div id="nav">
        <ul>
            <li><a href="ZamaZon.php">Add songs - ZamaZon</a></li>
            <li><a href="ZyTunes.php">Add songs - ZyTunes</a></li>
            <li><a href="MyMusicPage.php">LogOut</a></li>
        </ul>
    </div>
    <div id="content">
        <h2>            <marquee> ☆♬○♩●♪✧♩　　♩✧♪●♩○♬☆   ☆♬○♩●♪✧♩((ヽ( ᐛ )ﾉ))♩✧♪●♩○♬☆    ☆♬○♩●♪✧♩　　♩✧♪●♩○♬☆
            </marquee>
        </h2>
        <p>

        </p>


    </div>

    <div id="footer">
        <p>
            Webpage made by <a href="/" target="_blank">Xochitl J Oliveros</a>
        </p>
    </div>
</div>
</body>
</html>