<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Rekomendasi OPD</title>
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
            <img src="{{ asset('lte/dist/img/LogoSmartdss.png') }}" width="500" height="300" alt="Header Image" class="img-fluid">
        </div>
        <form action="{{ route('rekomendasiopds.update', $rekomendasiopds->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-section text-center">
                <h2 class="section-title">Update Rekomendasi OPD</h2>
                <p class="section-subtitle">Please update the details below</p>
            </div>

            <div class="form-section">
                <h2 class="section-title">Rekomendasi Details</h2>
                <div class="form-group">
                    <label for="id_kajian">ID Kajian:</label>
                    <input type="text" class="form-control" name="id_kajian" id="id_kajian" value="{{ $rekomendasiopds->id_kajian }}" required>
                </div>

                <div class="form-group">
                    <label for="opd_id">OPD ID:</label>
                    <input type="text" class="form-control" name="opd_id" id="opd_id" value="{{ $rekomendasiopds->opd_id }}" required>
                </div>

                <div class="form-group">
                    <label for="rekomendasi">Rekomendasi:</label>
                    <input type="text" class="form-control" name="rekomendasi" id="rekomendasi" value="{{ $rekomendasiopds->rekomendasi }}" required>
                </div>

                <div class="form-group">
                    <label for="tindak_lanjut">Tindak Lanjut:</label>
                    <input type="text" class="form-control" name="tindak_lanjut" id="tindak_lanjut" value="{{ $rekomendasiopds->tindak_lanjut }}" required>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1" {{ $rekomendasiopds->status == 1 ? 'selected' : '' }}>True</option>
                        <option value="0" {{ $rekomendasiopds->status == 0 ? 'selected' : '' }}>False</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="readed">Readed:</label>
                    <select class="form-control" id="readed" name="readed" required>
                        <option value="1" {{ $rekomendasiopds->readed == 1 ? 'selected' : '' }}>True</option>
                        <option value="0" {{ $rekomendasiopds->readed == 0 ? 'selected' : '' }}>False</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Rekomendasi OPD</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $('#status, #readed').select2({
                placeholder: "Select",
                allowClear: true
            });
        });
    </script>
</body>

</html>
