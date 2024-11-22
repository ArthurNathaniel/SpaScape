<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rub Haven - Teeth Whitening</title>
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/massage.css">
    <style>
      

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

     

        table {
            width: 100%;
            margin-bottom: 40px;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

      
        .teeth-info,
        .why-teeth-whitening {
            margin-bottom: 40px;
        }

        p {
            line-height: 1.6;
        }


        .note {
            background-color: #ffeeba;
            border-left: 6px solid #ffcc00;
            padding: 15px;
            margin: 20px 0;
            font-style: italic;
        }

        @media only screen and (max-width: 1110px) {
    .gallery_all{
      display: grid ;
      grid-template-columns: 1fr;
    }
  }
    </style>
</head>

<body>
<?php include 'navbar.php'?>

    <div class="container">
        <h1>The Rub Haven - Teeth Whitening & Cleaning</h1>

        <!-- Teeth Whitening Description -->
        <section class="teeth-info">
            <h2>Teeth Whitening Service</h2>
            <p>At The Rub Haven, we offer professional teeth whitening treatments that leave your smile bright and radiant. Our sessions are designed to gently remove stains and discoloration, giving you a confident, whiter smile.</p>
        </section>

        <!-- Teeth Whitening Pricing Table -->
        <table>
            <thead>
                <tr>
                    <th>Sessions</th>
                    <th>Price (GHC)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Whitening</td>
                    <td>400</td>
                </tr>
                <tr>
                    <td>2 Sessions</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>3 Sessions</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>Teeth Cleaning (TC)</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>TC + Whitening</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>Whitening Products</td>
                    <td>Enquire</td>
                </tr>
            </tbody>
        </table>

        <!-- Special Offer Note -->
        <div class="note">
            <p><strong>Special Offer:</strong> Pay for 5 sessions and get 1 session free!</p>
        </div>

        <!-- Teeth Whitening Benefits -->
        <h2>Benefits of Teeth Whitening</h2>
        <ul class="benefits-list">
            <li>Removes stains and discoloration</li>
            <li>Enhances confidence and self-esteem</li>
            <li>Gives a brighter, more radiant smile</li>
            <li>Non-invasive and pain-free procedure</li>
            <li>Long-lasting results with proper maintenance</li>
        </ul>

        <!-- Teeth Whitening Video Section -->
        <div class="gallery_all">
            <div class="gallery">
                <a href="./images/teeth-1.jpeg" data-fancybox="gallery">
                    <img src="./images/teeth-1.jpeg" alt="Image 1">
                </a>
            </div>
            <div class="gallery">
                <a href="./images/teeth-2.jpeg" data-fancybox="gallery">
                    <img src="./images/teeth-2.jpeg" alt="Image 1">
                </a>
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