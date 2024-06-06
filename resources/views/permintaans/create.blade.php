<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Permintaan Download</title>
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
            <h1 class="mb-4 text-center">Add New Permintaan Download</h1>
            <form action="{{ route('permintaans.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="jss">ID JSS:</label>
                    <input type="text" class="form-control" name="jss" id="jss" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="judul">Judul Kajian:</label>
                    <input type="text" class="form-control" name="judul" id="judul" required>
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun:</label>
                    <input type="number" class="form-control" name="tahun" id="tahun" required>
                </div>

                <div class="form-group">
                    <label for="keperluan">Keperluan:</label>
                    <input type="text" class="form-control" name="keperluan" id="keperluan" required>
                </div>

                <div class="form-group">
                    <label for="instansi">Instansi:</label>
                    <input type="text" class="form-control" name="instansi" id="instansi" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1">Sudah DiProses</option>
                        <option value="0">Belum Diproses</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="readed">Readed:</label>
                    <select class="form-control" id="readed" name="readed" required>
                        <option value="1">Sudah DiBaca</option>
                        <option value="0">Belum DiBaca</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Add Permintaan Download</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
