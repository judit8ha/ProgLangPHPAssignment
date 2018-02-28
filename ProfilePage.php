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

    <!-- CSS -->
    <link rel="stylesheet" href="profilePageStyleSheet.css" type="text/css" />
</head>


<!-- WEB CONTENT  -->
<body>

<div id="page">
    <div id="logo">
        <h1><a href="MyMusicPage.php" id="logoLink">My Music Page</a></h1>
        <img src="https://scontent-mrs1-1.xx.fbcdn.net/v/t34.0-0/p280x280/28459516_2033907676931884_672594580_n.jpg?_nc_ad=z-m&_nc_cid=0&oh=6e805d2046d6079afcd48fbefd360ae8&oe=5A96A3CF"
             alt="Little Sister" width="245" height="345" align = "left">
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
        <form><table>
                <tr><th>Remove?</th><th>Title</th><th>Artist</th><th>Your Tag</th></tr>
            </table></form>
    </div>


    <div id="nav">
        <ul>
            <li><a href="#/Add music from ZamaZon.html">Add songs - ZamaZon</a></li>  <!-- TODO CHANGE LINKS TO ZAMAZON AND ZYTUNES -->
            <li><a href="#/Add music from ZyTunes.html">Add songs - ZyTunes</a></li>
            <li><a href="#/LogOut.html">LogOut</a></li>
        </ul>
    </div>
    <div id="content">
        <h2>            <marquee> ☆♬○♩●♪✧♩　　♩✧♪●♩○♬☆   ☆♬○♩●♪✧♩((ヽ( ᐛ )ﾉ))♩✧♪●♩○♬☆    ☆♬○♩●♪✧♩　　♩✧♪●♩○♬☆
            </marquee>
        </h2>
        <p>
        <form><table border="1">
                <tr><th>Remove?</th><th>Title</th><th>Artist</th><th>Your Tag</th></tr>
            </table></form>
            <?php
            $playlistFile = file('Playlist.txt');
            $songsFile = file('Songs.txt');
            $lines = count($playlistFile);
            foreach($playlistFile as $playlistLine){


            }
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
