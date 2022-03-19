@extends('layouts.app')

@section('content')
@auth
<h2>Dodawanie komentarza do artykułu - "{{ $slug }}"</h2>
@if ($errors->any())
<div class="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form role="form"  action="{{ route('store',['slug' => $slug]) }}" id="comment-form" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div class="box-comment">
        <h3>Treść:</h3>
        <textarea name="message" id="message" required></textarea>
    </div>
    <button type="submit">Utwórz</button>
</form>
@endauth
@guest
<div class='alert'>
    Musisz się zalogować aby dodawać komentarze
</div>
@endguest
@endsection