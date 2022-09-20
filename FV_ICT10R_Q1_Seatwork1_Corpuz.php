<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&family=Imperial+Script&display=swap" rel="stylesheet">
    <title>Feel My Rhythm</title>
    <style>
        body {
            font-family: 'EB Garamond';
            background-image: url('fullbg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:cover;
            margin: 0;
            padding: 0;
            font-size: 20px;
        }
        p {
            font-family: 'EB Garamond';
            font-size: 20px;
            margin-right: 50px;
        }
        h1 {
            font-family: 'Imperial Script', cursive;
            font-weight: bolder;
            color: rgb(199, 115, 157);
            font-size: 90px;
            padding: 45px; 
        }
        h2{
            font-family: 'Imperial Script', cursive;
            color: rgb(67, 90, 133);
            font-weight: bolder;
            font-size: 50px;
        }
        h3 {
            font-family: 'EB Garamond';
            font-size: 30px;
            font-weight:bolder;
            color: rgb(12, 34, 74);
        }
        .topnav {
      overflow: hidden;
      background-color: #000000;
      font-size: 15px;
      margin-bottom: 20px;
    }

    .topnav a {
      float: left;
      display: block;
      color: #ffffff;
      text-align: center;
      padding: 12px 14px;
      text-decoration: none;
    }

    .topnav a:hover {
      background-color: rgb(216, 132, 174);
      color: #ffffff;
    }

    .topnav a.active {
      background-color: rgb(176, 102, 139);
      color: #ffffff;
    }
    </style>
</head>

<body>
    <header class="text-center bg-image"  style= "background-image:url('bg.png'); height: 200px">
        <center>
                <h1 class="text-capitalize">Red Velvet Shop & Merch</h1>
    </header>
    <div class="topnav"  style= "background: rgb(199, 115, 157)">
        <a href="#">Home</a>
        <a class="active" href="#">Reviews</a>
        <a href="#">About</a>
        <a href="#">Resources</a>
        <a href="#">Account</a>
        <a href="#">Albums</a>
        <a href="#">Social Media</a>
      </div>
    <article>
        <center>
            
            <div class="row">
                <div class="col-6">
                <img style="padding: 10px" src="cover.png" width="80%">
                </div>
                
                <div class="col-6" style="line-height: 1.70; padding-right: 35px; padding-top: 10px;">
                <?php

define ('sampleconstant', "Red Velvet Mini Album - The ReVe Festival 2022");
echo "<h2>". sampleconstant ."</h2>";
$productString = "<h3>Album Information:</h3>
The all new Red Velvet Album from SM Entertainment that will surely make you dance to the rhythm! To the left and right, 
you'll sway all night! This album has a fresh, jazzy, pop sound that takes inspiration from classical music with it's melodic tunes.
If you enjoy experimental takes on K-Pop and R&B, you'll definitely love their new album. 
<br> <b>Album Includes:</b> Photocard, Poster, Photobook, CD, Sticker, and Bookmark. 
<br><b>CD Track List Includes:</b> Feel My Rhythm, Rainbow Halo, Beg For Me, BAMBOLEO, Good Bad Ugly, and In My Dreams.";
/*
The all new Red Velvet Album from SM Entertainment that will surely make you dance to the rhythm! To the left and right, 
you'll sway all night! This album is a fresh, jazzy, and pop sound that takes inspiration from classical music.
If you enjoy an experimental take on K-Pop with hints of R&B, you'll definitely love their new album.
*/
echo "$productString";
$productFloat = 14.11;
echo "<h3>Album Weight:</h3>$productFloat Ounces";
$productInteger = 1430;
echo "<h3>Album Price:</h3> Php $productInteger";
$productArray = array ("Album","Merch","CD", "Mini-Album");
echo "<h3>Album Type:</h3> $productArray[3] $productArray[2]";
?>
</div>
<img style="padding-left: 10px; padding-right: 10px;" src="pic.png" width="100%">
</article>
</body>
</html>