<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rub Haven - Facial Services</title>
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/massage.css">

</head>

<body>
<?php include 'navbar.php'?>
    <div class="container">
        <h1>The Rub Haven - Facial Services</h1>

        <!-- Facial Definition -->
        <section class="facial-info">
            <h2>Our Facial Services</h2>
            <p>At The Rub Haven, we offer a range of facial services tailored to your skin's needs. Whether you're looking for a deep cleanse, acne treatment, or a glowing, youthful complexion, our expert therapists are here to provide the best care for your skin.</p>
        </section>

        <!-- Facial Services Table -->
        <table>
            <thead>
                <tr>
                    <th>Facial Service</th>
                    <th>Price (GHC)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hydra Facial</td>
                    <td>350</td>
                </tr>
                <tr>
                    <td>Deep Cleanse Facial</td>
                    <td>350</td>
                </tr>
                <tr>
                    <td>Acne Pimple Facial</td>
                    <td>400</td>
                </tr>
                <tr>
                    <td>Dermaplaning Facial</td>
                    <td>450</td>
                </tr>
                <tr>
                    <td>Microneedling Facial</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>Baby Face Facial (Skin Tag, Dermaplaning, Deep Cleanse)</td>
                    <td>700</td>
                </tr>
                <tr>
                    <td>Microneedling on Body Parts</td>
                    <td>By Appointment</td>
                </tr>
            </tbody>
        </table>

        <!-- Facial Benefits -->
        <h2>Benefits of Our Facial Treatments</h2>
        <ul class="benefits-list">
            <li>Deep cleanses your skin</li>
            <li>Reduces acne and breakouts</li>
            <li>Promotes healthy, glowing skin</li>
            <li>Improves skin texture and tone</li>
            <li>Boosts collagen production for anti-aging</li>
            <li>Unclogs pores and removes dead skin cells</li>
        </ul>

        <!-- Facial Video Section -->
        <div class="gallery_all">
            <div class="gallery">
                <a href="./video/facial_1.mp4" data-fancybox="gallery">
                    <video src="./video/facial_1.mp4"></video>
                </a>
            </div>
            <div class="gallery">
                <a href="./video/facial_2.mp4" data-fancybox="gallery">
                    <video src="./video/facial_2.mp4"></video>
                </a>
            </div>
            <div class="gallery">
                <a href="./video/deep_cleaning.mp4" data-fancybox="gallery">
                    <video src="./video/deep_cleaning.mp4"></video>
                </a>
            </div>
        </div>
     
    </div>
    <?php include 'footer.php'?>
    <script>
        $(document).ready(function() {
            $('[data-fancybox]').fancybox();
        });
    </script>
</body>

</html>