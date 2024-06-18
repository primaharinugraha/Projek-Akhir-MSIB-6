@extends('e-learning.masterelearning')
@section('title', 'Intermediate 3')

@section('content')
    <div class="container-fluid py-4">
        <div class="container">
            <h3 class="fw-bold mb-4">Intermediate 3</h3>
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JiEACn8Hzak" allowfullscreen></iframe>
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
            </div>
        </div>
    </div>
@endsection
