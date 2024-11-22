<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rub Haven</title>
    <?php include 'cdn.php'?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
  
</head>

<body>
    <div class="index_bg">
        <div class="index_all">
           
            <div class="welcome">
                <h1 class="welcome_title">Hey! You're Welcome to</h1>
              
                <div class="logo"></div>
                <p class="welcome_text">
                    Your oasis of tranquility in the heart of Kumasi, Ghana. Located at Atasomanso, 
                    adjacent to World Links Academy, our spa is dedicated to providing a haven of 
                    relaxation and rejuvenation \.
                </p>
            </div>
           
            <div class="get_started">
                <a href="services.php">
                <button class="explore_btn">Explore our services</button>
                </a>
            </div>
        </div>
    </div>

    <script>
        // Animate the logo
        anime({
            targets: '.logo',
            scale: [0, 1],
            opacity: [0, 1],
            duration: 1000,
            easing: 'easeOutExpo',
            delay: 200
        });

        // Animate the title
        anime({
            targets: '.welcome_title',
            translateY: [-50, 0],
            opacity: [0, 1],
            duration: 1000,
            easing: 'easeOutExpo',
            delay: 800
        });

        // Animate the text
        anime({
            targets: '.welcome_text',
            translateY: [50, 0],
            opacity: [0, 1],
            duration: 1000,
            easing: 'easeOutExpo',
            delay: 1200
        });

        // Animate the button
        anime({
            targets: '.explore_btn',
            scale: [0.8, 1],
            opacity: [0, 1],
            duration: 1200,
            easing: 'easeOutExpo',
            delay: 1600
        });
    </script>
</body>

</html>
