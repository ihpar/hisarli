<?php
session_start();

$is_secure = true;

$page_name = "kgsd";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_kgsd.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
  <style type="text/css">
      .pad-10-per {
          padding: 0 10%;
          text-align: justify;
          margin-left: auto;
          margin-right: auto;
          max-width: 3000px;
      }

      .cerceve {
          border-style: solid;
          border-width: 16px;
          border-color: #bbb;
          padding: 16px;
      }

      h3.sec-h3 {
          margin-bottom: 18px;
      }

      h4.sec-h4 {
          font-size: 24px;
          margin: 16px auto;
      }

      @media (max-width: 839px) {
          .pad-10-per {
              padding: 0 24px;
          }
      }

      .mdl-list__item .mdl-list__item-primary-content {
          line-height: normal;
      }

      .centered-content {
          text-align: center;
      }

      .centered-content span.mdl-list__item-primary-content {
          display: inline-block;
      }

  </style>
</head>

<body>
<div class="mdl-layout">
  <!-- Navigation -->
    <?php require_once("modules/navigation.php"); ?>
  <!--Eof Navigation -->

  <div class="mdl-layout__content" style="display: flex; flex-direction: column">
    <div style="flex-grow: 1">
      <!-- Banner -->
        <?php require_once("modules/banner.php"); ?>

      <!-- Icerik -->
      <section class="pad-tb-24">
        <div class="pad-10-per">
          <div class="cerceve">
            <h3 class="center-text sec-h3"><?php echo($lang_kgsd["kgsd"][$pref_lang]); ?></h3>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["yonetim_kurulu_uyeleri"][$pref_lang]); ?></h4>
            <ul class="mdl-list centered-content">
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>MUSTAFA KEMAL ALTINSOY (Ba??kan)</span>
                  <span class="mdl-list__item-sub-title">Sanat????</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>N??HAT DELEN</span>
                  <span class="mdl-list__item-sub-title">???? adam??</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>U??UR T??RKMEN</span>
                  <span class="mdl-list__item-sub-title">Akademisyen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>AL?? SARIKOYUNCU</span>
                  <span class="mdl-list__item-sub-title">Akademisyen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>AD??L ??ZKAN</span>
                  <span class="mdl-list__item-sub-title">Sanat????</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>HAL??M T??RKMEN</span>
                  <span class="mdl-list__item-sub-title">????retmen</span>
                </span>
              </li>
              <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                  <span>OSMAN ??ZDEM??R</span>
                  <span class="mdl-list__item-sub-title">????retmen</span>
                </span>
              </li>
            </ul>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_uyeleri"][$pref_lang]); ?></h4>
            <ul class="mdl-list centered-content">

              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AHMET SA??LAM
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              DO??AN ??APCI
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              H??SEY??N EFE
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ERHAN AKALIN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              CELAL KARABAY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AHMET ??ZKAYA
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AHMET UMU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              M.AL?? G??KER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ??SMA??L Y??????T
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              N??HAT DELEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MEHMET G??RSOY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              OSMAN ZEK?? CO??KUN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              A.AL?? KADIO??LU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              HASAN H.??ZMUTAF
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              L??TF?? G??RPINAR
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              B??RSEN G??ZEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AY??E ECE DELEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              SEMA G??RAL
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              CEYDA ??ET??N
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ??SMET BA??RIYANIK
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              U??UR T??RKMEN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              G??LER YILMAZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              H.??BRAH??M T??RKO??LU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MEHMET KO??ER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MURAT SARIYILDIZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              NURSEL SARIYILDIZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ??BRAH??M ERDEYER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              RECEP ZENG??N
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              ERC??YES AK??AY
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AL?? RIZA MUSLU
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MEHMET YILDIRIM
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AL?? SOYCAN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              SERDAR S??L??K??
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              YILMAZ DURMAZ
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              FAHR?? ??ET??NKAYA
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              HASAN DURGUN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              M??KERREM SEL??UKER
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AHMET ??AKMAK
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              H??RDO??AN ??EL??K
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              AY??E KA??AN
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
              MUSTAFA KEMAL ALTINSOY          </span>
              </li>
            </ul>

            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_etkinlikleri"][$pref_lang]); ?></h4>
            <ul class="mdl-list">
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            27-28-29 A??ustos 1997 --> ??avdarhisar K??lt??r ve Turizm Festivali kapsam??nda K??tahya K??lt??r Saray??'nda ??ini, resim, elmas, tak?? vs. sergisi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            6 Eyl??l 1997 --> K??tahya K??lt??r Saray'??nda T??rk Sanat M??zi??i konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            24-29 Kas??m 1997 --> Ankara T??rk-Amerikan Derne??i'nde K??tahya haftas?? etkinli??i. Konser, sergiler ve gala gecesinde yemek, m??zik ve tarihi kad??n k??yafetleri defilesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Mart 1998 --> K??tahya K??lt??r Saray??'nda tiyatro kolumuzca Refik Erduran?????n ???Bir Ay?? Masal????? oyununun sahnelenmesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            8-13 Haziran 1998 --> Eski??ehir???de K??tahya tan??t??m haftas?? etkinliklerinde sergiler. 10.06.1998 tarihinde b??y??k bir gala gecesi. M??zik ve yemek e??li??inde tarihi kad??n giysileri defilesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            25 Kas??m - 1 Aral??k 1998 --> Bursa???da K??tahya tan??t??m haftas??. Sergiler ve gala gecesi. Yemek e??li??inde K??tahya Halk Oyunlar??. Konser ve tarihi kad??n k??yafetleri defilesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Haziran 1999 --> Tuncay C??ceno??lu'nun ???Dosya??? isimli tiyatro eserinin sahnelenmesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            26 Haziran 1999 --> K??tahya K??lt??r Saray??'nda T??rk M??zi??i konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            26 Haziran 1999 --> K??tahya K??lt??r Saray??'nda Osmanl?? Devleti kurulu??unun 700. y??l??n??n kutlamalar??. Osmanl?? padi??ahlar??n??n kendi bestelerinden derlenen T??rk M??zi??i konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            7-16 Nisan 2000 --> ??stanbul Harbiye Askeri M??zede ?????l ??l T??rkiye K??tahya Haftas?????. Resim, ??ini, tarihi bayan giysisi, elde yap??lan ??rt??ler, alt??n ve g??m???? eerler sergisi.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            10 Ekim 2000 --> ???The President??? otelde T??rk bas??n??n??n i??tiraki ile tarihi kad??n giysileri defilesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            06 May??s 2000 --> T??rk M??zi??i toplulu??umuzca K??tahya K??lt??r Saray??'nda konser.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            8-14 Kas??m 2000 --> ??zmir Atat??rk K??lt??r Merkezi'nde bas??n i??tiraki ile resim, ??ini, kuyumculuk sanat?? eserleri ve tarihi kad??n el i??lemeleri sergileri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            13 Kas??m 2001 --> Gala gecesi: ??zmir-Bal??ova Prenses Otel'de K??tahya T??rk??leri ve T??rk M??zi??i e??li??inde yemekli K??tahya tan??t??m gecesi. Tarihi kad??n giysileri defilesi.  (Gala gecelerinde yap??lan b??t??n defilelerde K??tahyal?? k??zlar??m??z mankenlik yapm????lard??r. Defileler ???? etapl?? olup birinci etapta 20.yy'da elle dokunmu?? modern gece k??yafetlerinin eski T??rk motifleri ile yap??lm???? olmas?? orijinaldir. 2.etapta K??tahya k??na gecelerinde kad??nlarca giyilen b??t??n K??tahya k??yafetlerinin elle, kasnakta ve gergefte i??lenmi?? olmas?? ayr??cal?????? vard??r. Yakla????k 100-150-200-250-300 senelik tarihi sand??klarda saklanan antika k??yafetlerin sadece derne??imizce defilede kullan??lmas?? ??ok b??y??k bir ayr??cal??kt??r)
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            2001 --> 1951'de y??r??rl????e giren 5846 say??l?? kanununa g??re gelir vergisinden muaf olan K??tahya???da ??ini sanat????lar??n??n ???stopaj???la belge d??zenlenmesine y??nelik bir kurul kurulmu?? olup sanat????lar "??ini Sanat????s?? Eser Belgesi" almaya hak kazanm????t??r. Bu durum, derne??imizin ciddi takibi neticesinde sonu??land??r??lm????t??r
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            24 May??s 2002 --> K??tahya K??lt??r Saray??'nda Klasik T??rk M??zi??i Konseri.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            23 Haziran 2002 --> Derne??imiz T??rk M??zi??i toplulu??u taraf??ndan K??tahya K??lt??r Saray??'nda klasik T??rk M??zi??i konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            30 Eyl??l-09 Kas??m 2002 --> Ankara Zafer ??ar????s??'nda K??tahya tan??t??m haftas?? etkinli??i. Resim, ??ini, kad??n tarihi el i??lemeleri ve giysileri sergisi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            31 May??s-21 Haziran 2003 --> K??tahya K??lt??r Saray??'nda T??rk M??zi??i konseri.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            ??ubat 2004 --> Dumlup??nar ??niversitesi???nde T??rk M??zi??i konseri
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            09 Aral??k 2004 --> Avrasya ??zmir Fuar??'na derne??imizce el sanatlar??m??zla kat??l??m
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            11-21 Kas??m 2005 --> Beylerbeyi Saray?? Bah??esi'ndeki II.Mahmut???dan kalma 130m boy ve 5m geni??li??indeki 650m?????lik T??nel Sergi Saray??, Milli Saraylar Daire Ba??kanl?????? taraf??ndan TBMM onay??yla derne??imize tahsis edilmi?? olup ??ini, resim, kad??n tak??lar??, alt??n ve elmas m??cevherlerle tarihi kad??n giysilerinin elde kasnak ve gergefle i??lenmi?? eserleri sergilenmi??tir. Tarihi k??yafetlerin 20.yy.'da yap??lm???? gece k??yafetlerine i??lenmi?? olup motifleri K??tahya k??na gecelerinde gergef ve kasnakta yap??lm???? kad??n k??yafetleriyle 150-200-250-300 y??ll??k alt??n ve g??m???? simle i??lenmi?? tarihi k??yafetler defilesi K??tahyal?? manken k??zlar??m??z taraf??ndan ger??ekle??tirilmi??tir.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            16 Haziran 2006 --> K??tahya Azot Sitesi salonunda T??rk M??zi??i konseri.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            20 Ekim 2007 --> K??tahya K??lt??r Saray??'nda T??rk M??zi??i konseri.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            26 Nisan 2008 --> Polis Evi Salonu'nda derne??imizin kurulu??unun 10.y??l??n??n yemekli ve m??zikli kutlamas??
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            10 Ekim 2008 --> Dumlup??nar ??niversitesi Merkez Kamp??s Konser Salonu'nda Atat??rk?????m??z??n sevdi??i aryalar, T??rk Sanat M??zi??i eserleri ve t??rk??leriyle, K??tahya t??rk??leri konseri. Piyanist, tenor ve soprano sanat????lar??n??n kat??l??m??yla  ve K??tahya G??zel Sanatlar Lisesi Korosu deste??iyle Atat??rk?????m??z?? anma gecesi
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            27 Aral??k 2008 --> K??tahya K??lt??r Saray??'nda operet ve m??zikaller sunumu
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            2009'dan bu yana her y??l --> ULUSLARARASI H??SARLI AHMET SEMPOZYUMU          </span>
              </li>
            </ul>

            <div style="display: none;">
              <p>27-28-29 A??ustos 1997 --> ??avdarhisar K??lt??r ve Turizm Festivali kapsam??nda K??tahya K??lt??r Saray??'nda
                ??ini, resim, elmas, tak?? vs. sergisi<br></p>

              <p>6 Eyl??l 1997 --> K??tahya K??lt??r Saray'??nda T??rk Sanat M??zi??i konseri</p>

              <p>24-29 Kas??m 1997 --> Ankara T??rk-Amerikan Derne??i'nde K??tahya haftas?? etkinli??i. Konser, sergiler ve
                gala gecesinde
                yemek, m??zik ve tarihi kad??n k??yafetleri defilesi</p>

              <p>Mart 1998 --> K??tahya K??lt??r Saray??'nda tiyatro kolumuzca Refik Erduran?????n ???Bir Ay?? Masal????? oyununun
                sahnelenmesi</p>

              <p>8-13 Haziran 1998 --> Eski??ehir???de K??tahya tan??t??m haftas?? etkinliklerinde sergiler. 10.06.1998
                tarihinde
                b??y??k bir gala gecesi. M??zik ve yemek e??li??inde tarihi kad??n giysileri defilesi</p>

              <p>25 Kas??m - 1 Aral??k 1998 --> Bursa???da K??tahya
                tan??t??m haftas??. Sergiler ve gala gecesi. Yemek e??li??inde K??tahya Halk Oyunlar??. Konser ve
                tarihi kad??n k??yafetleri defilesi</p>

              <p>Haziran 1999 --> Tuncay C??ceno??lu'nun ???Dosya??? isimli tiyatro eserinin sahnelenmesi</p>

              <p>26 Haziran 1999 --> K??tahya K??lt??r Saray??'nda T??rk M??zi??i konseri</p>

              <p>26 Haziran 1999 --> K??tahya K??lt??r Saray??'nda Osmanl?? Devleti kurulu??unun 700. y??l??n??n kutlamalar??.
                Osmanl??
                padi??ahlar??n??n kendi bestelerinden derlenen T??rk M??zi??i konseri</p>

              <p>7-16 Nisan 2000 --> ??stanbul Harbiye Askeri M??zede ?????l ??l T??rkiye K??tahya Haftas?????. Resim, ??ini, tarihi
                bayan
                giysisi, elde yap??lan ??rt??ler, alt??n ve g??m???? eerler sergisi.</p>

              <p>10 Ekim 2000 --> ???The President??? otelde T??rk bas??n??n??n i??tiraki ile tarihi kad??n giysileri defilesi</p>

              <p>06 May??s 2000 --> T??rk M??zi??i toplulu??umuzca K??tahya K??lt??r Saray??'nda konser.</p>

              <p>8-14 Kas??m 2000 --> ??zmir Atat??rk K??lt??r Merkezi'nde bas??n i??tiraki ile resim, ??ini, kuyumculuk sanat??
                eserleri ve tarihi
                kad??n el i??lemeleri sergileri</p>

              <p>13 Kas??m 2001 --> Gala gecesi: ??zmir-Bal??ova Prenses Otel'de K??tahya T??rk??leri ve T??rk M??zi??i e??li??inde
                yemekli K??tahya
                tan??t??m gecesi. Tarihi kad??n giysileri defilesi. &nbsp;(Gala gecelerinde yap??lan b??t??n
                defilelerde K??tahyal?? k??zlar??m??z mankenlik yapm????lard??r. Defileler ???? etapl?? olup birinci etapta
                20.yy'da elle dokunmu?? modern gece k??yafetlerinin eski T??rk motifleri ile yap??lm???? olmas??
                orijinaldir. 2.etapta K??tahya k??na gecelerinde kad??nlarca giyilen b??t??n K??tahya k??yafetlerinin elle,
                kasnakta ve gergefte i??lenmi?? olmas?? ayr??cal?????? vard??r. Yakla????k 100-150-200-250-300 senelik tarihi
                sand??klarda saklanan antika k??yafetlerin sadece derne??imizce defilede kullan??lmas?? ??ok b??y??k bir
                ayr??cal??kt??r)</p>

              <p>2001 --> 1951'de y??r??rl????e giren 5846 say??l?? kanununa g??re gelir vergisinden muaf olan K??tahya???da ??ini
                sanat????lar??n??n
                ???stopaj???la belge d??zenlenmesine y??nelik bir kurul kurulmu?? olup sanat????lar "??ini Sanat????s?? Eser Belgesi"
                almaya hak kazanm????t??r.
                Bu durum, derne??imizin ciddi takibi neticesinde sonu??land??r??lm????t??r</p>

              <p>24 May??s 2002 --> K??tahya K??lt??r Saray??'nda Klasik T??rk M??zi??i Konseri.</p>


              <p>23 Haziran 2002 --> Derne??imiz T??rk M??zi??i toplulu??u taraf??ndan K??tahya K??lt??r Saray??'nda klasik T??rk
                M??zi??i konseri</p>


              <p>30 Eyl??l-09 Kas??m 2002 --> Ankara Zafer ??ar????s??'nda K??tahya tan??t??m haftas?? etkinli??i. Resim, ??ini,
                kad??n tarihi el i??lemeleri
                ve giysileri sergisi</p>


              <p>31 May??s-21 Haziran 2003 --> K??tahya K??lt??r Saray??'nda T??rk M??zi??i konseri.</p>


              <p>??ubat 2004 --> Dumlup??nar ??niversitesi???nde T??rk M??zi??i konseri</p>


              <p>09 Aral??k 2004 --> Avrasya ??zmir Fuar??'na derne??imizce el sanatlar??m??zla kat??l??m</p>


              <p>11-21 Kas??m 2005 --> Beylerbeyi Saray?? Bah??esi'ndeki II.Mahmut???dan kalma 130m boy ve 5m geni??li??indeki
                650m?????lik T??nel Sergi Saray??, Milli Saraylar Daire Ba??kanl?????? taraf??ndan TBMM onay??yla
                derne??imize tahsis edilmi?? olup ??ini, resim, kad??n tak??lar??, alt??n ve elmas m??cevherlerle tarihi
                kad??n giysilerinin elde kasnak ve gergefle i??lenmi?? eserleri sergilenmi??tir. Tarihi k??yafetlerin
                20.yy.'da yap??lm???? gece k??yafetlerine i??lenmi?? olup motifleri K??tahya k??na gecelerinde gergef ve
                kasnakta
                yap??lm???? kad??n k??yafetleriyle 150-200-250-300 y??ll??k alt??n ve g??m???? simle
                i??lenmi?? tarihi k??yafetler defilesi K??tahyal?? manken k??zlar??m??z taraf??ndan ger??ekle??tirilmi??tir.</p>


              <p>16 Haziran 2006 --> K??tahya Azot Sitesi salonunda T??rk M??zi??i konseri.</p>


              <p>20 Ekim 2007 --> K??tahya K??lt??r Saray??'nda T??rk M??zi??i konseri.</p>


              <p>26 Nisan 2008 --> Polis Evi Salonu'nda derne??imizin kurulu??unun 10.y??l??n??n yemekli ve m??zikli
                kutlamas??</p>


              <p>10 Ekim 2008 --> Dumlup??nar ??niversitesi Merkez Kamp??s Konser Salonu'nda<br>Atat??rk?????m??z??n sevdi??i
                aryalar, T??rk
                Sanat M??zi??i eserleri ve t??rk??leriyle, K??tahya t??rk??leri konseri. Piyanist, tenor ve soprano
                sanat????lar??n??n kat??l??m??yla
                &nbsp;ve K??tahya G??zel Sanatlar Lisesi Korosu deste??iyle Atat??rk?????m??z?? anma gecesi</p>


              <p>27 Aral??k 2008 --> K??tahya K??lt??r Saray??'nda operet ve m??zikaller sunumu</p>

              <p>2009'dan bu yana her y??l --> ULUSLARARASI H??SARLI AHMET SEMPOZYUMU </p>

            </div>


            <h4 class="center-text sec-h4"><?php echo($lang_kgsd["dernek_tuzugu"][$pref_lang]); ?></h4>
            <ul class="mdl-list">
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde:1-Derne??in ad??: G??zel Sanatlar Derne??i???dir.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde:2-Derne??in Merkezi K??tahya???d??r.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde:3-Derne??in ikametg??h adresi: Belediye K??lt??r Saray?? kat:1 43100/K??tahya
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde:4-Derne??in amac??: Evrensel, y??resel, geleneksel pratik sanatlar ve g??zel sanatlar??n farkl?? dallar??nda u??ra??anlar?? bir araya getirmek, bu sanatlara meyilli ki??ileri, gen??leri te??vik etmek, g??zel sanatlar??n (Edebiyat, m??zik, tiyatro, sinema, TV, resim, mimari, heykel, foto??raf dallar??nda y??resel olarak a??a?? oymac??l??????, dokumac??l??k, ar??c??l??k, ??ini, folklor v.b) t??m dallarda yurt i??inde ve yurt d??????nda faaliyetler g??sterip sergiler a??mak kurulmu?? ve kurulacak olan K??lt??r Dernekleri federasyon ve konfederasyonlar??na kat??lmak. K??tahya il ve il??elerinde derne??in ??ubelerini a??mak.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            a)-D??n??yle bug??n??yle ??iniyi tan??t??p geli??tirerek gelece??e aktarmak, belgesellerle, bro????rlerle, konferanslarla, sergilerle evrenselle??tirmek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            b)-Antik, geleneksel, y??resel, alaturka, elmas ve g??m???? i??lemecili??ini geli??tirmek i??in okul ve kurslar a??arak bunlarla ilgili seminerler, belgeseller, sergiler d??zenlemek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            c)-Resmin b??t??n dallar??nda eser ??reten ressamlar?? bir araya getirmek, eserlerini sergilemek merakl??-yetenekli gen??leri te??vik edici kurslar d??zenlemek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            d)-K??tahya y??resinin ??z folklorunu ara??t??r??p, orijinal ??ekliyle sergilemek ve belgeselle??tirmek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            e)-M??zi??in b??t??n dallar??nda asl??na uygun ??al????malar yapmak, bunlar?? yurt i??inde ve yurt d??????nda sergilemek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            f)-El sanatlar??m??z??n a??a?? oymac??l??????n?? geli??tirmek, te??vik etmek, buna paralel olarak dokuma sanat??m??z?? bak??r i????ili??ini de geli??tirmek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            g)-K??tahya da yeti??mi?? K??tahya k??lt??r??ne hizmet etmi?? sanat????lar??n ve b??y??klerimizin ad??na g??nler tertip edilmesi, ar??ivlerin ara??t??r??lmas?? do??ru belgelerin derlenmesi ve halka yay??nlanmas?? ger??ekle??tirmek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            ??)-Zafer haftas?? ile ilgili sanatsal faaliyetleri d??zenlemek.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            h)-K??tahya k??lt??r??ne katk??da bulunan, ferdi hizmetler veren ki??ilerle i??birli??i yaparak bu ki??ilerin faaliyetlerinden yararlanmak, faaliyetlerine katk??da bulunmak. (sanat evleri ve ??zel m??zeler gibi)
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            ??)-??l K??lt??r ve Turizm M??d??rl?????? ile i??birli??i yap??p ilimizde bulunan tarihi yerlerin korunmas?? ve restorasyonu ve bu eserlerin ??zerine kimlere ait olduklar??n?? belgeleyecek tan??t??m levhalar??n??n konulmas??, y??reye ait tarihi giysilerin aksesuarlar??n madeni e??yalar??n porselen, seramik ??inicilik el dokuma ve kilim sanat?? ah??ap i????ili??i gibi e??yalar??n sanayini te??vik etmek sergilemek hat??ra e??ya sat???? yerleri kurmak.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde 5-Derne??e 18 ya????n?? bitirmi?? medeni haklar??n?? kullanmaya haiz G??zel sanatlara ilgi duyan eser ??reten her T??rk Vatanda???? y??netim kurulunun karar?? ile asli ??ye olabilir. 2908 say??l?? kanunun 4. Maddesinden say??lan dernek kurma hakk??ndan mahrum edilmi?? ki??iler derne??e ??ye olamazlar.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde 6-Dernek ??yeli??i istifa sureti ile sona erdi??i gibi birikmi?? aidatlar??n?? ??demeyenler ve gerekti??inde a??a????da g??sterilece??i ??zere y??netim kurulu karar?? ile de son bulabilir.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde 7-Derne??in organlar?? ??unlard??r.
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            a-Genel kurul
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            b-Y??netim kurulu
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            c-Denetim kurulu
          </span>
              </li>
              <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            Madde 8-Dernek genel kurulu ola??an toplant??s??n?? 3 y??lda bir ve haziran ay?? i??erisinde yapar.          </span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Eof Icerik -->
    </div>

    <!-- Footer -->
      <?php require_once("modules/footer.php"); ?>

  </div>
</div>

<script src="js/material.js"></script>
<script>
    (function () {
        // auto run
    })();
</script>
</body>

</html>