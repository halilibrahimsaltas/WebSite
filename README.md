# Kişisel Portföy Web Sitesi

## Proje Açıklaması

Bu proje, modern ve responsive bir kişisel portföy web sitesidir. Ziyaretçilere profesyonel deneyimlerimi, projelerimi ve iletişim bilgilerimi sunmaktadır.

## Özellikler

- Responsive tasarım (tüm cihazlara uyumlu)
- Dinamik iletişim formu
- Animasyonlu scroll efektleri
- Modern ve kullanıcı dostu arayüz
- Proje portföyü
- Eğitim ve deneyim bilgileri

## Teknolojiler

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- Font Awesome
- jQuery

## Kurulum

### Gereksinimler

- PHP 7.0 veya üzeri
- MySQL 5.7 veya üzeri
- Web sunucusu (Apache/Nginx)

### Adımlar

1. Projeyi bilgisayarınıza klonlayın
2. XAMPP veya WAMP gibi bir local web sunucusu kurun
3. Proje dosyalarını web sunucusunun kök dizinine kopyalayın
4. MySQL veritabanını oluşturun:
   - PhpMyAdmin'e giriş yapın
   - Yeni bir `contact_db` veritabanı oluşturun
   - Aşağıdaki SQL kodunu çalıştırın:
   ```sql
   CREATE TABLE contact_form (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL,
       topic VARCHAR(255) NOT NULL,
       message TEXT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```
5. `index.php` dosyasındaki veritabanı bağlantı bilgilerini düzenleyin

## Çalıştırma

1. Web sunucusunu başlatın (XAMPP/WAMP)
2. Tarayıcıdan `http://localhost/WebSite` adresine gidin

## Dizin Yapısı

```
WebSite/
├── css/
│   └── style.css
├── js/
│   └── script.js
├── images/
│   └── [resim dosyaları]
├── index.php
└── README.md
```

## İletişim

- LinkedIn: [Halil İbrahim SALTAŞ](https://www.linkedin.com/in/halilibrahimsaltas/)
- GitHub: [halilibrahimsaltas](https://github.com/halilibrahimsaltas)
- E-posta: h.ibrahimsaltas@gmail.com

[[Website Page]([https://halilsaltas.com](https://halilsaltas.com/))](https://halilsaltas.com/)

![Image](https://github.com/user-attachments/assets/4c3f56cb-69a9-40bb-8d35-24c1a1fdbf5f)
![Image](https://github.com/user-attachments/assets/eb704fff-8fc4-4577-8354-a5506e57b5b4)

#### Usage

1-Open the index.php file in a web browser.

