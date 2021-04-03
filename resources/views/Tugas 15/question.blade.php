@extends('Tugas 15.template')

@section('title','Forum')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3"> Daftar Pertanyaan</h1>
                <a href="/question/create" class="btn btn-primary my-4">Tambah Pertanyaan Baru</a> 
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach($questions as $question)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$question->judul}}
                        <a href="/question/{{$question->id}}" class="btn btn-primary">detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection