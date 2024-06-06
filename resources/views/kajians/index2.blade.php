<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kajian</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-between mb-3">
        <div class="col-md-6">
            <div class="form-group">
                <form class="form-inline">
                    <div class="input-group">
                        <input type="search" id="searchInput" class="form-control" placeholder="Cari data...">
                        <div class="input-group-append">
                            <button type="button" id="searchButton" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-auto">
            <a class="btn btn-success" href='{{ route('kajians.create') }}'>Tambah</a>
        </div>
    </div>

    <div id="kajianContainer">
        @foreach($data as $index => $a)
        <div class="card mt-3 kajian-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title judul">{{ $a->judul }}</h5>
                        <br>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <br>
                            Tag: <span class="lokasi">{{ $a->lokasi }}</span><br>
                            <span>{{ $a->tahun }},<span class="sektoral">{{ $a->sektoral }}</span></span>
                        </h6>
                    </div>
                    <div>
                        <a href="{{ route('kajians.edit', $a->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kajians.destroy', $a->id) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>

                <p class="card-text latar" id="latar-{{ $index }}">
                    {{ $a->latar }}
                </p>
                <a href="#" class="btn btn-primary read-more-btn" data-index="{{ $index }}">Baca Selengkapnya</a>
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#metodologiModal{{$index}}">Metodologi</a>
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#lokasiModal{{$index}}">Lokasi</a>
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#dataModal{{$index}}">Data Ringkas</a>
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#pelaksanaModal{{$index}}">Pelaksana</a>
                <a href="{{ asset('storage/' . $a->file) }}" target="_blank" class="btn btn-secondary">Preview PDF</a>
            </div>
        </div>

        <!-- Metodologi Modal -->
        <div class="modal fade" id="metodologiModal{{$index}}" tabindex="-1" role="dialog" aria-labelledby="metodologiModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="metodologiModalLabel">Metodologi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $a->metodologi }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Lokasi Modal -->
        <div class="modal fade" id="lokasiModal{{$index}}" tabindex="-1" role="dialog" aria-labelledby="lokasiModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="lokasiModalLabel">Lokasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $a->lokasi }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Ringkas Modal -->
        <div class="modal fade" id="dataModal{{$index}}" tabindex="-1" role="dialog" aria-labelledby="dataModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dataModalLabel">Data Ringkas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $a->data }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Pelaksana Modal -->
        <div class="modal fade" id="pelaksanaModal{{$index}}" tabindex="-1" role="dialog" aria-labelledby="pelaksanaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pelaksanaModalLabel">Pelaksana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $a->pelaksana }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <script>
        $(document).ready(function () {
            $('#searchButton').click(function () {
                var searchText = $('#searchInput').val().toLowerCase();
                $('.kajian-card').each(function () {
                    var cardTitle = $(this).find('.judul').text().toLowerCase();
                    var cardLokasi = $(this).find('.lokasi').text().toLowerCase();
                    var cardSektoral = $(this).find('.sektoral').text().toLowerCase();

                    if (cardTitle.includes(searchText) || cardLokasi.includes(searchText) || cardSektoral.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            $('.read-more-btn').each(function () {
                const index = $(this).data('index');
                const $textElement = $('#latar-' + index);
                const fullText = $textElement.text().trim();
                const words = fullText.split(' ');

                if (words.length > 50) {
                    const truncatedText = words.slice(0, 50).join(' ') + '...';
                    $textElement.text(truncatedText);

                    $(this).click(function (event) {
                        event.preventDefault();
                        const isExpanded = $(this).data('expanded');
                        if (isExpanded) {
                            $textElement.text(truncatedText);
                            $(this).text('Baca Selengkapnya');
                        } else {
                            $textElement.text(fullText);
                            $(this).text('Baca Lebih Sedikit');
                        }
                        $(this).data('expanded', !isExpanded);
                    });
                } else {
                    $(this).hide();
                }
            });
        });
    </script>
</body>
</html>
