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
        "tr" => "Teşekkürler"
    ],
    "iletilmistir" => [
        "en" => "Your submission has been sent to us.",
        "tr" => "Başvurunuz tarafımıza iletilmiştir."
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
        "en" => "We have received your study, titled {title} for Hisarli Ahmet Symposium. <br>Best regards.",
        "tr" => "Hisarli Ahmet Sempozyumu için göndermiş olduğunuz {title} başlıklı çalışmanız tarafımıza iletilmiştir. <br>Sağlıklı günler dileriz."
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
        "en" => "Name Surname",
        "tr" => "Ad Soyad"
    ],
    "kurum" => [
        "en" => "Institution (Programme if student)",
        "tr" => "Kurum (Öğrenciyse program)"
    ],
    "email" => [
        "en" => "Email (Actual, in use)",
        "tr" => "Email (Güncel, sürekli kullanılan)"
    ],
    "telefon" => [
        "en" => "Mobile Phone",
        "tr" => "Cep Telefonu"
    ],
    "adres" => [
        "en" => "Shipping Address",
        "tr" => "Gönderi Adresi"
    ],
    "kisa_ozgecmis" => [
        "en" => "Brief Resume (Max. 50 words)",
        "tr" => "Kısa Özgeçmiş (En fazla 50 kelime)"
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
        "tr" => "Türkçe Özet Başlığı"
    ],
    "ozet_basligi_en" => [
        "en" => "English Abstract Title",
        "tr" => "İngilizce Özet Başlığı"
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
        "en" => "Keywords (3 - 5 words)",
        "tr" => "Anahtar Kelimeler (3 - 5 adet)"
    ],
    "anahtar_kelimeler_tr" => [
        "en" => "Turkish Keywords (3 - 5 words)",
        "tr" => "Türkçe Anahtar Kelimeler (3 - 5 adet)"
    ],
    "anahtar_kelimeler_en" => [
        "en" => "English Keywords (3 - 5 words)",
        "tr" => "İngilizce Anahtar Kelimeler (3 - 5 adet)"
    ],
    "aciklama" => [
        "en" => "Comments / Requests (If any)",
        "tr" => "Açıklamalar / Talepler (Eğer varsa)"
    ],
    "bildirinin_kapsadigi_altbaslik" => [
        "en" => "Abstract's Subcategory",
        "tr" => "Bildirinin Kapsadığı Altbaşlık"
    ],
    "seciniz" => [
        "en" => "Please Select...",
        "tr" => "Seçiniz..."
    ],
    "iletisim_kurulacak_yazar" => [
        "en" => "Corresponding Author",
        "tr" => "İletişim Kurulacak Yazar"
    ],
    "oturumlarda_tanitilmak" => [
        "en" => "Requested to introduce the author during sessions.",
        "tr" => "Oturumlarda tanıtılmak amacıyla talep edilmektedir."
    ],
    "olasi_belge" => [
        "en" => "Requested for possible document / material shipping.",
        "tr" => "Olası belge / materyal gönderimleri için talep edilmektedir."
    ]
];

?>