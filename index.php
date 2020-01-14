<?php $image = get_field('santecgif.gif'); 
echo "Hello Developer, This is VERSION 2.0 Version Jenkins webhook <br><br>";
echo "My Pod IP is : ".$_SERVER['SERVER_ADDR'] ;// fetch the ACF field ?>
<html>
    <head>
        <title>Santander Tecnologia - Deployment Strategies</title>
        <style>
            .your-div {
                background-image: url('<?php echo $image; ?>');
            }
        </style>
    </head>
    <body>
        <!-- this div uses the $image URL as a background. -->
        <div class="your-div">
            Lorem Ipsum.
        </div>
    </body>
</html>
