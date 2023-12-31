# PHP Login Sistemi

Bu proje, PHP kullanılarak basit bir login sistemi oluşturmayı amaçlar. Aşağıda projeyle ilgili temel bilgiler bulunmaktadır.

## Özellikler

- Kullanıcı kaydı
- Kullanıcı girişi
- Oturum yönetimi
- Güvenlik önlemleri
- Post ve yorum ekleme işlemleri

## Kurulum

1. Bu depoyu bilgisayarınıza klonlayın veya ZIP olarak indirin.
    ```
    git clone https://github.com/farukcagan/php_login_page.git
    ```

2. Proje dizinine gidin.
    ```
    cd php_login_page
    ```

3. `config.php` dosyasını açın ve veritabanı bağlantı bilgilerinizi ayarlayın.

4. `database.sql` dosyasını kullanarak veritabanınızı oluşturun.

5. Tarayıcınızda projeyi görüntülemek için yerel bir sunucu kullanın veya herhangi bir PHP sunucusunda çalıştırın.

## Kullanım

- `index.php` sayfasından kayıt olabilir ve giriş yapabilirsiniz.
- Giriş yaptıktan sonra kullanıcı panelinden profilinizi güncelleyebilirsiniz.
- Güvenlik önlemleri için şifreleme ve salting yöntemleri kullanılmıştır.
