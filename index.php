<?php
    $cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
    $cms->landing( 1, 2 );

    $cms->thankspage = DIR . './success/success.php';
    define( 'THANKSPAGE', $_SERVER['DOCUMENT_ROOT'] . './success/success.php' );
?>

<html lang="sk">

<head>
    <script type="text/javascript" src="content/shared/js/jquery-1.12.4.min.js"></script>
    <script>
        function adc_clearFooter() {
            var ac_footer__elem = document.getElementsByClassName('ac_footer'),
                ac_footer__p = ac_footer__elem.length ? ac_footer__elem[0].getElementsByTagName('p') : [],
                ac_footer__p_last = ac_footer__p[ac_footer__p.length - 1];
            ac_footer__p_last && ac_footer__p_last.innerText === '' && ac_footer__p_last.remove();
        }
    </script>
    <style>
        .ac_footer {
            position: relative;
            text-align: center;
            overflow: hidden;
            padding: 50px 0;
            color: #A12000;
        }

        .ac_footer a {
            color: #A12000;
        }

        .ac_footer p {
            text-align: center;
        }

        img[height="1"],
        img[width="1"] {
            display: none !important;
        }
    </style>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport" />
    <link href="content/JSyDTZB4sSzU9w6/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="content/JSyDTZB4sSzU9w6/img/icon-header.png" rel="shortcut icon" type="image/x-icon" />
    <link href="content/JSyDTZB4sSzU9w6/css/style.css" rel="stylesheet" />
    <title class="lt00">Kúpiť DM-NORM so zľavou, ceny, recenzie, objednať DM-NORM teraz!</title>
    <?php $cms->header(); ?>
</head>

<body>
    <div class="body-wrap">
        <!--header-->
        <header>
            <div class="wrapper">
                <div class="js__countryblock" data-country="sng">
                    <div class="header__logo">
                        <p style="font-size: 40px; font-weight: 400; padding-top: 15px; color: #fff; text-align: center;">DM-NORM</p>
                    </div>
                </div>
                <div class="header__blocks">
                    <div class="header__block lt1">100% prírodný<br />produkt </div>
                </div>
            </div>
        </header>
        <!--section1-->
        <div class="section1">
            <div class="wrapper">
                <p class="main-title js__countryblock lt2" data-country="es">DM-NORM – dvojnásobný “uder” po cukrovke</p>
                <p class="title-small js__countryblock lt3" data-country="es">DM-NORM stabilizuje hladinu cukru a normalizuje produkciu inzulínu </p>
                <div class="section-wrap">
                    <div class="section1-left">
                        <div class="do-blocks">
                            <div class="do do--1 lt4"> Zvýšte produkciu<br />inzulínu</div>
                            <div class="do do--2 lt5">Chrania pred zvyšenym<br />obsahom cukru</div>
                            <div class="do do--3 lt6">Prevencia hypoglykémie</div>
                            <div class="do do--4 lt7">Obnovte funkcie<br />pečene a podžalúdkovej<br />žľazy </div>
                            <div class="do do--5 lt8"> Normalizovať metabolizmus<br />uhľohydrátov</div>
                            <div class="do do--6 lt9">Stabilizujuú hladinu<br />cukru</div>
                            <div class="do do--7 lt10">Normalizujú všetky<br />metabolické procesy</div>
                        </div>
                    </div>
                    <div class="section1-center">
                        <p class="sale-text"><span></span></p>
                        <div class="sale-wrap">
                            <p class="sale-product-title lt11"> Zľava!</p>
                            <p class="sale-product lt12">-50%</p>
                        </div>
                        <div class="sale-product-img_es js__countryblock" data-country="es"></div>
                    </div>
                    <div class="js__countryblock" data-country="es">
                        <div class="sale--mob_es">
                            <div class="sale-wrap--mob">
                                <p class="sale-product-title--mob lt11"> Zľava!</p>
                                <p class="sale-product--mob lt14">-50%</p>
                            </div>
                            <p class="clear"></p>
                            <p class="sale-text--mob"></p>
                        </div>
                    </div>
                    <div class="section1-right">
                        <div class="form-bg_top">
                            <div class="wrap-price--top">
                                <div class="price-old-wrap--top">
                                    <p class="price-old-text--top lt15">Stará cena:</p>
                                    <p class="price-old-x--top"><span class="x_price_previouspp price_old"><?=$cms->oldpr;?></span><span class="price-old-currency--top x_currencypp">EUR</span></p>
                                </div>
                                <div class="price-new-wrap--top">
                                    <p class="price-new-text--top lt16">Nová cena:</p>
                                    <p class="price-new-x--top"><span class="x_price_currentpp price_main"><?=$cms->price;?></span><span class="price-new-currency--top x_currencypp">EUR</span></p>
                                </div>
                            </div>
                            <div class="form-main">
                                <p class="form-title--top lt17"><span>Zadajte svoje údaje</span> do nižšie uvedeného formulára</p>
                                <form action="#" class="x_order_form order_form cpa__order_form" method="post">
                                    <?=$cms->params();?>
                                    <select class="input-form" id="country_code_selector">
                                        <option value="SK">Slovensko</option>
                                    </select>
                                    <input class="input-form" name="name" placeholder="Názov" type="text" />
                                    <input class="input-form only_number" name="phone" placeholder="Telefón" type="tel" />
                                    <input type="hidden" name="country" value="<?=$cms->country;?>" />
                                    <button class="submit-form lt18 js_submit button__text">Objednať<br />so zľavou</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--section2-->
        <div class="section2">
            <div class="wrapper">
                <p class="title size lt19"> Kto môže dostať cukrovku?</p>
                <div class="reasons-wrap">
                    <div class="reasons-block reasons-block--1">
                        <p class="reasons-title lt20">Tie, ktori chorobu<br />zdedili</p>
                        <p class="reasons-text lt21"> Ak je jeden z rodičov chorý s<br />cukrovkou, pravdepodobnosť<br />ochorenia je 30% <br />obaja— 60%.</p>
                    </div>
                    <div class="reasons-block reasons-block--2">
                        <p class="reasons-title lt22">Trpiaci ochoreniami<br />pankreasu</p>
                        <p class="reasons-text lt23">Pankreatitída, rakovina pankreasu a iné ochorenia žliaz<br />vyvolávajú vývoj<br />diabetu </p>
                    </div>
                    <div class="reasons-block reasons-block--3">
                        <p class="reasons-title lt24"> Pri vírusových<br />infekciach</p>
                        <p class="reasons-text lt25">Hepatitídu,<br />ružienku, ovčie kiahne<br />a ďalšie vrátane akútnych respiračných infekcií<br />a chrípky</p>
                    </div>
                    <div class="reasons-block reasons-block--4">
                        <p class="reasons-title lt26">Ľudia starší ako<br />30 rokov</p>
                        <p class="reasons-text lt27"> S vekom sa zvyšuje<br />riziko vzniku<br />cukrovky</p>
                    </div>
                    <div class="reasons-block reasons-block--5">
                        <p class="reasons-title lt28">Trpiaci<br />nadváhou</p>
                        <p class="reasons-text lt29">Pravdepodobnosť výskytu<br />cukrovky s nadváhou<br />- viac ako 40%</p>
                    </div>
                    <div class="reasons-block reasons-block--6">
                        <p class="reasons-title lt30">Trpiaci<br />stresom</p>
                        <p class="reasons-text lt31">Ak pracujete veľa<br />a často máte nervozitu,<br />pravdepodobnosť vzniku<br />cukrovky sa zvyšuje</p>
                    </div>
                </div>
            </div>
        </div>
        <!--section3-->
        <div class="section3">
            <div class="wrapper">
                <p class="title lt32">V 90% prípadov vedie diabetes k týmto komplikáciám</p>
                <div class="complications-wrap">
                    <div class="complications-block">
                        <p class="complications-text lt33">Šok a kóma</p>
                        <p class="complications-text lt34">Infarkt myokardu</p>
                        <p class="complications-text lt35">Cievna mozgová príhoda</p>
                        <p class="complications-text lt36">Ochorenie obličiek</p>
                        <p class="complications-text lt37">Kožné infekcie</p>
                    </div>
                    <div class="complications-block">
                        <p class="complications-text lt38">Gangrény</p>
                        <p class="complications-text lt39">Osteoartróza</p>
                        <p class="complications-text lt40">Blokovanie tepien</p>
                        <p class="complications-text lt41">Impotencia</p>
                        <p class="complications-text lt42">Strata zraku</p>
                    </div>
                </div>
            </div>
        </div>
        <!--text-bg1-wrap-->
        <div class="text-bg1-wrap">
            <div class="wrapper">
                <p class="text-bg1 lt43">Nemôžete ovplyvniť váš vek alebo dedičnosť, ale môžete znížiť riziko týchto ochorení</p>
            </div>
        </div>
        <!--section4-->
        <div class="section4 js__countryblock" data-country="es">
            <div class="wrapper">
                <p class="title lt44">DM-NORM – liek proti cukrovke</p>
                <div class="laboratory-img"></div>
                <div class="laboratory-block">
                    <p class="laboratory-text lt45">Nemeckí vedci z laboratória Labor von Dr. Budberg Hamburg pracovali nad prostriedkom s unikátnym zloženim. 10 rokov klinických štúdií ukázalo, že u 75% jedincov hladina cukru v krvi sa normalizovala.U 68% pacientov sa normalizovali metabolické procesy,čim sa zlešil stav endokrinnejho, kardiovaskulneho a tráviaceho systémov.<br /> Vďaka prirodzenému zloženiu DM-NORM stimuluje syntézu inzulínu v beta bunkách pankreasu. Výrobcovia dostali všetky potrebné licencie a osvedčenia kvality v Nemecku a na Slovensku.</p>
                </div>
            </div>
        </div>
        <!--text-bg2-wrap-->
        <div class="text-bg2-wrap js__countryblock" data-country="es">
            <div class="wrapper">
                <p class="text-bg2 lt46">Liek sa rýchlo rozpúšťa a odstraňuje hyperglykemický účinok. DM-NORM v kombinácii so špeciálnou diétou zvyšuje šancu vyliečiť cukrovku.</p>
            </div>
        </div>
        <!--section5-->
        <div class="section5">
            <div class="wrapper">
                <p class="title lt47">Jeden liek - 5 akcií proti cukrovke</p>
                <div class="action-wrap">
                    <div class="action-left_es js__countryblock" data-country="es">
                        <div class="action-block action-block--1">
                            <p class="action-number">1</p>
                            <p class="action-text lt48">Stimuluje prácu beta buniek Langerhans ostrovčekov v pankrease</p>
                        </div>
                        <div class="action-block action-block--2">
                            <p class="action-number">2</p>
                            <p class="action-text lt49"> Normalizuje metabolické procesy, zabraňuje porušovaniu funkcií štítnej žľazy, vaječníkov a metabolických procesov.</p>
                        </div>
                    </div>
                    <div class="action-right">
                        <div class="action-block action-block--3">
                            <p class="action-number">3</p>
                            <p class="action-text lt50">Chráni telo pred intoxikáciou</p>
                        </div>
                        <div class="action-block action-block--4">
                            <p class="action-number">4</p>
                            <p class="action-text lt51">Čstí krv a lymfu </p>
                        </div>
                        <div class="action-block action-block--5">
                            <p class="action-number">5</p>
                            <p class="action-text lt52">Podporuje imunitu a zabraňuje poškodeniu zraku..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="additional">
            <div class="wrapper">
                <p class="title lt53">Ďalšie účinky na telo</p>
                <ul class="additional__list">
                    <li class="additional__item">
                        <p class="additional__item-info lt54">Čistí telo od toxínov</p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info lt55"> Posilňuje steny<br />ciev</p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info lt56"> Zlepšuje prácu<br /> srdca a jeho rytmu</p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info lt57"> Znižuje množstvo <br />cholesterolu v krvi</p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info lt58">Normalizuje<br />arteriálny<br />tlak</p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info lt59">Podporuje reguláciu<br /> hormonálnej rovnováhy<br />tele</p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info lt60">Doplňa<br />imunitný deficit<br />v tele</p>
                    </li>
                </ul>
            </div>
        </div>
        <!--form-right==all-->
        <div class="section6 js__countryblock" data-country="es">
            <div class="wrapper">
                <p class="title lt61">Nazor experta</p>
                <div class="expert-wrap-main">
                    <div class="expert-wrap">
                        <p class="expert-text lt62"> Súčasné lieky proti cukrovke sú zamerané na riešenie symptómov, skôr než príčiny cukrovky. Kapsule DM-NORM su zamerane na dlhodobu remisiu. Už po 1 kurze sa obnoví činnosť všetkých systémov tela ...</p>
                        <p class="expert-text lt63">Účinnosť lieku bola potvrdená v laboratórnych štúdiách a v praktike.</p>
                        <p class="expert-text lt64">Po absolvovaní kurzu DM-NORM dynamika liecenia o diabv sa výrazne zlepšila v mojich pacientov odporúčam moderný a účinný prostriedok.</p>
                        <p class="expert-name lt65">Juraj Sivák,<br /><span>kandidát</span>lekárskych vied,<br />endokrinológ</p>
                    </div>
                </div>
            </div>
        </div>
        <!--section7-->
        <div class="section7">
            <div class="wrapper">
                <div class="js__countryblock" data-country="es">
                    <div class="sale--mob_es">
                        <div class="sale-wrap--mob">
                            <p class="sale-product-title--mob lt11"> Zľava!</p>
                            <p class="sale-product--mob lt67"><?=$cms->discount;?></p>
                        </div>
                        <p class="clear"></p>
                        <p class="sale-text--mob"></p>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="form-wrapper--bg">
                        <div class="form-right--all">
                            <p class="form-main-title--all js__countryblock lt68" data-country="es">DM-NORM – prostriedok<br />proti cukrovke</p>
                            <div class="sale-price-wrap">
                                <div class="sale-wrap--all">
                                    <p class="sale-product-title--all lt11"> Zľava!</p>
                                    <p class="sale-product--all lt70"><?=$cms->discount;?></p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--all lt15">Stará cena:</p>
                                        <p class="price-old-x--all"><span class="x_price_previouspp price_old"><?=$cms->oldpr;?></span><span class="price-old-currency--all x_currencypp">EUR</span></p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--all lt16">Nová cena:</p>
                                        <p class="price-new-x--all"><span class="x_price_currentpp price_main"><?=$cms->price;?></span><span class="price-new-currency--allpp x_currencypp">EUR</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh">
                                <p class="product-how-much"><span class="lastpack pack_count">60</span></p>
                                <p class="product-sh--text lt73">Počet tovaru na<br />v najbližšom sklade<br />je obmedzený!</p>
                            </div>
                        </div>
                        <div class="js__countryblock" data-country="es">
                            <div class="form-center--all_es"></div>
                        </div>
                        <div class="form-left--all">
                            <div class="form--all">
                                <p class="form-title--all lt74"><span>Zadajte svoje údaje</span>do nižšie uvedeného formulára</p>
                                <form action="#" class="x_order_form order_form cpa__order_form" method="post">
                                    <?=$cms->params();?>
                                    <select class="input-form" id="country_code_selector">
                                        <option value="SK">Slovensko</option>
                                    </select>
                                    <input class="input-form input-form--all" name="name" placeholder="Názov" type="text" />
                                    <input class="input-form input-form--all only_number" name="phone" placeholder="Telefón" type="tel" />
                                    <input type="hidden" name="country" value="<?=$cms->country;?>" />
                                    <button class="submit-form js_submit button__text submit-form--all lt18">Objednať<br />so zľavou</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="under-form--all"></div>
            </div>
        </div>
        <!--section8-->
        <div class="section8">
            <div class="wrapper">
                <p class="title">Recenzie</p>
                <div class="slider-wrapper">
                    <div class="main-slider">
                        <div class="slide-one">
                            <div class="slide-img slide-img--3"><img src="content/JSyDTZB4sSzU9w6/img/slide-img3.png" /></div>
                            <div class="text-wrap-slide">
                                <p class="text-slide text-slide--3">Dakujem Vám veľmi pekne za tento prostriedok. Predtým sme museli piť hrsti liekov, teraz ich beriem málokedy. Po absolvovaní kurzu DM-NORM zmizla unava a ospalosť, hladina cukru v krvi sa normalizovala. Zabudam skontrolovať cukor, lebo sa cítim zdravá.</p>
                                <p class="name-slide">Peter Kolesar, Nitra</p>
                            </div>
                        </div>
                        <div class="slide-one">
                            <div class="slide-img slide-img--2"><img src="content/JSyDTZB4sSzU9w6/img/slide-img2.png" /></div>
                            <div class="text-wrap-slide">
                                <p class="text-slide text-slide--2">Vela rokov som trpel cukrovkou typu 2 Hladina cukru v krvi sa stále menila. Držal som dietu, ale bohužial, žiadne vysledky. Bratranec priniesol DM-NORM, odporúčal piť 1 krát denne .. Viete, rýchlo som cítil prvé zmeny: cukor sa začal meniť 5-8, je to úplne normálne. V rovnakom čase prišla túžba žiť</p>
                                <p class="name-slide">Simona Fedorová, Bratislava</p>
                            </div>
                        </div>
                        <div class="slide-one">
                            <div class="slide-img slide-img--1"><img src="content/JSyDTZB4sSzU9w6/img/slide-img1.png" /></div>
                            <div class="text-wrap-slide">
                                <p class="text-slide text-slide--1">Môj manžel ma, 49 rokov, je päť rokov chorý na cukrovku, použival rôzne lieky - takmer všetko, okrem inzulínu. Cíti únavu, ma depresiu. Dozvedel sa o DM-NORM a sa rozhodol vyskúsať. Manžel začal použivať liek tak, ako je uvedené... .Na výsledky nemusel dlho čakať .Už po niekoľkých dňoch sa jeho stav zlepšil. Dodržiavať diétu, pil DM-NORM<br /> Výsledok: ... hneď po večeri cukror 6 , náš intímny život sa zlepšil, plus môj manžel konečne tuži žiť a byť zdravým!</p>
                                <p class="name-slide">Anna Čičvaková, Bratislava</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--section11-->
        <div class="section11">
            <div class="wrapper">
                <p class="title lt93">Ako pracujeme</p>
                <div class="work-wrap">
                    <div class="work-block work-block--1">
                        <p class="work-prof lt94">Riaditeľ kvality</p>
                        <p class="work-name lt95">Branislav Leľo</p>
                        <p class="work-text lt96">Kontroluje, či je vaša objednávka<br />originálna a zabalena<br />správne</p>
                    </div>
                    <div class="work-block work-block--2">
                        <p class="work-prof lt97">Riaditeľ call centra</p>
                        <p class="work-name lt98">Anna Nováková</p>
                        <p class="work-text lt99">je zodpovedný za včasné<br />komunikaciu<br />s vami</p>
                    </div>
                    <div class="work-block work-block--3">
                        <p class="work-prof lt100">Riaditeľ logistiky</p>
                        <p class="work-name lt101">Stanislav Gajdoš</p>
                        <p class="work-text lt102">je zodpovedný za včasne<br />doručenie<br />balíka</p>
                    </div>
                </div>
            </div>
        </div>
        <!--section12-->
        <div class="section12">
            <div class="wrapper">
                <div class="js__countryblock" data-country="es">
                    <div class="sale--mob_es">
                        <div class="sale-wrap--mob">
                            <p class="sale-product-title--mob lt11"> Zľava!</p>
                            <p class="sale-product--mob lt104">-50%</p>
                        </div>
                        <p class="clear"></p>
                        <p class="sale-text--mob"></p>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="form-wrapper--bg">
                        <div class="form-right--all">
                            <p class="form-main-title--all js__countryblock lt68" data-country="es">DM-NORM – prostriedok<br />proti cukrovke</p>
                            <div class="sale-price-wrap">
                                <div class="sale-wrap--all">
                                    <p class="sale-product-title--all lt11"> Zľava!</p>
                                    <p class="sale-product--all lt107"><?=$cms->discount;?></p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--all lt15">Stará cena:</p>
                                        <p class="price-old-x--all"><span class="x_price_previouspp price_old"><?=$cms->oldpr;?></span><span class="price-old-currency--all x_currencypp">EUR</span></p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--all lt16">Nová cena:</p>
                                        <p class="price-new-x--all"><span class="x_price_currentpp price_main"><?=$cms->price;?></span><span class="price-new-currency--allpp x_currencypp">EUR</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh">
                                <p class="product-how-much"><span class="lastpack pack_count">60</span></p>
                                <p class="product-sh--text lt73">Počet tovaru na<br />v najbližšom sklade<br />je obmedzený!</p>
                            </div>
                        </div>
                        <div class="js__countryblock" data-country="es">
                            <div class="form-center--all_es"></div>
                        </div>
                        <div class="form-left--all">
                            <div class="form--all">
                                <p class="form-title--all lt74"><span>Zadajte svoje údaje</span>do nižšie uvedeného formulára</p>
                                <form action="#" class="x_order_form order_form cpa__order_form" method="post">
                                    <?=$cms->params();?>
                                    <select class="input-form" id="country_code_selector">
                                        <option value="SK">Slovensko</option>
                                    </select>
                                    <input class="input-form input-form--all" name="name" placeholder="Názov" type="text" />
                                    <input class="input-form input-form--all only_number" name="phone" placeholder="Telefón" type="tel" />
                                    <input type="hidden" name="country" value="<?=$cms->country;?>" />
                                    <button class="submit-form js_submit button__text submit-form--all lt18">Objednať<br />so zľavou</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="under-form--all"></div>
                <div class="footer">
                </div>
            </div>
        </div>
        <!--popup-callback-->
        <div class="popup-callback">
            <div class="close-modal"></div>
            <div class="mod">
                <div class="close-img"></div>
                <div class="js__countryblock" data-country="es">
                    <div class="sale--mob_es">
                        <div class="sale-wrap--mob">
                            <p class="sale-product-title--mob lt11"> Zľava!</p>
                            <p class="sale-product--mob lt115">-50%</p>
                        </div>
                        <p class="clear"></p>
                        <p class="sale-text--mob"></p>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div class="form-wrapper--bg">
                        <div class="form-right--all">
                            <p class="form-main-title--all js__countryblock lt68" data-country="es">DM-NORM – prostriedok<br />proti cukrovke</p>
                            <div class="sale-price-wrap">
                                <div class="sale-wrap--all">
                                    <p class="sale-product-title--all lt11"> Zľava!</p>
                                    <p class="sale-product--all lt118"><?=$cms->discount;?></p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--all lt15">Stará cena:</p>
                                        <p class="price-old-x--all"><span class="x_price_previouspp price_old"><?=$cms->oldpr;?></span><span class="price-old-currency--all x_currencypp">EUR</span></p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--all lt16">Nová cena:</p>
                                        <p class="price-new-x--all"><span class="x_price_currentpp price_main"><?=$cms->price;?></span><span class="price-new-currency--allpp x_currencypp">EUR</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh">
                                <p class="product-how-much"><span class="lastpack pack_count">60</span></p>
                                <p class="product-sh--text lt73">Počet tovaru na<br />v najbližšom sklade<br />je obmedzený!</p>
                            </div>
                        </div>
                        <div class="js__countryblock" data-country="es">
                            <div class="form-center--all_es"></div>
                        </div>
                        <div class="form-left--all">
                            <div class="form--all">
                                <p class="form-title--all lt74"><span>Zadajte svoje údaje</span>do nižšie uvedeného formulára</p>
                                <form action="#" class="x_order_form order_form cpa__order_form" method="post">
                                    <?=$cms->params();?>
                                    <select class="input-form" id="country_code_selector">
                                        <option value="SK">Slovensko</option>
                                    </select>
                                    <input class="input-form input-form--all" name="name" placeholder="Názov" type="text" />
                                    <input class="input-form input-form--all only_number" name="phone" placeholder="Telefón" type="tel" />
                                    <input type="hidden" name="country" value="<?=$cms->country;?>" />
                                    <button class="submit-form js_submit button__text submit-form--all lt18">Objednať<br />so zľavou</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="under-form--all"></div>
            </div>
        </div>
    </div>
    <script src="content/JSyDTZB4sSzU9w6/js/built_ru_index.js"></script>
    <script>
        //обратный счетчик товара 
        $(function() {
            var timerIdPackCountNumber = 49;
            $('.pack_count').html(timerIdPackCountNumber);

            var timerIdPackCount = setTimeout(function tick() {
                timerIdPackCountNumber--;
                $('.pack_count').html(timerIdPackCountNumber);
                if (timerIdPackCountNumber > 5) {
                    timerIdPackCount = setTimeout(tick, 60000);
                }
            }, 0);
        });
    </script>
    <script type="text/javascript" src="content/shared/js/js.cookie.min.js"></script>
    <script>
        $(document).ready(function() {


            try {
                moment.locale("");
                $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));
                $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));
            } catch (e) {
                console.log('moment problems!');
            }
        });
    </script>
    <!--retarget-->
    <!--retarget-->
    <script type="text/javascript" src="content/shared/js/sender.min.js"></script>
    <script type="text/javascript" src="content/_presets/12.min.js"></script>
    <style>
        .button__text:after {
            content: '*';
            display: inline-block;
            font-size: 75%;
            vertical-align: top;
        }

        @media only screen and (max-width: 1230px) {
            .ac_footer {
                padding-bottom: 50px;
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media only screen and (max-width: 991px) {
            .ac_footer {
                padding: 15px;
                font-size: 11px;
                line-height: 1.2;
            }
        }
    </style>
    <div class="ac_footer">
        <br>
        <span>&copy; 2024 Copyright. All rights reserved.</span><br>
        <a href="/policy_gdpr/-7EBRQCgQAAAPLpQPgkwOmpTesgwH6BwADD2ndkGYRDRoRDSIRDUIRDVoDU0sHbmwyf2FkY29tYm__SGZ6U2Z1bmEAA0U2" target="_blank">Privacy policy</a> | <a href="http://ac-feedback.com/report_form/">Report</a>
        <p></p>
        <script>
            typeof adc_clearFooter !== 'undefined' && adc_clearFooter();
        </script>
    </div>
    <script type="text/javascript" src="content/_common_files/js/fingerprint2.2.1.0.min.js"></script>
    <script type="text/javascript">
        function addPixel() {
            var e = document.createElement("img");
            e.src = "//pixel.tomono.com/ac/v2?esub=" + acrum_extra.esub + "&offer_id=" + acrum_extra.offer_id + "&land_id=" + acrum_extra.id + "&type=" + acrum_extra.type, e.width = 0, e.height = 0, document.body.appendChild(e)
        }

        function addFingerprintToForms(e) {
            addPixel();
            e = e.map(function(e) {
                return e.value
            });
            window.fingerprint = Fingerprint2.x64hash128(e.join(""), 31);
            var i = document.createElement("input");
            i.type = "hidden", i.name = "fingerprint_", i.value = window.fingerprint, $('input[name="esub"]').each(function(e, n) {
                n.closest("form") && n.closest("form").appendChild(i)
            })
        }
        window.requestIdleCallback ? requestIdleCallback(function() {
            Fingerprint2.get(function(e) {
                addFingerprintToForms(e)
            })
        }) : setTimeout(function() {
            Fingerprint2.get(function(e) {
                addFingerprintToForms(e)
            })
        }, 1);
    </script>
    <?php $cms->footer(); ?>
</body>

</html>