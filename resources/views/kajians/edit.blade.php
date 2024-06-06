<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kajian</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
        }

        .header-image {
            margin-bottom: 2rem;
        }

        .section-title {
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .section-subtitle {
            font-weight: normal;
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: #7f8c8d;
        }

        .form-section {
            margin-bottom: 2rem;
            padding: 2rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
            color: #34495e;
        }

        .form-control::placeholder {
            font-style: italic;
            color: #bdc3c7;
        }

        .btn-primary {
            background-color: #3498db;
            color: white;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }
    </style>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #7ED56F; /* fallback for old browsers */
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
            <img src="https://via.placeholder.com/150" alt="Header Image" class="img-fluid">
        </div>
        <form action="{{ route('kajians.update', $kajians->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-section text-center">
                <h2 class="section-title">Edit Data Kajian</h2>
                <p class="section-subtitle">Sesuaikan dan perhatikan isian format kajian</p>
            </div>

            <div class="form-section">
                <div class="form-group">
                    <label for="judul">Judul Kajian</label>
                    <input type="text" name="judul" class="form-control" value="{{ $kajians->judul }}" required>
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun Kajian</label>
                    <input type="text" name="tahun" class="form-control" value="{{ $kajians->tahun }}" required>
                </div>

                <div class="form-group">
                    <label for="latar">Latar Belakang</label>
                    <textarea name="latar" id="latar" class="form-control" rows="3" required>{{ $kajians->latar }}</textarea>
                </div>

                <div class="form-group">
                    <label for="metodologi">Metodologi</label>
                    <textarea name="metodologi" id="metodologi" class="form-control" rows="3" required>{{ $kajians->metodologi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="pelaksana">Pelaksana</label>
                    <textarea name="pelaksana" id="pelaksana" class="form-control" rows="3" required>{{ $kajians->pelaksana }}</textarea>
                </div>

                <div class="form-group">
                    <label for="data">Data Ringkas</label>
                    <textarea name="data" id="data" class="form-control" rows="3" required>{{ $kajians->data }}</textarea>
                </div>

                <div class="form-group">
                    <label for="unit_id">Unit ID</label>
                    <input type="text" name="unit_id" class="form-control" value="{{ $kajians->unit_id }}" required>
                </div>

                <div class="form-group">
                    <label for="lokasikajian">Lokasi Kajian</label>
                    <select name="lokasi" id="lokasi" class="form-control select2" multiple="multiple" required>
                        <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                        <option value="Kec. Mantrijeron">Kec. Mantrijeron</option>
                        <option value="Gedongkiwo">Gedongkiwo</option>
                        <option value="Suryodiningratan">Suryodiningratan</option>
                        <option value="Mantrijeron">Mantrijeron</option>
                        <option value="Kec. Kraton">Kec. Kraton</option>
                        <option value="Patehan">Patehan</option>
                        <option value="Panembahan">Panembahan</option>
                        <option value="Kadipaten">Kadipaten</option>
                        <option value="Kec. Mergangsan">Kec. Mergangsan</option>
                        <option value="Brontokusuman">Brontokusuman</option>
                        <option value="Keparakan">Keparakan</option>
                        <option value="Wirogunan">Wirogunan</option>
                        <option value="Kec. Umbulharjo">Kec. Umbulharjo</option>
                        <option value="Giwangan">Giwangan</option>
                        <option value="Sorosutan">Sorosutan</option>
                        <option value="Pandeyan">Pandeyan</option>
                        <option value="Warungboto">Warungboto</option>
                        <option value="Tahunan">Tahunan</option>
                        <option value="Mujamuju">Mujamuju</option>
                        <option value="Semaki">Semaki</option>
                        <option value="Kec. Kotagede">Kec. Kotagede</option>
                        <option value="Prenggan">Prenggan</option>
                        <option value="Purbayan">Purbayan</option>
                        <option value="Rejowinangun">Rejowinangun</option>
                        <option value="Kec. Gondokusuman">Kec. Gondokusuman</option>
                        <option value="Baciro">Baciro</option>
                        <option value="Demangan">Demangan</option>
                        <option value="Klitren">Klitren</option>
                        <option value="Kotabaru">Kotabaru</option>
                        <option value="Terban">Terban</option>
                        <option value="Kec. Danurejan">Kec. Danurejan</option>
                        <option value="Suryatmajan">Suryatmajan</option>
                        <option value="Tegalpanggung">Tegalpanggung</option>
                        <option value="Busasran">Busasran</option>
                        <option value="Kec. Pakualaman">Kec. Pakualaman</option>
                        <option value="Purwokinanti">Purwokinanti</option>
                        <option value="Gunungketur">Gunungketur</option>
                        <option value="Kec. Gondomanan">Kec. Gondomanan</option>
                        <option value="Prawirodirjan">Prawirodirjan</option>
                        <option value="Ngupasan">Ngupasan</option>
                        <option value="Kec. Ngampilan">Kec. Ngampilan</option>
                        <option value="Notoprajan">Notoprajan</option>
                        <option value="Ngampilan">Ngampilan</option>
                        <option value="Kec. Wirobrajan">Kec. Wirobrajan</option>
                        <option value="Patangpuluhan">Patangpuluhan</option>
                        <option value="Wirobrajan">Wirobrajan</option>
                        <option value="Pakuncen">Pakuncen</option>
                        <option value="Kec. Gedongtengen">Kec. Gedongtengen</option>
                        <option value="Pringgokusuman">Pringgokusuman</option>
                        <option value="Sosromenduran">Sosromenduran</option>
                        <option value="Kec. Jetis">Kec. Jetis</option>
                        <option value="Bumijo">Bumijo</option>
                        <option value="Gowongan">Gowongan</option>
                        <option value="Cokrodiningratan">Cokrodiningratan</option>
                        <option value="Kec. Tegalrejo">Kec. Tegalrejo</option>
                        <option value="Tegalrejo">Tegalrejo</option>
                        <option value="Bener">Bener</option>
                        <option value="Kricak">Kricak</option>
                        <option value="Karangwaru">Karangwaru</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sektorKajian">Bagian Sektor Kajian</label>
                    <select name="sektoral" id="sektoral" class="form-control select2" multiple="multiple" required>
                        <option value="Bidang IPW">Bidang IPW</option>
                        <option value="Bidang Perekonomian">Bidang Perekonomian</option>
                        <option value="Bidang PPM">Bidang PPM</option>
                        <option value="Bidang Litbangindal">Bidang Litbangindal</option>
                        <option value="Bidang Renbang">Bidang Renbang</option>
                    </select>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Kajian</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Pilih",
                allowClear: true
            });
        });
    </script>
</body>

</html>
