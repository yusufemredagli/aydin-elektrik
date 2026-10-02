# Aydın Elektrik Ankara — PHP Local SEO Website v3

`aydinelektrikankara.com` için hazırlanmış, cPanel/Apache/PHP 8.2+ uyumlu, bağımlılıksız, mobil öncelikli ve yerel SEO odaklı kurumsal web sitesi.

## v3 ile gelen ana geliştirmeler
- Ankara'nın **25 ilçesi** tek bir hizmet alanı mimarisinde tanımlandı.
- Çankaya, Keçiören, Mamak, Etimesgut, Eryaman, Yenimahalle, Sincan, Altındağ, Gölbaşı, Pursaklar, Kahramankazan, Çubuk, Akyurt ve Polatlı için özgün ve kullanıcı odaklı detay sayfaları eklendi.
- Ankara geneli tek bir güçlü hub sayfasında toplandı; sırf anahtar kelime için yüzlerce kopya mahalle sayfası üretilmedi.
- İlçe sayfalarında fiziksel şube varmış gibi sahte adres kullanılmıyor; gerçek işletme adresinin Sincan olduğu açıkça belirtiliyor.
- Hizmet sayfalarının `areaServed` yapıları Ankara'nın hizmet alanlarıyla genişletildi.
- Elektrik arıza, acil elektrikçi, tesisat, pano, priz, aydınlatma, kamera güvenlik ve yangın alarm sayfaları Ankara bölge sayfalarıyla güçlü biçimde iç linklendi.
- WhatsApp ve telefon dönüşüm akışları bölge/hizmete göre mesaj ön-dolgusu ile geliştirildi.
- Bölge sayfası arama filtresi eklendi; hiçbir takip veya harici ağ isteği yapmaz.
- KVKK aydınlatma metni ve gizlilik politikası eklendi.
- CSP sıkılaştırıldı; clickjacking koruması `DENY` seviyesine getirildi; PHP hata/oturum ayarları güçlendirildi.
- PWA/favicon seti 192/512 px ve Apple Touch Icon ile tamamlandı.
- cPanel yayın rehberi, launch checklist ve 90 günlük SEO planı güncellendi.

## Teknik yapı
- PHP 8.2+ önerilir.
- Veritabanı gerekmez.
- Composer / Node / framework gerekmez.
- Apache/LiteSpeed `mod_rewrite` uyumlu temiz URL yapısı kullanır.
- `https://aydinelektrikankara.com` canonical domaindir.

## Lokal test

```bash
php -S 127.0.0.1:8080 router.php
```

Ardından `http://127.0.0.1:8080` adresini açın. PHP'nin dahili geliştirme sunucusu `.htaccess` kurallarını uygulamaz; HTTPS/canonical yönlendirmeleri cPanel/Apache-LiteSpeed ortamında çalışır.

## Yayın
Adım adım kurulum için `CPANEL-YAYIN-REHBERI.md`, yayın sonrası SEO için `SEO-LAUNCH-CHECKLIST.md` ve `SEO-90-GUN-PLANI.md` dosyalarını kullanın.
# aydin-elektrik
# aydin-elektrik
