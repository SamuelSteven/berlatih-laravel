@extends('layouts.app')

@section('title','Form tambah data pertanyaan')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3"> Add Question Data</h1>
                <form method="POST" action="/question">
                    @csrf
                    <div class="mb-3">
                        <label for="Judul" class="form-label">Title of Question</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="Judul" placeholder="Masukkan Judul Pertanyaan" name="judul" value="{{old('judul')}}">
                        @error('judul')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="isi">Enter the Question Content</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" placeholder="Enter the Question Content" id="isi" style="height: 150px" name="isi" value="{{old('isi')}}"></textarea>
                        @error('isi')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <input type="hidden" name="profile_id" value="{{ Auth::user()->id }}">
                    <button type="submit" class="btn btn-primary my-3">Add Question!</button>
                </form>
            </div>
        </div>
    </div>
@endsection