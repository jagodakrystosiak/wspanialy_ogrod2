
/* Laboratorium 11.1, Laboratorium 6, Laboratorium 8 */
/* wykorzystanie lokalnych magazynów danych ,integracja z użytkownikiem za pomocą javascript i obsługa formularzy za pomocą javascript */

/* Funkcja zapisuje dane do localStorage */
function zapis_do_koszyka() {

    var item = {};

    /* pętla od 1 do 10, bo tyle jest pozycji kwiatów, warzyw, ziół */
    for (var i = 1; i < 11; i++) {

        var kwiat = "kwiat" + i; /* id kwiatu to kwiat1,kwiat2,... */
        var warzyw = "warzyw" + i; /* id warzywa to warzyw1,warzyw2,... */
        var zioło = "zioło" + i; /* id zioła to zioło1,zioło2,... */

        /* sprawdzenie czy kwiat o tym id jest zaznaczony */
        if (document.getElementById(kwiat).checked === true) {
            
            var exist = false; /* zmienna która przechowuje informacje o istnieniu takiej rośliny w localStorage */
            
            /* sprawdzenie dla wszystkich roślin w localStorage czy nie posiadają takiej samej nazwy jak zaznaczony kwiat */
            for (var j = 0; j < localStorage.length; j++) {

                var key = localStorage.key(j);
                var item = JSON.parse(localStorage.getItem(key)); /* pobiera element z localS */

                if (item.nazwa === document.getElementById(kwiat).value) {

                    item.ilość = item.ilość + 1; /* jeżeli posiadają taka samą nazwę, to zwiększa ilość danego produktu i dalej zapisuje go na miejsce tego elementu */

                    localStorage.setItem(localStorage.key(j), JSON.stringify(item));
                    exist = true; /* no i najważniejsze zmienia istnienie elementu aby nie utworzyło nowego elementu*/
                }
            }

            /* jeżeli element nie istnieje w localS to go tworzy i dodaje do localS */
            if (exist === false) {

                var cena = "cena_k" + i;

                item.nazwa = document.getElementById(kwiat).value;
                item.cena = document.getElementById(cena).value;
                item.ilość = 1;

                var key = "item" + (localStorage.length + 1);
                localStorage.setItem(key, JSON.stringify(item));
            }
        }
        /* To samo co wcześniej dla warzyw */
        if (document.getElementById(warzyw).checked === true) {

            var exist = false;
            for (var j = 0; j < localStorage.length; j++) {

                var key = localStorage.key(j);
                var item = JSON.parse(localStorage.getItem(key));

                if (item.nazwa === document.getElementById(warzyw).value) {

                    item.ilość = item.ilość + 1;

                    localStorage.setItem(localStorage.key(j), JSON.stringify(item));
                    exist = true;
                }
            }

            if (exist === false) {
                var cena = "cena_w" + i;

                item.nazwa = document.getElementById(warzyw).value;
                item.cena = document.getElementById(cena).value;
                item.ilość = 1;

                var key = "item" + (localStorage.length + 1);
                localStorage.setItem(key, JSON.stringify(item));
            }

        }
        /* To samo co wcześniej dla ziół */
        if (document.getElementById(zioło).checked === true) {

            var exist = false;
            for (var j = 0; j < localStorage.length; j++) {

                var key = localStorage.key(j);
                var item = JSON.parse(localStorage.getItem(key));

                if (item.nazwa === document.getElementById(zioło).value) {

                    item.ilość = item.ilość + 1;

                    localStorage.setItem(localStorage.key(j), JSON.stringify(item));
                    exist = true;
                }
            }

            if (exist === false) {
                var cena = "cena_z" + i;

                item.nazwa = document.getElementById(zioło).value;
                item.cena = document.getElementById(cena).value;
                item.ilość = 1;

                var key = "item" + (localStorage.length + 1);
                localStorage.setItem(key, JSON.stringify(item));
            }
        }
    }

}

/* funkcja odczytuje dane z localStorage */
function wyświetl_koszyk() {

    var zawartosc = "";
    var item = "item";
    var nazwa = "nazwa";
    var cena = "cena";
    var ilość = "ilość";

    /* najpierw w pętli odczytuje ile jest elementów w localS i tworzy dla budowę tabeli */
    for (var i = 0; i < localStorage.length; i++) {

        item = "item" + i;
        nazwa = "nazwa" + i;
        cena = "cena" + i;
        ilość = "ilość" + i;
        zawartosc = zawartosc + "<tr> <td id=" + nazwa + "></td> <td id=" + cena + "></td> <td id=" + ilość + "></td> </tr>";

    }

    /* do dokumentu dodaje tabele wraz z jej budową */
    document.getElementById("koszyk").innerHTML = "<h1>Koszyk</h1> <table> <thead> <tr> <th>Produkt</th> <th>Cena</th> <th>Ilość</th> </tr> </thead> <tbody>" + zawartosc + "</tbody> </table>";

    /* wczytanie wszystkich elementów localS i wprowadzenie ich do tabeli */
    for (var i = 0; i < localStorage.length; i++) {

        item = "item" + (i + 1);
        nazwa = "nazwa" + i;
        cena = "cena" + i;
        ilość = "ilość" + i;
        
        var retrieveItem = JSON.parse(localStorage.getItem(item));

        document.getElementById(nazwa).innerHTML = retrieveItem.nazwa;
        document.getElementById(cena).innerHTML = retrieveItem.cena;
        document.getElementById(ilość).innerHTML = retrieveItem.ilość;

    }
    
    podlicz();
}

/* Laboratorium 6, Laboratorium 11.1 */
/* wykorzystanie javascript do integracji z uzytkowanikiem z wykorzystaniem lokalnych magazynów danych */

/* funkcja liczy wartość produktów w koszyku */
function podlicz() {

    var suma = 0;

    for (var i = 0; i < localStorage.length; i++) {

        item = "item" + (i+1);

        //odczytaj obiekt z localStorage - wykorzystaj metodę parse klasy JSON 
        var retrieveItem = JSON.parse(localStorage.getItem(item));

        suma = suma + (parseFloat(retrieveItem.cena) * retrieveItem.ilość);

    }

    document.getElementById("razem").innerHTML = "<h3>Razem: " + suma.toFixed(2) + "</h3>";

}

/* funkcja usuwa całą zawartość localStorage */
function usuń_koszyk() {

    localStorage.clear();

}