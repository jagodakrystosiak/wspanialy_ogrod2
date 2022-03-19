
<h2>Komentarze</h2>
@auth
<table>
    <tbody>
        <tr>
            <th>Użytkownik</th>
            <th>Data dodania</th>
            <th>Komentarz</th>
        </tr>
        @if( count($comments) === 0 )
        <tr>
            <td colspan="3"><p>Brak komentarzy do wyświetlenia</p></td>
        </tr>
        @endif
        @foreach($comments as $comment)
        <tr>
            <td>{{ $comment->user->name }}</td>
            <td>{{ $comment->created_at }}</td>
            <td>{{ $comment->message }}
                <br /> @if($comment->user_id == \Auth::user()->id)
                <a href="{{ route('edit', ['slug' => $slug, 'id' => $comment->id]) }}"title="Edytuj"> Edytuj </a>
                <a href="{{ route('delete', ['slug' => $slug, 'id' => $comment->id]) }}" onclick="return confirm('Jesteś pewien?')" title="Skasuj"> Usuń</a>
                @endif
            </td>
        </tr>       
        @endforeach
    </tbody>
</table>
@if( $slug == 'ogrod-w-maju' )
<button><a href="{{ route('create',['slug' => 'ogrod-w-maju']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'ogrod-w-czerwcu' )
<button><a  href="{{ route('create',['slug' => 'ogrod-w-czerwcu']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'podloze-dla-roslin' )
<button><a  href="{{ route('create',['slug' => 'podloze-dla-roslin']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'hodowla-storczykow' )
<button><a  href="{{ route('create',['slug' => 'hodowla-storczykow']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'hodowla-lilii' )
<button><a  href="{{ route('create',['slug' => 'hodowla-lilii']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'hodowla-borowek' )
<button><a  href="{{ route('create',['slug' => 'hodowla-borowek']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'mech-w-ogrodzie' )
<button><a  href="{{ route('create',['slug' => 'mech-w-ogrodzie']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'kret-w-ogrodzie' )
<button><a  href="{{ route('create',['slug' => 'kret-w-ogrodzie']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'mrowki-w-ogrodzie' )
<button><a  href="{{ route('create',['slug' => 'mrowki-w-ogrodzie']) }}">Dodaj komentarz</a></button>
@endif

@if( $slug == 'slimaki-w-ogrodzie' )
<button><a  href="{{ route('create',['slug' => 'slimaki-w-ogrodzie']) }}">Dodaj komentarz</a></button>
@endif
@endauth

@guest
<p><b><a href = "{{ route('login') }}">Zaloguj się</a> aby przejrzeć komentarze</b></p>
@endguest
