<!DOCTYPE html>
<html>
<head>



    <title>ZyTunes</title>

    <meta name="author" content="Xochitl J Oliveros" />
    <meta name="ZyTunes music" content="" />

    <link rel="stylesheet" href="ZyTunesStyle.css" type="text/css" />

</head>
<body>



<div id="page">
    <div id="logo">
        <h1><a href="/" id="logoLink">Home</a></h1>
    </div>
    <div id="nav">
        <ul>
            <li><a href="#/home.html">Home</a></li>
            <li><a href="#/about.html">About</a></li>
            <li><a href="#/contact.html">Contact</a></li>
        </ul>
    </div>
    <div id="content">
        <h2>ZyTunes</h2>
        <p>

            <?php
            //function getFile($songs){
                echo"<table>"
                    ."<caption>New Music</caption>"
                    ."<tr>"
                    ."<th>Title</th>"."<th>Artist</th>";
                $handle = @fopen("ZyTunesSongs", "r");
                if ($handle) {
                    while (($buffer = fgets($handle, 4096)) !== false) {
                       // echo $buffer;
                    $zySongs = explode("-", $buffer);

                        echo"<tr><td>".$zySongs[0]."</td>"."<td>".$zySongs[1]."</td>"
                            ."<td><form action=\"ProfilePage.php\" , method=\"post\" , id=\"nameform\">"
                            ."<input type=\"submit\" value=\"Buy\">"
                            ."</form></td></tr>";
                    }
                    if (!feof($handle)) {
                        echo "Error: unexpected fgets() fail\n";
                    }
                    fclose($handle);
                }

                echo"</table>";
             ?>
        </p>
        <p>
            ****DESCRIPTIONS
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