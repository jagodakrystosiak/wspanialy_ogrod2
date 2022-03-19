<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;

class CommentsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug) {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug) {
        $comment = new Comment;
        return view('commentsForm', ['comment' => $comment, 'slug' => $slug]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug) {
        $this->validate($request, [
            'message' => 'required|min:10|max:255',
        ]);
        if (\Auth::user() == null) {
            return view('welcome');
        }
        $comment = new Comment();
        $comment->user_id = \Auth::user()->id;
        $comment->message = $request->message;
        $comment->slug = $slug;
        if ($comment->save()) {
            $comments = Comment::with('user')->where('slug', $slug)->get();
            return view('article', ['slug' => $slug, 'comments' => $comments]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, $id) {
        $comment = Comment::find($id);
        if($comment == null){
            return view('welcome');
        }
        //Sprawdzenie czy użytkownik jest autorem komentarza
        if (\Auth::user()->id != $comment->user_id) {
            return back()->with(['success' => false, 'message_type' => 'danger',
                        'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.']);
        }
        return view('commentsEditForm', ['comment' => $comment, 'slug' => $slug, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug, $id) {
        $comment = Comment::find($id);
        if($comment == null){
            return view('welcome');
        }
        //Sprawdzenie czy użytkownik jest autorem komentarza
        if (\Auth::user()->id != $comment->user_id) {
            return back()->with(['success' => false, 'message_type' => 'danger',
                        'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.']);
        }
        $this->validate($request, [
            'message' => 'required|min:10|max:255',
        ]);
        $comment->message = $request->message;
        if ($comment->save()) {
            $comments = Comment::with('user')->where('slug', $slug)->get();
            return view('article', ['slug' => $slug, 'comments' => $comments]);
        }
        return "Wystąpił błąd.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id) {
        //Znajdź komentarz o danych id:
        $comment = Comment::find($id);
        if($comment == null){
            return view('welcome');
        }
        //Sprawdz czy użytkownik jest autorem komentarza:
        if (\Auth::user()->id != $comment->user_id) {
            return back();
        }
        if ($comment->delete()) {
            return redirect()->route('articles', ['slug' => $slug]);
        } else
            return back();
    }

}
