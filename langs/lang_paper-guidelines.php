<?php



if (!$is_secure) {

    exit(0);

}



$lang_paper_guidelines = [

    "paper_guidelines" => [

        "en" => "Full-Text Guidelines",

        "tr" => "Tam Metin Yazım Kuralları"

    ],

    "full_text_guidelines" => [

        "en" => "

<p>The text is to be prepared in Microsoft Word format.</p>

<p>The text is not to exceed 20 pages (including the text, graphics, bibliography and all attachments).</p>

<p style='font-weight: bold; text-decoration: underline'>The format is to be as follows:</p>

<p>Use Times New Roman with 1,5 line spacing and 2,5 cm right-left and top-bottom margins.</p>

<p>The title should be centered, in bold, size 14 and the first letters of each word should be capitalized.</p>

<p>The name of author/authors should be centered and size 12.</p>

<p>The institutions of author/authors should be centered and size 12.</p>

<p>The main titles should be centered, in bold, size 12 and capitalized.</p>

<p>The sub-titles should be aligned left, size 12, with first letters capitalized and in bold.</p>

<p>The text should be prepared with size 12 fonts and 1,5 line spacing.</p>

<p>Titles of graphics, tables and photographs in 12 font-size and in bold.</p>

<p>There should be a blank line between the paragraphs of the text</p>

<p>The first letters of the titles belonging to tables and figures should be capitalized.</p>

<p>The references in the text and in the notes should be in parenthesis with the order, surname/s of the author/s and date of publication (APA 6.0)</p>

<p>Bibliography in last part of the paper should be alphabetically ordered according to the surnames of the authors (APA 6.0)</p>

<a href='https://apastyle.apa.org/style-grammar-guidelines/references/examples'>Click for reference examples of APA 6.0</a>
",

        "tr" => "

<p>Metnin tamamı Microsoft Office-Word ortamında ve 20 sayfayı geçmeyecek biçimde hazırlanmalıdır (metin, grafikler, kaynaklar ve tüm ekler dahil).</p>

<p>Sayfa yapısı soldan, sağdan, yukarıdan ve aşağıdan 2,5 cm boşluk olacak biçimde düzenlenmelidir.</p>

<p style='font-weight: bold; text-decoration: underline'>Yazım formatı aşağıdaki gibi olmalıdır:</p>

<p>Başlık, 14 Punto, ilk harfleri büyük, koyu (bold) ve ortada olmalıdır</p>

<p>Özet, en az 100 en fazla 300 kelimeden oluşan Türkçe ve İngilizce olarak yazılmalıdır (yurtdışı katılımlarda sadece İngilizce özet yeterlidir).</p>

<p>Yazar(lar) Adı, 12 punto ortada olmalıdır.</p>

<p>Yazar(lar) Çalıştığı Kurum ve E-Mail, 12 punto ortada olmalıdır.</p>

<p>Ana Başlıklar, 12 punto, ortada, tüm harfleri büyük ve koyu (bold) yazılmalıdır</p>

<p>Alt Başlıklar, 12 punto, sola dayalı, ilk harfleri büyük ve koyu (bold) olmalıdır</p>

<p>Metin, 12 punto, sol ve sağ kenarlara dayalı, 1,5 satır aralığıyla yazılmalıdır</p>

<p>Metnin bölümleri (Alt Başlıkları) arasında bir satır aralığı boşluk bırakılmalıdır.</p>

<p>Grafik, Tablo ve Fotoğraf ortada; Başlıkları, 12 punto, koyu, ilk harfleri büyük olmalıdır</p>

<p>Dipnotlar, 10 punto ve tek satır aralığıyla yazılmalıdır</p>

<p style='font-weight: bold; text-decoration: underline'>Alıntılar (atıflar, göndermeler) yazar soyadı / soyadları, yayın yılı ve sayfa no olarak parantez içerisinde belirtilmelidir (APA 6.0 Yöntemi):</p>
<p>ÖRNEK 1 (tek yazarlı)--> (Türkmen, 2015: 24)</p>
<p>ÖRNEK 2 (iki yazarlı)--> (Green and Goodman 2015: 45) veya (Işıkhan ve Özcan 2008: 13)</p>
<p>ÖRNEK 3 (çok yazarlı)--> (Walter vd., 1995: 25)</p>
<p>ÖRNEK 4 (birden fazla gönderme)--> (Akbulut ve Doğan, 2013: 47; Şencan, 2003:78; Tonta, 2010: 48)</p>


<p style='font-weight: bold; text-decoration: underline'>Kaynaklar bildirinin sonunda yer almalı ve yazar soyadlarına göre alfabetik olarak sıralanmalıdır (APA 6.0 Yöntemi):</p>
<p>ÖRNEK 1 (kitap)--> Türkmen, U. (2015). <text style='font-style: italic'>Müzik Eğitimi</text>, Kocatepe Yayınları, Afyonkarahisar</p>
<p>ÖRNEK 2 (kitap içi bölüm)--> Dillard, J. P. (2020). Currents in The Study of Persuasion. In M. B. Oliver, A. A. Raney, & J. Bryant (Eds.), <text style='font-style: italic'>Media Effects: Advances in Theory and Research</text> (4th ed.), pp. 115–129. Routledge.</p>
<p>ÖRNEK 3 (e-kitap) --> Svendsen, S., & Løber, L. (2020). <text style='font-style: italic'>The Big Picture/Academic Writing: The One-Hour Guide</text> (3rd digital ed.), Forlag Publ., https://thebigpicture-academicwriting.digi.hansreitzel.dk/</p>
<p>ÖRNEK 4 (dergi) --> Park, M.W., & Lee, E. (2013). Similarity Measurement Method between Two Songs by Using the Conditional Euclidean Distance, <text style='font-style: italic'>WSEAS Transactions on Information Science and Applications</text> , Vol. 10, No. 12, pp. 381-388</p>
<p>ÖRNEK 5 (bildiri kitapçığı) --> Ozcan, G., Isikhan C., and Alpkocak, A. (2005). Melody Extraction on MIDI Music Files, In Proc. of <text style='font-style: italic'>7th IEEE International Symposium on Multimedia (ISM’05)</text>, Irvine, USA, pp. 8-17 </p>
<p>ÖRNEK 6 (tez) --> Yıldırım, O. M. (2020). <text style='font-style: italic'>Bilgisayar Tabanlı Müzik Analizinde MIDI ToolBox Kullanımı</text>, Yüksek
Lisans Tezi, Danışman: Prof. Dr. Cihan Işıkhan, Müzik Teknolojisi Bilimdalı, Güzel Sanatlar Enstitüsü, Dokuz Eylül Üniversitesi</p>
     
<a href='https://apastyle.apa.org/style-grammar-guidelines/references/examples'>Daha fazla kaynakça örneği ve APA hakkında bilgi için tıklayınız.</a>

            "

    ]

];



?>