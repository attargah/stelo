
---

# Stelo | Backend Developer Teknik Değerlendirme Ödevi

Bu proje, iş başvurusu için oluşturulmuş teknik değerlendirme ödevidir.

## Kurulum

Projenin doğru bir şekilde çalışabilmesi için aşağıdaki adımları takip edebilirsiniz:

1. **Proje Deposu'nu Klonlayın**:
   ```bash
   git clone https://github.com/attargah/stelo.git
   ```

2. **Proje Dizini'ne Geçin**:
   ```bash
   cd stelo
   ```

3. **Bağımlılıkları Yükleyin**:
   ```bash
   composer update
   ```

4. `.env` Dosyasını Oluşturun:
   `env.example` dosyasını referans alarak bir `.env` dosyası oluşturun.

5. **Veritabanı Migrations ve Seed İşlemlerini Çalıştırın**:
   ```bash
   php artisan migrate --seed
   ```

6. **Icon Cache'ini Temizleyin**:
   ```bash
   php artisan icon:cache
   ```

7. **Depolama Bağlantısını Yapın**:
   ```bash
   php artisan storage:link
   ```

## Kullanım

Projenin geliştirme ortamında çalışabilmesi için aşağıdaki komutu kullanarak sunucuyu başlatabilirsiniz:

```bash
php artisan serve
```

### Varsayılan Kullanıcılar

Seed dosyasını çalıştırdığınızda, aşağıdaki kullanıcılar otomatik olarak oluşturulacaktır:

1. **Super Admin Kullanıcısı**:
    - **E-posta**: `admin@stelo.com`
    - **Şifre**: `admin1234`

2. **User Kullanıcısı**:
    - **E-posta**: `user@stelo.com`
    - **Şifre**: `user1234`

---
