<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rub Haven - Detox Benefits</title>
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/services.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            color: #006600;
            margin-bottom: 30px;
        }
        .detox-info, .why-detox {
            margin-bottom: 40px;
        }
        p {
            line-height: 1.6;
        }
        ul.benefits-list {
            list-style-type: disc;
            padding-left: 20px;
            margin-bottom: 40px;
        }
        ul.benefits-list li {
            margin-bottom: 10px;
        }
        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px 0;
        }
        .video-container video {
            width: 80%;
            max-width: 1000px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .video-container video:hover {
            transform: scale(1.05);
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #006600;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>The Rub Haven - Detox Benefits</h1>

        <!-- Detox Definition and Benefits -->
        <section class="detox-info">
            <h2>Why You Need Detox</h2>
            <p>In today's fast-paced world, we are exposed to toxins from various sources including pollution, processed foods, and even stress. A detox is a way to support your body in eliminating these harmful substances, restoring balance, and boosting overall well-being.</p>
        </section>

        <!-- Detox Benefits List -->
        <h2>Detox Benefits</h2>
        <ul class="benefits-list">
            <li>Eliminates harmful toxins from the body</li>
            <li>Boosts energy levels</li>
            <li>Improves digestion and nutrient absorption</li>
            <li>Promotes weight loss and management</li>
            <li>Strengthens the immune system</li>
            <li>Promotes healthy, glowing skin</li>
            <li>Enhances mental clarity and focus</li>
            <li>Reduces inflammation and improves joint health</li>
        </ul>

        <!-- Detox Video Section -->
        <div class="video-container">
            <video src="./video/detox.mp4" controls></video>
        </div>

        <!-- Footer -->
        <footer>
            &copy; 2024 The Rub Haven Spa, Kumasi. All rights reserved.
        </footer>
    </div>
    <script>
        $(document).ready(function () {
            $('[data-fancybox]').fancybox();
        });
    </script>
</body>

</html>
