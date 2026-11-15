# TurnuvaX – E-Spor Turnuva Yönetim ve Takip Sistemi

## 1. Projenin Amacı ve Konusu
Bu proje, **İnternet Programcılığı I** dersi kapsamında PHP kullanarak geliştirilmiş dinamik bir e-spor turnuva ve maç takip sistemidir. Uygulama; karşılaşmaların planlanmasını, skorların simüle edilmesini, takımların puan durumlarının takip edilmesini ve tek bir panel üzerinden yönetilmesini sağlar.

## 2. Projede Bulunan Özellikler
- **Tek Dosya (Single-File) Mimarisi:** Listeleme, yeni maç ekleme ve silme işlemleri doğrudan `index.php` üzerinden yönetilir.
- **Dinamik Listeleme ve Çift Tablo:** Maçlar *Oynanan / Tamamlanan Maçlar* ve *İleride Oynanacak (Bekleyen) Maçlar* olarak iki ayrı grid yapısında listelenir.
- **Aşama Bazlı Simülasyon:** Çeyrek final, yarı final ve büyük final aşamaları butonlar aracılığıyla simüle edilebilir.
- **Veri Doğrulama ve Güvenlik:** Form girişlerinde zorunlu alan kontrolleri yapılır ve XSS koruması için `htmlspecialchars()` fonksiyonu kullanılır.
- **Puan Durumu Hesaplaması:** Maç sonuçlarına göre takımların oynanan maç, galibiyet, mağlubiyet ve puan tablosu otomatik güncellenir.
- **Oturum Yönetimi (`$_SESSION`):** Verilerin sayfa yenilendiğinde kalıcı olması sağlanır.

## 3. Klasör Yapısı
```text
TurnuvaX/
│
├── index.php         # Ana konsol, form işlemleri, silme, simülasyon ve listeleme
├── functions.php     # Ortak PHP fonksiyonları, skor/harita üreticileri ve puan algoritması
│
├── assets/
│   └── style.css     # "True Black" ve 3-4 sütunlu modern ızgara (grid) tasarımı
│
└── README.md         # Proje açıklama dosyası
4. XAMPP Üzerinde Çalıştırma Adımları
XAMPP kontrol panelini açarak Apache servisini başlatın.

Proje klasörünü (TurnuvaX) XAMPP kurulum dizinindeki htdocs klasörüne kopyalayın (C:\xampp\htdocs\TurnuvaX).

Tarayıcınızı açın ve adres çubuğuna şu bağlantıyı yazın:http://localhost/TurnuvaX/index.php

Sol menüden verileri sıfırlayabilir veya paneli kullanarak sistemi test edebilirsiniz.

5. Yapay Zekâ Kullanımı Açıklaması
Kullanılan Araç: Google Gemini

Kullanım Amacı: Projenin tek dosya mimarisine uyarlanması, PHP oturum yönetimi, aşama simülasyon mantığı ve arayüz (CSS grid) iyileştirmeleri konusunda rehberlik alınmıştır.

Örnek İstem (Prompt): "Ayrı ekle ve sil dosyalarını kaldırarak tüm CRUD ve aşama simülasyon işlemlerini tek bir index.php içinde toplayan PHP kodunu hazırlar mısın?"

Öğrenci Katkısı: Kodların yerel sunucuda (XAMPP) test edilmesi, hata ayıklama süreçleri, arayüz renklerinin kişiselleştirilmesi ve kod mantığının açıklanabilir hale getirilmesi öğrenci tarafından gerçekleştirilmiştir.
