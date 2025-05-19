## Prerequisites

- PHP versi 8.2.12
- MySQL

## Cara running
- ```git clone https://github.com/dimassp/TestIMS.git```
- ```cd TestIMS```
- Konfigurasi/buat file .env
- ```composer install```
- ```php artisan migrate```
- ```php artisan db:seed --class=ContractSeeder```
- ```php artisan db:seed --class=InstalmentScheduleSeeder```
- ```php artisan serve```
Endpoint: localhost:8000/instalment