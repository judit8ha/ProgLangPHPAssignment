/**
 * Created by PhpStorm.
 * User: juditholiveros
 * Date: 2/21/18
 * Time: 3:22 PM
 */


<!DOCTYPE html>
<html>
<head>

    <title>My Music Page</title>

    <meta name="" content="Xochitl J Oliveros" />
    <meta name="description" content="all your music in one place" />

    <!--CSS -->
    <link rel="stylesheet" href="style3.css" type="text/css" />

</head>
<body>

<!-- CONTENT -->

<div id="page">
    <div id="logo">
        <h1><a href="MyMusicPage.php" id="logoLink">My Music Page</a></h1>
        <img src="https://www.pixelstalk.net/wp-content/uploads/2016/05/Minimalistic-Black-Music-HD-Wallpapers.jpg"
             width="1100" height="700">
    </div>
    <div id="nav">
        <ul>
            <li>
                <h3>LogIn</h3>
                <form action= "ProfilePage.php", method="post">
                    <input type="text" name="User">
                    <input type="text" name="Password">
                    <p/>
                    <input type="submit" value = "Log In">
                </form>
        </ul>
    </div>`
    <div id="content">
        <h2>
            <marquee behavior="scroll" direction="left">#MusicYourWay
                Trending: G-Eazy - No Limit REMIX ft. A$AP Rocky, Cardi B,
                French Montana, Juicy J, Belly
            </marquee>
        </h2>
        <p>

        <?php
        $song = array();
        $playlist = array();
        // A WAY TO BUY A SONG FROM ONE OF THE MUSIC SOURCES AND SEE IT APPEAR IN MY LIBRARY

// A WAY TO REMOVE A SONG FROM MY LIBRARY

// USER CAN HAVE A PLAYLIST

// ABILITY TO ADD SONG

// ABILITY TO DELETE SONG

//  USER CAN HAVE ANY NUMBER OF PLAYLIST

// A LIST OF SONGS CURRENTLY OWNED(E.G. MY LIBRARY)

// NAME AND RENAME PLAYLIST

// SWITCH AMONGST PLAYLISTS

// USER CAN ANNOTATE ANY SONG WITH A SHORT STRING (EG JENNI'S FAVORITE)

// SUPPORT FOR MULTIPLE USERS EACH WITH THEIR OWN LIBRARY

//MOCK-UPS OF TWO MUSIC SOURCES EACH WITH A LIST OF SONGS AVAILABLE FOR PURCHASE

// INTERESTING MISC FEATURES
?>
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

<?php
// CREATING AN ASSOCIATIVE ARRAY FOR PLAYLIST

$song = array("Perfect"=>"noTags", "Thinking Out Loud"=>"noTags",);
?>



