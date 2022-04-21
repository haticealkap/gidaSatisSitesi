
# E-Ticaret Sitesi

Laravel, MySQL 



## Proje Özellikleri

- Kullanıcı Giriş Çıkış İşlemi
- Sepet
- Sipariş Verme
- Sipariş Takibi
- Stok Takibi

  
## Proje'nin içeriğinde sunulanlar
1. Kullanıcı giriş çıkış İşlemi ve detayı:
     - sisteme Oturum Açacak ya da Kayıt Olacak ()
     - Sistemdeki kendine ait bilgileri: Görüntüleyecek, Güncelleyebilecek, Şifre sıfırlayacak,
     - Ürünleri Görüntüleyecek, Ürünlerin Ayrıntılarını Görüntüleyecek
     - Ürünleri sepetine ekleyecek, sepetten silecek, toplam tutarı görecek ve sipariş verecek.
     - Üyeliğini pasif edebilecek.

2. Admin Giriş Çıkış İşlemi:
    - Admin: sistemi kontrol edecek/yönetecek. (20 Puan)
    - Ürün Ekleyecek.
    - Ürün Bilgisi, Adeti, Fiyatı Girilecek/Güncellenecek/Silinecek
    - Ürüne ait Fotoğraf ya da Fotoğraflar yükleyecek/güncelleyecek/silecek
    - Ürünleri Satışa Sunacak/Satıştan Kaldıracak, Ürün stok bilgisini kontrol ederek ürünler satılacak
    - Sistemdeki kendine ait bilgileri: Görüntüleyecek, Güncelleyebilecek, Şifre sıfırlayacak
    - Kullanıcıları Yöntecek: Görüntüleme/Güncelleme/Silme/Hesap Dondurma
    - Siparişleri Takip Edecek: Görüntüleme/Siparişi Onaylama
3. Web API kullanarak Kullanıcının anlık bulunduğu konumunda hava durumu sergilendi.
    - Open Weather API'si kullanıldı.
  

## Bilgisayarınızda Çalıştırın

Projeyi klonlayın

```bash
  git clone https://link-to-project
```

Proje dizinine gidin

```bash
  cd my-project
```

Gerekli paketleri yükleyin

```bash
  composer install && composer update
```
Veri Tabanını Local Server'a Kurup .env dosyasına değişkenleri ekleyin

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_DB_name
  DB_USERNAME=your_DB_username
  DB_PASSWORD=your_DB_password
```


Sunucuyu çalıştırın

```bash
  php artisan serve
```

  