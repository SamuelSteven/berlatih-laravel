@extends('layouts.app')

@section('title','Detail Question')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3"> Question Details</h1>
                <!-- Question Card -->
                <div class="card my-4" style="width: 69rem;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $question->judul }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Created at {{ $question->created_at}} | Updated at {{ $question->updated_at}} | By {{$question->users['name']}}</h6>
                        <p class="card-text my-4">{{ $question->isi }}</p>
                        <p class="card-text my-4">Tags:   
                        @if ($tag_count == 0)
                                -
                        @else
                            @foreach ($tag as $t)
                                <button type="button" class="btn btn-outline-dark">{{ $t->tag_title }}</button>
                            @endforeach
                        @endif
                        </p>
                        @if($question->users['id'] == Auth::user()->id)
                            <a href="{{$question->id}}/edit" class="btn btn-primary mx-2">Edit</a>
                            <form action="/question/{{$question->id}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endif
                        <a href="/question" class="card-link mx-2 text-decoration-none">Back</a>
                    </div>
                </div>
                
                <hr class="mt-3" style="width: 69rem">

                <h4 class="card-text mt-4 mx-1">{{ $answer_count }} Answers</h4>
                @if($answer_count > 0)
                 <!-- Answers Card -->
                    @foreach ($answer as $key => $a)
                        <div class="card my-4 answercard" style="width: 69rem;">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Created at {{ $a->created_at}} | Updated at {{ $a->updated_at}} | By {{$a->user['name']}}</h6>
                                <p class="card-text my-4">{{ $a->isi }}</p>
                                @if($a->user['id'] == Auth::user()->id)
                                    <a href="#answercard" class="btn btn-primary mx-1 mt-3" onclick="display(`{{$a->isi}}`, {{$a->id}}, {{$key}});">Edit</a>
                                    <form action="/answer/{{$a->id}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-3">Delete</button>
                                    </form>
                                @endif
                            </div>
                        </div>

                        <form method="POST" action="" id="form_action">
                            @method('patch')
                            @csrf
                            <div class="form-floating d-none" id="edit" style="width:69rem;">
                                <label for="isi">Edit Your Answer Here</label>
                                <textarea class="form-control @error('isi') is-invalid @enderror" placeholder="Edit Your Answer Here" id="isi" style="height: 150px" name="isi"></textarea>
                                @error('isi')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                <input type="hidden" name="profile_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                <button type="submit" class="btn btn-primary my-3">Edit Your Answer!</button>
                                <a href="#edit" class="card-link mx-2 text-decoration-none" onclick="hide({{$key}});">Cancel</a>
                            </div>
                        </form>
                    @endforeach
                @endif

                <hr class="mt-3" style="width: 69rem">
                <form method="POST" action="/answer">
                    @csrf
                    <div class="form-floating">
                        <label for="isi">Enter Your Answer Here</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" placeholder="Enter Your Answer Here" id="isi" style="height: 150px" name="isi"></textarea>
                        @error('isi')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <input type="hidden" name="profile_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                    <button type="submit" class="btn btn-primary my-3">Post Your Answer!</button>
                </form>
                
            </div>
        </div>
    </div>
    <script>
        function display(x,y,z){
            var form_edit = $("#form_action #edit");
            var form = $(".row #form_action");
            var isi = $(".row #form_action #edit #isi");
            form_edit[z].className = "form-floating edit d-block";
            form[z].action = "/answer/" + y;
            isi[z].value = x;
        }
        function hide(k){
            var form = $("#form_action #edit");
            form[k].className = "form-floating edit d-none";
        }
    </script>
@endsection