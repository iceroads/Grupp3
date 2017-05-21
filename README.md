Filer ni ska skapa själva!
* app/config.php
* public/.htaccess

Exempel på config.php fil: 
```php
<?php

$config = [
    "database" => [
        "host"  => "127.0.0.1",
        "username"  => "root",
        "password"  => "",
        "database"  => "movie"
    ],
];

```

I public mappen skall vi skapa en .htaccess fil som ska se ut såhär
```
Options -MultiViews
RewriteEngine on

RewriteBase /Grupp3/public

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
```
Det är viktigt att du skriver din egen sökväg till projektet på raden RewriteBase. tillexempel<br>
localhost<strong>/grupp3/public</strong><br>
localhost<strong>/projekt/grupp3/public</strong>
 
Om det inte fungerar efter du har lagt in .htaccess. Då är denna raden fel:

```
RewriteBase /Grupp3/public
```


* **movies**
  * ID (INT)
  * Titel (VARCHAR)
  * Producer (INT)
  * Writer (INT)
  * Rate (INT)
  * Genre (VARCHAR)
  * Trailer (VARCHAR)
  * Info (TEXT)
  * ReleaseYear (DATE)
  * Bild (VARCHAR)
 
* **persons**
  * ID (INT)
  * f_namn (VARCHAR)
  * e_namn (VARCHAR)
  * Födelseår (DATE)
  * Info (TEXT)
  * Bild (VARCHAR)

* **roles**
  * ID (INT)
  * Roll (INT)
 
* **genres** ( Bestämda genres )
  * Namn

* **Sök**
  * Skådespelare
  * Filmtitel
  * Genre

### Topplista ( baserat på rate ) -- startsida
