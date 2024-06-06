<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Tampilan Web PHP Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Tampilan Web PHP Sederhana</h1>
        <p>Ini adalah contoh tampilan web sederhana menggunakan PHP.</p>
        <p>Waktu sekarang: <?php echo date("Y-m-d H:i:s"); ?></p>
        <p>Anda dapat menambahkan lebih banyak konten di sini sesuai kebutuhan Anda.</p>
    </div>
</body>
</html>
