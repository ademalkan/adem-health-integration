
# Türkçe

# Ulusal Sağlık Sistemi Laravel Entegrsayonu
Merhaba, Ulusal Sağlık Sistemi için geliştirmiş olduğum laravel entegrasyonu. 04.02.2023 tarihi itibari ile bütün servisleri içermektedir. 
https://ussservis.saglik.gov.tr/ adresinde bulunan bütün endpointleri içermektedir. 

# Kurulum

composer require adema/adem-health-integration diyerek paketi kuralım.

![image](https://user-images.githubusercontent.com/43451577/216787142-0e4af076-d7ce-45dd-b120-f3eec5a985f5.png)

USS dokumantasyonunda bulunan herhangi bir servis adını direkt method olarak istenilen parametreleri gönderelim.

USS Dokumantasyonu => https://ussservis.saglik.gov.tr/

![image](https://user-images.githubusercontent.com/43451577/216787317-65063bc8-8825-4d6e-a947-73aa74034c58.png)

Bize servis response döndürüyor

![image](https://user-images.githubusercontent.com/43451577/216787330-26347b74-0d43-4fd1-9bd2-b54fe75ae948.png)


Sadece USS dokumantasyonunda ihtiyaç duyduğunuz methodu ve parametrelerini girerek entegrasyon işleminizi yapabilirsiniz.

## NOT : Bütün servisleri kullanırken istenilen parametrelere ek olarak her seferinde istenilen servisin auth bilgilerini de parametre olarak göndermelisiniz.


