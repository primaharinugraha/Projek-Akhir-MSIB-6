@extends('e-learning.masterelearning')
@section('title', 'Intermediate 2')

@section('content')
    <div class="container-fluid py-4">
        <div class="container">
            <h3 class="fw-bold mb-4">Intermediate 2</h3>
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qM-Jj3HT6Ks" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 d-md-none"> <!-- Kolom ini akan ditampilkan di bawah iframe pada tampilan mobile saja -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Komentar">
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 d-none d-md-block"> <!-- Kolom ini akan ditampilkan di samping iframe pada tampilan tablet dan desktop -->
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <!-- tempat komentar -->
                            <p></p>
                        </div>
                        <div class="card-footer">
                            <form action="">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="komentar" id="komentar" placeholder="Komentar">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <button type="submit" class="btn btn-success btn-block">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
