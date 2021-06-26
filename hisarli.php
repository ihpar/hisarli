<?php
session_start();

$is_secure = true;

$page_name = "hisarli";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

require_once "langs/lang_hisarli.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("modules/header_includes.php"); ?>
  <style type="text/css">
      .img-full {
          float: left;
          width: 50%;
          margin: 0 16px 16px 0;
      }

      .pad-10-per {
          padding: 0 10%;
          text-align: justify;
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
          font-size: 14px;
          margin-bottom: 16px;
      }

      @media (max-width: 839px) {
          .pad-10-per {
              padding: 0 24px;
          }
      }

      @media (max-width: 550px) {
          .img-full {
              width: 100%;
              margin: 0 0 16px 0;
          }
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
            <h3 class="center-text sec-h3"><?php echo($lang_hisarli["hisarli_ahmet_kimdir"][$pref_lang]); ?></h3>
            <h4 class="center-text sec-h4"><?php echo($lang_hisarli["bu_yazi"][$pref_lang]); ?></h4>
            <img src="img/hisarli-ahmet-fotograf-1.jpg" class="img-full">
            <p>
              Hisarlı Ahmet, 13 Temmuz 1908’de Kütahya Kale-i Bâla'da (Yukarı Hisar) Ayşe Hanım ile Musta’ (Mustafa)
              beyin
              ikinci oğulları olarak dünyaya gelmiş; çocukluğu ve gençliği kavaf (kunduracı) olan babasının yanında
              geçmiştir. Kayda değer olmamakla birlikte, Hisarlı, Karşı Tepe (Hıdırlık) gençleriyle “sapankaya”
              denilen iki uzun ipin arasındaki meşine taş koyarak, taşı birbirlerine atıp güya savaş oyunları
              oynadıklarını;
              Topbaşı denen yerde türkü çığırdığında civar köylerden sesinin duyulduğu haberlerinin
              geldiğini zevkle anlatırdı.
            </p>
            <p>
              Hayatının akışını değiştirecek, onu dünyaya taşıyacak bağlamayla tanışması, “yol vergisi” ödemediği ya da
              ödeyemediğinden, üç günlük mahpus (hapis) cezasını çekmek için girdiği mahpushanede tanıdığı bir genç
              sayessinde oluyor. Çıkar çıkmaz hemen bir kil ya da mintana aldığı bağlamasını dedem kırıyor.
              Gene alıyor, gene kırıyor. Sonunda dedem pes ediyor. Hisarlı bağlamayı ilerletiyor. O dönemin ustaları
              olan Dülger’in Hüseyin Ağa ve Çerkezler'in Ethem Efendi’den feyz alıyor. Sesinin güzelliği, repertuarının
              genişliği, bağlamadaki ustalığı dillere destan olmuş. Ailesine bağlı. Tabiatı sever. Her yaştaki
              insanla arkadaş olabilir. Bunların da üstüne arkadaş canlılığı ve bağlılığı, gençlerin haftalık
              toplantısı
              olan Gezek'de aranan kişi yaptı onu.
            </p>
            <p>
              Gençlerin yetişmesi, eğitilmesi ve sosyal hayata adapte olmasında büyük yararları olan bu Gezeklerin katı
              kuralları vardı. Toplantıya geç kalınmaz, bir anlatım esnasında lafa karışılmaz, türkü çığrılmağa
              başlandığında sessizlik hakim olurdu. Yer minderlerinde ve sedir denen 15-20 cm yükseklikteki yerlerde
              rahatça oturulduğu için hemen ayaklar toplanır, diz çökülür ya da bağdaş kurulurdu. Sigara içilmezdi. Bu
              kurallar çiğnendiğinde de Gezek Başı’nın uygun gördüğü ceza uygulanırdı. Kişi zengin ise uzak bir çeşmeden
              su
              getirmesi, fakir ise, iki tepsi baklava getirmesi istenirdi. Babam’dan dinlediğim bir anekdotu anlatmak
              istiyorum: Yemek faslı başlar. Tez canlı birisi olduğundan dayanamaz baklavadan bir samsa atar ağzına. Bir
              de ne
              görsün! Tat yerine ağzında berbat bir şey. Hemen kaş göz işareti evin delikanlısı uzak bir çeşmeden su
              getirmesi bahanesiyle uzaklaştırılır. Baklava yok edilir. Delikanlı geldiğinde de “çok güzel olmuş sana
              bırakmadık” denir. Toplantı sonu evin hanımı şerbet tenceresini dolu görünce iş işten geçmiştir artık.
              Eşinin de bu olaydan haberdar olmadığını anlar. Konukların bu zarif hareketi onu mahcup etmiştir. Hatasını
              düzeltmek için daveti hemen tekrarlamak ister. Sosyal ilişkilerde buna benzer daha nice güzel olaylar
              yaşanmıştır.
              Delikanlıların güngörmüşlüğü, yani hayat hakkında bir şeyler bildiği hele hele de askerliğini yapmış
              olmaları,
              genç kızların kızlar içinde yetişmeleri vs. Tüm bunlar, Gezek gençleri üzerinde olumlu izler bırakması
              açısından
              oldukça önemlidir.
            </p>
            <p>
              Bu toplantılarda bulunmak gençler için adeta bir referans sayılır. “CUMA DEBLEĞİ“ çalmış diye de iltifat
              görürlerdi… Derken askerlik gelip çatıyor. Babam üç tellisini kendi tabiri ile koltuğunun altına
              sıkıştırdığı gibi askerlik şubesine gidiyor, yapılı bir delikanlı olması nesdeniyle topçu sınıfına seçen
              komutan koltuğunun altındaki şişliği sorunca basbam bağlamayı gösteriyor. “Sen aynı zamanda bando’da da
              görevlisin” diyor komutan. Böylece Hisarlı daha sonra Kütahya Belediye bandosunda da görev alacağı
              Klarnet’
              i ve nota okumayı askerde öğreniyor.
            </p>
            <p>
              Asker dönüşü olaylar babamın hayat akışını yönlendiriyor. Dedemin vesfatı, Ağa’sının (ağabeyi) vefatı ve
              yengesi (annem) ile evliliği aile yükünü onun üstüne yıkıyor. Baba mesleği kavaflığa devam. Uzun zaman
              dilimi içinde rahmetli amcamın oğlu ağabeyim; aynı babadan ablam ve ben üç kardeş hiçbir an birbirimizden
              kopmadan ve ayrıcalık hissetmeden yaşadık. Bunu rahmetli anamın ve babamın bizleri hiç ayırım gözetmeden
              sevmelerine ve ilgilenmelerine borçluyuz.
            </p>
            <p>
              Kavaflık devam ederken 1944’lü yıllarda Hisar’da Sanatoryum yapılacak diye, orada ikamet edenlere aşağıda
              yer gösterdiler. 1945-46 da ben ilkokula başladım. Daha sonraki yıllarda Kavafhane ya da Arasta denen
              yemenicilerin ve Kavafların bulunduğu çarşıda babam kahvehane işletmeğe başladı. Doğal olarak da üç telli
              duvarda asılı. Şu an hatırıma geldi arabacı – tek atlı arabası olan İbra’m-a (İBRAHİM) kahveye gelir o da
              koltuğunun altından çıkarttığı bağslaması ile akort ederek babamla çalmağa başlarlardı. Kulaklarımda hâla
              çınlamalarını duyarım. Anlatılamaz bir ahenk içinde kendinizi gül bahçesinde bülbül sesleri arasında
              hissederdiniz. Bizdeki bağlamalarda; üst tele bir okstav tiz olarak akort edilen ve burgusu sapın
              ortasında
              olan adına da “ahenk teli” denen bir ilave vardır. Diger teller akort edildikten sonra ahenk teli burgusu
              dişler ile yapılırdı, bu da işin fiyakası idi. Çay kahve servisi durur, herkes huşû içinde dinlerken her
              zaman her yerde olduğu gibi o günkü deyişle “CÜME DEBLEĞİ “ çalmamış biri çıkar pat diye bir istekte
              bulunurdu. Hisarlı anında muhabbeti bitirir, “davul zurnada peşrev aranmaz ne çıkarsa bahtına” der o
              münasebetsize yolu gösterirdi ama muhabbet de biterdi.
            </p>
            <p>
              Âşık Veysel, Âşık Davut Sulâri gibi ozanların diğer ses ve saz san’atçılarının Kütahya’ya geldiklerinde
              babama uğramadan gitmediklerini bilirim.
            </p>
            <p>
              1940-42’li ve sonraki yıllarda Ankara Radyosunun il il Anadolu diye illerin folklorunu tanıtan programına
              Kütahya ekibi de çağrılmış. Terzi Sadık (Türk), Kambur Celal (Tavukçuoğlu), Nuri Çavuş, Fındık Hüseyin ve
              babam ayrıca mahalli oyun ekibi yörenin türkülerini ve oyunlarını sergilemişler. Başta o dösnemin usta
              yorumcusu, hocası ve derlemecisi Muzaffer Sarısözen olmak üzere tüm san’atçıların beğenisini takdirlerini
              almışlar. Hisarlının sazına haskimiyeti sesinin ve hançeresinin kıvraklığı hocanın dikkatinden kaçmamış,
              radyoda kalması teklif edilmiş. Ancak babam ailenin tek hamisi olduğu düşünscesiyle bu teklife olumsuz
              cevap
              vermiş.
            </p>
            <p>
              Kütahya’da hayat devam etmekte. Babam kahveye gelen meraklı gençslere bilâ ücret bir şeyler öğretmekte,
              sazının akortu, perdesi bozulan babamı bulmakta. Ahmet emmi saz öğret diyenin sazının sapına tebeşirle
              (sol
              sol re re sol sol re .) TREN GELİR’i işaretleyip haydi bakalım devamı bunu öğrendikten sonra derdi…
            </p>
            <p>
              Bu arada babamla aramdaki ilişki ağabeyim ve ablamın da olduğu gibi messafeli idi. Yani sevgi muhabbet var
              ama arada da mesafe var. Sazın alevi beni orta okulda sardı. Babama söyleyemiyorum anama söyledim. Babam
              herkese ders veriyor bana da …Rahmetli anam babamın saz çalmasından şikayetçi beni haşladı “Sen de mi
              çalgıcı olacaksın” diye. Ama bende birikim olmuş çok kısa zamanda bir şeyler çalmağa başladım bağlamada
              …Okulda rahmetli jimsnastik öğretmenim Cemal (Kamacı) bey duymuş bana da öğret diye beni gösrevlendirdi.
              Bir
              gün sazım koltuğumun altında saklı (sanki ayıp bir şey yapısyormuşum gibi) şimdi ikisini de rahmetle
              anıyorum çok kıymetli iki öğretmenim matematikçi Recep hoca, Fransızca öğretmenim Kasım Bey beni sazımla
              görsdüler ikisi de anamın dediği gibi “ne o çalgıcı mı olacaksın “ diye azarladıslar. Ama daha sonraları
              ikisinden de san’atçı olmamdan gurur duyduklarını işitmek nasip oldu. Bunu şunu için anlattım; babam ile
              benim gençlik yıllarımız arasında geçen yarım asırda değişen bir şey olmamış. Benim ilkokul bitti. Diğer
              çocuklarını okutmadığı ya da okutamadığı için bana sordu. Olumlu yanıt alınca da okula kayıt için gerekli
              olan sağlık raporunu almak üzere elimden tuttu sağlık ocağına gittik. Görevli sağlık memuru babamı
              tanısyor.
              “YA AMET’A NE İŞİN VAR ÇOCUĞUNU OKUTMAYA VER BİR TERZİsNİN YA DA BERBERİN YANINA SANAT ÖĞRENSİN” babamın
              yüzünü hatırslıyorum” SEN İŞİNE BAK VER RAPORUMUZU”. ”AHMET BEYİN, MEHMET BEYİN OĞLU OKUSUN AMET A NIN Kİ
              OKUMASIN HA ? HADİ ORDAN” diye çıskıştı…
            </p>
            <p>
              Ben ortaokula başladım. Babam kahvehaneye gelip saz isteyenler, tamir için gelenler, okullar için mandolin
              flüt, trampet vs istekler çoğalınca bunları karşılamak için Konya’ya İstanbul’a gidip gelmeğe başladı.
              Dükkan bu müzik aletleri ile de dolunca kahvehane müzik aletleri satışı yapılan müzik dükkanına döndü;
              kahve
              ocağı da battal oldu. Tabii olarak da saz öğrencisi çoğaldı … Daha sonraları babamı Kızılay, Yeşilay gibi
              derneklerin müzik etkinliklerinde yok denecek ücret karşılığında uzun yıllar öğretici olarak görüyoruz.
              Benim orta öğrenimim sırasında cereyan eden olay yüksek tahsil için de tekrarlandı. Oğlum okumak istiyor
              musun? Babamın gelirini biliyorum ben bisraz mütereddit durunca “oğlum okumak istiyorsan ceketimi satar
              gene
              okutusrum” dedi bu bir fedakârlık ve kararlılık ifadesiydi. Bu arada hemen sigarayı da bıraktığını
              hatırlıyorum. Maalesef toplumumuzda bilmeden ahkâm kesenler vardır. Babamın alkol kullandığı gibi…
              Gençliğinde boğma rakı tabiriyle içtiklerini anlatırdı. Ama aile kurduktan sonra ve ben çocukluğumdan
              itibaren babamın alkol aldığını görmedim. Hattâ bir keresinde ikram edilen çukulatanın likörlü olsduğunu
              fark ettiğinde münasebetli bir şekilde onu çıkarttığına şahidim.
            </p>
            <p>
              Çok ciddi görünümü altında sevecen ve şakacı bir tavrı vardı. Sazından para kazanabileceği bir dönemde
              bile
              sazını kazanç aracı olarak kullanmadı. Yaşantımız Kütahya’lı her aile gibi akraba eş dost konu komşu
              ilişkileri içinde uyumlu bir şekilde geçti. Yer sofralarında yenen yemekslerde ya bir tencere ya da
              kalaylı
              bir sahan kullanılır. İki ya da üç parmak arasına sıkıştısrılan ekmek parçası ile alınan yemek parmaklara
              bulaştırılmaz. Hatta musakka gibi yemeklerde her kişinin önünde yemekten setler oluşur. Kimse kimsenin
              önündekine uzanmaz. Anadolu yemekleri, görgü kurallarının sofra adabının en iyi uygulandığı yerlerdir. Ama
              maalesef, bazı belgesellerde Anadolu yemekleri bir savaş alanı gibi gösterilmekte, zorla ve yapmacık
              görüntüler sergilensmekte.
            </p>
            <p>
              Ailem; fertlerinin gelenek ve göreneklerden aldıkları birikimleri ve olgunsluğu; yaşantılarından farklı
              bir
              yerde, İstanbul’da yaşayan gene bir Anadolu ailesinin kızını kendime eş olarak seçmemde de gösterdiler ve
              olabildiğince yeni yaşantıya uyum sağladılar.
            </p>
            <p>
              Ankara ve İstanbul’da yüksek öğrenim yapan gençlerin kaldığı yurtların masraflarını karşılamak bazı
              öğrencilere burs verebilmek ve sıladaki Kütahya’lı hemşehrileri bir arada tutabilmek için “KÜTAHYA GECESİ”
              terstiplenir. Kütahya’dan mahalli folkor ekibi çağrılır. Türküler söylenir, mahalli oyunlar oynanır,
              yörenin
              yemekleri ikram edilir, geleneksel âdetler canlandırılır. Hisarlı bu gecelerin olmazsa olmazlarındandı.
              Lisede okurken kız enstitüsü ve lisenin folklor ekibinde bir keresinde ben de bulundum. Genelde bu
              ekiplerde
              basbam, Aşık Ömer (Kocaoğlu ) , terzi Sadık (Türk), Pepe Osman, Kunduracı Sasdık ve deblek de ( darbuka)
              Fındık Hüseyin olurdu.
            </p>
            <p>
              Babam türkülerin çalınıp söylenmesinde titizlik gösterir, değiştirilmesine ve yorum adı altında
              bozulmasına
              kızar “ağızlarına altın alıp gümüş çıkartıyorlar” derdi. Benim bağlama çaldığımı öğrendikten sonra
              birlikte
              çalmağa zorlardı. Hiç unutmuyorum kısa dalga İzmir radyosundan rahmetli Yılmaz İpek’i dinler onun gibi
              longalar sirtolar çalmağa çalışırdım… Babam arskadaşları geldiğinde benim marifetimi göstermek için
              çalmağa
              zorlardı. Ben de bir gayret marifetimi (!) gösteririm ve aferin beklerken onlardan; “oğlum doğru dürüst
              bir
              şey çal da dinleyelim” tatlı azar’ını işitir; bozulurdum…
            </p>
            <p>
              Sonradan öğrendiğim kadarıyla ben İstanbul’da iken rahmetli Nida Tüfekçi, Yücel Paşmakçı ve Muzaffer Akgün
              turnede Kütahya’ya uğradıklasrında (1957-58 ) babamı buluyorlar. Sesine sazına hayran oluyorlar. Ancak
              ellesrindeki teyp doğru dürüst kayıt yapmalarına izin vermiyor… Elleri boş dönüsyorlar … Sonradan ben bunu
              kendi ağızlarından işitmiştim.
            </p>
            <p>
              Öğrenimim sırasında. İstanbul’daki müzik faaliyetlerini takip ediyorum MTTB –MTTF gibi öğrenci
              derneklerinin
              folklor çalışmalarına katılıyorum. Sınavını kazandığım ve çok kıymetli hocam Adnan Ataman’ın yönettiği
              İstanbul Belediye Konservatuvarı Türk Halk Müziği İcra Heyeti’nin çalışmalarına ve konserlerine misafir
              san’atçı olarak devam ediyorum. İşte bu vesilelerle babamı uzaktan tanıyan bu san’at camiasının
              değerleriyle
              bir araya getirmek bana nasip oldu. Bazen Tüsfekçi ailesinin evine bazen de Yücel Paşmakçı’lara giderek
              babamın repertuarının TRT ye aktarılmasına aracı oldum. Nota bilmeme rağmen derlesmelerin ve notaya
              alınmaların hocalarım tarafından yapılmasına aracı oldusğum için kendimi daha rahat ve huzurlu
              hissediyorum.
            </p>
            <p>
              Bazı özel çalışma yapan arkadaşlarımız tam araştırmadan, Terzi Sasdık’tan alınan Çömüdüm’ü , Asım
              Doğan’dan
              alınan Tıpır Tıpır Yörürsün’ü, Ali Çavuş’tan alınan Ahmet Bey’in Bir Küheylan Atı Var’ı ve Hakkı
              Özevren’den
              alınan Sepet Alıp Girmiş’i babamdan alınmış gibi gösteriyorlarsa ve her ne kadar bu türküler tekrar
              Hisarlı’dan alınmış olsa da bu emektarları anmadan geçmek olmaz.
            </p>
            <p>
              Babamdan alınan türkülerin; o zamanki teyplerin kalitesi ve makara bandların az bulunurluğu nedeniyle tümü
              değil de birer dörtlükleri ya da beyitleri alınabildiğinden, nota yazımlarında bazı melodi eksiklikleri ya
              da prozodi hataları oluştu. Gerçi zamanla bu eksiklikler ve saz tavırları birebir görmeslerle halledildi
              ama
              gene de bazı kayıtlarda Kütahya yöresi saz tavrı maalesef özenle icra edilmiyor.
            </p>
            <p>
              Zaman zaman bana sorulur. Bu türküleri baban mı yaptı diye. Derim ki bu türküler babamın bestesi değil ama
              onun “YORUMU”. Eğer bu türküler bir başkasından alınmış olsaydı. Detayına fazla girmek istemiyorum ve
              bunun
              kararını aşağıda söyleyeceğim örneklerle sizlere bırakıyorum. İki türkü örnesğimiz var. Allah rahmet etsin
              saatçi Ahmet AKINCAN’dan alınan Gar Mı Yağdı Kütahya’nın Dağına ile Mustafa’m Kaşların Kara. Bu iki türkü
              de
              tekrar basbam’dan alındı. Notaları incelendiğinde Hisarlı’nın Kütahya tezene tavrı ve türkülerinin melodik
              yapısı ve hançere tekniği üzerindeki etkisi görülür.
            </p>
            <p>
              Hisarlı; Klarinet üflediğinin öğrenilmesi üzerine Kütahya Belediye Bandosuna çağrılıyor . Aile mutfağına
              katkısı olsun diye kabul ediyor. Resmî Bayramlarda okul yürüyüşlerinde benim geçtiğim anda o esnada
              çaldıkları marş içinde bir varyasyon yapardı benim de elim ayağım dolaşırdı nedense? Babam dini bütün
              biriydi. Namazında niyazındaydı. Zaman zaman çıkar minareye ezan okur ya da cumaları veya sabahları Sâlâ
              verirdi. Hattâ müezzin olmak için haszırlandı sınava girdi ve de başarılı oldu. Ama AMET’a SAZI
              bırakacaksın
              desdiler. “SİZ İŞİNİZE BAKIN BEN SAZIMLA ALLAH’A SİZDEN DAHA YAKINIM“ diye kapıyı çarpıp çıktığını
              hüzünle,
              kırgınlıkla ve kızgınlıkla anlatırdı. Bu arada Hicaz’a gitti hacı oldu gene sağdan soldan aynı uyarılar.
              Ama
              o ibasdetin ve insan olmanın yolunu bulmuştu.
            </p>
            <p>
              Burada insanın aklına şu geliyor. Kütahya kültürüne bu denli hizmeti olan bu kişiye hemşehrileri ne
              yaptı…17
              MART1997’de KÜTAHYA TİCARET VE SANAYİ ODASI’ nın uyguladığı Kütahya’ya ÜSTÜN HİZMETİ GEÇENLER’e verilen
              bir
              PLAKET’İ HİSARLI AHMET adına o dönemin TBMM BAŞKANI SAYIN MUSTAFA KALEMLİ’den oğlu olarak ben aldım. Bu
              benim övünç kaynağımdır. Ayrıca Kütahya’lı güzel bir kadirşinaslık örneği göstererek dükkânının bulunduğu
              caddeye adını verdi. Kültür parkına büst’ünü koydu. Ama şimdi ikisi de yok. Cadde de ismi yok büstü
              yerinde
              de bir çeşme var. Canları sağ olsun. Kütahya’lı şunu unutmamalı. Ben bildim bileli yani çocukluğumu
              saymazsanız 60/altmış senenin üstü Kütahya’nın adı Hissarlı ile anılmaktadır; Hisarlı Ahmet’ten alınan bir
              “KÜTAHYA “ türküsü ya da şimdi bir “KÜTAHYA” türküsü parça Hisarlı Ahmet’ten alınmıştır diye…
            </p>
            <p>
              Çok abartılı bulmama rağmen, konservatuar hocalarından biri öğrencilerine “İstiklâl Marşını ezbere
              bilmeyebilirsiniz ama Hisarlı Ahmet’i bilmemenizi affetsmem” dediğini söylerler. Bütün bunlara bakarak ve
              yarım asrı aşkın bu kültüre hizmetime ve sizlerin engin hoşgörünüze dayanarak HİSARLI AHMET, Küstahya’nın
              “HÜLÂSASIDIR” demek istiyorum…
            </p>
            <p>
              Ben bu san’at camiasının içindeyim. Gerek radyolardaki san’atçılar gerek konservatuar öğrencileri, gerekse
              kaliteyi bilenler Hisarlı’yı gönüllerinde tustuyorlar ben bunu gözleyebiliyorum ve hissedebiliyorum bu da
              bana yetiyor.
            </p>
            <p>
              TRT repertuarındaki türkülerde “İnegöllüoğlu” soyadı ile karşılaşırsınız. Kavaf olan dedem yemeni satışı
              için zaman zaman İnegöl’e satışa gidermiş arkadaşlar arasında da Eynigöllü diye anılırmış. Soyadı kanunu
              çıktığında da nüfus memuru bunu kütüğe işlemiş. Öğrenimim sırasında babamın gönderdiği harçlığı alabilmem
              için PTT ye uğradığım da Hüviyetimde yazılı İNEGÖLLÜOĞLU ile gönderilerdeki farklı yazılışlar yüzünsden
              problemler yaşıyordum. Babama bunu söylediğimde ailecek karar vererek artık babamın lâkabı haline gelen
              HİSARLI’yı mahkeme kararıyla Soyadı olarak aldık.
            </p>
            <p>
              Öğrenimime devam ediyordum. Babam hem müzik aletleri satın almak hem de beni görmeğe geldiğinde gerek
              İstanbul Belediye Konsevatuvarı THM Topluluğundaki san’atçılarla gerekse Radyo san’atçılar ile birlikte
              oluyorduk. Bu hem babamı hem san’atçıları memnun ediyor, iki taraf da harika duygular içinde oluyordu.
              Babam
              ile rahmetli Ahmet Gazi Ayhan’ı buluşturmam müthiş bir duygu seli yaratmıştı. Biri birilerini görmeden bir
              diğerine bu kadar hayranlık duyan iki ustanın karşılaşması doğrusu görülmeğe değerdi. İkisi de göklerde
              uçuyordu sanki. O diyordu “Ahmet Ağa çal söyle seni dinleyeyim “ öteki diyordu “yok ben seni canlı canlı”
              dinlemek istiyorum.
            </p>
            <p>
              Neriman Altındağ, Nida Tüfekçi, Adnan Ataman, Yücel Paşmakçı, Seha Okuş, Kemal Koldaş, Şahin
              Gültekin,Tuncer
              İnan, Hamdi Özbay, Güner Karabacak ismini sayamadığım ve benim 66 dönemi arkadaşlarım babamın favorileri
              idi. Çünkü bu san’atçılar babamdan alınan türküleri aslına ve tavrına en uygun şekilde icra ediyorlardı ve
              bu babam’ı çok mutlu ediyordu. Selçukluları, Germiyan Beyliğini ve Osmanlıyı yaşamış Kütahya’nın
              folklorunun
              ve yaşam tarzının zenginliği san’atsal yapının üst düzey seviyesi san’at camiasının ortak görüşüdür. El
              san’atlarındaki oya, gergef, sırma işlemeleri çini işlerindeki incelik ve zarafet, türkülerde de kendini
              gösterir. Melodik yapının kıvraklığı, genişliği ritim farklılıkları, sözlerindeki duygu ifadelerinin
              açıklığı halk oyunlarında da görülür. Aynı oyunlu türkülerde erkeklerde sertliği mertliği hissederken,
              hanımlarda inceliği zerafeti naifliği görürsünüz… Kına türkülerinde gelinlerin ve kız analarının
              ağlatılması
              amaçlanır. Altıntas İçinde Kınamı Ezdier, Gül Kuruttum, gibi… Gezekler, kızlar içi gibi gençlerin toplanıp
              eğlendiği günlerin dışında düğünlerde kına gecesi, hamamönü, gakmık, güvey salma çeğizaltı gibi törenlerde
              Gar mı Yağdı, Ahmet Bey, Mustafa’m Kaşların Kara, Meşeden Gel, Portakalım Çaya Düştü, Bedestene Vardım
              Şalvar İsterim, Fincanın Dibi Noktalı ve Aya Bak Yıldıza Bak. Hanımlarda ilave olarak Hisardan İnmem
              Diyor,
              Çömüdüm, İğnem Düştü Yerlere ve özellikle Yasemin Dalını Yar Neden Eğmeli türkülerinin oyunları oynanır.
              Bunların dışındaki türküler de ahenk türküleridir ve kesinlikle oyun oynanmaz. Maalesef şimdiki gençlerin
              yaptığı gibi Elif, Ferace, Kütahya’nın Pınarları vs ahenk ve ağıt türküleridir kesinlikle oynanmaz. Hele
              hele bizim oyunlar kırık zeybek ve karşılama türüdür kaşıkla oynanır. Karşılıklı iki ya da tek kişi oynar,
              grup oyunu değildir.
            </p>
            <p>
              Bazı gençlerin belki hoşuna gitmeyebilir ama Aydın havası ya da Zeybek havası gibi eller ayaklar havada
              oynanmaz. Kimsenin de benim yorumum, ben yaptım oldu deme hakkı olmamalı. Sonra, Anadolu’nun bu denli
              zengin
              ve her biri kendi yöresini ifade eden oyun figürleri basit birkaç figüre indirgenir.
            </p>
            <p>
              Konservatuvar eğitimi almış gençlerin bile bazı türkülerin içindeki sözcükleri içeriğinin anlamının
              değişmesini hiçe sayarak değiştirdiklerini görmek beni çok üzüyor. “A İstanbul Sen Bir Han Mısın” da ki “A
              “
              ifadesi yerine başka bir anlam ifade eden “AH” sözcüğünü, Git Güzel Karşımda Ağlayıp Durma’daki yalvarma
              ifade eden yerine de “ Git güzel karşımda(N) ağlayıp” diyen ve kovma ifadesini kullanıyorlar. Fincanın
              dibi
              noktalı gelinler kızdan( okkalı ) yerine başka anlam ifade eden “edalı “sözcüğünü, kocakarıları
              merdivenden
              atmalıda ki “kaynanayı” anlatan Anadolu deyimi yerine hakaret sayılabilecek sıfat olan (huysuz) kadınları
              merdivenden atmalı ifadesini, “uçkuru bezden yaparlar, gelini kızdan yaparlar” da “urbayı bezden
              yaparlar”a
              dönüştürüyorlar. Ancak urba-elbise, bezden yapılmaz. Urba; ya basmadır, ya ipek, ya da kadife. Elif dedim
              be
              dedim kız ben sana ne dedim’de türküyü okuyan hanım san’atçı ise “ kız “sözcüğü yerine “yâr” sözcüğünü
              neden, hangi akla hizmet ederek koyar anlamak mümkün değil.
            </p>
            <p>
              Merkezde üç telli bağlama –sanırım şimdilerde pek yok-Tambura, Deblek, Def, Kaşık , Zilli Maşa açık
              alanlarda Davul-Zurna Çoban Düdüğü ve yaylı saz Kemaneye’de zaman zaman rastlanır. Türküler genelde
              inici-çıkıcı ( Çatal Çambaşına Koyudum Keseri, Havada Durna Sesi Gelir gibi) inici (Feracemin Ucu,
              Mustafa’m
              Kaşların Kara, Yasemin Dalı gibi) ya da çıkıcı (Gidin Bulutlar Gidin, Eremedim Vefasına Dünyanın gibi )
              olanları vardır. Usül bakımından da zengindir türküler. 9 zamanlı usüllerin 9/8 ( 2+2+2+3) lik olanı
              yaygındır. 9/4, 7/4,4/4,2/4 lük ve karma usüllerden bazıları kullanılmıştır. Sanırım 27/8 (12/8+15/8) usül
              deki Yasemin Dalı, halk müziğinde tek örnektir. Karar sesleri genellikle “LA” dır. “SOL” VE “FA diyez” de
              biten türkülerden örnekler vardır. Hisarlı; Sol kararlı olmasına rağmen “Ben Kendimi Gülün Dibinde Buldum’
              u
              ısrarla “FA” da yani müstezat düzenin de çalardı. Sözsüz oyun havası ya da ezgi hatırladığım kadarıyla
              yok.
              Sadece ara sıra davul zurnanın çaldığı bir güreş havasını dinlerdim kendisinden. Uzun hava yok ama; gene
              babamın okuduğu “kuzu” ve “Leyla’m Zülüflerin” diye iki serbest hava Hisarlı’nın arşiv CD de var.
            </p>
            <p>
              Kısaca bu CD den bahsetmek istiyorum. TRT’ye türkülerin nasıl aktarıldığından söz etmiştim. Bu CD deki
              kayıtların tümü; babamın bize İstanbul’a geldiğinde yorgun olduğu ya da keyifsiz, isteksiz olduğu anlarda
              bile benim ricam ve ısrarımla olmuştur. Bunlara eşim Tuncay Hanım da tanıktır.
            </p>
            <p>
              Kaydetmeden geçemeyeceğim bir olay da, Kalan Müzik yapımcısı Hasan SALTIK beni buldu aradaki sohbetleri
              geçiyorum. Benim evdeki yarı profesyonel teybime kaydettiğim babamın kayıtlarını bilgisayarda gözden
              geçirerek CD ye aktardı. Böylece Hisarlı Ahmet’i kültürümüzü yaşatanlar camiasına kattı. Kendisine bu
              hizmeti için şükranlarımı ve teşekkürlerimi sunuyorum.
            </p>
            <p>
              Babamın sağlığında arzuladığı ama gerçekleştiremediği türkülerin kitap haline getirilmesi de torunu İsmail
              PEKTAŞ ile bana nasip oldu. Saygı değer iş adamı Nafi GÜRAL’ın desteğiyle (1000) bin adet bastırılan bu
              kitap ücretsiz olarak tüm san’at camiasına ve türkü severlere dağıtıldı.
            </p>
            <p>
              CEMAL REŞİT REY konser salonunda yapılan çok güzel bir anma gecesinden eş dosta aktardığım mahdut
              biletlerin
              gelirinden de Kütahya Devlet Hastahanesinde ve Sosyal Sigortalar Hastahanesinde iki Hisarlı Ahmet odası
              yaptırdık. Konservatuar Yüksek Lisans çalışmalarında Hisarlı Ahmet ve Kütahya türküleri tercihli konular
              arasında tutulmakta. Ayrıca TRT’nin TV ve Radyo kanallarında bir çok anma programı yapıldı. Bütün bunlar
              benim için övünç kaynağıdır
            </p>
            <p>
              Unuttuklarım eksiklerim olabilir. HİSARLI AHMET’İN evladı olarak ve san’atçı kimliğimle en yakınında
              bulunan
              bir kişi olarak, bildiklerimi hatırlayabildiklerimi içimden geldiği gibi anlatmağa çalıştım.
            </p>
            <p>
              Siz san’at severler, hattâ HİSARLI AHMET severlerin burada bulunmaları ve çalışmaları , biz hisarlı
              ailesinin onur ve gurur kaynağıdır. Sizlere ve bu Sempozyumu hazırlayan genç arkadaşım UĞUR TÜRKMEN’e ve
              emeği geçenlere teşekkür ederim . SAYGILARIMLA…
            </p>
            <p>
              - MUSTAFA HİSARLI Yüksek Mimar, TRT Sanatçısı
            </p>
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