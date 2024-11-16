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

        h1,
        h2 {
            text-align: center;
            color: #006600;
            margin-bottom: 30px;
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

        th {
            background-color: #006600;
            color: white;
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

    
    </style>
</head>

<body>

    <div class="container">
        <h1>The Rub Haven - Teeth Whitening</h1>

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
                    <td>1 Session</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>2 Sessions</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>3 Sessions</td>
                    <td>750</td>
                </tr>
                <tr>
                    <td>4 Sessions</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>5 Sessions (Pay for 5, Get 1 Free)</td>
                    <td>900</td>
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
                <a href="./images/1.jpg" data-fancybox="gallery">
                    <img src="./images/1.jpg" alt="Image 1">
                </a>
            </div>
            <div class="gallery">
                <a href="./images/1.jpg" data-fancybox="gallery">
                    <img src="./images/1.jpg" alt="Image 1">
                </a>
            </div>
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