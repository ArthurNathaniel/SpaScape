<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massage Services - The Rub Haven </title>
    <?php include 'cdn.php' ?>
  <link rel="stylesheet" href="./css/base.css">
  <link rel="stylesheet" href="./css/massage.css">
</head>

<body>
<?php include 'navbar.php' ?>
    <div class="container">
        <h1>The Rub Haven - Massage Services</h1>

        <section class="massage-info">
            <h3>Reflexology Massage</h3>
            <p>Focuses on applying pressure to specific points on the feet, hands, and ears to relieve stress and improve overall health.</p>
            <p><strong>Benefits:</strong> Boosts circulation, promotes relaxation, and helps with stress management.</p>
        </section>

        <section class="massage-info">
            <h3>Swedish Massage</h3>
            <p>A gentle, full-body massage that uses long strokes, kneading, and circular movements to relax muscles.</p>
            <p><strong>Benefits:</strong> Reduces stress, improves circulation, and helps with muscle tension relief.</p>
        </section>

        <section class="massage-info">
            <h3>Swedish-Thai Massage</h3>
            <p>Combines the soothing strokes of Swedish massage with the stretching and pressure techniques of Thai massage.</p>
            <p><strong>Benefits:</strong> Increases flexibility, relieves muscle tension, and enhances relaxation.</p>
        </section>

        <section class="massage-info">
            <h3>Deep Tissue Massage</h3>
            <p>Targets deeper layers of muscle and connective tissue using slow, deep strokes.</p>
            <p><strong>Benefits:</strong> Relieves chronic pain, muscle stiffness, and improves posture.</p>
        </section>

        <section class="massage-info">
            <h3>Sport Massage</h3>
            <p>Aimed at athletes, focusing on areas of the body stressed by repetitive motion.</p>
            <p><strong>Benefits:</strong> Enhances performance, reduces risk of injury, and speeds recovery.</p>
        </section>

        <section class="massage-info">
            <h3>Aromatherapy Massage</h3>
            <p>Uses essential oils during the massage to enhance both physical and emotional health.</p>
            <p><strong>Benefits:</strong> Relieves stress, boosts mood, and can help with insomnia.</p>
        </section>

        <section class="massage-info">
            <h3>Hot Stone Massage</h3>
            <p>Involves placing heated stones on the body to relieve tension and promote relaxation.</p>
            <p><strong>Benefits:</strong> Eases muscle tension, improves circulation, and promotes deep relaxation.</p>
        </section>

        <h2>Massage Sessions & Price List</h2>
        <br>
        <table class="price-table">
            <thead>
                <tr>
                    <th>Massage Type</th>
                    <th>30 Minutes (GHC)</th>
                    <th>60 Minutes (GHC)</th>
                    <th>90 Minutes (GHC)</th>
                    <th>130 Minutes (GHC)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Reflexology Massage</td>
                    <td>280</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Swedish Massage</td>
                    <td>-</td>
                    <td>300</td>
                    <td>450</td>
                    <td>700</td>
                </tr>
                <tr>
                    <td>Swedish-Thai Massage</td>
                    <td>-</td>
                    <td>350</td>
                    <td>525</td>
                    <td>700</td>
                </tr>
                <tr>
                    <td>Deep Tissue Massage</td>
                    <td>-</td>
                    <td>350</td>
                    <td>525</td>
                    <td>700</td>
                </tr>
                <tr>
                    <td>Sport Massage</td>
                    <td>-</td>
                    <td>350</td>
                    <td>525</td>
                    <td>650</td>
                </tr>
                <tr>
                    <td>Aromatherapy Massage</td>
                    <td>-</td>
                    <td>400</td>
                    <td>600</td>
                    <td>700</td>
                </tr>
                <tr>
                    <td>Hot Stone Massage</td>
                    <td>-</td>
                    <td>400</td>
                    <td>600</td>
                    <td>800</td>
                </tr>
            </tbody>
        </table>

       
        <div class="gallery_all">
            <div class="gallery">
                <a href="./video/massage.mp4" data-fancybox="gallery">
                    <video src="./video/massage.mp4"></video>
                </a>
            </div>
           
        </div>
       
</div>


      
    </div>
<?php include 'footer.php'?>
<script>
        $(document).ready(function () {
            $('[data-fancybox]').fancybox();
        });
    </script>
</body>

</html>
