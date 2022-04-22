
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
     - sisteme Oturum Açacak ya da Kayıt Olacak
     - Sistemdeki kendine ait bilgileri: Görüntüleyecek, Güncelleyebilecek, Şifre sıfırlayacak,
     - Ürünleri Görüntüleyecek, Ürünlerin Ayrıntılarını Görüntüleyecek
     - Ürünleri sepetine ekleyecek, sepetten silecek, toplam tutarı görecek ve sipariş verecek.
     - Üyeliğini pasif edebilecek.

2. Admin Giriş Çıkış İşlemi:
    - Admin: sistemi kontrol edecek/yönetecek
    - Ürün Ekleyecek.
    - Ürün Bilgisi, Adeti, Fiyatı Girilecek/Güncellenecek/Silinecek
    - Ürüne ait Fotoğraf ya da Fotoğraflar yükleyecek/güncelleyecek/silecek
    - Ürünleri Satışa Sunacak/Satıştan Kaldıracak, Ürün stok bilgisini kontrol ederek ürünler satılacak
    - Sistemdeki kendine ait bilgileri: Görüntüleyecek, Güncelleyebilecek, Şifre sıfırlayacak
    - Kullanıcıları Yöntecek: Görüntüleme/Güncelleme/Silme/Hesap Dondurma
    - Siparişleri Takip Edecek: Görüntüleme/Siparişi Onaylama

3. Web API kullanarak Kullanıcının anlık bulunduğu konumunda hava durumu sergilendi.
    - Open Weather API'si kullanıldı.
  

## Proje Kurulumu

Projeyi klonlayın

```bash
  git clone https://github.com/haticealkap/gidaSatisSitesi
```

Proje dizinine gidin

```bash
  cd my-project
```

Gerekli paketleri yükleyin

```bash
  composer install && composer update
```
Veri Tabanını PhpMyadmin yardımı ile ekleyin ardından .env dosyasına veritabanı bağlantısını yapın 

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=DB_name
  DB_USERNAME=DB_username
  DB_PASSWORD=DB_password
```


Sunucuyu çalıştırın

```bash
  php artisan serve
```
```bash
  Tebrikler Proje Çalıştı :)))
```