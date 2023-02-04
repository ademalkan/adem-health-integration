
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



# English


# National Health System Laravel Integration
Hello, Laravel integration I developed for the National Health System. It covers all services as of 04.02.2023.
It includes all endpoints available at https://ussservis.saglik.gov.tr/.

# Setup

Let's install the package by saying composer require adema/adem-health-integration.

![image](https://user-images.githubusercontent.com/43451577/216787142-0e4af076-d7ce-45dd-b120-f3eec5a985f5.png)

Let's send the desired parameters as a direct method to any service name found in the USS documentation.

USS Documentation => https://ussservis.saglik.gov.tr/

![image](https://user-images.githubusercontent.com/43451577/216787317-65063bc8-8825-4d6e-a947-73aa74034c58.png)

It returns us a service response

![image](https://user-images.githubusercontent.com/43451577/216787330-26347b74-0d43-4fd1-9bd2-b54fe75ae948.png)


You can perform your integration process by simply entering the method and parameters you need in the USS documentation.
