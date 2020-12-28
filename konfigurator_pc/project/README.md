<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Konfigurator PC

### Features

- Aplikacja pomaga w skompletowaniu zestawu PC agregując aktualne ceny komponentów oraz ich parametry takie jak wydajność i kompatybilność z innymi podzespołami.
- Użytkownik może zadać interesujący go przedział cen i wygenerować optymalną konfigurację.
- Możliwe jest także samodzielne stworzenie konfiguracji i przechowywanie jej swoim profilu. Konfiguracje takie są domyślnie prywatne, ale można je udostępnić za pomocą prywatnego linku, wybranemu użytkownikowi serwisu lub wszystkim udostępniając konfigurację na swoim profilu.
- Pracownicy witryny mogą weryfikować wybrane konfiguracje sprzętu - po weryfikacji konfiguracja zostaje wyróżnia ikoną “zweryfikowana”. Jeżeli dodatkowo zostaną wykonane testy wydajności konfiguracja otrzyma ikoną “benchmark” I zostanie odpowiednio wyróżniona - wyniki testów można przeglądać na stronie.


### Installation
- `$ copmoser install`
- `$ cp .env.example .env`
- `$ php artisan key:generate`
  
### Startup
- `$ docker run --name=mysql --net=host --rm --env MYSQL_ROOT_PASSWORD=root123 --env MYSQL_DATABASE=test --env MYSQL_USER=test --env MYSQL_PASSWORD=test123 -d mysql/mysql-server:8.0`
- `$ php artisan serve -p 8080`

## Authors
- Kamil
- Michał
- Dawid
- Bartosz

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
