<?php

namespace App\Http\Controllers;

use App\question;
use App\User;
use App\answer;
use App\tag;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $questions = question::all();
        return view('Tugas 15.question',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tugas 15.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        
        // question::create([
        //     'judul' => $request->judul,
        //     'isi' => $request->isi,
        //     'profile_id' => $request->id
        // ]);

        question::create($request->all());
        return redirect('/question')->with('status','Pertanyaan Berhasil Ditambahkan!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(question $question)
    {
        $answer = answer::where('question_id','=',$question->id)->get();
        $answer_count = $answer->count();
        $tag = tag::where('question_id','=',$question->id)->get();
        $tag_count = $tag->count();
        return view('Tugas 15.show', compact('question', 'answer', 'answer_count', 'tag', 'tag_count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        $tag = tag::where('question_id','=',$question->id)->get();
        $tag_count = $tag->count();
        return view('Tugas 15.edit', compact('question','tag', 'tag_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        question::where('id',$question->id)
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'profile_id' => $request->profile_id
            ]);
        // tag::where('question_id', $question->id)
        //     ->update([
        //         'tag_title' => $request->judul
        //     ]);
        return redirect('/question')->with('status','Question Edited Successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        question::destroy($question->id);
        return redirect('/question')->with('status','Question Deleted Successfully!'); 
    }
}
