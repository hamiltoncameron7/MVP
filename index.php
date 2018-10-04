<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css?v=2">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Jura">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#menu p").mouseover(function() {
                    $("#menu").mouseover(function() {
                        $("#menu a").css("left", "0%");
                        $("#menu").css("background-color", "white");
                        $("#menu p").css("color", "black");
                    });
                }).fadeIn("fast");
                $("#menu").mouseout(function(){
                    $("#menu a").css("left", "-120%");
                    $("#menu").css("background-color", "rgba(0,0,0,0)");
                    if(($(window).width() > 786) || ($(document).scrollTop() < 40)){
                        $("#menu p").css("color", "white");
                    }
                });
                $(document).scroll(function(){
                    if(($(document).scrollTop() > 40) && ($(window).width() < 786)) {
                        $("#menu p").css("color", "black");
                    } 
                    else {
                        $("#menu p").css("color", "white");
                    }
                }).fadeIn("fast");
            });
        </script>
        <title>Messy Vibes Productions</title>
    </head>
    <body>
        <div id="background"></div>
        <div id="page">
            <div id="header">
                <div id="title">
                    <h1>Messy Vibes Productions</h1>
                </div>
                <div id="menu">
                    <p style="transition: 2s">menu</p>
                    <a href="index.php">home</a>
                    <a href="artists.php">artists</a>
                    <a href="videos.php">videos</a>
                    <a href="events.php">events</a>
                </div>
            </div>
            <div id="body">
                <div id="sec">
                    <div id="secTitle">
                        <h2>Title</h2>
                    </div>
                    <div id="secBody">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id nulla eu turpis faucibus accumsan ac eleifend leo. Etiam scelerisque suscipit pretium. Aenean quis luctus odio. Morbi venenatis maximus ante quis tristique. Fusce sed aliquet ipsum. Pellentesque volutpat vitae ligula in eleifend. Nullam ullamcorper egestas ipsum quis interdum. Praesent bibendum ac est id ornare.</p>
                    </div>
                </div>
                <div id="sec">
                    <div id="secTitle">
                        <h2>Title</h2>
                    </div>
                    <div id="secBody">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id nulla eu turpis faucibus accumsan ac eleifend leo. Etiam scelerisque suscipit pretium. Aenean quis luctus odio. Morbi venenatis maximus ante quis tristique. Fusce sed aliquet ipsum. Pellentesque volutpat vitae ligula in eleifend. Nullam ullamcorper egestas ipsum quis interdum. Praesent bibendum ac est id ornare.</p>
                    </div>
                </div>
                <div id="sec">
                    <div id="secTitle">
                        <h2>Title</h2>
                    </div>
                    <div id="secBody">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id nulla eu turpis faucibus accumsan ac eleifend leo. Etiam scelerisque suscipit pretium. Aenean quis luctus odio. Morbi venenatis maximus ante quis tristique. Fusce sed aliquet ipsum. Pellentesque volutpat vitae ligula in eleifend. Nullam ullamcorper egestas ipsum quis interdum. Praesent bibendum ac est id ornare.</p>
                    </div>
                </div>
                <div id="footer">
                    <p>&copy Messy Vibes Productions</p>
                </div>
            </div>
        </div>
    </body>
</html>
