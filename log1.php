<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no"/>

    <title>JQuery Slideshow plugin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/demopage.css">
    <link rel="stylesheet" type="text/css" href="assets/jQuery-slideshow-plugin/plugin.css">
</head>
<body>


<div class="navbar navbar-fixed-top text-center">
    <button id="activate" type="button" class="btn btn-default navbar-btn"> Activate Plugin</button>
</div>

<div class="container-fluid text-center">
    <div class="header">
        <img class="headerImg"
             src="assets/images/header/header.jpg"
             data-slideshow='assets/images/header/img1.jpg|assets/images/header/img2.jpg|assets/images/header/img3.jpg'>
    </div>

    <div class="container-fluid">
        <div class="col-lg-7">
            <h2> jQuery Image Slideshow Plugin </h2>

            <p class="text-left">
                Our plugin scans all images on the page, finds those with a <b>data-slideshow</b> attribute, and replaces 
                them with a real slideshow! <i>Cool, huh?</i> Find out how it was made and how to integrate it with your
                site, by following <a href="http://tutorialzine.com/2014/05/jquery-image-slideshow-plugin/">our tutorial</a>.
                <b>Tip:</b> it also understands swipe gestures, so it works on smartphones and tablets!<br><br>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean turpis lorem, tempus vel tempus
                tincidunt, cursus sed lorem. Etiam eu mauris non orci molestie faucibus sit amet ac libero. Sed vel
                mattis nisl. Integer dignissim, dolor sed scelerisque iaculis, tellus dolor gravida elit, et posuere
                mauris leo ut sem. Donec fringilla sapien faucibus metus viverra gravida. Pellentesque congue mollis
                elit vel molestie. Nunc mattis tortor est, et commodo nibh scelerisque vitae. Sed a varius risus. Mauris
                cursus mi est, at gravida nulla viverra ac. Fusce in ligula sit amet ipsum elementum varius eu id
                tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Aliquam non felis vitae felis dignissim ultrices a eget nisi. Mauris venenatis est pulvinar ipsum
                ullamcorper, vel commodo nunc rutrum. Nulla vulputate bibendum augue at egestas. Sed sollicitudin ipsum
                eget blandit rutrum. Etiam eu vulputate lacus, ut rutrum tortor. <br><br> Vivamus volutpat, ligula id
                interdum interdum, leo felis blandit velit, at malesuada turpis risus sit amet nisi. Pellentesque
                malesuada lectus sem, at suscipit sem adipiscing ac. Phasellus nec ligula consequat, posuere sapien eu,
                lobortis mi. Praesent vitae interdum turpis, vel sagittis nibh. Nam ut volutpat ligula. Donec auctor
                ultrices sem non laoreet. Ut aliquet eros ac porttitor faucibus. Pellentesque adipiscing justo non justo
                lacinia molestie. Etiam molestie ornare varius.
            </p>

        </div>

        <div class="col-lg-5">
            <img src="assets/images/inline/original.jpg"
                 data-slideshow='assets/images/inline/img1.jpg|assets/images/inline/img2.jpg|assets/images/inline/img3.jpg|assets/images/inline/img4.jpg'
                 alt="Inline pictures">
        </div>

    </div>

</div>

<div class="credit">
    <p>
        Photos by
        <a href="https://www.flickr.com/photos/zanthia/">Chris Zielecki</a>
    </p>
    More script and css style
: <a href="http://www.htmldrive.net/" title="HTML DRIVE - Free DHMTL Scripts,Jquery plugins,Javascript,CSS,CSS3,Html5 Library">www.htmldrive.net </a>

</div>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/jquery.hammer-full.min.js"></script>
<script src="assets/jQuery-slideshow-plugin/plugin.js"> </script>
<script src="assets/js/demo.js"></script>
    
<!-- Only used for Tutorialzine's Demo site. Please ignore and remove. -->
<script src="http://cdn.tutorialzine.com/misc/enhance/v2.js" async></script>

</body>
</html>
