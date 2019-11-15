<html>
    <head>
        <title>Notes</title>
    </head>
    <body>
        <a href='/notes.html'>Home</a> <!--refresh page--><br>
        redirecting pages:<br>
        <!-- redicrecting page-->
            <a href="http://localhost/Week2/MyProfile.php">Back to my profile</a> <br> <!-- absolute reference -->
            <a href="/Week2/MyProfile.php">Back to my profile</a> <br> <!-- / mean start from root folder www-->
            <a href="../MyProfile.php">Back to my profile</a> <br> <!-- ../ means back one space(folder)-->
            <a href="#Btm">Bottom</a>
        <!-- import image-->
            <img src='image1.png' > <br><!-- reference using the same working space-->
        <hr>
        
        <!-- unordered list-->
        Unordered list
        <ul>
            <li>Name: Suidaryu</li>
            <li>Country: Singapore</li>
            <li>Coding: Python, html, php, java</li>
        </ul>
        
        <!-- ordered list-->   
        Ordered list
        <ol>
            <li>Name:<b> Suidaryu</b></li>
            <li>Country:<i> Singapore</i></li>
            <li>Coding:<b><i><u><font size="3" color=red face="Courier"> Python, html, php, java</font></u></i></b></li> <!-- old way-->
            <!-- open up new window-->
            <li>Linkedin <a href="https://www.linkedin.com/feed/?trk=" target="_blank">here</a></li>
        </ol>
        <hr>
        
        <!-- table-->
        Table
            <table border=1>
                <tr>
                    <th colspan=2>Take two columns</th>
                    <th>Hot or Not?</th>
                </tr>
                <tr>
                    <td>Men</td>
                    <td>Women</td>
                    <td>Men</td>
                </tr>
                 <tr>
                    <td>82</td>
                    <td>85</td>
                    <td>78</td>
                </tr>
            </table>
            <table border = 1>
                <tr>
                    <td ></td>
                    <td >Bob</td>
                    <td >Bob</td>
                </tr>
                    <td rowspan=2>Favourite</td>
                    <td>Color</td>
                    <td>Blue</td>
                </tr>
                <tr>
                    <td>Flavor</td>
                    <td>Banana</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>

        <h2 id="Btm">Bottom of the page!</h2>     
    </body>
</html>