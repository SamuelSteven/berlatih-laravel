@extends('Tugas 15.template')

@section('title','Detail Question')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3"> Detail Pertanyaan</h1>
                <div class="card my-3" style="width: 80rem;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $question->judul }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Created at {{ $question->created_at}} | Updated at {{ $question->updated_at}} | By {{$question->profiles['nama_lengkap']}}</h6>
                        <p class="card-text my-4">{{ $question->isi }}</p>

                        <a href="{{$question->id}}/edit" class="btn btn-primary mx-2">Edit</a>
                        <form action="/question/{{$question->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
                        <a href="/question" class="card-link mx-2 text-decoration-none">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection