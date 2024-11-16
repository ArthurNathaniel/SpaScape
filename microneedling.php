<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rub Haven - Microneedling on Body Parts</title>
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/massage.css">
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
        .microneedling-info, .pricing-info {
            margin-bottom: 40px;
        }
        p {
            line-height: 1.6;
        }
        .pricing-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-left: 6px solid #006600;
            font-style: italic;
        }
      
      
    </style>
</head>

<body>

    <div class="container">
        <h1>The Rub Haven - Microneedling on Body Parts</h1>

        <!-- Microneedling Service Description -->
        <section class="microneedling-info">
            <h2>Microneedling on Body Parts</h2>
            <p>Microneedling is a highly effective treatment that helps to rejuvenate the skin, improve texture, and reduce the appearance of scars and stretch marks. This non-invasive procedure promotes collagen production, leaving your skin smoother and more vibrant.</p>
        </section>

        <!-- Pricing Information -->
        <section class="pricing-info">
            <p>Pricing for microneedling on body parts is available by appointment. Please contact us for detailed information and to schedule a consultation.</p>
        </section>

        <!-- Contact Information -->
        <div class="contact-info">
            <p>For pricing inquiries, call our office at <a href="tel:+233542999995">+233 542 999 995</a>.</p>
        </div>

        <!-- Microneedling Video Section -->
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
