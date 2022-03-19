@extends('layouts.app')

@section('content')
<h1>Sklep z nasionami</h1>
<form role="form"  action="{{ route('realization') }}" method="get" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <h3>Wybierz nasiona: </h3>
    <table>
        <thead>
            <tr>
                <th>Nasiona kwiatów</th>
                <th>Cena</th>
                <th>Nasiona warzyw</th>
                <th>Cena</th>
                <th>Nasiona ziół</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" id="kwiat1" value="Aksamitka 'Bonita' mieszanka">Aksamitka 'Bonita' mieszanka</td>
                <td><input id="cena_k1" class="cena" size="1" disabled value="6.99">zł</td>
                <td><input type="checkbox" id="warzyw1" value="Pomidor mięsisty 'Country Taste'">Pomidor mięsisty 'Country Taste'</td>
                <td><input id="cena_w1" class="cena" size="1" disabled value="19.99">zł</td>
                <td><input type="checkbox" id="zioło1" value="Stewia - roślina słodsza niż cukier">Stewia - roślina słodsza niż cukier</td>
                <td><input id="cena_z1" class="cena" size="1" disabled value="19.99">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat2" value="Bratek ogrodowy 'Orchideenblutiger'">Bratek ogrodowy 'Orchideenblutiger'</td>
                <td><input id="cena_k2" class="cena" size="1" disabled value="13.49">zł</td>
                <td><input type="checkbox" id="warzyw2" value="Papryka 'Yellow California Wonder'">Papryka 'Yellow California Wonder'</td>
                <td><input id="cena_w2" class="cena" size="1" disabled value="9.99">zł</td>
                <td><input type="checkbox" id="zioło2" value="Rzeżucha 'Cressida'">Rzeżucha 'Cressida'</td>
                <td><input id="cena_z2" class="cena" size="1" disabled value="9.99">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat3" value="Chaber bławatek 'Classic Romant'">Chaber bławatek 'Classic Romant'</td>
                <td><input id="cena_k3" class="cena" size="1" disabled value="9.99">zł</td>
                <td><input type="checkbox" id="warzyw3" value="Bób 'Piccola'">Bób 'Piccola'</td>
                <td><input id="cena_w3" class="cena" size="2" disabled value="24.99">zł</td>
                <td><input type="checkbox" id="zioło3" value="Sałata musztardowa">Sałata musztardowa</td>
                <td><input id="cena_z3" class="cena" size="1" disabled value="13.49">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat4" value="Lawenda wąskolistna">Lawenda wąskolistna</td>
                <td><input id="cena_k4" class="cena" size="1" disabled value="13.49">zł</td>
                <td><input type="checkbox" id="warzyw4" value="Burak liściowy / Boćwina 'Lukullus'">Burak liściowy / Boćwina 'Lukullus'</td>
                <td><input id="cena_w4" class="cena" size="1" disabled value="6.99">zł</td>
                <td><input type="checkbox" id="zioło4" value="Czosnek nieźwiedzi">Czosnek nieźwiedzi</td>
                <td><input id="cena_z4" class="cena" size="1" disabled value="13.49">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat5" value="Lwia paszcza / Wyżlin większy mieszanka">Lwia paszcza / Wyżlin większy mieszanka</td>
                <td><input id="cena_k5" class="cena" size="1" disabled value="6.99">zł</td>
                <td><input type="checkbox" id="warzyw5" value="Cebula zwyczajna">Cebula zwyczajna</td>
                <td><input id="cena_w5" class="cena" size="1" disabled value="6.99">zł</td>
                <td><input type="checkbox" id="zioło5" value="Koper ogrodowy">Koper ogrodowy</td>
                <td><input id="cena_z5" class="cena" size="1" disabled value="6.99">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat6" value="Łubin Hartwega mieszanka (jednoroczny)">Łubin Hartwega mieszanka (jednoroczny)</td>
                <td><input id="cena_k6" class="cena" size="1" disabled value="5.99">zł</td>
                <td><input type="checkbox" id="warzyw6" value="Czosnek dęty">Czosnek dęty</td>
                <td><input id="cena_w6" class="cena" size="1" disabled value="6.99">zł</td>
                <td><input type="checkbox" id="zioło6" value="Lubczyk ogrodowy">Lubczyk ogrodowy</td>
                <td><input id="cena_z6" class="cena" size="1" disabled value="6.99">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat7" value="Mak polny 'Chorus'">Mak polny 'Chorus'</td>
                <td><input id="cena_k7" class="cena" size="1" disabled value="13.49">zł</td>
                <td><input type="checkbox" id="warzyw7" value="Fasola zwykła 'Eva' (tyczna)">Fasola zwykła 'Eva' (tyczna)</td>
                <td><input id="cena_w7" class="cena" size="1" disabled value="13.49">zł</td>
                <td><input type="checkbox" id="zioło7" value="Majeranek / Lebiodka">Majeranek / Lebiodka</td>
                <td><input id="cena_z7" class="cena" size="1" disabled value="6.99">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat8" value="Nasturcja mniejsza 'Tip Top Mix'">Nasturcja mniejsza 'Tip Top Mix'</td>
                <td><input id="cena_k8" class="cena" size="1" disabled value="9.99">zł</td>
                <td><input type="checkbox" id="warzyw8" value="Fasola zwykła 'Faraday'">Fasola zwykła 'Faraday'</td>
                <td><input id="cena_w8" class="cena" size="1" disabled value="13.49">zł</td>
                <td><input type="checkbox" id="zioło8" value="Mięta pieprzowa">Mięta pieprzowa</td>
                <td><input id="cena_z8" class="cena" size="1" disabled value="6.99">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat9" value="Niezapominajka 'Heavenly Blue'">Niezapominajka 'Heavenly Blue'</td>
                <td><input id="cena_k9" class="cena" size="1" disabled value="9.99">zł</td>
                <td><input type="checkbox" id="warzyw9" value="Fasola zwykła 'Primavera'">Fasola zwykła 'Primavera'</td>
                <td><input id="cena_w9" class="cena" size="1" disabled value="13.49">zł</td>
                <td><input type="checkbox" id="zioło9" value="Pietruszka 'Afrodite'">Pietruszka 'Afrodite'</td>
                <td><input id="cena_z9" class="cena" size="1" disabled value="9.99">zł</td>
            </tr>
            <tr>
                <td><input type="checkbox" id="kwiat10" value="Orlik niebieski mieszanka">Orlik niebieski mieszanka</td>
                <td><input id="cena_k10" class="cena" size="1" disabled value="6.99">zł</td>
                <td><input type="checkbox" id="warzyw10" value="Kapusta biała 'Brunswijker'">Kapusta biała 'Brunswijker'</td>
                <td><input id="cena_w10" class="cena" size="1" disabled value="5.99">zł</td>
                <td><input type="checkbox" id="zioło10" value="Roszponka 'Favor'">Roszponka 'Favor'</td>
                <td><input id="cena_z10" class="cena" size="1" disabled value="13.49">zł</td>
            </tr>
        </tbody>
    </table>
    <button type="reset" onclick="zapis_do_koszyka()">Dodaj do koszyka</button>
    <button type="reset" onclick="wyświetl_koszyk()">Wyświetl koszyk</button>
    <button type="reset" onclick="usuń_koszyk()">Usuń zawartość koszyka</button>
    @auth
    <button type="submit">Przejdź do realizacji zamówienia</button>
    @endauth
    
    @guest
    <button><a href="{{ route('login') }}">Zaloguj się oby przejść do realizacji zamówienia</a></button>
    @endguest
</form>
<div id="koszyk"></div>
<div id="razem"></div>
</div>
@endsection