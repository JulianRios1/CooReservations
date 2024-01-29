### CooReservation.

- Aplicación orienta a la reserva de espacios del cowordking

# Instalacción
- Clone el poyecto
- Valide el ambiente contenga una versión minima de php  8.1.24
`$ php -v`
- Valide el ambiente contenga una versión de mariaDb 10.3.38
  `$ sudo /etc/init.d/mysql status`

####Realice la instalación

`$ composer install`

`$ php artisan migrate`

`$ php artisan db:seed`

