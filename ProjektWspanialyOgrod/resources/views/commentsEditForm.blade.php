@extends('layouts.app')

@section('content')
@auth
<h2>Edycja komentarza</h2>
@if ($errors->any())
<div class="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form role="form" action="{{ route('update', ['slug' => $slug, 'comment' => $comment, 'id' => $id]) }}" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div class="box-comment">
        <h3>Treść:</h3>
        <textarea name="message" id="message" required> {{ $comment->message }} </textarea>
    </div>
    <button type="submit">Utwórz</button>
</form>
@endauth
@guest
<div class='alert'>
    Musisz się zalogować aby mieć możliwość edytowania komentarzy
</div>
@endguest
@endsection