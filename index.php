<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <Header>
        <div class="halfopacity1">
            <div class="nadpis">
                <h1 class="firstH1">Brzo Birulovi</h1>
                <h1 class="firstH1">01.10.2021</h1>
            </div>

            <img src="img/spodniprvnikolik.png" alt="" class="spodkol1">
            <img src="img/vrchniprvnikolik.png" alt="" class="vrchkol1">

            <img src="img/spodnidruhykolik.png" alt="" class="spodkol2">
            <img src="img/vrchnidruhykolik.png" alt="" class="vrchkol2">

            <img src="img/Provaz.png" alt="" class="rope">

            <div class="unscreen"><img src="img/bila.png" alt="" class="bila"></div>
            <div class="pic1-2">
                <img src="img/Patrik.png" alt="" class="pic1">
                <img src="img/Lucka.png" alt="" class="pic2">
            </div>
        </div>
    </Header>

    <Article class="firstarticle">
        <div class="halfopacity">
            <h1>Ahoj všichni!</h1>
            <p>
                Už zanedlouho nás čeká velký den... Budeme se brát! Přijďte to s námi oslavit do malebné Růžové chalupy
                u
                Šimánků ve Rtyni v Podkrkonoší!
                Rozhodli jsme se naši svatbu náležitě užít a uskutečnit v náš den vše, co jsme
                si vysnili. Celou událost proto
                rozdělujeme
                do dvou dnů (jeden by nám prostě nestačil &#128515). Ještě předtím, než vše vypukne, pro vás máme dva
                důležité úkoly.
                Prosíme, mrkněte na svou pozvánku a najděte tabulku, kterou jsme pro vás vyvěsili na strom. A ten druhý
                úkol?
                Doražte na svatbu!
            </p>
            <div class="ctn0">
                <div class="ctn1">
                    <h1>1.10.2021</h1>
                    <p>
                        V pátek odstartujeme ve večerních hodinách. Začneme svatebním obřadem, který se bude odehrávat v
                        nejbližším kruhu rodinném. Následovat bude večeře a poklidná poobřadní zábava.
                        Prosíme všechny pozvané o vyplnění krátkého dotazníčku.
                        <span class="dotaznikodkaz">Dotazník</span>
                    </p>
                    <button class="programbutton" id="programbtn1">Program prvního dne</button>

                </div>
                <div class="ctn1">
                    <h1>2.10.2021</h1>
                    <p>
                        V sobotu vypukne svatební slavnost pro vás všechny pozvané.
                        Nezoufejte, že byste přišli o
                        obřad, i v tento den se uskuteční! Tím naše sliby stvrdíme a budeme už definitivně svoji❤
                        Začneme odpoledne a pojedeme až do rána! Budou se konat
                        rozmanité aktivity! A kdo máte rádi jukebox, vemte s sebou hodně drobných &#128540 &#128515
                    </p>
                    <button class="programbutton" id="programbtn2">Program druhého dne</button>
                </div>
            </div>
        </div>
        <div class="popwindows" id="program1">
            <div class="crosswrapper"><span class="cross" id="crossprogram1">&#x2718</span></div>
            <h1>Program dne 1.10.2021</h1>
            <h2>Program pro Vás aktuálně připravujeme. Zkuste to později.</h2>
            <!--<ul>
                <li>18:00 - Sraz u chalupy</li>
                <li>19:00 - Obřad</li>
                <li>20:00 - Večeře</li>
                <li>20:30 - Tanec novomanželů</li>
                <li>20:40 - Záhájení tanečního večera v doprovodu Petra Jiráska a Spotify</li>
            </ul>-->
        </div>
        <div class="popwindows" id="program2">
            <div class="crosswrapper"><span class="cross" id="crossprogram1">&#x2718</span></div>
            <h1>Program dne 2.10.2021</h1>
            <h2>Program pro Vás aktuálně připravujeme. Zkuste to později.</h2>
            <!--<ul>
                <li>18:00 - Sraz u chalupy</li>
                <li>19:00 - Obřad</li>
                <li>20:00 - Večeře</li>
                <li>20:30 - Tanec novomanželů</li>
                <li>20:40 - Záhájení tanečního večera v doprovodu Petra Jiráska a Spotify</li>
            </ul>-->
        </div>
        <div class="popwindows" id="menu">
            <div class="crosswrapper"><span class="cross" id="crossprogram1">&#x2718</span></div>
            <h1>Co si dáte dobrého?</h1>
            <h2>Krátce po svatebním obřadu nás čeká večeře, kterou pro nás připraví kluci z Lučního penzionu.
                </br>Můžete si vybrat ze tří lahůdek.
            </h2>
            <h2>Dejte nám, prosím, vědět, na co máte chuť :-) Tím zároveň potvrdíte i svou účast.</h2>
            <div class="foodpic">
                <div class="jidlo">
                    <h2>Skvělá žebra na pivu s chlebem nebo bramborovou kaší</h2>
                    <img src="img/chleba.jpg" alt="">
                </div>
                <div class="jidlo">
                    <h2>Úžasné šafránové rizoto s panenkou <br>
                        (možné i ve vegetariánské verzi)</h2>
                    <img src="img/chleba.jpg" alt="">
                </div>
                <div class="jidlo">
                    <h2>Dokonalý králík s šípkovou omáčkou a špekovým knedlíkem</h2>
                    <img src="img/chleba.jpg" alt="">
                </div>
            </div>
            <?php
                        if($_GET['success'] == 1){
                            echo "<script>
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Děkuji za Váš feedback! Určitě mi pomůže!',
                                showConfirmButton: false,
                                timer: 2000
                                })
                             </script>";
                        };
                        if($_GET['success'] == -1){
                            echo "<script>
                                    Swal.fire({
                                    position: 'center',
                                    icon: 'error',
                                    title: 'Vaše zpráva nám nedorazila, nejspíš něco chybí, zkuste to prosím ještě jednou.',
                                    showConfirmButton: false,
                                    timer: 4000
                                })
                             </script>";
                        };
                    ?>
            <form action="menumailer.php" method="post" class="menuform">
                <div class="formwrapper">
                    <h1>Dám si</h1>
                    <p><input type="text" name="food" placeholder="Žebra, Rizoto, Králíka" class="airbnbformrow">
                    </p>
                    <p><input type="text" name="name" placeholder="Jméno" class="airbnbformrow"></p>
                    <p><input type="submit" value="Odeslat" class="airbnbformsubmit clickpop"></p>
                </div>
            </form>
        </div>
    </Article>
    <Article class="article">
        <div class="halfopacity">
            <h1>Kdo byste k nám hledal cestu, </br> tady je mapa</h1>
            <h2>Růžová chalupa u Šimánků, Úpická 24, Rtyně v Podkrkonoší, 542 33</h2>
            <iframe style="border:none" src="https://frame.mapy.cz/s/dasafekaho" width="700" height="466"
                frameborder="0" class="map"></iframe>
        </div>
    </Article>
    <Article class="article">
        <div class="halfopacity">
            <h1>Potřebujete zajistit ubytování?</h1>
            <p>
                Pokud byste potřebovali zajistit ubytování, je možné spát v chalupě. K dispozici je 20 lůžek.
                Samozřejmě
                bude zajištěný rozvoz ze svatby a dle individuální potřeby můžeme domluvit i svoz na svatbu. Na pozemku
                chalupy není možné stanovat ani přistavit
                karavan, s tím tedy, prosíme, počítejte. Každopádně, kdyžtak vás někam nacpeme &#128540 &#128516.
            </p>
            <button class="programbutton" id="airbnbbtn">Chci ubytovat</button>
        </div>
        <div class="popwindows" id="airbnb">
            <div class="crosswrapper">
                <span class="cross" id="crossprogram1">&#x2718</span>
            </div>
            <form action="ubytkomailer.php" method="post" class="airbnbform">
                <!--  mailer.php - vložit do action, až půjde na server-->
                <div class="formwrapper">
                    <h1>Registrace pro zařízení ubytování</h1>
                    <p><input type="text" name="name" placeholder="Jméno" class="airbnbformrow"></p>
                    <p><input type="email" name="email" placeholder="Email" class="airbnbformrow"></p>
                    <p><input type="text" name="number" placeholder="Kolik chcete lůžek?" class="airbnbformrow">
                    </p>
                    <p><textarea name="message" placeholder="Nějaká speciální přání?" cols="50" rows="10"
                            class="airbnbformarea"></textarea></p>
                    <p><input type="submit" value="Odeslat" class="airbnbformsubmit clickpop"></p>
                </div>
            </form>
        </div>
    </Article>
    <Article class="article">
        <div class="halfopacity">
            <h1>Naše přání a prosby</h1>
            <p>
                Moc si vážíme, že s námi chcete oslavit náš vstup do manželství. Nicméně, z organizačních důvodů a i
                pro
                náš klid máme pár přání a proseb na vás.
            </p>
            <ul class="seznam">
                <li>Nevozte s sebou své pejsky. Víme, že je máte rádi, ale, prosíme, nechte je doma a zařiďte jim
                    hlídání.
                <li>Ač to budou velmi aktuální témata, prosíme všechny, aby se snažili vyvarovat tématům jako je
                    politika a
                    koronavirus. Většinou jsme nabyli dojmu, že to kazí náladu všem okolo.</li>
                <li>Bílé šaty jsou výsadou nevěsty.</li>
                <li>Pokuste se na místo dopravit v minimálním počtu aut, bohužel, není kolem moc místa na parkování.
                    Pokud se s někým dohodnete, že dorazíte společně, ulehčí nám to parkovací situaci.</li>
            </ul>
        </div>
    </Article>
    <Article class="article">
        <div class="halfopacity">
            <h1>Chcete nám něco dát?</h1>
            <p>
                S darem pro nás si nedělejte starosti, tím darem bude již skutečnost, že dorazíte ❤ Pokud byste se přeci
                jen rozhodli nám něco dát,
                velmi by nás potěšil finanční příspěvek v libovolné výši, který bychom využili na náš sen - na cestování.
            </p>
        </div>
    </Article>
    <Footer>
        <div class="halfopacity">
            <h1>Takže začátkem října! Těšíme se!</h1>
        </div>
    </Footer>
</body>

</html>