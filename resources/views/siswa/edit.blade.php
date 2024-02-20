@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post - Putra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
</head>
<body style="background: rgb(255, 255, 255)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div> --}}

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $siswa->nama) }}" placeholder="Masukkan Judul Post">

                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KELAS</label>
                                <select class="form-control @error('kelas') is-invalid @enderror" name="kelas">
                                    <option value="XII RPL"{{old('kelas') == 'XII RPL' ? 'selected' : '' }}>XII RPL</option>
                                    <option value="XII DKV"{{old('kelas') == 'XII DKV' ? 'selected' : '' }}>XII DKV</option>
                                    <option value="XII TJKT"{{old('kelas') == 'XII TJKT' ? 'selected' : '' }}>XII TJKT</option>
                                    <option value="XII BP"{{old('kelas') == 'XII BP' ? 'selected' : '' }}>XII BP</option>
                                    <option value="XII TK"{{old('kelas') == 'XII TK' ? 'selected' : '' }}>XII TK</option>
                                    <option value="XII OTO"{{old('kelas') == 'XII OTO' ? 'selected' : '' }}>XII OTO</option>
                                    <option value="XII MEKATRONIK"{{old('kelas') == 'XII MEKATRONIK' ? 'selected' : '' }}>XII MEKATRONIK</option>
                                </select>

                                <!-- error message untuk kelas -->
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
@endsection
