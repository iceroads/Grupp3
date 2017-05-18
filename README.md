Filer ni ska skapa själva!
config.php


2017-05-07. 
Filmer läggs upp av en redaktör. Redaktören står för rateing. 

Filmer
 -ID (INT)
 -Titel (VARCHAR)
 -Producer (INT)
 -Writer (INT)
 -Rate (INT)
 -Genre (VARCHAR)
 -Trailer (VARCHAR)
 -Info (TEXT)
 -ReleaseYear (DATE)
 -Bild (VARCHAR)
 
Personer
 -ID (INT)
 -f_namn (VARCHAR)
 -e_namn (VARCHAR)
 -Födelseår (DATE)
 -Info (TEXT)
 -Bild (VARCHAR)

Roller
 -ID (INT)
 -Roll (INT)
 
Genre ( Bestämda genres )
 -Namn

Sök
 -Skådespelare
 -Filmtitel
 -Genre

Topplista ( baserat på rate )
 -Filmer
