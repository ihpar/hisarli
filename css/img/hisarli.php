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
              ikinci oğulları olarak dünyaya geldi. Çocukluğu ve gençliği kavaf (kunduracı) olan babasının yanında
              geçti. Kayda değer olmamakla birlikte, Hisarlı, Karşı Tepe (Hıdırlık) gençleriyle “sapankaya”
              denilen iki uzun ipin arasındaki meşine taş koyarak, taşı birbirlerine atıp güya savaş oyunları
              oynadıklarını;
              Topbaşı denen yerde türkü çığırdığında civar köylerden sesinin duyulduğu haberlerinin
              geldiğini zevkle anlatırdı.
            </p>
            <p>
              Hayatının akışını değiştirecek, onu dünyaya taşıyacak bağlamayla tanışması, “yol vergisi” ödemediği ya da
              ödeyemediğinden, üç günlük mahpus cezasını çekmek için girdiği mahpushanede tanıdığı bir genç
              sayesinde olur. Çıkar çıkmaz hemen bir kil ya da mintana aldığı bağlamasını dedem kırar.
              Gene alır, dedem gene kırar. Sonunda dedem pes eder. Hisarlı bağlamayı ilerletir. O dönemin ustaları
              olan Dülger’in Hüseyin Ağa ve Çerkezler'in Ethem Efendi’den feyz alır. Sesinin güzelliği, repertuarının
              genişliği, bağlamadaki ustalığı dillere destan olur. Ailesine bağlıdır. Tabiatı sever. Her yaştaki
              insanla arkadaş olabilir. Bunların da üstüne arkadaş canlılığı ve bağlılığı, gençlerin haftalık
              toplantısı gezeklerde aranan kişi yapar onu.
            </p>
            <p>
              Gençlerin yetişmesi, eğitilmesi ve sosyal hayata adapte olmasında büyük yararları olan bu gezeklerin katı
              kuralları vardır. Toplantıya geç kalınmaz. Bir anlatım esnasında lafa karışılmaz. Türkü çığrılmaya
              başlandığında sessizlik hakim olur. Yer minderlerinde ve sedir denen 15-20cm yükseklikteki yerlerde
              rahatça oturulduğu için hemen ayaklar toplanır. Diz çökülür ya da bağdaş kurulur. Sigara içilmez. Bu
              kurallar çiğnendiğinde gezekbaşının uygun gördüğü ceza uygulanır. Kişi zengin ise iki tepsi baklava;
              fakir ise uzak bir çeşmeden su getirmesi istenir. Babamdan dinlediğim bir anekdotu anlatmak
              isterim: Bir gün yemek faslı başlar. Tez canlı birisi olduğundan dayanamaz baklavadan bir samsa atar ağzına babam. Bir
              de ne
              hissetsin! Tat yerine ağzında berbat bir şey var. Hemen kaş göz işareti evin delikanlısı babam uzak bir çeşmeden su
              getirmesi bahanesiyle uzaklaştırılır. Baklava yok edilir. Delikanlı geldiğinde de “çok güzel olmuş sana
              bırakmadık” denir. Toplantı sonu evin hanımı şerbet tenceresini dolu görünce iş işten geçmiştir artık.
              Eşinin de bu olaydan haberdar olmadığını anlar. Konukların bu zarif hareketi onu mahcup etmiştir. Hatasını
              düzeltmek için daveti hemen tekrarlamak ister. Sosyal ilişkilerde buna benzer daha nice güzel olaylar
              yaşanmıştır.
              Delikanlıların güngörmüşlüğü, yani hayat hakkında bir şeyler bildiği hele hele de askerliğini yapmış
              olmaları,
              genç kızların kızlar içinde yetişmeleri vs... Tüm bunlar, gezek gençleri üzerinde olumlu izler bırakması
              açısından
              oldukça önemlidir.
            </p>
            <p>
              Bu toplantılarda bulunmak gençler için adeta bir referans sayılır. "Cuma debleği" çalmış diye de iltifat
              görürler. Derken askerlik gelip çatar. Babam üç tellisini kendi tabiriyle koltuğunun altına
              sıkıştırdığı gibi askerlik şubesine gider. Yapılı bir delikanlı olması nedeniyle babamı topçu sınıfına seçen
              komutan, koltuğunun altındaki kabartıyı sorunca babam bağlamayı gösterir. “O zaman sen aynı zamanda bandoda da
              görevlisin” der komutan. Böylece Hisarlı, daha sonra Kütahya Belediye Bandosu'nda görev alarak çalacağı
              klarneti ve nota okumayı askerde öğrenmiş olur.
            </p>
            <p>
              Asker dönüşü olaylar babamın hayat akışını yönlendirir. Dedemin vefatı, Aga’sının (ağabeyi) vefatı ve
              yengesi (ağabeyinin eşi, annem) ile evliliği aile yükünü onun üstüne yıkar. Baba mesleği kavaflığa devam eder.
                Uzunca bir süre rahmetli amcamın oğlu ağabeyim, aynı babadan (Hisarlı) ablam ve ben üç kardeş hiçbir an birbirimizden
              kopmadan ve ayrıcalık hissetmeden yaşadık. Bunu rahmetli anamın ve babamın bizleri hiç ayrım gözetmeden
              sevmelerine ve ilgilerine borçluyuz.
            </p>
            <p>
              Kavaflık devam ederken, 1944’lü yıllarda Hisar’da sanatoryum yapılacak diye orada ikamet edenlere aşağıda
              yer gösterirler. 1945-46'da ben ilkokula başladım. Daha sonraki yıllarda kavafhane ya da arasta denen
              yemenicilerin ve kavafların bulunduğu çarşıda babam kahvehane işletmeye başlar. Doğal olarak da üç telli
              duvarda asılıdır. Şu an hatırıma geldi: Arabacı (tek atlı arabası olan) İbra’m (İbrahim) bir gün kahveye geldi. İbrahim,
              koltuğunun altından çıkardığı bağlamasıyla onu akort ederek babamla çalmaya başldı. Kulaklarımda hâlâ
              çınlamalarını duyarım. Anlatılamaz bir ahenk içinde kendinizi gül bahçesinde bülbül sesleri arasında
              hissederdiniz. Bizdeki bağlamalarda, üst tele bir oktav tiz akort edilen ve burgusu sapın
              ortasında
              olan adına da “ahenk teli” denen bir ilave vardır. Diğer teller akort edildikten sonra ahenk teli burgusu
              dişlerle yapılır. Bu da işin fiyakasıdır. Çay kahve servisi durur. Herkes huşû içinde dinlerken her
              zaman her yerde olduğu gibi o günkü deyişle “cüme debşeği çalmamış" biri çıkar pat diye bir istekte
              bulunur. Hisarlı anında muhabbeti bitirip “davul zurnada peşrev aranmaz ne çıkarsa bahtına” der o
              münasebetsize yolu gösterir ama muhabbet de biter.
            </p>
            <p>
              Âşık Veysel, Âşık Davut Sulâri gibi ozanların diğer ses ve saz san’atçılarının Kütahya’ya geldiklerinde
              babama uğramadan gitmediklerini bilirim.
            </p>
            <p>
              1940-42’li ve sonraki yıllarda Ankara Radyosunun "İl İl Anadolu" diye illerin folklorunu tanıtan programına
              bir gün Kütahya ekibi de çağrılmış. Terzi Sadık (Türk), Kambur Celal (Tavukçuoğlu), Nuri Çavuş, Fındık Hüseyin ve
              babam ayrıca mahalli oyun ekibi yörenin türkülerini ve oyunlarını sergilemişler. Başta o dönemin usta
              yorumcusu, hocası ve derlemecisi Muzaffer Sarısözen olmak üzere tüm san’atçıların beğenisini ve takdirlerini
              almışlar. Hisarlının sazına hakimiyeti sesinin ve hançeresinin kıvraklığı hocanın dikkatinden kaçmamış.
              Radyoda kalması teklif edilmiş. Ancak babam ailenin tek hamisi olduğu düşüncesiyle bu teklife olumsuz
              cevap vermiş.
            </p>
            <p>
              Kütahya’da hayat devam ederken babam kahveye gelen meraklı gençlere bilâ ücret bir şeyler öğretmekte,
              sazının akortu veya perdesi bozulanlar kendilerini babamın yanında bulmaktadır. "Ahmet emmi saz öğret" diyenin
                sazının sapına tebeşirle "sol sol re re sol sol re (Tren Gelir Hoş Gelir)" işaretleyip "Haydi bakalım! Devamı
                bunu öğrendikten sonra" der…
            </p>
            <p>
              Bu arada babamla aramdaki ilişki, ağabeyim ve ablamın da olduğu gibi mesafeliydi. Yani sevgi muhabbet var
              ama arada da mesafe vardı. Sazın alevi beni orta okulda sardı. Babama söyleyemiyorum gittim anama söyledim. "Babam
              herkese ders veriyor bana da versin" dedim. Rahmetli anam babamın saz çalmasından şikayetçi olduğundan beni haşladı.
                “Sen de mi çalgıcı olacaksın” dedi. Ancak bende birikim olmuş ki çok kısa zamanda bağlamada bir şeyler çalmaya başladım.
                Okulda rahmetli jimsnastik öğretmenim Cemal Bey (Kamacı) duymuş. "Bana da öğret!" diye beni görevlendirdi.
              Bir gün sazım, sanki ayıp bir şey yapıyormuşum gibi koltuğumun altında saklı. Şimdi ikisini de rahmetle
              anıyorum, çok kıymetli iki öğretmenim matematikçi Recep Hoca, Fransızca öğretmenim Kasım Bey beni sazımla
              gördüler. İkisi de anamın dediği gibi “ne o çalgıcı mı olacaksın?“ diye azarladılar. Ancak daha sonraları
              ikisinden de san’atçı olmamdan gurur duyduklarını işitmek nasip oldu. Bunu şunun için anlattım: Babam ve
              benim gençlik yıllarımız arasında geçen yarım asırda değişen bir şey olmamış. Benim ilkokul bitti. Diğer
              çocuklarını okutmadığı ya da okutamadığı için bana sordu. Olumlu yanıt alınca da okula kayıt için gerekli
              olan sağlık raporunu almak üzere elimden tuttu sağlık ocağına gittik. Görevli sağlık memuru babamı
              tanıyor.Diyor ki:
              “Ya Amet’a! Ne gerek var çocuğunu okutmaya. Ver bir terzinin ya da berberin yanına zanat öğrensin”. Babamın
              yüzünü hatırlıyorum. "Sen işine bak. Ver raporumuzu” dedi. ”Ahmet Bey'in Mehmet Bey'in oğlu okusun ama Amet'anınki
              okumasın ha? Hadi ordan!” diye çıkıştı.
            </p>
            <p>
              Ben ortaokula başladım. Kahvehaneye gelip babamdan saz isteyenler, tamir için gelenler, okullar için mandolin
              flüt, trampet vs. almak isteyenler çoğalınca bunları karşılamak için babam Konya’ya İstanbul’a gidip gelmeye başladı.
              Dükkan müzik aletleri ile de dolunca kahvehane müzik aletleri satışı yapılan müzik dükkanına döndü.
              Kahve ocağı da battal oldu. Tabii olarak da saz öğrencisi çoğaldı. Daha sonraları babamı Kızılay, Yeşilay gibi
              derneklerin müzik etkinliklerinde yok denecek ücret karşılığında uzun yıllar öğretici olarak görüyorduk.
              Benim orta öğrenimim sırasında cereyan eden olay yüksek tahsil için de tekrarlandı. "Oğlum okumak istiyor
              musun?" dedi babam. Babamın gelirini biliyorum. Ben biraz mütereddit durunca “oğlum okumak istiyorsan ceketimi satar
              gene
              okuturum seni” dedi. Bu bir fedakârlık ve kararlılık ifadesiydi. Bu arada hemen sigarayı da bıraktığını
              hatırlıyorum. Maalesef toplumumuzda bilmeden ahkâm kesenler vardır. Babamın alkol kullandığı gibi.
              Gençliğinde boğma rakı tabiriyle içtiklerini anlatırdı ama aile kurduktan sonra ve ben çocukluğumdan
              itibaren babamın alkol aldığını görmedim. Hattâ bir keresinde ikram edilen çukulatanın likörlü olduğunu
              fark ettiğinde münasebetli bir şekilde onu çıkarttığına şahidim.
            </p>
            <p>
              Çok ciddi görünümü altında sevecen ve şakacı bir tavrı vardı. Sazından para kazanabileceği bir dönemde
              bile
              sazını kazanç aracı olarak kullanmadı. Yaşantımız Kütahyalı her aile gibi akraba eş dost konu komşu
              ilişkileri içinde uyumlu bir şekilde geçti. Yer sofralarında yenen yemeklerde ya bir tencere ya da
              kalaylı
              bir sahan kullanılırdı. İki ya da üç parmak arasına sıkıştırılan ekmek parçası ile alınan yemek parmaklara
              bulaştırılmazdı. Hatta musakka gibi yemeklerde her kişinin önünde yemekten setler oluşurdu. Kimse kimsenin
              önündekine uzanmazdı. Anadolu yemekleri, görgü kurallarının sofra adabının en iyi uygulandığı yerlerdir. Ancak
              maalesef, bazı belgesellerde Anadolu yemekleri bir savaş alanı gibi gösterilmekte, zorla ve yapmacık
              görüntüler sergilenmektedir.
            </p>
            <p>
              Ailem, fertlerinin gelenek ve göreneklerinden aldıkları birikim ve olgunluğu, yaşantılarından farklı
              bir yerde, İstanbul’da yaşayan gene bir Anadolu ailesinin kızını kendime eş olarak seçtiğimde de gösterdiler ve
              olabildiğince yeni yaşantıya uyum sağladılar.
            </p>
            <p>
              Ankara ve İstanbul’da yüksek öğrenim yapan gençlerin kaldığı yurtların masraflarını karşılamak, bazı
              öğrencilere burs verebilmek ve sıladaki Kütahyalı hemşehrileri bir arada tutabilmek için “Kütahya Gecesi”
              tertiplenirdi. Kütahya’dan mahalli folkor ekibi çağrılırdı. Türküler söylenir, mahalli oyunlar oynanır,
              yörenin
              yemekleri ikram edilirdi. Geleneksel âdetler canlandırılırdı. Hisarlı bu gecelerin olmazsa olmazlarındandır.
              Lisede okurken kız enstitüsü ve lisenin folklor ekibinde bir keresinde ben de bulundum. Genelde bu
              ekiplerde
              babam, Aşık Ömer (Kocaoğlu ), terzi Sadık (Türk), Pepe Osman, Kunduracı Sadık ve deblekde (darbuka)
              Fındık Hüseyin olurdu.
            </p>
            <p>
              Babam türkülerin çalınıp söylenmesinde titizlik gösterir, değiştirilmesine ve yorum adı altında
              bozulmasına
              kızar “ağızlarına altın alıp gümüş çıkartıyorlar” derdi. Benim bağlama çaldığımı öğrendikten sonra
              birlikte
              çalmaya zorlardı. Hiç unutmuyorum kısa dalga İzmir radyosundan rahmetli Yılmaz İpek’i dinler onun gibi
              longalar sirtolar çalmağa çalışırdım. Babam arkadaşları geldiğinde  marifetimi göstermek için beni
              çalmaya
              zorlardı. Ben de bir gayret marifetimi  gösterip (!) aferin beklerken onlardan “oğlum doğru dürüst
              bir
              şey çal da dinleyelim” tatlı azarını işitir, bozulurdum.
            </p>
            <p>
              Sonradan öğrendiğim kadarıyla ben İstanbuldayken rahmetli Nida Tüfekçi, Yücel Paşmakçı ve Muzaffer Akgün
              turnede Kütahya’ya uğradıklarında (1957-58) babamı bulmuşlar. Sesine sazına hayran olmuşlar. Ancak
              ellerindeki teyp doğru dürüst kayıt yapmalarına izin vermemiş. Elleri boş dönmüşler. Sonradan ben bunu
              kendi ağızlarından işittim.
            </p>
            <p>
              Öğrenimim sırasında, İstanbul’daki müzik faaliyetlerini takip ederken MTTB –MTTF gibi öğrenci
              derneklerinin
              folklor çalışmalarına katıldım. Sınavını kazandığım ve çok kıymetli hocam Adnan Ataman’ın yönettiği
              İstanbul Belediye Konservatuvarı Türk Halk Müziği İcra Heyeti’nin çalışmalarına ve konserlerine misafir
              san’atçı olarak devam ettim. İşte bu vesilelerle babamı uzaktan tanıyan bu san’at camiasının
              değerleriyle babamı
              bir araya getirmek bana nasip oldu. Bazen Tüfekçi ailesinin evine bazen de Yücel Paşmakçı’lara giderek
              babamın repertuarının TRT'ye aktarılmasına aracı oldum. Nota bilmeme rağmen derlemelerin ve notaya
              alınmaların hocalarım tarafından yapılmasına aracı olduğum için kendimi daha rahat ve huzurlu
              hissediyordum.
            </p>
            <p>
              Bazı özel çalışma yapan arkadaşlarımız tam araştırmadan, Terzi Sadık’tan alınan Çömüdüm’ü , Asım
              Doğan’dan
              alınan Tıpır Tıpır Yörürsün’ü, Ali Çavuş’tan alınan Ahmet Bey’in Bir Küheylan Atı Var’ı ve Hakkı
              Özevren’den
              alınan Sepet Alıp Girmiş’i babamdan alınmış gibi gösteriyorlarsa da bu emektarları anmadan geçmek olmaz.
            </p>
            <p>
              Babamdan alınan türkülerin, o zamanki teyplerin kalitesi ve makara bandların az bulunurluğu nedeniyle tümü
              değil de birer dörtlükleri ya da beyitleri alınabildiğinden, nota yazımlarında bazı melodi eksiklikleri ya
              da prozodi hataları oluşmuştu. Gerçi zamanla bu eksiklikler ve saz tavırları birebir görmelerle halledildi
              ama
              gene de bazı kayıtlarda Kütahya yöresi saz tavrı maalesef özenle icra edilemedi.
            </p>
            <p>
              Zaman zaman bana sorulur "bu türküleri baban mı yaptı?" diye. Derim ki "bu türküler babamın bestesi değil ama
              onun “yorumu”. Eğer bu türküler bir başkasından alınmış olsaydı... Detayına fazla girmek istemiyorum ve
              bunun
              kararını aşağıda söyleyeceğim örneklerle sizlere bırakıyorum. İki türkü örneğimiz var. Allah rahmet etsin
              saatçi Ahmet Akıncan’dan alınan "Gar Mı Yağdı Kütahya’nın Dağına" ile "Mustafa’m Kaşların Kara". Bu iki türkü
              de babam’dan alındı. Notalar incelendiğinde Hisarlı’nın Kütahya tezene tavrı ve türkülerinin melodik
              yapısı ve hançere tekniği üzerindeki etkisi görülür.
            </p>
            <p>
              Hisarlı, klarinet üflediğinin öğrenilmesi üzerine Kütahya Belediye Bandosu'na çağrılır . Aile mutfağına
              katkısı olsun diye kabul eder. Resmî bayramlarda ve okul yürüyüşlerinde benim geçtiğim anda o esnada
              çaldıkları marş içinde bir varyasyon yapardı. Benim de elim ayağım dolaşırdı nedense? Babam dini bütün
              biriydi. Namazında niyazındaydı. Zaman zaman çıkar minareye ezan okur ya da cumaları veya sabahları sâlâ
              verirdi. Hattâ müezzin olmak için hazırlandı sınava girdi ve de başarılı oldu. Ancak "Amet’a sazı
              bırakacaksın"
              dediler. “Siz işinize bakın. Ben sazımla Allah'a sizden daha yakınım“ diye kapıyı çarpıp çıktığını
              hüzünle,
              kırgınlıkla ve kızgınlıkla anlatırdı. Bu arada Hicaz’a gitti hacı oldu gene sağdan soldan aynı uyarılar
              ama o ibadetin ve insan olmanın yolunu bulmuştu.
            </p>
            <p>
              Burada insanın aklına şu geliyor. Kütahya kültürüne bu denli hizmeti olan bu kişiye hemşehrileri ne
              yaptı? 17 Mart 1997’de Kütahya Ticaret ve Sanayi Odası’nın uyguladığı Kütahya’ya üstün hizmeti geçenlere verilen
              bir
              plaketi, Hisarlı Ahmet adına o dönemin TBMM Başkanı Sn. Mustafa Kalemli'den oğlu olarak ben aldım. Bu
              benim övünç kaynağımdır. Ayrıca Kütahya’lılar tarafından güzel bir kadirşinaslık örneği gösterilerek dükkânının bulunduğu
              caddeye adı verildi. Kültür parkına büstü konuldu ama şimdi ikisi de yok. Caddede ismi yok, büstü
              yerinde de bir çeşme var. Canları sağ olsun. Kütahyalı şunu unutmamalı. Ben kendimi bildim bileli yani çocukluğumu
              saymazsanız altmış senenin üstü Kütahya’nın adı Hisarlı ile anılmaktadır. "Hisarlı Ahmet’ten alınan bir
              Kütahya türküsü" ya da "bu Kütahya türküsü Hisarlı Ahmet’ten alınmıştır" diyerek.
            </p>
            <p>
              Çok abartılı bulmama rağmen konservatuar hocalarından birinin öğrencilerine “İstiklâl Marşını ezbere
              bilmeyebilirsiniz ama Hisarlı Ahmet’i bilmemenizi affetmem” dediğini söylerler. Bütün bunlara bakarak ve
              yarım asrı aşkın bu kültüre hizmetime ve sizlerin engin hoşgörünüze dayanarak, Hisarlı Ahmet Kütahya’nın
              “hülâsasıdır” demek istiyorum.
            </p>
            <p>
              Ben bu san’at camiasının içindeyim. Gerek radyolardaki san’atçılar gerek konservatuar öğrencileri, gerekse
              kaliteyi bilenler Hisarlı’yı gönüllerinde tutuyorlar. Ben bunu gözleyebiliyor ve hissedebiliyorum. Bu da
              bana yetiyor.
            </p>
            <p>
              TRT repertuarındaki türkülerde “İnegöllüoğlu” soyadı ile karşılaşırsınız. Kavaf olan dedem yemeni satışı
              için zaman zaman İnegöl’e satışa gidermiş. Arkadaşlar arasında da Eynigöllü diye anılırmış. Soyadı kanunu
              çıktığında da nüfus memuru bunu kütüğe işlemiş. Öğrenimim sırasında babamın gönderdiği harçlığı alabilmem
              için PTT'ye uğradığımda hüviyetimde yazılı İnegöllüoğlu ile gönderilerdeki farklı yazılışlar yüzünden
              problemler yaşıyordum. Babama bunu söylediğimde ailecek karar vererek artık babamın lâkâbı haline gelen
              Hisarlı’yı mahkeme kararıyla soyadı olarak aldık.
            </p>
            <p>
              Öğrenimime devam ediyordum. Babam hem müzik aletleri satın almak hem de beni görmeye geldiğinde gerek
              İstanbul Belediye Konsevatuvarı THM Topluluğundaki san’atçılarla gerekse radyo san’atçılarıyla birlikte
              oluyorduk. Bu hem babamı hem san’atçıları memnun ediyor, iki taraf da harika duygular içinde oluyordu.
              Babam
              ile rahmetli Ahmet Gazi Ayhan’ı buluşturmam müthiş bir duygu seli yaratmıştı. Birbirlerini görmeden
                bu kadar hayranlık duyan iki ustanın karşılaşması doğrusu görülmeye değerdi. İkisi de göklerde
              uçuyordu sanki. O diyordu “Ahmet Ağa çal söyle seni dinleyeyim“ öteki diyordu “yok ben seni canlı canlı
              dinlemek istiyorum".
            </p>
            <p>
              Neriman Altındağ, Nida Tüfekçi, Adnan Ataman, Yücel Paşmakçı, Seha Okuş, Kemal Koldaş, Şahin
              Gültekin,Tuncer
              İnan, Hamdi Özbay, Güner Karabacak ismini sayamadığım ve benim 66 dönemi arkadaşlarım babamın favorileri
              idi. Çünkü bu san’atçılar babamdan alınan türküleri aslına ve tavrına en uygun şekilde icra ediyorlardı ve
              bu babamı çok mutlu ediyordu. Selçukluları, Germiyan Beyliğini ve Osmanlıyı yaşamış Kütahya’nın
              folklorunun
              ve yaşam tarzının zenginliğiyle san’atsal yapısının üst düzeyde oluşu san’at camiasının ortak görüşüdür. El
              san’atlarındaki oya, gergef, sırma işlemeleriyle çini işlerindeki incelik ve zarafet, türkülerde de kendini
              gösterir. Melodik yapının kıvraklığı, genişliği, ritim farklılıkları, sözlerindeki duygu ifadelerinin
              açıklığı halk oyunlarında da görülür. Aynı oyunlu türkülerde erkeklerde sertliği mertliği hissederken,
              hanımlarda inceliği zerafeti naifliği görürsünüz. Kına türkülerinde gelinlerin ve kız analarının
              ağlatılması
              amaçlanır. "Altıntas İçinde Kınamı Ezdiler", "Gül Kuruttum" türkülerinde olduğu gibi. Gezekler, kızlariçi gibi gençlerin toplanıp
              eğlendiği günlerin dışında düğünlerde kına gecesi, hamamönü, gakmık, güvey salma, çeyizaltı gibi törenlerde
              "Gar mı Yağdı", "Ahmet Bey", "Mustafa’m Kaşların Kara", "Meşeden Gel", "Portakalım Çaya Düştü", "Bedestene Vardım
              Şalvar İsterim", "Fincanın Dibi Noktalı" ve "Aya Bak Yıldıza Bak"; hanımlarda ilave olarak "Hisardan İnmem
              Diyor",
              "Çömüdüm", "İğnem Düştü Yerlere" ve özellikle "Yasemin Dalını Yar Neden Eğmeli" türkülerinin oyunları oynanır.
              Bunların dışındaki türküler de ahenk türküleridir ve kesinlikle oyun oynanmaz. Maalesef şimdiki gençlerin
              yaptığı gibi "Elif", "Ferace", "Kütahya’nın Pınarları" vs. olanlar ahenk ve ağıt türküleridir. Kesinlikle oynanmaz.
                Hele
              hele bizim oyunlar kırık zeybek ve karşılama türüdür kaşıkla oynanır. Karşılıklı iki ya da tek kişi oynar.
              Grup oyunu değildir.
            </p>
            <p>
              Bazı gençlerin belki hoşuna gitmeyebilir ama Aydın Havası ya da Zeybek Havası gibi türküler eller ayaklar havada
              oynanmaz. Hiç kimsenin "benim yorumum, ben yaptım oldu" deme hakkı olmamalı. Olursa, Anadolu’nun bu denli
              zengin ve her biri kendi yöresini ifade eden oyun figürleri basit birkaç figüre indirgenir.
            </p>
            <p>
              Konservatuvar eğitimi almış gençlerin bile bazı türkülerin içindeki sözcükleri içeriğinin anlamının
              değişmesini hiçe sayarak değiştirdiklerini görmek beni çok üzüyor. “A İstanbul Sen Bir Han Mısın”daki “A“ ifadesi
                yerine başka bir anlam ifade eden “Ah” sözcüğünü; "Git Güzel Karşımda Ağlayıp Durma"daki yalvarma
              ifadesi yerine “Git güzel karşımda(n) ağlayıp” diyerek kovma ifadesini kullanıyorlar. "Fincanın
              Dibi Noktalı Gelinler Kızdan Okkalı" yerine başka anlam ifade eden “edalı“ sözcüğünü; "Kocakarıları
              Merdivenden Atmalıda"ki “kaynanayı” anlatan Anadolu deyimi yerine hakaret sayılabilecek sıfat olan "huysuz kadınları
              merdivenden atmalı" ifadesini; “Uçkuru Bezden Yaparlar, Gelini Kızdan Yaparlar”da “urbayı bezden
              yaparlar”a
              dönüştürüyorlar. Ancak urba-elbise bezden yapılmaz. Urba ya basmadır, ya ipek, ya da kadife. "Elif Dedim
              Be Dedim Kız Ben Sana Ne Dedim"de türküyü okuyan hanım san’atçı ise “kız“ sözcüğü yerine “yâr” sözcüğünü
              neden, hangi akla hizmet koyar anlamak mümkün değil.
            </p>
            <p>
              Merkezde üç telli bağlama (sanırım şimdilerde pek yok),tambura, deblek, def, kaşık, zilli maşa; açık
              alanlarda davul, zurna, çoban düdüğü ve yaylı saz kemaneye zaman zaman rastlanır. Türküler genelde
              inici-çıkıcı ("Çatal Çambaşına Koyudum Keseri", "Havada Durna Sesi Gelir" gibi) inici ("Feracemin Ucu",
              "Mustafa’m
              Kaşların Kara", "Yasemin Dalı" gibi) ya da çıkıcı ("Gidin Bulutlar Gidin", "Eremedim Vefasına Dünyanın" gibi)
              olanları vardır. Usül bakımından da zengindir türküler. 9 zamanlı usüllerin 9/8 (2+2+2+3)lik olanı
              yaygındır. 9/4, 7/4, 4/4, 2/4lük ve karma usüllerden bazıları kullanılmıştır. Sanırım 27/8 (12/8+15/8) usüldeki
                Yasemin Dalı, halk müziğinde tek örnektir. Karar sesleri genellikle “La”dır. “Sol” ve “fa diyez” de
              biten türkülerden örnekler vardır. Hisarlı, sol kararlı olmasına rağmen “Ben Kendimi Gülün Dibinde Buldum"u
              ısrarla “fa”da yani müstezat düzeninde çalardı. Sözsüz oyun havası ya da ezgi hatırladığım kadarıyla
              yok. Sadece ara sıra davul zurnanın çaldığı bir güreş havasını dinlerdim kendisinden. Uzun hava yok ama gene
              babamın okuduğu “kuzu” ve “Leyla’m Zülüflerin” diye iki serbest hava Hisarlı’nın arşiv CD'sinde var.
            </p>
            <p>
              Kısaca bu CD'den bahsetmek istiyorum. TRT’ye türkülerin nasıl aktarıldığından söz etmiştim. Bu CD'deki
              kayıtların tümü, babamın bize İstanbul’a geldiğinde yorgun olduğu ya da keyifsiz, isteksiz olduğu anlarda
              bile benim ricam ve ısrarımla olmuştur. Bunlara eşim Tuncay Hanım da tanıktır.
            </p>
            <p>
              Kaydetmeden geçemeyeceğim bir olay da Kalan Müzik yapımcısı Hasan Saltık'ın beni buluşuydu. Aradaki sohbetleri
              geçiyorum. Benim evdeki yarı profesyonel teybime kaydettiğim babamın kayıtlarını bilgisayarda gözden
              geçirerek CD'ye aktardı. Böylece Hisarlı Ahmet’i kültürümüzü yaşatanlar camiasına kattı. Kendisine bu
              hizmeti için şükranlarımı ve teşekkürlerimi sunuyorum.
            </p>
            <p>
              Babamın sağlığında arzuladığı ama gerçekleştiremediği türkülerin kitap haline getirilmesi de torunu İsmail
              Pektaş ile bana nasip oldu. Saygı değer iş adamı Nafi Güral’ın desteğiyle bin adet bastırılan bu
              kitap, ücretsiz olarak tüm san’at camiasına ve türkü severlere dağıtıldı.
            </p>
            <p>
              Cemal Reşit Rey Konser Salonu'nda yapılan çok güzel bir anma gecesinden eş dosta aktardığım mahdut
              biletlerin
              gelirinden de Kütahya Devlet Hastahanesi'nde ve Sosyal Sigortalar Hastahanesi'nde iki Hisarlı Ahmet odası
              yaptırdık. Konservatuar yüksek lisans çalışmalarında Hisarlı Ahmet ve Kütahya türküleri tercihli konular
              arasında tutulmaktadır. Ayrıca TRT’nin TV ve radyo kanallarında bir çok anma programı yapıldı. Bütün bunlar
              benim için övünç kaynağıdır.
            </p>
            <p>
              Unuttuklarım eksiklerim olabilir. Hisarlı Ahmet'in evladı olarak ve san’atçı kimliğimle onun en yakınında
              bulunan
              bir kişi olarak, bildiklerimi hatırlayabildiklerimi içimden geldiği gibi anlatmaya çalıştım.
            </p>
            <p>
              Siz san’at severler hattâ Hisarlı Ahmet severlerin burada bulunmaları ve çalışmaları, biz Hisarlı
              ailesinin onur ve gurur kaynağıdır. Sizlere ve bu sempozyumu hazırlayan genç arkadaşım Uğur Türkmen’e ve
              emeği geçenlere teşekkür ederim. SAYGILARIMLA…
            </p>
            <p>
              MUSTAFA HİSARLI - Yüksek Mimar, TRT Sanatçısı
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