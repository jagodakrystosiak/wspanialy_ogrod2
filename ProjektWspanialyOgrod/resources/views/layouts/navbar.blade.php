<div id="baner">
    <a href="{{ url('/') }}"><img src="{{ asset('images/logo.jpg') }}" alt="Logo"></a>
</div> 
<div id="menu">
    <ul id="nav"><!-- nawigacja zawiera kilka poziomów, które będą edytowane w style.css -->
        <li><a href="{{ url('/') }}">Strona główna</a></li>
        <li><a href="">Porady</a>
            <ul>
                <li><button onclick="window.location ='{{ url('articles/ogrod-w-maju') }}'">Ogród w maju</button></li>                                
                <li><button onclick="window.location ='{{ url('articles/ogrod-w-czerwcu') }}'">Ogród w czerwcu</button></li>
                <li><button onclick="window.location ='{{ url('articles/podloze-dla-roslin') }}'">Podłoże dla roślin</button></li>
                <li><button onclick="window.location ='{{ url('articles/hodowla-storczykow') }}'">Hodowla stroczyków</button></li>
                <li><button onclick="window.location ='{{ url('articles/hodowla-lilii') }}'">Hodowla lili</button></li>
                <li><button onclick="window.location ='{{ url('articles/hodowla-borowek') }}'">Hodowla borówek</button></li>
                <li><button onclick="window.location ='{{ url('articles/mech-w-ogrodzie') }}'">Mech w ogrodzie</button></li>
                <li><button onclick="window.location ='{{ url('articles/kret-w-ogrodzie') }}'">Kret w ogrodzie</button></li>
                <li><button onclick="window.location ='{{ url('articles/mrowki-w-ogrodzie') }}'">Mrówki w ogrodzie</button></li>
                <li><button onclick="window.location ='{{ url('articles/slimaki-w-ogrodzie') }}'">Ślimaki w ogrodzie</button></li>
            </ul>
        </li>
        <li><a href="">Katalog roślin</a>
            <ul>
                <li><button onclick="window.location ='{{ url('catalog/drzewa-i-krzewy') }}'">Drzewa i krzewy</button></li>
                <li><button onclick="window.location ='{{ url('catalog/kwiaty-i-rosliny-ozdobne') }}'">Kwiaty i rośliny ozdobne</button></li>
                <li><button onclick="window.location ='{{ url('catalog/owoce') }}'">Owoce</button></li>
                <li><button onclick="window.location ='{{ url('catalog/warzywa-i-ziola') }}'">Warzywa i zioła</button></li>
                <li><button onclick="window.location ='{{ url('catalog/chwasty') }}'">Chwasty</button></li>
            </ul>
        </li>
        <li><a href="{{ url('/shop') }}">Sklep</a></li>
        <div id='user'>
            @guest
            @if (Route::has('register'))
            <li>
                <a href = "{{ route('register') }}">Zarejestruj się</a>
            </li>
            @endif
            <li>
                <a href = "{{ route('login') }}">Zaloguj się</a>
            </li>
            @else
            <li>
                <a href>{{ Auth::user()->name }}</a>
                <ul>
                    <li><a href='{{ route('orders') }}'>Zamówienia</a></li>
                    <li>
                        <a href = "{{ route('logout') }}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Wyloguj') }} </a>
                        <form id = "logout-form" action = "{{ route('logout') }}" method = "POST" style = "display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            @endguest
        </div>
    </ul>
</div>

