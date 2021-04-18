@extends('layouts.app')

@section('title','Form ubah data pertanyaan')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3"> Edit Question Data</h1>
                <form method="POST" action="/question/{{$question->id}}">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="Judul" class="form-label">Title of Question</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="Judul" placeholder="Masukkan Judul Pertanyaan" name="judul" value="{{$question->judul}}">
                        @error('judul')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="isi">Enter the Question Content</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" placeholder="Enter the Question Content" id="isi" style="height: 150px" name="isi">{{$question->isi}}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <!-- <div class="mb-3">
                        <label for="Judul" class="form-label">Tags of Question</label>
                        @if ($tag_count == 0)
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="Judul" placeholder="Enter Question Tags" name="tag_title" value="{{old('judul')}}">
                            @error('judul')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        @else 
                            @foreach($tag as $t)
                                <input type="text" class="form-control my-2 @error('judul') is-invalid @enderror" id="Judul" placeholder="Enter Question Tags" name="tag_title" value="{{$t->tag_title}}">
                                @error('judul')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            @endforeach
                        @endif
                    </div> -->
                    <input type="hidden" name="profile_id" value="{{ Auth::user()->id }}">
                    <button type="submit" class="btn btn-primary my-3">Update Question!</button>
                </form>
            </div>
        </div>
    </div>
@endsection