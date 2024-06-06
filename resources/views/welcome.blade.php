<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart DSS Kota Yogyakarta</title>
    <!-- Link to Bootstrap CSS for quick styling (you can replace this with your own stylesheet) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif; /* Basic font */
        }
        .header {
            background-color: #4CAF50; /* Dark green background */
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        .map-container {
            padding: 20px;
        }
        .form-container {
            background-color: #f4f4f4; /* Light grey background */
            padding: 20px;
            border-radius: 5px; /* Rounded corners */
        }
        .btn-primary {
            background-color: #007bff; /* Bootstrap primary button color */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>SMART DSS KOTA YOGYAKARTA</h1>
        <p>Sistem informasi untuk memfasilitasi LPPM, Forum TSLP, OPD, dan Bappeda dalam pengambilan keputusan berbasis spasial dan kajian.</p>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 map-container">
                <!-- Placeholder for the map; replace 'map-placeholder.png' with your actual map file -->
                <img src="map-placeholder.png" alt="Map of Yogyakarta" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="form-container">
                    <h2>Registrasi Forum LPPM</h2>
                    <form>
                        <div class="form-group">
                            <label for="email">Email Forum LPPM</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Ketua LPPM</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="perguruantinggi">Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="perguruantinggi">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="alamat">
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
