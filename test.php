<!DOCTYPE html>

<html>
                       <?php
include("head.html");
?>

<head>
    
            <title>Ozeryo - Testing page</title>

              <link href="https://vjs.zencdn.net/7.6.0/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

<script async src="http://googleads.g.doubleclick.net/pagead/ads?ad_type=video&client=ca-games-pub-4968145218643279&videoad_start_delay=0&description_url=http%3A%2F%2Fwww.google.com&max_ad_duration=20000&adtest=on"></script>

</head>

    

    <body>

        <div id="bloc_page">

                                <?php
include("header.html");
?>


<body>
  <video id='my-video' class='video-js' controls preload='auto' width='640' height='264'
  poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
    <source src='https://ozeryo.xyz/video.mp4' type='video/mp4'>
    <source src='https://ozeryo.xyz/video.mp4' type='video/webm'>
    <p class='vjs-no-js'>
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href='https://ozeryo.xyz/video.mp4'>supports HTML5 video</a>
    </p>
  </video>

  <script src='https://vjs.zencdn.net/7.6.0/video.js'></script>

                       <?php
include("footer.html");
?>

</body>
</html>