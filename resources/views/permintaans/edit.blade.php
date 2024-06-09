<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Permintaan Download</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #7ED56F;
            background-image: linear-gradient(315deg, #7ED56F 0%, #28B485 74%);
        }

        .container {
            max-width: 800px;
        }

        .header-image {
            margin-bottom: 2rem;
        }

        .section-title {
            font-weight: bold;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .section-subtitle {
            font-weight: normal;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #666;
        }

        .form-section {
            margin-bottom: 2rem;
            padding: 2rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .form-control::placeholder {
            font-style: italic;
            color: #999;
        }

        button[type="submit"] {
            background-color: #ff6f61;
            color: white;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #e65042;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center header-image">
            <img src="{{asset('lte/dist/img/LogoSmartdss.png')}}" width="500" height="300" alt="Header Image" class="img-fluid">
        </div>
        <div class="form-section text-center">
            <h2 class="section-title">Update Permintaan Download</h2>
            <p class="section-subtitle">Perbarui data permintaan download dengan teliti</p>
        </div>
        <div class="form-section">
            <form action="{{ route('permintaans.update', $permintaans->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="jss">ID JSS:</label>
                    <input type="text" class="form-control" name="jss" id="jss" value="{{ $permintaans->jss }}" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $permintaans->nama }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $permintaans->email }}" required>
                </div>

                <div class="form-group">
                    <label for="judul">Judul Kajian:</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{ $permintaans->judul }}" required>
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun:</label>
                    <input type="number" class="form-control" name="tahun" id="tahun" value="{{ $permintaans->tahun }}" required>
                </div>

                <div class="form-group">
                    <label for="keperluan">Keperluan:</label>
                    <input type="text" class="form-control" name="keperluan" id="keperluan" value="{{ $permintaans->keperluan }}" required>
                </div>

                <div class="form-group">
                    <label for="instansi">Instansi:</label>
                    <input type="text" class="form-control" name="instansi" id="instansi" value="{{ $permintaans->instansi }}" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $permintaans->tanggal }}" required>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1" {{ $permintaans->status == 1 ? 'selected' : '' }}>Sudah DiProses</option>
                        <option value="0" {{ $permintaans->status == 0 ? 'selected' : '' }}>Belum Diproses</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="readed">Readed:</label>
                    <select class="form-control" id="readed" name="readed" required>
                        <option value="1" {{ $permintaans->readed == 1 ? 'selected' : '' }}>Sudah DiBaca</option>
                        <option value="0" {{ $permintaans->readed == 0 ? 'selected' : '' }}>Belum DiBaca</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Update Permintaan</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#status, #readed').select2({
                placeholder: "Pilih",
                allowClear: true
            });
        });
    </script>
</body>

</html>
