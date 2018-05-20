# relaypi
Find the scripts for the relay examples here


### 1. Added www user
```
sudo groupadd www-data
sudo usermod -a -G www-data www-data
```

### 2. Add missing apt source, to the bottom of this file `/etc/apt/source.list`
```
deb http://mirrordirector.raspbian.org/raspbian/ stretch main contrib non-free rpi
```

### 3. Add this block to this file `/etc/apt/preferences`
```
Package: *
Pin: release n=jessie
Pin-Priority: 600
```

### 4. update sources
```
sudo apt-get update
```

### 5. install apache2 server

```
sudo apt-get -y install -t stretch apache2
```

### 6. install php modules
```
sudo apt-get -y install -t stretch php7.0 php7.0-curl php7.0-gd php7.0-fpm php7.0-cli php7.0-opcache php7.0-json php7.0-mbstring php7.0-xml php7.0-zip php7.0-mysql
sudo apt-get -y install -t stretch libapache2-mod-php7.0
```

### 7. edit main index.php file `/var/www/html/info.php`
```
<?php echo "server is online </br>"; phpinfo(); ?>
```

## Pin configuration for Raspberry PI 2 b

![Raspberry PI 2 b](https://www.raspberrypi.org/documentation/usage/gpio/images/gpio-numbers-pi2.png "Pin config")

You need for 4 relays following pins
-1 5V connect with VCC on relay board
-3 GND connect with GNC on relay board

-2 connect with IN1 on relay board
-3 connect with IN2 on relay board
-4 connect with IN3 on relay board
-17 connect with IN4 on relay board