@extends('Tugas 15.template')

@section('title','Form tambah data pertanyaan')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3"> Form tambah data pertanyaan</h1>
                <form method="POST" action="/question">
                    @csrf
                    <div class="mb-3">
                        <label for="Judul" class="form-label">Judul Pertanyaan</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="Judul" placeholder="Masukkan Judul Pertanyaan" name="judul" value="{{old('judul')}}">
                        @error('judul')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control @error('isi') is-invalid @enderror" placeholder="Masukkan Isi Pertanyaan" id="isi" style="height: 150px" name="isi" value="{{old('isi')}}"></textarea>
                        <label for="isi">Masukkan Isi Pertanyaan</label>
                        @error('isi')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label for="id" class="form-label">ID Profile</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" placeholder="Masukkan id Profile" name="id" value="{{old('id')}}">
                        @error('id')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Tambah Pertanyaan!</button>
                </form>
            </div>
        </div>
    </div>
@endsection