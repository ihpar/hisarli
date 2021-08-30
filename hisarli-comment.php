<?php
session_start();

$is_secure = true;

$page_name = "hisarli-comment";

require_once "dbms/utils.php";

require_once "modules/header_prefixes.php";

require_once "langs/lang_global.php";

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
          font-size: 14px;
          margin-bottom: 16px;
      }

      @media (max-width: 839px) {
          .pad-10-per {
              padding: 0 24px;
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
            <h3 class="center-text sec-h3">Hisarlı Ahmet Hakkında Bir Yorum</h3>
            <p>
              Türkmen, U. (2013). Hisarlı Ailesi, Kütahya Belediyesi Yayınları, Kütahya.
            </p>
            <p>
              Birçok Kütahya türküsü Hisarlı’dan derlenmiştir. Hisarlı Ahmet’in Türk müzik kültürüne en önemli katkısı
              Kütahya türkülerini kendine has yorumuyla icra etmesidir. Yorumunu türkülere yansıtmıştır. Hisarlı’nın
              yorumladığı Kütahya türkülerinin daha farklı olduğu, yöreyi daha güzel yansıttığı uzmanlarca da dile
              getirilmiştir. Sesi ve sazındaki kendine has tavrı; Türk halk müziğinin önemli icracıları arasında yer
              almasını sağlamıştır. Yaşadığı dönemde çevresine, vefatından sonra da ilgi duyan herkese feyz vermiştir.
              Kütahya’nın tanınmasında Kütahya kültürünün önemli simgelerinden biri olmuştur. Birçok kişi onun sayesinde
              Kütahya’ya daha çok ilgi göstermiş, kültürünü merak etmiştir. Eruzun’un deyimiyle kimilerini Kütahya’ya
              aşık etmiştir. Onun yorumuyla derlenen türküler bugün Türk halk müziğinin en seçkin eserleri arasında
              görülür.
            </p>
            <p>
              Hisarlı; öğrenmeye açık biridir. Askerde öğrendiği klarneti sivil hayatında da devam ettirmiştir.
              Çevresindeki saz ve söz sanatçılarını ilgiyle takip etmiş, onlardan öğrendiklerini hayranlık duyulacak
              olan hafızasına eksiksiz kaydetmiş ve en önemlisi bu hazineyi saklamamıştır. Toplamış ve dağıtmıştır.
            </p>
            <p>
              Hisarlı; öğretmeye de açıktır, hatta heveslidir. Çevresindeki gençleri saza yönlendirmiş, kendi öğretim
              yöntem ve stratejisiyle saza başlatmıştır. Saz öğretimi yanında Kütahya türkülerinin doğru olarak çalınıp
              söylenmesinde de etkili olmuştur. Kütahya oyunlarının nasıl oynanacağını bizzat kendisi gösterecek kadar
              iyi bilmektedir.
            </p>
            <p>
              Kendi deyimiyle ustası yoktur ama devrindeki tüm saz ve söz ustalarından yararlanmıştır. Kadın çengilerde
              bunların arasındadır ve bunu çekinmeden dile getirir.
            </p>
            <p>
              Hisarlı; ağabeyinin hanımını eş olarak kabul etmiştir. Bugün anlaşılması zor görünen bu adet onu nasıl
              etkilemiştir bilemiyoruz. Bildiğimiz ağabeyinden olan çocuğu ile kendi çocukları arasında hiçbir zaman
              ayırım yapmadığıdır.
            </p>
            <p>
              Hisarlı; işinde ciddi bir adamdır. Prensipleri vardır. Ona göre; türküler doğru okunmalı, türkü
              gecelerinde istekte bulunulmamalı, etkinlik zamanında başlamalıdır. Aile yaşamında da titiz ve kuralcı
              kişiliği bilinir. Bununla birlikte günlük yaşamında son derece hoş görülü ve şakacıdır. Çocukluğundaki
              uyumlu hali yaşamı boyunca devam etmiştir. Esnaftan komşuları onu anlatmaya başladıklarında hemen hepsinin
              gözleri dolmuştur. Alaattin Özekmekçi’nin “onu anlayabilmek için onunla yaşamak lazımdı” demesi de
              bundandır.
            </p>
            <p>
              Hisarlı; ekonomik olarak hani derler ya hep bıçak sırtında yaşamıştır. Elini ayağını çekinceye kadar
              müzikle geçimini sağlamaya çalışmış, bununla birlikte hiçbir zaman hayatının merkezine parayı almamıştır.
              Ücretsiz olarak saz derslerini vermesi buna en güzel örnektir. Bakım, onarım işlerinden de cüzi miktarda
              ücret aldığı bilinir.
            </p>
            <p>
              Hisarlı; okuma ve okutma sevdalısıdır. Her ne kadar kızı Huriye Hanım hafif sitem etse de oğlu Mustafa’nın
              okuması için gösterdiği gayret takdire şayandır.
            </p>
            <p>
              Hemen her Türk ailesinde olduğu gibi çocuklarıyla ilişkileri belli bir mesafede olmuştur. Ama çocukları
              arasında ayrım yapmadığıyla övünmüş, hayatını onlara adamış, eşi vefat ettiğinde tekrar evlenmemiştir.
            </p>
            <p>
              Hisarlı; kendi kültürüne her daim sahip çıkmıştır. Gezekleri önemsemiş ve sağlığı elverdiğince
              katılmıştır. Gezeklerden çok şey öğrendiğini ve çok şeylerin de öğretildiğini düşünmüştür. Memleketine
              müzik yoluyla hizmet etmiş, ne zaman çağrılsa memleketini ilgilendiren etkinliklerde, Halkevleri, Kızılay,
              Yeşilay gibi kurum ve kuruluşlarda da hizmet etmiş, görev almıştır.
            </p>
            <p>
              Yaşantısında dini vecibelerini yerine getirmeye çalışan Hisarlı; hemen her fırsatta ezan okumuş, namaz
              vakitlerine dikkat etmiş, müezzinlik yapmış, hacca gitmiştir. Daha da önemlisi ise tüm bu yaşantısı
              sürecinde müzikle ilgisini koparmamıştır. Bu yönüyle de örnek alınması gereken bir kişiliği vardır.
            </p>
            <p>
              Gençliğine dair kesin bilgiler olamamakla beraber, bilinenin aksine Hisarlı içki kullanmamıştır.
            </p>
            <p>
              Her gün binlerce vatandaşımız Hisarlı’nın heykelinin önünden geçmektedir. Saz çalan bir adam onlara
              tebessümle bakmaktadır. Onlarsa ona bakarlar mı bilinmez.
            </p>
            <p>
              Hisarlı’ya hak ettiği değer hem yaşarken hem de vefatından sonra verilmiştir diye düşünüyorum. Yaşarken
              maddi sıkıntılar çekmesi, büstünün yapılıp sonradan kırılması, gibi bazı kesintiler olsa da Hisarlı
              gönüllerde sürekli yer almış, hatırlanmıştır.
            </p>
            <p>
              Son yıllarda özellikle adıyla sempozyum düzenlenmesi, heykelinin Kütahya ilinin merkezinde açılması ona
              verilen değerin devam ettiğinin göstergesidir.
            </p>
            <p>
              Bununla birlikte dükkânın olduğu ev veya bir başka Kütahya evi mutlak suretle “Hisarlı Ahmet Kültür Sanat
              Evi” olarak açılmalıdır.
            </p>
            <p>
              Sempozyumun sürdürülebilirliği için yerel halkın desteğini artırıcı çalışmalar yapılmalıdır.
            </p>
            <p>
              Sempozyum zaman için de Hisarlı Ahmet Kültür ve Sanat günlerine dönüştürülmelidir.
            </p>
            <p>
              Bu etkinlikler Kütahya’da yaşayan bireylerin sosyo-kültürel değişimlerinde etken olacaktır.
            </p>
            <p>
              Bir diğer önemli konu ise türkülerin icralarındaki farklılıklardır.
            </p>
            <p>
              TRT repertuarı, Mustafa Hisarlı ve İsmail Pektaş’ın yanı sıra Mustafa Salün’ün yayınladığı kitaplar başta
              olmak üzere birçok notalarıyla yazılmış türkü kitapları incelendiğinde; Mustafa Hisarlı başta olmak üzere,
              TRT kayıtları, Hisarlı’nın kendi sesinden kayıtları ve özellikle “geleneksel icrayı koruduklarını” iddia
              eden yöresel saz sanatçıları dinlenildiğinde birçok farklılıkların olduğu tespit edilmiştir. Geleneksel
              kültürlerde bu tür farklılıkların olabileceği düşüncesi göz ardı edilmemekle birlikte doğru bir kültür
              aktarımının da yapılmadığı düşüncesindeyim.
            </p>
            <p>
              Bu konuda maalesef gerçekçi olmak zorundayım. Sadece benim dediğim doğrudur anlayışıyla sorunlara çözüm
              bulunamayacaktır. Kütahyalı bir halk müziği sevdalısı, kültürünü özümsemeye çalışan ve en önemlisi bu
              kültürün aktarımında kendince öğretim yöntem ve stratejiler geliştirerek çalışmalar yapan bir “pedagog”
              olarak durumdan son derece rahatsız olduğumu belirtmek isterim.
            </p>
            <p>
              Yapılması gereken, ehil olanlar hayattayken türkülerin geleneksel söyleme ve çalma biçimlerinin tekrar
              gözden geçirilmesi çalışmalarının bir an önce başlatılmasıdır. Alanında uzman olanlar bir araya gelmeli,
              alandan (yöreden) yetişen uzmanlardan elde edilen kayıtlar mutlaka eski kayıtlarla karşılaştırılmalıdır.
            </p>
            <p>
              Mustafa Hisarlı hayattadır ve önemli bir veri kaynağıdır. Hisarlı Ahmet’in geleneğini sürdürdüğünü iddia
              eden ve her Cuma akşamı türküler söyleyip, zeybekleri oynayanlara hala rahatlıkla ulaşılmaktadır.
            </p>
            <p>
              Bir bilim insanı olarak her türlü veriye ulaşılması, elde edilen verilerin işlenmesi, işlenen verilerin
              ilgililerle tekrardan gözden geçirilmesi ve kamuoyu ile paylaşılması taraftarıyım.
            </p>
            <p>
              Eğitimin en önemli tanımı “kültür aktarımıdır”
            </p>
            <p>
              Kütahya türküleri doğru aktarılmamaktadır.
            </p>
            <p>
              Kısa bir süre önce bir sanatçımız “Havada durna sesi gelir” adlı türkümüze “Zeybek” diyebilmiştir. Kütahya
              türküleri “şarkı” gibi okunmaya başlanmıştır.
            </p>
            <p>
              Hisarlı Ahmet’in yorumladığı türkülerdeki tavırları gelecek kuşaklara aktarmada artık eski özelliklerini
              hemen hemen yitirmiş olan ve günümüz kültürel değişim ve gelişimlerinden etkilemiş olan “gezekler” değil;
              konservatuvarlar önemli bir etken olmalıdırlar.
            </p>
            <p>
              Bilimsel araştırma projeleri yapılmalıdır.
            </p>
            <p>
              Hisarlı Ahmet’in ciddiyetine günümüz müzik eğitimcileri, bilimcileri ve sanatçıları ancak böyle sahip
              çıkabilir.
            </p>
            <p>
              Kütahya denince türküleri, Kütahya türküleri denince ise «Hisarlı Ahmet» akla gelmektedir.
            </p>
            <p>
              Türkülerimizin «senfonileri» olarak adlandırılan Kütahya türkülerinin en önemli kaynak kişilerinden
              Hisarlı Ahmet’in ismi Kütahya için eksikliği hissedilen uluslararası bir sanat etkinliğinin ismi olarak
              belirlenmesi dernek yönetimince uygun görülmüştür.
            </p>
            <p>
              Zaman içerisinde görülmüştür ki bu karar her açıdan doğrudur.
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