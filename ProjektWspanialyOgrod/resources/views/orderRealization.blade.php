@extends('layouts.app')

@section('content')
<h1>Realizacja zamówienia</h1>
<form role="form"  action="{{ route('buy') }}" method="post">
    {{ csrf_field() }}
    <fieldset>
        <legend><h3>Adres dostawy: </h3></legend>
        <table id="tabela_ustawiająca">
            <tbody>
                <tr>
                    <td>Imię: <br /><input type="text" name="imie" title="Pierwsza litera imienia powinna być duża. Imię nie powinno być krótsze niz 3 litery." placeholder="Podaj imię" value="{{  Auth::user()->name  }}" required pattern="[A-Z][A-Za-z ]{2,20}"></td>
                    <td>Nazwisko: <br /><input type="text" name="nazwisko" title="Pierwsza litera nazwiska powinna być duża. Nazwisko nie powinno być krótsze niż 3 Litery." placeholder="Podaj nazwisko" required pattern="[A-Z][A-Za-z \-]{2,20}"></td>
                </tr>
                <tr>
                    <td colspan="2">Kraj: <br /><select name="państwo" required> 
                            <option label="Wybierz państwo"></option>
                            <option value="Polska">Polska</option>
                            <option value="Niemcy">Niemcy</option>
                            <option value="Anglia">Anglia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ulica: <br /><input type='text' name="ulica" title="Dozwolone tylko litery i spacja. Nazwa ulicy nie powinna być krótsza niż 3 litery." placeholder="Podaj nazwę ulicy" required pattern="[A-Z][A-Za-z ]{2,20}"></td>
                    <td>Numer domu/mieszkania: <br /><input type='text' name="nr_domu" placeholder="Podaj nr domu/mieszkania" required pattern="[0-9A-Za-z/]+"></td>
                </tr>
                <tr>
                    <td>Kod pocztowy: <br /><input type='text' name="kod_poczt" title="Kod pocztowy powinien być podany w formie 00-000." placeholder="Podaj kod pocztowy" required pattern="[0-9]{2}-[0-9]{3}"></td>
                    <td>Miejscowość: <br /><input type='text' name="miejsc" title="Pierwsza litera nazwy miejscowości powinna być duża. Nazwa miejscowości nie powinna być krótsza niż 3 litery." placeholder="Podaj nazwę miejscowości" required pattern="[A-Z][A-Za-z \-]{2,20}"></td>
                </tr>
                <tr>
                    <td colspan="2">Numier telefonu: <br /><input type='tel' title="Numer telefonu powinien być podany w formie 000-000-000." placeholder="Podaj nr telefonu" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"></td>
                </tr>
                <tr>
                    <td colspan="2" class="form_info">Numer telefonu potrzebujemy do realizacji zamówienia.</td>
                </tr>
                <tr>
                    <td colspan="2">Adres e-mail: <br /><input size='30' type='email' title="Adres e-mail powinien być w formacie xxx@xxx.xx" placeholder="Podaj adres e-mail" value="{{ Auth::user()->email }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}"></td>
                </tr>
                <tr>
                    <td colspan="2" class="form_info">Na ten adres wyślemy informację o zamówieniu.</td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend><h3>Metoda płatności:</h3></legend>
        <input type='radio' name="metoda" value="przelew" title="Wybierz metodę płatności" required>szybki przelew<br />
        <input type='radio' name="metoda" value="blik" title="Wybierz metodę płatności" required>BLIK<br />
        <input type='radio' name="metoda" value="karta" title="Wybierz metodę płatności" required>karta płatnicza<br />
        <input type='radio' name="metoda" value="tr_przelew" title="Wybierz metodę płatności" required>tradycyjny przelew<br />
    </fieldset>
    <div id="razem"></div>
    <p><input type="checkbox" name="akceptacja" title="Zgoda jest niezbędna do kontynuacji." required>*Wyrażam zgodę na przetwarzanie moich danych osobowych w celu realizacji zamówienia i zapoznałem/ałam się z <a href="">regulaminem</a>.</p>
    <button type="submit">Przechodzę do płatności</button>
</form>
@endsection