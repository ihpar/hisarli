<?php

if (!$is_secure) {
    exit(0);
}

$lang_abs_sub = [
    "bildiri_ozeti_gonderim_formu" => [
        "en" => "Abstract Submission Form",
        "tr" => "Bildiri Özeti Gönderim Formu"
    ],
    "tesekkurler" => [
        "en" => "Thank you",
        "tr" => "Sn."
    ],
    "iletilmistir" => [
        "en" => "Your submission has been sent to us.",
        "tr" => "Başvurunuz tarafımıza iletilmiştir."
    ],
    "ana_sayfaya_don" => [
        "en" => "BACK TO HOMEPAGE",
        "tr" => "ANA SAYFAYA DÖN"
    ],
    "uzgunuz" => [
        "en" => "Sorry, your submission could not be delivered.",
        "tr" => "Üzgünüz, başvurunuz iletilemedi."
    ],
    "form_eksik" => [
        "en" => "There are missing fields in your form. <br>Submission was not delivered.",
        "tr" => "Formunuzda eksik alanlar bulunmaktadır. <br>Gönderiniz iletilmedi."
    ],
    "beklenmedik_hata" => [
        "en" => "An unexpected error occurred. <br>Submission could not be delivered.",
        "tr" => "Beklenmeyen bir hata oluştu. <br>Gönderiniz iletilemedi."
    ],
    "has_geri_bildirim_konusu" => [
        "en" => "Hisarli Ahmet Symposium Abstract Submission",
        "tr" => "Hisarli Ahmet Sempozyumu Ozet Gonderimi"
    ],
    "has_geri_bildirim_mesaji" => [
        "en" => "We have received the abstract entitled '{title}' that you submitted for the 12th International Hisarli Ahmet Symposium to be held at the Kütahya Health Sciences University, in June 9-12, 2022.
<p>The result of the evaluation of your work by the Symposium Scientific Committee will be announced on the date specified in the symposium calendar.</p>
<p>For more details and information, visit/follow our website: https://hisarliahmet.org/</p>
<p>Thank you for your interest in the symposium.</p>
<p>Sincerely,</p>
<p>Prof. Dr. Uğur Türkmen, Chair of Organizing Committee</p>",
        "tr" => "9-12 Haziran 2022 tarihleri arasında Kütahya Sağlık Bilimleri Üniversitesi’nde 12.’si gerçekleştirilecek Uluslararası Hisarli Ahmet Sempozyumu’na göndermiş olduğunuz '{title}' başlıklı bildiri özetiniz tarafımıza ulaşmıştır.
 <p>Çalışmanızla ilgili Sempozyum Bilim Kurulu tarafından yapılacak değerlendirmenin sonucu sempozyum takviminde belirtilen tarihte ilan edilecektir. Tüm ayrıntılar ve bilgi için lütfen web sitemizi ziyaret/takip ediniz: https://hisarliahmet.org/</p>
 <p>Sempozyuma göstermiş olduğunuz ilgi için teşekkür eder, sağlıklı günler dileriz.</p>
 <p>Prof. Dr. Uğur Türkmen, Sempozyum Düzenleme Kurulu Başkanı</p>"
    ],
    "bos_birakilamaz" => [
        "en" => "This field is required.",
        "tr" => "Bu alan boş bırakılamaz."
    ],
    "gonder" => [
        "en" => "Submit",
        "tr" => "Gönder"
    ],
    "gonderiliyor" => [
        "en" => "Submitting...",
        "tr" => "Gönderiliyor..."
    ],
    "ad_soyad" => [
        "en" => "Name-Surname",
        "tr" => "Ad-Soyad"
    ],
    "kurum" => [
        "en" => "Institution (programme if student)",
        "tr" => "Kurum (öğrenciyse program)"
    ],
    "email" => [
        "en" => "Email (actual, in use)",
        "tr" => "Email (güncel, sürekli kullanılan)"
    ],
    "telefon" => [
        "en" => "Mobile Phone",
        "tr" => "Cep Telefonu"
    ],
    "adres" => [
        "en" => "Shipping Address",
        "tr" => "Posta Adresi"
    ],
    "kisa_ozgecmis" => [
        "en" => "Brief Resume (max. 100 words)",
        "tr" => "Kısa Özgeçmiş (en fazla 100 kelime)"
    ],
    "fotograf_yukleyiniz" => [
        "en" => "Upload Your Photo",
        "tr" => "Fotoğrafınızı Yükleyiniz"
    ],
    "fotograf_secilmedi" => [
        "en" => "No photo selected.",
        "tr" => "Fotoğraf seçilmedi."
    ],
    "ozet_yukleyiniz" => [
        "en" => "Upload Abstract File",
        "tr" => "Özet Dosyanızı Yükleyiniz"
    ],
    "ozet_secilmedi" => [
        "en" => "No file selected.",
        "tr" => "Dosya seçilmedi."
    ],
    "ozet_basligi" => [
        "en" => "Abstract Title",
        "tr" => "Özet Başlığı"
    ],
    "ozet_basligi_tr" => [
        "en" => "Turkish Abstract Title",
        "tr" => "Türkçe Özet Başlık"
    ],
    "ozet_basligi_en" => [
        "en" => "English Abstract Title",
        "tr" => "İngilizce Özet Başlık"
    ],
    "ozet_metni" => [
        "en" => "Abstract (100 - 300 words)",
        "tr" => "Özet (100 - 300 kelime)"
    ],
    "ozet_metni_tr" => [
        "en" => "Turkish Abstract (100 - 300 words)",
        "tr" => "Türkçe Özet (100 - 300 kelime)"
    ],
    "ozet_metni_en" => [
        "en" => "English Abstract (100 - 300 words)",
        "tr" => "İngilizce Özet (100 - 300 kelime)"
    ],
    "yazarlar" => [
        "en" => "Author(s)",
        "tr" => "Yazar(lar)"
    ],
    "yazar_sayisi" => [
        "en" => "Number of Authors: ",
        "tr" => "Yazar Sayısı: "
    ],
    "yazar_indeksli" => [
        "en" => "Author",
        "tr" => "Yazar"
    ],
    "anahtar_kelimeler" => [
        "en" => "Keywords (comma separated, 3 - 5 words)",
        "tr" => "Anahtar Kelimeler (virgül ile ayrılmalıdır, 3 - 5 adet)"
    ],
    "anahtar_kelimeler_tr" => [
        "en" => "Turkish Keywords (comma separated, 3 - 5 words)",
        "tr" => "Türkçe Anahtar Kelimeler (virgül ile ayrılmalıdır, 3 - 5 adet)"
    ],
    "anahtar_kelimeler_en" => [
        "en" => "English Keywords (comma separated, 3 - 5 words)",
        "tr" => "İngilizce Anahtar Kelimeler (virgül ile ayrılmalıdır, 3 - 5 adet)"
    ],
    "anahtar_kelime_sayisi_hata" => [
        "en" => "Min 3, max 5 keywords are allowed.",
        "tr" => "En az 3, en fazla 5 anahtar kelime girebilirsiniz."
    ],
    "aciklama" => [
        "en" => "Comments / Requests (if any)",
        "tr" => "Açıklamalar / Talepler (eğer varsa)"
    ],
    "bildirinin_kapsadigi_altbaslik" => [
        "en" => "Abstract's Subcategory",
        "tr" => "Bildirinin Kapsadığı Altbaşlık"
    ],
    "seciniz" => [
        "en" => "Please Select...",
        "tr" => "Seçiniz..."
    ],
    "altbaslik_seciniz" => [
        "en" => "Please select a subcategory.",
        "tr" => "Lütfen altbaşlık seçiniz."
    ],
    "iletisim_kurulacak_yazar" => [
        "en" => "Corresponding Author",
        "tr" => "İletişim Kurulacak Yazar"
    ],
    "metin_yazim" => [
        "en" => "Fill in the blank from left to right for each line. Do not leave large spaces between words (except paragraph).",
        "tr" => "Metnin her satırını, kutucuğu soldan sağa dolduracak şekilde yazınız. Kelimeler arasında büyük boşluklar bırakmayınız (paragraf başı hariç)."
    ],
    "oturumlarda_tanitilmak" => [
        "en" => "The Resume is requested to introduce the author during sessions.",
        "tr" => "Kısa Özgeçmiş, oturumlarda tanıtılmak amacıyla talep edilmektedir."
    ],
    "olasi_belge" => [
        "en" => "Shipping Address is requested for possible document / material shipping.",
        "tr" => "Posta Adresi, olası belge / materyal gönderimleri için talep edilmektedir."
    ],
    "ozgecmis_limiti" => [
        "en" => "Resume should not exceed 100 words.",
        "tr" => "Kısa Özgeçmiş 100 kelimeyi geçmemelidir."
    ],
    "min_100_words" => [
        "en" => "Abstract should not be less than 100 words.",
        "tr" => "Özet 100 kelimeden az olmamalıdır."
    ],
    "max_300_words" => [
        "en" => "Abstract should not exceed 300 words.",
        "tr" => "Özet 300 kelimeyi geçmemelidir."
    ]
];

?>