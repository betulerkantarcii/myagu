@php
    $currentLocale = \Illuminate\Support\Facades\App::getLocale();
@endphp


    <!-- Header-->

    <header id="header" class="icheader">

        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col">
                    <?php
                        $currentLocale = \Illuminate\Support\Facades\App::getLocale();
                        if($currentLocale == 'tr'){
                            echo ' <img class="logo-white logo-ic" src="images/agu-logo-white2.svg" alt="Abdullah Gül Üniversitesi"/> ';
                        }
                        else{
                            echo ' <img class="logo-white logo-ic" src="images/agu-logo-white-eng.png" alt="Abdullah Gül Üniversitesi"/> ';
                        }
                    ?>
                </div>
                <div class="col-auto">
                    <div class="header-alt halt-ic">
                        <ul>
                            <li>
                                <!-- Mobil Menü Seçici -->
                                <a class="mobil-menu dsk-gizle" href="#menu"><img src="images/navigate.svg" alt="Menu" /> <span> {{ trans('public.home.menu') }}</span></a>
                                <!-- Mobil Menü Seçici -->
                            </li>   
                            @foreach($locales as $locale)
                            @if($locale != $currentLocale)
                            <li class="mbl-gizle">
                            <a href="{{ route('lang.switch', $locale) }}">{{ strtoupper($locale) }}</a>
                            </li>
                            @endif
                            @endforeach
                            <li class="mbl-gizle">|</li>
                            <li class="mbl-gizle"><a class="header-ara" onclick="openSearch()" href="#"><img src="images/search.svg" alt="Ara" /></a></li>
                            
                        </ul>

                        <div id="searchpopup" class="arama-pop">
                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                            <div class="overlay-content">
                                <div class="row justify-content-center">
                                    <div class="col-8 p-0"><input type="text" placeholder="Aranacak kelime.." name="search" autocomplete="off" required=required autofocus=autofocus autofocus=autofocus /></div>
                                    <div class="col-auto p-0"><button type="submit"><i class="fa fa-search"></i></button></div>
                                </div>
                                    
                                    
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </header>
   
    <!-- Header-->




    <!--HEADER BAŞLIK-->
    <div class="header-baslik-genel">
        <div class="header-baslik-background2">
            <div class="container">
                <div class="row">
                        <h3 class="text-center w-100 mb-0"> {{ trans('public.home.myagu') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <!--HEADER BAŞLIK-->


   <!-- MOBİL MENÜ -->

<nav class="navbar-xs navbar-expand-md dsk-gizle" id="menu">
@if($currentLocale == 'en')
<ul>
    <li class="hamburger-modify">
        <span>ABOUT</span>
        <ul>
            <li><a href="http://www.agu.edu.tr/history">History</a></li>
            <li><a href="http://www.agu.edu.tr/vision">AGU Vision</a></li>
            <li><a href="http://www.agu.edu.tr/mission">AGU Mission</a></li>
            <li><a href="http://www.agu.edu.tr/rektorluk-ofisi">Rector's Office</a></li>
            <li><a href="http://www.agu.edu.tr/administration">Administration</a></li>
            <li><a href="http://www.agu.edu.tr/idaribirimler">Administrative Units</a></li>
            <li><a href="http://www.agu.edu.tr/userfiles//thumbs/Pdf%20Files/organizasyonsema27012022.pdf">Organization Chart</a></li>
            <li><a href="http://www.agu.edu.tr/komisyonlar_yeni">Commissions</a></li>
            <li><a href="http://www.agu.edu.tr/agu-values">AGÜ Values & Equality and Freedom Policy</a></li>
            <li><a href="http://www.agu.edu.tr/userfiles//academichonestypolicy.pdf">Academic Honesty and Policy Document</a></li>
            <li><a href ="http://www.agu.edu.tr/stratejik-plan">Strategic Plans</a></li>
            <li><a href="http://kalite.agu.edu.tr/">Quality Commission</a></li>
            <li><a href="http://www.agu.edu.tr/kampusler">Campuses</a></li>
            <li><a href="https://oidb-en.agu.edu.tr/yoenetmelik">Regulation</a></li>
            <li><a href="https://feedback.agu.edu.tr">AGU Feedback</a></li>
            <li><a href="http://www.agu.edu.tr/covid-19">Covid-19</a></li>
            <li><a href="http://www.agu.edu.tr/userfiles/up/yenillikciunitasarimmodel.pdf">Innovative University Design: AGU Model</a></li>
            <li><a href="http://www.agu.edu.tr/aguf">AGU Foundation (AGUF)</a></li>
            <li><a href="http://press.agu.edu.tr">Corporate Communication</a></li>
            <li><a href="http://www.agu.edu.tr/agu-strategies">Internationalization Strategy</a></li>
        </ul>
    </li>


    <li class="hamburger-modify">
        <a href="https://aday.agu.edu.tr/"><span>PROSPESCTIVE STUDENT</span></a>
    </li>

    <li class="hamburger-modify">
        <a href="https://research.agu.edu.tr"><span>RESEARCH</span></a>    
    </li>

    <li class="hamburger-modify">
        <a href="https://sustainability.agu.edu.tr"><span>CONTRIBUTE TO SOCIETY</span></a>    
    </li>

    <li class="hamburger-modify">
        <a href="https://cat.agu.edu.tr"><span>EDUCATION</span></a>
    </li>

    <li class="hamburger-modify">
        <a href="https://intoffice.agu.edu.tr"><span>INTERNATIONAL</span></a>
    </li>

    <li class="hamburger-modify">
        <a href="https://aday.agu.edu.tr/mezunlarimiz.html"><span>ALUMNI</span></a>
    </li>

    <li class="hamburger-modify">
        <a href="https://www.youtube.com/channel/UCqokHApAfpxT_atE9mrBYwA"target="_blank"><span>AGU TV</span></a>
    </li>



    <li>
        <span>ACADEMIC</span>
        <ul>
            <li><a  href="http://www.agu.edu.tr/facultiesanddepartments">Faculties and Departments</a><li>
            <li><a  href="http://fbe.agu.edu.tr/">Graduate School of Engineering & Science</a><li>
            <li><a  href="http://sbe.agu.edu.tr">Institute of Social Sciences</a><li>
            <li><a  href="https://ydyo-en.agu.edu.tr/">The School of Languages</a><li>
            <li><a  href="http://www.agu.edu.tr/ortak-dersler">Common Courses</a><li>
            <li><a  href="https://glb-en.agu.edu.tr/">AGU Global Courses (GLB)</a><li>
            <li><a  href="http://www.agu.edu.tr/centerandinstitutes">Centers and Institues</a><li>
            <li><a  href="http://tdbb.agu.edu.tr/">Department of Turkish Language</a><li>
            <li><a  href="http://celt.agu.edu.tr/">Learning and Teaching Development Unit</a><li>
            <li><a  href="https://akademi-en.agu.edu.tr/">AGU Academy</a><li>
            <li><a  href="http://www.agu.edu.tr/academics">Academic Staff</a><li>
            <li><a  href="https://cat.agu.edu.tr/Pages/Home.aspx?lang=en-US">Education Information System (Academic Catalogue)</a><li>
            <li><a  href="http://erasmus.agu.edu.tr">Erasmus Office</a><li>
            <li><a  href="https://intoffice.agu.edu.tr">International Office</a><li>
            <li><a  href="http://avesis.agu.edu.tr/">Academic Data Management System (AVESIS)</a><li>
            <li><a  href="https://bapsis.agu.edu.tr">Project Management System</a><li>
            <li><a  href="http://www.agu.edu.tr/etik-kurulu-basvuru">Ethics Committee</a><li>
            <li><a  href="https://ylsy-en.agu.edu.tr/">YLSY Scholarship Coordination</a><li>
            <li><a  href="http://www.agu.edu.tr/academiccalendar">Academic Calendar</a><li>
            <li><a  href="http://www.agu.edu.tr/userfiles//thumbs/Pdf%20Files/AGU%CC%88_Akademik_Yu%CC%88kseltilme_ve_At.pdf">Academic Appointment and Promotion Directive (Previous)</a><li>
            <li><a  href="http://www.agu.edu.tr/userfiles//thumbs/Pdf%20Files/aguakademikatanma14062022.pdf">Academic Appointment and Promotion Directive (Current)</a><li>
            <li><a  href="http://www.agu.edu.tr/userfiles//academichonestypolicy.pdf">Academic Honesty Document</a><li>
       </ul>
    </li>

    <li>
        <span>ADMINISTRATIVE</span>
        <ul>
            <li><a href="https://oidb-en.agu.edu.tr/">Student Affairs Department</a></li>
            <li><a href="https://personel-en.agu.edu.tr">Personnel</a></li>
            <li><a href="https://kutuphane-en.agu.edu.tr">Library</a></li>
            <li><a href="https://bidb-en.agu.edu.tr/">Information Technology</a></li>
            <li><a href="https://strateji-en.agu.edu.tr">Strategy</a></li>
            <li><a href="https://yapiisleri-en.agu.edu.tr">Construction and Technical Works</a></li>
            <li><a href="https://sks-en.agu.edu.tr">Health, Culture, and Sports</a></li>
            <li><a href="https://imid-en.agu.edu.tr/">Administrative & Financial</a></li>
            <li><a href="http://yaziisleri.agu.edu.tr">Documentation</a></li>
            <li><a href="http://guvenlik.agu.edu.tr">Security Services</a></li>
            <li><a href="https://hukukmsv-en.agu.edu.tr">Legal Counselor</a></li>
            <li><a href="http://icdenetim.agu.edu.tr">Internal Control</a></li>
            <li><a href="http://isg.agu.edu.tr">Occupational Health and Safety</a></li>
            <li><a href="http://dosim.agu.edu.tr">Revolving Funds</a></li>
            <li><a href="http://press.agu.edu.tr/">Corporate Communication</a></li>
        </ul>
    </li>

    <li>
        <span>STUDENT</span>
        <ul>
            <li><a href="https://oidb-en.agu.edu.tr/">Student Affairs</a></li>
            <li><a href="https://kutuphane-en.agu.edu.tr">Library</a></li>
            <li><a href="https://uis.agu.edu.tr">UIS</a></li>
            <li><a href="https://cat.agu.edu.tr/Pages/Home.aspx?lang=en-US">Academic Catalog</a></li>
            <li><a href="http://od.agu.edu.tr">Office of the Dean of Students</a></li>
            <li><a href="http://agu.edu.tr/userfiles/up/PDF/ogrencielkitapcigi2021.pdf">Student Handbook</a></li>
            <li><a href="http://od.agu.edu.tr/Student-village">Student Village</a></li>
            <li><a href="https://youth-en.agu.edu.tr">Youth Factory</a></li>
            <li><a href="http://career.agu.edu.tr">Career Center</a></li>
            <li><a href="http://www.agu.edu.tr/kampusler">Campuses</a></li>
            <li><a href="http://od.agu.edu.tr/student-clubs">Students Clubs & Organizations</a></li>
            <li><a href="https://sks-en.agu.edu.tr/sport">Athletics & Rereation</a></li>
        </ul>
    </li>

    <li>
        <a href="">MY AGU</a>
    </li>
                     
    @foreach($locales as $locale)
    @if($locale != $currentLocale)
        <li>
        <a href="{{ route('lang.switch', $locale) }}">{{ strtoupper($locale) }}</a>
        </li>
    @endif
    @endforeach

</ul>

@else

<ul>
    <li class="hamburger-modify">
        <span>HAKKINDA</span>
            <ul>
                <li><a href="http://www.agu.edu.tr/tarihce">Tarihi Miras</a></li>
                <li><a href="http://www.agu.edu.tr/vizyonmisyon">Vizyon ve Misyon</a></li>
                <li><a href="http://www.agu.edu.tr/rektorluk-ofisi">Rektörlük Ofisi</a></li>
                <li><a href="http://www.agu.edu.tr/yonetim">Yönetim</a></li>
                <li><a href="http://www.agu.edu.tr/idaribirimler">İdari Birimler</a></li>
                <li><a href="http://www.agu.edu.tr/userfiles//thumbs/Pdf%20Files/organizasyonsema27012022.pdf">Organizasyon Şeması</a></li>
                <li><a href="http://www.agu.edu.tr/komisyonlar_yeni">Komisyonlar</a></li>
                <li><a href="http://www.agu.edu.tr/agu-degerleri">AGÜ Değerleri, Eşitlik ve Özgürlük Politikası</a></li>
                <li><a href="http://www.agu.edu.tr/userfiles/AkademikDurustluk.pdf">Akademik Dürüstlük ve Politika Belgesi</a></li>
                <li><a href ="http://www.agu.edu.tr/stratejik-plan">Stratejik Planlar</a></li>
                <li><a href="http://kalite.agu.edu.tr/">Kalite ve Güvence Sistemi</a></li>
                <li><a href="http://www.agu.edu.tr/kampusler">Kampüsler</a></li>
                <li><a href="https://oidb-tr.agu.edu.tr/yoenetmelik">Yönetmelikler</a></li>
                <li><a href="https://feedback.agu.edu.tr">Öneri İstek Şikayet</a></li>
                <li><a href="http://www.agu.edu.tr/covid-19">Kovid-19 Sürecinde Yürütülen Çalışmalar</a></li>
                <li><a href="http://www.agu.edu.tr/userfiles/up/yenillikciunitasarimmodel.pdf">Yenilikçi Üniversite Tasarımı: AGÜ Modeli</a></li>
                <li><a href="https://www.aguv.org.tr">AGÜ Vakfı</a></li>
                <li><a href="http://press.agu.edu.tr">Kurumsal İletişim Koordinatörlüğü</a></li>
                <li><a href="http://www.agu.edu.tr/uluslararasilasma-stratejisi">Uluslararasılaşma Strateji</a></li>
            </ul>
    </li>


    <li class="hamburger-modify">
        <a href="https://aday.agu.edu.tr/"><span>ADAY ÖĞRENCİ</span></a>
    </li>

    <li class="hamburger-modify">
        <a href="https://research.agu.edu.tr"><span>ARAŞTIRMA</span></a>    
    </li>

    <li class="hamburger-modify">
        <a href="https://sustainability.agu.edu.tr"><span>TOPLUMA KATKI</span></a>    
    </li>

    <li class="hamburger-modify">
        <a href="https://cat.agu.edu.tr"><span>EĞİTİM</span></a>
    </li>

    <li class="hamburger-modify">
        <a href="https://intoffice.agu.edu.tr"> <span>ULUSLARARASI</span></a>
    </li>

    <li class="hamburger-modify">
        <a href="https://aday.agu.edu.tr/mezunlarimiz.html"><span>MEZUN</span></a>
    </li>

    <li class="hamburger-modify">
        <a href="https://www.youtube.com/channel/UCqokHApAfpxT_atE9mrBYwA"target="_blank"><span>AGU TV</span></a>
    </li>



    <li>
        <span>AKADEMİK</span>
        <ul>
            <li><a href="http://www.agu.edu.tr/fakulteler">Fakülteler ve Bölümler</a></li>
            <li><a href="http://fbe.agu.edu.tr/">Fen Bilimleri Enstitüsü</a></li>
            <li><a href="http://sbe.agu.edu.tr">Sosyal Bilimler Enstitüsü</a></li>
            <li><a href="https://ydyo-tr.agu.edu.tr/">Dil Okulu</a></li>
            <li><a href="http://www.agu.edu.tr/ortak-dersler">Ortak Dersler</a></li>
            <li><a href="https://glb-en.agu.edu.tr/">GLB Dersleri Koordinatörlüğü</a></li>
            <li><a href="http://www.agu.edu.tr/centerandinstitutes">Merkezler</a></li>
            <li><a href="http://tdbb.agu.edu.tr/">Türk Dili Bölümü</a></li>
            <li><a href="http://celt.agu.edu.tr/">Öğrenme ve Öğretmeyi Geliştirme Birimi</a></li>
            <li><a href="https://akademi-tr.agu.edu.tr/">AGÜ Akademi</a></li>
            <li><a href="http://www.agu.edu.tr/akademikkadro">Akademik Kadro</a></li>
            <li><a href="https://cat.agu.edu.tr/Pages/Home.aspx?lang=tr-TR">Eğitim Öğretim Bilgi Sistemi (Akademik Katalog)</a></li>
            <li><a href="http://erasmus.agu.edu.tr">Erasmus Ofisi</a></li>
            <li><a href="https://intoffice.agu.edu.tr/">Uluslararası Ofis</a></li>
            <li><a href="http://avesis.agu.edu.tr/">Akademik Veri Yönetim Sistemi (AVESİS)</a></li>
            <li><a href="https://bapsis.agu.edu.tr/Default2.aspx">Proje Yönetim Sistemi</a></li>
            <li><a href="http://www.agu.edu.tr/etik-kurulu-basvuru">Etik Kurul</a></li>
            <li><a href="https://ylsy-tr.agu.edu.tr/">YLSY Burs Programı Koordinatörlüğü</a></li>
            <li><a href="http://www.agu.edu.tr/akademiktakvim">Akademik Takvim</a></li>
            <li><a href="http://www.agu.edu.tr/userfiles//thumbs/Pdf%20Files/AGU%CC%88_Akademik_Yu%CC%88kseltilme_ve_At.pdf">Akademik Atama ve Yükseltme Yönergesi (Önceki)</a></li>
            <li><a href="http://www.agu.edu.tr/userfiles//thumbs/Pdf%20Files/aguakademikatanma14062022.pdf">Akademik Atama ve Yükseltme Yönergesi (Güncel)</a></li>
            <li><a href="http://www.agu.edu.tr/userfiles//AkademikDurustluk.pdf">Akademik Dürüstlük Politika Belgesi</a></li>
        </ul>
    </li>

    <li>
        <span>İDARİ</span>
            <ul>
                <li><a href="https://oidb-tr.agu.edu.tr/">Öğrenci İşleri Daire Başkanlığı</a></li>
                <li><a href="https://personel-tr.agu.edu.tr">Personel Daire Başkanlığı</a></li>
                <li><a href="https://kutuphane-tr.agu.edu.tr">Kütüphane ve Dokümantasyon Daire Başkanlığı</a></li>
                <li><a href="https://bidb-tr.agu.edu.tr/">Bilgi İşlem Daire Başkanlığı</a></li>
                <li><a href="https://strateji-tr.agu.edu.tr">Strateji Geliştirme Daire Başkanlığı</a></li>
                <li><a href="https://yapiisleri-tr.agu.edu.tr">Yapı İşleri ve Teknik Daire Başkanlığı</a></li>
                <li><a href="https://sks-tr.agu.edu.tr">Sağlık Kültür ve Spor Daire Başkanlığı</a></li>
                <li><a href="https://imid-tr.agu.edu.tr/)">İdari Mali İşler Daire Başkanlığı</a></li>
                <li><a href="http://yaziisleri.agu.edu.tr">Yazı İşleri ve Teknik Daire Başkanlığı</a></li>
                <li><a href="http://guvenlik.agu.edu.tr">Güvenlik Hizmetleri Müdürlüğü</a></li>
                <li><a href="https://hukukmsv-tr.agu.edu.tr">Hukuk Müşavirliği</a></li>
                <li><a href="http://icdenetim.agu.edu.tr">İç Denetim Birimi</a></li>
                <li><a href="http://isg.agu.edu.tr">İş Sağlığı ve Güvenliği Koordinatörlüğü</a></li>
                <li><a href="http://dosim.agu.edu.tr">Döner Sermaye İşletme Müdürlüğü</a></li>
                <li><a href="http://press.agu.edu.tr/">Kurumsal İletişim Direktörlüğü</a></li>
            </ul>
    </li>

    <li>
        <span>STUDENT</span>
        <ul>
            <li><a href="https://oidb-tr.agu.edu.tr/">Öğrenci İşleri</a></li>
            <li><a href="https://kutuphane-tr.agu.edu.tr">Kütüphane</a></li>
            <li><a href="https://uis.agu.edu.tr">UIS</a></li>
            <li><a href="https://cat.agu.edu.tr/Pages/Home.aspx?lang=tr-TR">Akademik Katalog</a></li>
            <li><a href="http://od.agu.edu.tr">Öğrenci Dekanlığı</a></li>
            <li><a href="http://agu.edu.tr/userfiles/up/PDF/ogrencielkitapcigi2021.pdf">Öğrenci El Kitapçığı</a></li>
            <li><a href="http://od.agu.edu.tr/ogrenci-koyu">Yurtlar</a></li>
            <li><a href="https://youth-tr.agu.edu.tr/">Gençlik Fabrikası</a></li>
            <li><a href="http://career.agu.edu.tr/">Kariyer Merkezi</a></li>
            <li><a href="http://www.agu.edu.tr/kampusler">Kampüsler</a></li>
            <li><a href="http://od.agu.edu.tr/ogrenci-kulupleri">Öğrenci Kulüpleri</a></li>
            <li><a href="https://sks-tr.agu.edu.tr/spor">Spor ve Aktiviteler</a></li>
        </ul>
    </li>

    <li>
        <a href="">MY AGÜ</a>
    </li>
                     
    @foreach($locales as $locale)
    @if($locale != $currentLocale)
        <li>
        <a href="{{ route('lang.switch', $locale) }}">{{ strtoupper($locale) }}</a>
        </li>
    @endif
    @endforeach
         
    


</ul>

@endif
</nav>

<!-- MOBİL MENÜ -->