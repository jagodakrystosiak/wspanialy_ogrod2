@extends('layouts.app')

@section('content')
<div id="strona_główna">
    <h1>Najnowsze artykuły</h1>
    <!-- Laboratorium 3 -->
    <!-- Pozycjonowanie elementów na stronie -->
    <div class="box"><!-- klasa zapewni mi możliwość ustawienia reguł w CSS dla wszystkich elementów tej klasy, ponieważ id jest unikatowy i nie może się powtarzać -->
        <button onclick="window.location ='{{ url('articles/ogrod-w-czerwcu') }}'"><img src="{{ asset('images/czerwiec.jpg') }}" alt="Czerwiec w ogrodzie"></button>
        <div class="tekst">
            <h3><button onclick="window.location ='{{ url('articles/ogrod-w-czerwcu') }}'">Czerwiec w ogrodzie - co robić?</button></h3>
            <br>Czerwiec to miesiąc intensywnego wzrostu roślin i pierwszych plonów w ogrodzie użytkowym. Wysokie temperatury i długi dzień pozwalają ...
            <button onclick="window.location ='{{ url('articles/ogrod-w-czerwcu') }}'">Czytaj dalej</button>
        </div>
    </div>
    <div class="box">
        <button onclick="window.location ='{{ url('articles/mech-w-ogrodzie') }}'"><img src="{{ asset('images/mech.jpg') }}" alt="Mech"></button>
        <div class="tekst">
            <h3><button onclick="window.location ='{{ url('articles/mech-w-ogrodzie') }}'">Mech na trawniku - skuteczne zwalczanie</button></h3>
            <br>Piękny i zadbany trawnik to wizytówka każdego ogrodu. Aby jednak mógł dobrze spełniać swoje zadanie, wymaga wielu zabiegów ...
            <button onclick="window.location ='{{ url('articles/mech-w-ogrodzie') }}'">Czytaj dalej</button>
        </div>
    </div>
    <div class="box">
        <button onclick="window.location ='{{ url('articles/slimaki-w-ogrodzie') }}'"><img src="{{ asset('images/ślimaki.jpg') }}" alt="Ślimaki"></button>
        <div class="tekst">
            <h3><button onclick="window.location ='{{ url('articles/slimaki-w-ogrodzie') }}'">Sposób na ślimaki</button></h3>
            <br>Śimaki mogą stanowić poważny problem, gdyż są to prawdopodobnie najbardziej żarłoczne szkodniki w naszych ogrodach. Mogą powodować ...
            <button onclick="window.location ='{{ url('articles/slimaki-w-ogrodzie') }}'">Czytaj dalej</button>
        </div>
    </div>
    <div class="box2">
        <button onclick="window.location ='{{ url('articles/hodowla-storczykow') }}'"><img src="{{ asset('images/storczyk.jpg') }}" alt="Storczyk"></button>
        <div class="tekst">
            <h3><button onclick="window.location ='{{ url('articles/hodowla-storczykow') }}'">Dlaczego storczyk nie kwitnie?</button></h3>
            <br>Storczyki to jedne z najpiękniejszych roślin świata, które mamy okazję uprawiać w naszych mieszkaniach. Bogactwo gatunkowe storczyków ...
            <button onclick="window.location ='{{ url('articles/hodowla-storczykow') }}'">Czytaj dalej</button>
        </div>
    </div>
    <div class="box2">
        <button onclick="window.location ='{{ url('articles/hodowla-lilii') }}'"><img src="{{ asset('images/lilia.jpg') }}" alt="Lilia"></button>
        <div class="tekst">
            <h3><button onclick="window.location ='{{ url('articles/hodowla-lilii') }}'">Kiedy i jak sadzić lilie do ogrodu?</button></h3>
            <br>Lilie są czarującymi kwiatami i słynne są ze swojego intensywnego zapachu. Wybór jest ogromny, ponieważ istnieje ponad sto gatunków i tysiące odmian ...
            <button onclick="window.location ='{{ url('articles/hodowla-lilii') }}'">Czytaj dalej</button>
        </div>
    </div>
    <div class="box2">
        <button onclick="window.location ='{{ url('articles/hodowla-borowek') }}'"><img src="{{ asset('images/borówka.jpg') }}" alt="Borówka"></button>
        <div class="tekst">
            <h3><button onclick="window.location ='{{ url('articles/hodowla-borowek') }}'">Dlaczego borówka amerykańska nie owocuje?</button></h3>
            <br>Z każdym rokiem rośnie zainteresowanie ogrodników bliską krewniaczką naszych leśnych jagód – borówką ...
            <button onclick="window.location ='{{ url('articles/hodowla-borowek') }}'">Czytaj dalej</button>
        </div>
    </div>
    <div id="pasek"><!-- boczna sekcja strony -->
        <h2>Zobacz więcej</h2>
        <h3>Choroby i szkodniki</h3>
        <ul>
            <li><button onclick="window.location ='{{ url('articles/kret-w-ogrodzie') }}'">Jak pozbyć się kreta?</button></li>
            <li><button onclick="window.location ='{{ url('articles/mrowki-w-ogrodzie') }}'">Jak zwalczać mrówki w ogrodzie?</button></li>
            <li><button onclick="window.location ='{{ url('articles/slimaki-w-ogrodzie') }}'">Jak wyprosić ślimaki z ogrodu?</button></li>
            <li><button onclick="window.location ='{{ url('articles/mech-w-ogrodzie') }}'">Jak zniwelować mech powstający na trawniku?</button></li>
        </ul>
        <h3>Pomysły i inspiracje na aranżacje ogrodu</h3>
        <ul>
            <li><button onclick="window.location ='{{ url('catalog/') }}'">Propozycje kwiatów i roślin ozdobnych</button></li>
            <li><button onclick="window.location ='{{ url('catalog/') }}'">Propozycje drzew i krzewów</button></li>
            <li><button onclick="window.location ='{{ url('catalog/') }}'">Propozycje warzyw i ziół</button></li>
            <li><button onclick="window.location ='{{ url('catalog/') }}'">Propozycje owoców</button></li>
        </ul>
    </div>
</div>
<!-- elementy do generowania zawartości z generowanie.js -->
<div id="artykul"></div>
<div id="more"></div>
@endsection