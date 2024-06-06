<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New LPPM</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="mb-4 text-center">Add New LPPM</h1>
            <form action="{{ route('lppms.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="namaKetua">Nama Ketua:</label>
                    <input type="text" class="form-control" name="namaKetua" id="namaKetua" required>
                </div>

                <div class="form-group">
                    <label for="perguruanTinggi">Perguruan Tinggi:</label>
                    <input type="text" class="form-control" name="perguruanTinggi" id="perguruanTinggi" required>
                </div>

                <div class="form-group">
                    <label for="alamatPT">Alamat Perguruan Tinggi:</label>
                    <input type="text" class="form-control" name="alamatPT" id="alamatPT" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="userjss">User JSS:</label>
                    <input type="text" class="form-control" name="userjss" id="userjss" required>
                </div>

                <div class="form-group">
                    <label for="readed">Readed:</label>
                    <select class="form-control" id="readed" name="readed">
                        <option value="1">True</option>
                        <option value="0">False</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Add LPPM</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>