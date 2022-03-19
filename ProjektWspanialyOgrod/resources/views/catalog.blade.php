@extends('layouts.app')

@section('content')
<div id='artykul'>
@if( $slug == 'drzewa-i-krzewy' )
<h2>Drzewa i krzewy</h2>
<div id='zdjecia'>
    <a href="{{ asset('images/katalog/drzewa/akacja-żółta.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Akacja żółta"><img src="{{ asset('images/katalog/drzewa/akacja-żółta.jpg') }}" alt="Akacja żółta" title="Akacja żółta"></a>
    <a href="{{ asset('images/katalog/drzewa/berberys.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Berberys"><img src="{{ asset('images/katalog/drzewa/berberys.jpg') }}" alt="Berberys" title="Berberys"></a>
    <a href="{{ asset('images/katalog/drzewa/berberys-czerwony.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Berberys czerwony"><img src="{{ asset('images/katalog/drzewa/berberys-czerwony.jpg') }}" alt="Berberys czerwony" title="Berberys czerwony"></a>
    <a href="{{ asset('images/katalog/drzewa/berberys-zielony.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Berberys zielony"><img src="{{ asset('images/katalog/drzewa/berberys-zielony.jpg') }}" alt="Berberys zielony" title="Berberys zielony"></a>
    <a href="{{ asset('images/katalog/drzewa/bez-biały.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Bez biały"><img src="{{ asset('images/katalog/drzewa/bez-biały.jpg') }}" alt="Bez biały" title="Bez biały"></a>
    <a href="{{ asset('images/katalog/drzewa/bez-biały-kwiat.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Bez biały - kwiat"><img src="{{ asset('images/katalog/drzewa/bez-biały-kwiat.jpg') }}" alt="Bez biały - kwiat" title="Bez biały - kwiat"></a>
    <a href="{{ asset('images/katalog/drzewa/bez-fioletowy-kwiat.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Bez fioletowy - kwiat"><img src="{{ asset('images/katalog/drzewa/bez-fioletowy-kwiat.jpg') }}" alt="Bez fioletowy - kwiat" title="Bez fioletowy - kwiat"></a>
    <a href="{{ asset('images/katalog/drzewa/bukszpan-duży.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Bukszpan duży"><img src="{{ asset('images/katalog/drzewa/bukszpan-duży.jpg') }}" alt="Bukszpan duży" title="Bukszpan duży"></a>
    <a href="{{ asset('images/katalog/drzewa/bukszpan-mały.jpg') }}" target="_blank"  data-lightbox="galeria" data-title="Bukszpan mały"><img src="{{ asset('images/katalog/drzewa/bukszpan-mały.jpg') }}" alt="Bukszpan mały" title="Bukszpan mały"></a>
    <a href="{{ asset('images/katalog/drzewa/klon-czerwony.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Klon czerwony"><img src="{{ asset('images/katalog/drzewa/klon-czerwony.jpg') }}" alt="Klon czerwony" title="Klon czerwony"></a>
    <a href="{{ asset('images/katalog/drzewa/klon-czerwony-liście.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Klon czerwony - liście"><img src="{{ asset('images/katalog/drzewa/klon-czerwony-liście.jpg') }}" alt="Klon czerwony - liście" title="Klon czerwony - liście"></a>
    <a href="{{ asset('images/katalog/drzewa/orzech-laskowy-czerwony.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Orzech laskowy czerwony"><img src="{{ asset('images/katalog/drzewa/orzech-laskowy-czerwony.jpg') }}" alt="Orzech laskowy czerwony" title="Orzech laskowy czerwony"></a>
    <a href="{{ asset('images/katalog/drzewa/perukowiec.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Perukowiec"><img src="{{ asset('images/katalog/drzewa/perukowiec.jpg') }}" alt="Perukowiec" title="Perukowiec"></a>
    <a href="{{ asset('images/katalog/drzewa/pszczelina.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Pszczelina"><img src="{{ asset('images/katalog/drzewa/pszczelina.jpg') }}" alt="Pszczelina" title="Pszczelina"></a>
    <a href="{{ asset('images/katalog/drzewa/tuja-prostopadłościan.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Tuja - prostopadłościan"><img src="{{ asset('images/katalog/drzewa/tuja-prostopadłościan.jpg') }}" alt="Tuja - prostopadłościan" title="Tuja - prostopadłościan"></a>
    <a href="{{ asset('images/katalog/drzewa/tuja-wąska.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Tuja - wąska"><img src="{{ asset('images/katalog/drzewa/tuja-wąska.jpg') }}" alt="Tuja - wąska" title="Tuja - wąska"></a>
    <a href="{{ asset('images/katalog/drzewa/tuja-wysoka.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Tuja - wysoka"><img src="{{ asset('images/katalog/drzewa/tuja-wysoka.jpg') }}" alt="Tuja - wysoka" title="Tuja - wysoka"></a>
    <a href="{{ asset('images/katalog/drzewa/tuja-zielona-koło.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Tuja zielona - koło"><img src="{{ asset('images/katalog/drzewa/tuja-zielona-koło.jpg') }}" alt="Tuja zielona - koło" title="Tuja zielona - koło"></a>
    <a href="{{ asset('images/katalog/drzewa/tuja-żółta-koło.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Tuja żółta - koło"><img src="{{ asset('images/katalog/drzewa/tuja-żółta-koło.jpg') }}" alt="Tuja żółta - koło" title="Tuja żółta - koło"></a>
</div>
@endif
@if( $slug == 'kwiaty-i-rosliny-ozdobne' )
<h2>Kwiaty i rośliny ozdobne</h2>
<div id='zdjecia'>
    <a href="{{ asset('images/katalog/kwiaty/aksamitka.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Aksamitka"><img src="{{ asset('images/katalog/kwiaty/aksamitka.jpg') }}" alt="Aksamitka" title="Aksamitka"></a>
    <a href="{{ asset('images/katalog/kwiaty/barwinek.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Barwinek"><img src="{{ asset('images/katalog/kwiaty/barwinek.jpg') }}" alt="Barwinek" title="Barwinek"></a>
    <a href="{{ asset('images/katalog/kwiaty/bratki.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Bratki"><img src="{{ asset('images/katalog/kwiaty/bratki.jpg') }}" alt="Bratki" title="Bratki"></a>
    <a href="{{ asset('images/katalog/kwiaty/chaber-bławatek.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Chaber bławatek"><img src="{{ asset('images/katalog/kwiaty/chaber-bławatek.jpg') }}" alt="Chaber bławatek" title="Chaber bławatek"></a>
    <a href="{{ asset('images/katalog/kwiaty/czosnek-ozdobny.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Czosnek ozdobny"><img src="{{ asset('images/katalog/kwiaty/czosnek-ozdobny.jpg') }}" alt="Czosnek ozdobny" title="Czosnek ozdobny"></a>
    <a href="{{ asset('images/katalog/kwiaty/czyściec-wełniasty.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Czyściec wełniasty"><img src="{{ asset('images/katalog/kwiaty/czyściec-wełniasty.jpg') }}" alt="Czyściec wełniasty" title="Czyściec wełniasty"></a>
    <a href="{{ asset('images/katalog/kwiaty/hosta-dwukolorowa.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Hosta dwukolorowa"><img src="{{ asset('images/katalog/kwiaty/hosta-dwukolorowa.jpg') }}" alt="Hosta dwukolorowa" title="Hosta dwukolorowa"></a>
    <a href="{{ asset('images/katalog/kwiaty/hosta-jasna.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Hosta jasna"><img src="{{ asset('images/katalog/kwiaty/hosta-jasna.jpg') }}" alt="Hosta jasna" title="Hosta jasna"></a>
    <a href="{{ asset('images/katalog/kwiaty/hosta-zielona.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Hosta zielona"><img src="{{ asset('images/katalog/kwiaty/hosta-zielona.jpg') }}" alt="Hosta zielona" title="Hosta zielona"></a>
    <a href="{{ asset('images/katalog/kwiaty/irys-biały.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Irys biały"><img src="{{ asset('images/katalog/kwiaty/irys-biały.jpg') }}" alt="Irys biały" title="Irys biały"></a>
    <a href="{{ asset('images/katalog/kwiaty/irys-bordowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Irys bordowy"><img src="{{ asset('images/katalog/kwiaty/irys-bordowy.jpg') }}" alt="Irys bordowy" title="Irys bordowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/irys-ciemnofioletowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Irys ciemnofioletowy"><img src="{{ asset('images/katalog/kwiaty/irys-ciemnofioletowy.jpg') }}" alt="Irys ciemnofioletowy" title="Irys ciemnofioletowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/irys-fioletowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Irys fioletowy"><img src="{{ asset('images/katalog/kwiaty/irys-fioletowy.jpg') }}" alt="Irys fioletowy" title="Irys fioletowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/irys-fioletowy-syberyjski.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Irys fioletowy syberyjski"><img src="{{ asset('images/katalog/kwiaty/irys-fioletowy-syberyjski.jpg') }}" alt="Irys fioletowy syberyjski" title="Irys fioletowy syberyjski"></a>
    <a href="{{ asset('images/katalog/kwiaty/irys-żółty.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Irys żółty"><img src="{{ asset('images/katalog/kwiaty/irys-żółty.jpg') }}" alt="Irys żółty" title="Irys żółty"></a>
    <a href="{{ asset('images/katalog/kwiaty/jaśmin.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Jaśmin"><img src="{{ asset('images/katalog/kwiaty/jaśmin.jpg') }}" alt="Jaśmin" title="Jaśmin"></a>
    <a href="{{ asset('images/katalog/kwiaty/kalia-biała.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Kalia biała"><img src="{{ asset('images/katalog/kwiaty/kalia-biała.jpg') }}" alt="Kalia biała" title="Kalia biała"></a>
    <a href="{{ asset('images/katalog/kwiaty/kalia-pomarańczowa.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Kalia pomarańczowa"><img src="{{ asset('images/katalog/kwiaty/kalia-pomarańczowa.jpg') }}" alt="Kalia pomarańczowa" title="Kalia pomarańczowa"></a>
    <a href="{{ asset('images/katalog/kwiaty/karmnik-ościsty-mech-ozdobny.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Karmnik ościsty - mech ozdobny"><img src="{{ asset('images/katalog/kwiaty/karmnik-ościsty-mech-ozdobny.jpg') }}" alt="Karmnik ościsty - mech ozdobny" title="Karmnik ościsty - mech ozdobny"></a>
    <a href="{{ asset('images/katalog/kwiaty/lilia.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Lilia"><img src="{{ asset('images/katalog/kwiaty/lilia.jpg') }}" alt="Lilia" title="Lilia"></a>
    <a href="{{ asset('images/katalog/kwiaty/łubin-bordowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Łubin bordowy"><img src="{{ asset('images/katalog/kwiaty/łubin-bordowy.jpg') }}" alt="Łubin bordowy" title="Łubin bordowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/łubin-fioletowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Łubin fioletowy"><img src="{{ asset('images/katalog/kwiaty/łubin-fioletowy.jpg') }}" alt="Łubin fioletowy" title="Łubin fioletowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/malwa.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Malwa"><img src="{{ asset('images/katalog/kwiaty/malwa.jpg') }}" alt="Malwa" title="Malwa"></a>
    <a href="{{ asset('images/katalog/kwiaty/nasturcja.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Nasturcja"><img src="{{ asset('images/katalog/kwiaty/nasturcja.jpg') }}" alt="Nasturcja" title="Nasturcja"></a>
    <a href="{{ asset('images/katalog/kwiaty/niezapominajka-niebieska.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Niezapominajka niebieska"><img src="{{ asset('images/katalog/kwiaty/niezapominajka-niebieska.jpg') }}" alt="Niezapominajka niebieska" title="Niezapominajka niebieska"></a>
    <a href="{{ asset('images/katalog/kwiaty/niezapominajka-różowa.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Niezapominajka różowa"><img src="{{ asset('images/katalog/kwiaty/niezapominajka-różowa.jpg') }}" alt="Niezapominajka różowa" title="Niezapominajka różowa"></a>
    <a href="{{ asset('images/katalog/kwiaty/orlik-fioletowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Orlik fioletowy"><img src="{{ asset('images/katalog/kwiaty/orlik-fioletowy.jpg') }}" alt="Orlik fioletowy" title="Orlik fioletowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/orlik-różowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Orlik różowy"><img src="{{ asset('images/katalog/kwiaty/orlik-różowy.jpg') }}" alt="Orlik różowy" title="Orlik różowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/pelargonia.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Pelargonia"><img src="{{ asset('images/katalog/kwiaty/pelargonia.jpg') }}" alt="Pelargonia" title="Pelargonia"></a>
    <a href="{{ asset('images/katalog/kwiaty/piwonia.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Piwonia"><img src="{{ asset('images/katalog/kwiaty/piwonia.jpg') }}" alt="Piwonia" title="Piwonia"></a>
    <a href="{{ asset('images/katalog/kwiaty/rojnik-róża-pustyni.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Rojnik - róża pustyni"><img src="{{ asset('images/katalog/kwiaty/rojnik-róża-pustyni.jpg') }}" alt="Rojnik - róża pustyni" title="Rojnik - róża pustyni"></a>
    <a href="{{ asset('images/katalog/kwiaty/różanecznik-fioletowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Różanecznik fioletowy"><img src="{{ asset('images/katalog/kwiaty/różanecznik-fioletowy.jpg') }}" alt="Różanecznik fioletowy" title="Różanecznik fioletowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/różanecznik-różowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Różanecznik różowy"><img src="{{ asset('images/katalog/kwiaty/różanecznik-różowy.jpg') }}" alt="Różanecznik różowy" title="Różanecznik różowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/trawa-ozdobna.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Trawa ozdobna"><img src="{{ asset('images/katalog/kwiaty/trawa-ozdobna.jpg') }}" alt="Trawa ozdobna" title="Trawa ozdobna"></a>
    <a href="{{ asset('images/katalog/kwiaty/trawa-ozdobna-zielona.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Trawa ozdobna - zielona"><img src="{{ asset('images/katalog/kwiaty/trawa-ozdobna-zielona.jpg') }}" alt="Trawa ozdobna zielona" title="Trawa ozdobna zielona"></a>
    <a href="{{ asset('images/katalog/kwiaty/tulipan-biały.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Tulipa biały"><img src="{{ asset('images/katalog/kwiaty/tulipan-biały.jpg') }}" alt="Tulipan biały" title="Tulipan biały"></a>
    <a href="{{ asset('images/katalog/kwiaty/tulipan-pomarańczowy.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Tulipan pomarańczowy"><img src="{{ asset('images/katalog/kwiaty/tulipan-pomarańczowy.jpg') }}" alt="Tulipan pomarańczowy" title="Tulipan pomarańczowy"></a>
    <a href="{{ asset('images/katalog/kwiaty/tulipan-żółty.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Tulipan żółty"><img src="{{ asset('images/katalog/kwiaty/tulipan-żółty.jpg') }}" alt="Tulipan żółty" title="Tulipan żółty"></a>
</div>
@endif


@if( $slug == 'owoce' )
<h2>Owoce</h2>
<div id='zdjecia'>
    <a href="{{ asset('images/katalog/owoce/agrest.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Agrest"><img src="{{ asset('images/katalog/owoce/agrest.jpg') }}" alt="Agrest" title="Agrest"></a>
    <a href="{{ asset('images/katalog/owoce/agrest-owoc.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Agrest - owoc"><img src="{{ asset('images/katalog/owoce/agrest-owoc.jpg') }}" alt="Agrest - owoc" title="Agrest - owoc"></a>
    <a href="{{ asset('images/katalog/owoce/czereśnia-drzewo.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Czereśnia"><img src="{{ asset('images/katalog/owoce/czereśnia-drzewo.jpg') }}" alt="Czereśnia" title="Czereśnia"></a>
    <a href="{{ asset('images/katalog/owoce/czereśnia-owoc.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Czereśnia - owoc"><img src="{{ asset('images/katalog/owoce/czereśnia-owoc.jpg') }}" alt="Czereśnia - owoc" title="Czereśnia - owoc"></a>
    <a href="{{ asset('images/katalog/owoce/gruszka-drzewo.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Gruszka"><img src="{{ asset('images/katalog/owoce/gruszka-drzewo.jpg') }}" alt="Gruszka" title="Gruszka"></a>
    <a href="{{ asset('images/katalog/owoce/gruszka-kwiat.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Gruszka - kwiat"><img src="{{ asset('images/katalog/owoce/gruszka-kwiat.jpg') }}" alt="Gruszka - kwiat" title="Gruszka - kwiat"></a>
    <a href="{{ asset('images/katalog/owoce/jabłoń-drzewo.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Jabłoń"><img src="{{ asset('images/katalog/owoce/jabłoń-drzewo.jpg') }}" alt="Jabłoń" title="Jabłoń"></a>
    <a href="{{ asset('images/katalog/owoce/jabłoń-kwiat.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Jabłoń - kwiat"><img src="{{ asset('images/katalog/owoce/jabłoń-kwiat.jpg') }}" alt="Jabłoń - kwiat" title="Jabłoń - kwiat"></a>
    <a href="{{ asset('images/katalog/owoce/malina-jesienna.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Malina jesienna"><img src="{{ asset('images/katalog/owoce/malina-jesienna.jpg') }}" alt="Malina jesienna" title="Malina jesienna"></a>
    <a href="{{ asset('images/katalog/owoce/poziomka.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Poziomka"><img src="{{ asset('images/katalog/owoce/poziomka.jpg') }}" alt="Poziomka" title="Poziomka"></a>
    <a href="{{ asset('images/katalog/owoce/pożeczka.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Porzeczka"><img src="{{ asset('images/katalog/owoce/porzeczka.jpg') }}" alt="Porzeczka" title="Porzeczka"></a>
    <a href="{{ asset('images/katalog/owoce/pożeczka-owoc.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Porzeczka - owoc"><img src="{{ asset('images/katalog/owoce/porzeczka-owoc.jpg') }}" alt="Porzeczka - owoc" title="Porzeczka - owoc"></a>
    <a href="{{ asset('images/katalog/owoce/śliwka.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Śliwka - owoc"><img src="{{ asset('images/katalog/owoce/śliwka.jpg') }}" alt="Śliwka - owoc" title="Śliwka - owoc"></a>
    <a href="{{ asset('images/katalog/owoce/truskawka.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Truskawka"><img src="{{ asset('images/katalog/owoce/truskawka.jpg') }}" alt="Truskawka" title="Truskawka"></a>
    <a href="{{ asset('images/katalog/owoce/wiśnia-drzewo.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Wiśnia"><img src="{{ asset('images/katalog/owoce/wiśnia-drzewo.jpg') }}" alt="Wiśnia" title="Wiśnia"></a>
    <a href="{{ asset('images/katalog/owoce/wiśnia-owoc.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Wiśnia - owoc"><img src="{{ asset('images/katalog/owoce/wiśnia-owoc.jpg') }}" alt="Wiśnia - owoc" title="Wiśnia - owoc"></a>
</div>
@endif


@if( $slug == 'warzywa-i-ziola' )
<h2>Warzywa i zioła</h2>
<div id='zdjecia'>
    <a href="{{ asset('images/katalog/warzywa/bób.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Bób"><img src="{{ asset('images/katalog/warzywa/bób.jpg') }}" alt="Bób" title="Bób"></a>
    <a href="{{ asset('images/katalog/warzywa/burak-czerwony.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Buraak czerwony"><img src="{{ asset('images/katalog/warzywa/burak-czerwony.jpg') }}" alt="Burak czerwony" title="Burak czerwony"></a>
    <a href="{{ asset('images/katalog/warzywa/cebula-kwiat.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Cebula - kwiat"><img src="{{ asset('images/katalog/warzywa/cebula-kwiat.jpg') }}" alt="Cebula - kwiat" title="Cebula - kwiat"></a>
    <a href="{{ asset('images/katalog/warzywa/czosnek.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Czosnek"><img src="{{ asset('images/katalog/warzywa/czosnek.jpg') }}" alt="Czosnek" title="Czosnek"></a>
    <a href="{{ asset('images/katalog/warzywa/fasola.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Fasola"><img src="{{ asset('images/katalog/warzywa/fasola.jpg') }}" alt="Fasola" title="Fasola"></a>
    <a href="{{ asset('images/katalog/warzywa/kapusta.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Kapusta"><img src="{{ asset('images/katalog/warzywa/kapusta.jpg') }}" alt="Kapusta" title="Kapusta"></a>
    <a href="{{ asset('images/katalog/warzywa/koper.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Koper"><img src="{{ asset('images/katalog/warzywa/koper.jpg') }}" alt="Koper" title="Koper"></a>
    <a href="{{ asset('images/katalog/warzywa/mięta-pieprzowa.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Mięta pieprzowa"><img src="{{ asset('images/katalog/warzywa/mięta-pieprzowa.jpg') }}" alt="Mięta pieprzowa" title="Mięta pieprzowa"></a>
    <a href="{{ asset('images/katalog/warzywa/ogórek.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Ogórek"><img src="{{ asset('images/katalog/warzywa/ogórek.jpg') }}" alt="Ogórek" title="Ogórek"></a>
    <a href="{{ asset('images/katalog/warzywa/pietruszka.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Pietruszka"><img src="{{ asset('images/katalog/warzywa/pietruszka.jpg') }}" alt="Pietruszka" title="Pietruszka"></a>
    <a href="{{ asset('images/katalog/warzywa/pomidor.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Pomidor"><img src="{{ asset('images/katalog/warzywa/pomidor.jpg') }}" alt="Pomidor" title="Pomidor"></a>
    <a href="{{ asset('images/katalog/warzywa/rabarbar.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Rabarbar"><img src="{{ asset('images/katalog/warzywa/rabarbar.jpg') }}" alt="Rabarbar" title="Rabarbar"></a>
    <a href="{{ asset('images/katalog/warzywa/rzodkiewka.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Rzodkiewka"><img src="{{ asset('images/katalog/warzywa/rzodkiewka.jpg') }}" alt="Rzodkiewka" title="Rzodkiewka"></a>
    <a href="{{ asset('images/katalog/warzywa/sałata.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Sałata"><img src="{{ asset('images/katalog/warzywa/sałata.jpg') }}" alt="Sałata" title="Sałata"></a>
    <a href="{{ asset('images/katalog/warzywa/słonecznik.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Słonecznik"><img src="{{ asset('images/katalog/warzywa/słonecznik.jpg') }}" alt="Słonecznik" title="Słonecznik"></a>
    <a href="{{ asset('images/katalog/warzywa/szczypiorek.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Szczypiorek"><img src="{{ asset('images/katalog/warzywa/szczypiorek.jpg') }}" alt="Szczypiorek" title="Szczypiorek"></a>
    <a href="{{ asset('images/katalog/warzywa/ziemniak.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Ziemniak"><img src="{{ asset('images/katalog/warzywa/ziemniak.jpg') }}" alt="Ziemniak" title="Ziemniak"></a>
</div>
@endif


@if( $slug == 'chwasty' )
<h2>Chwasty</h2>
<div id='zdjecia'>
    <a href="{{ asset('images/katalog/chwasty/jaskółcze-ziele.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Jaskółcze ziele"><img src="{{ asset('images/katalog/chwasty/jaskółcze-ziele.jpg') }}" alt="Jaskółcze ziele" title="Jaskółcze ziele"></a>
    <a href="{{ asset('images/katalog/chwasty/koniczyna.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Koniczyna"><img src="{{ asset('images/katalog/chwasty/koniczyna.jpg') }}" alt="Koniczyna" title="Koniczyna"></a>
    <a href="{{ asset('images/katalog/chwasty/lebioda.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Lebioda"><img src="{{ asset('images/katalog/chwasty/lebioda.jpg') }}" alt="Lebioda" title="Lebioda"></a>
    <a href="{{ asset('images/katalog/chwasty/mlecz.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Mlecz"><img src="{{ asset('images/katalog/chwasty/mlecz.jpg') }}" alt="Mlecz" title="Mlecz"></a>
    <a href="{{ asset('images/katalog/chwasty/oset.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Oset"><img src="{{ asset('images/katalog/chwasty/oset.jpg') }}" alt="Oset" title="Oset"></a>
    <a href="{{ asset('images/katalog/chwasty/pokrzywa.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Pokrzywa"><img src="{{ asset('images/katalog/chwasty/pokrzywa.jpg') }}" alt="Pokrzywa" title="Pokrzywa"></a>
    <a href="{{ asset('images/katalog/chwasty/pokrzywa2.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Pokrzywa"><img src="{{ asset('images/katalog/chwasty/pokrzywa2.jpg') }}" alt="Pokrzywa" title="Pokrzywa"></a>
    <a href="{{ asset('images/katalog/chwasty/stokrotka-biała.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Stokrotka biała"><img src="{{ asset('images/katalog/chwasty/stokrotka-biała.jpg') }}" alt="Stokrotka biała" title="Stokrotka biała"></a>
    <a href="{{ asset('images/katalog/chwasty/stokrotka-różowa.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Stokrotka różowa"><img src="{{ asset('images/katalog/chwasty/stokrotka-różowa.jpg') }}" alt="Stokrotka różowa" title="Stokrotka różowa"></a>
    <a href="{{ asset('images/katalog/chwasty/stokrotki.jpg') }}" target="_blank" data-lightbox="galeria" data-title="Stokrotki"><img src="{{ asset('images/katalog/chwasty/stokrotki.jpg') }}" alt="Stokrotki" title="Stokrotki"></a>
</div>
@endif
</div>
@endsection
