<?php

$connection=mysqli_connect("localhost","root","","moodmusic") ;
    
    if($_SERVER["REQUEST_METHOD"]=="GET") {
    
        $mood=filter_input(INPUT_GET, 'mood', FILTER_SANITIZE_NUMBER_INT);

        $sql= "SELECT song_name,runtime,thumbnail,song_link FROM songs WHERE mood_id=?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param('i',$mood);
        $stmt->execute();
        $stmt->bind_result($name,$runtime,$thumb,$s_link);
        $final=$stmt->get_result();
        $num_of_rows = $final->num_rows;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MusicMood - Music According to your mood</title>
    <link rel="stylesheet" href="assets\css\site.css">
    <link rel="stylesheet" href="assets\css\custom.css">
    <link rel="Shortcut Icon" href="assets\images\favicon.png" type="image/x-icon">
</head>
    <body>

    <div class="loader">
        <div class="loader__figure"></div>
    </div>

    <nav class="navbar">
        <div class="container">
            <a href="index-1.html" class="navbar-brand">
                <img src="assets\images\logo.png" alt="logo">
            </a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="#Services">Home</a>
                </li>
                <li>
                    <a href="#Experience">Songs</a>
                </li>
                <li>
                    <a href="#Skills">Genre</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="Blog" class="p-b-60">
        <div class="container">
            <header class="section-header">
                <h4>Songs for your Mood</h4>
                <p>Voila! We found some songs for your mood</p>
            </header>
            <div class="row">
                <?php 
                        while($result = $final->fetch_array(MYSQLI_ASSOC)){
                            $name  =   $result['song_name'];
                            $runtime  =   $result['runtime'];
                            $thumbnail  =   $result['thumbnail'];
                            $link  =   $result['song_link'];
                ?>
                <div class="col-sm-4">
                    <a href="assets\songs\<?php echo $link; ?>">
                        <div class="post card">
                            <img src="assets\thumbnails\<?php echo $thumbnail; ?>" alt="...">
                            <div class="post-body">
                                <h5><?php  echo $name; ?></h5>
                                <ul class="list-inline">
                                    <li>
                                        <i class="md-time m-r-5"></i><?php  echo $runtime; ?>
                                    </li>
                                    <li>
                                        <h6>.</h6>
                                    </li>
                                    <li>
                                        <a href="assets\songs\<?php echo $link; ?>" class="btn"><i class="md-play m-r-5"></i>Download Now</a>
                                    </li>
                                    <li style="margin-top:22px;">
                                        <audio controls>
                                          <source src="assets\songs\<?php echo $link; ?>" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                        </audio>
                                    </li>
                                </ul>
                                </div>

                        </div>
                    </a>

                </div>
                <?php } } ?>
            </div>
        </div>
    </section>

    <section class="help-block">
        <div class="container">
            <div class="help-block-body">
                <h4 class="help-block-title">Change of Mood?</h4>
                <p>Go to the mood selection page to choose your current mood.</p>
            </div>
            <a href="index.html" class="btn bg-white text-grey">Go Back</a>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p>Mood-Music, a Semester project for BTech CSE IV Sem.</p>
                    <ul class="social-buttons sm">
                        <li><a class="facebook" href=""><i class="md-facebook"></i></a></li>
                        <li><a class="twitter" href=""><i class="md-twitter"></i></a></li>
                        <li><a class="google" href=""><i class="md-google"></i></a></li>
                        <li><a class="skype" href=""><i class="md-skype"></i></a></li>
                        <li><a class="linkedin" href=""><i class="md-linkedin"></i></a></li>
                        <li><a class="flickr" href=""><i class="md-flickr"></i></a></li>
                        <li><a class="whatsapp" href=""><i class="md-whatsapp"></i></a></li>
                    </ul>
                    <span>MoodMusic 2018 &copy; All Rights Reserved</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets\js\jquery\jquery.min.js"></script>
    <script src="assets\js\bootstrap-3.3.7\bootstrap.min.js"></script>
    <script src="assets\js\viewportchecker.min.js"></script>
    <script src="assets\js\slick\slick.min.js"></script>
    <script src="assets\js\animateNumber\jquery.animateNumber.min.js"></script>
    <script src="assets\js\isotope.pkgd.min.js"></script>
    <script src="assets\js\typed.min.js"></script>
    <script src="assets\js\site.js"></script>
    <script src="assets\js\custom.js"></script>
</body>
</html>