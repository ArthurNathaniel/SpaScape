<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rub Haven - Sauna Services</title>
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/massage.css">

    
</head>

<body>
<?php include 'navbar.php' ?>
    <div class="container">
        <h1>The Rub Haven - Sauna Services</h1>

        <!-- Sauna Definition -->
        <section class="sauna-info">
            <h3>Sauna</h3>
            <p>A sauna is a room designed to offer dry heat therapy, where the temperature typically ranges from 70° to 100°C. 
               The heat induces perspiration, which helps detoxify the body and promotes relaxation.</p>
        </section>
<br>
<br>
        <!-- Sauna Price Table -->
        <h2>Sauna Sessions & Price List</h2>
        <table class="price-table">
            <thead>
                <tr>
                    <th>Session Duration</th>
                    <th>Price (GHC)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>20 Minutes</td>
                    <td>150</td>
                </tr>
                <tr>
                    <td>30 Minutes</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>40 Minutes</td>
                    <td>300</td>
                </tr>
            </tbody>
        </table>

        <!-- Sauna Benefits -->
        <h2>Benefits of Sauna</h2>
        <ul class="benefits-list">
            <li>Unclogs veins</li>
            <li>Promotes skin glow</li>
            <li>Good blood circulation</li>
            <li>Improves heart health</li>
            <li>Flushes toxins</li>
            <li>Reduces stress and helps induce deep sleep</li>
        </ul>

       <br>

        <!-- <div class="video-container">
            <video src="./video/sauna.mp4" controls></video>
        </div> -->

      
    </div>
    <?php include 'footer.php';?>
    <script>
        $(document).ready(function () {
            $('[data-fancybox]').fancybox();
        });
    </script>
</body>

</html>
