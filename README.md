## Szkolenie-PHP 
```PHP 7.4 + xDebug + composer + nginx```

### Wstęp

docker-compose konfiguruje 2 kontenery:
* webserver - kontener z nginx skonfigurowanym do obsługi PHP 
* php - PHP w wersji 7.4 FastCGI + xDebug 3

Folder z aplikacją php znajduje się w katalogu src i ten katalogo podmontowany został do /var/www/html
Aplikacja po porawanym uruchomieniu będzie dostępna pod adresem
http://localhost:8080

### Uruchomienie
    docker-compose build
    docker-compose up
### Debagowanie
Możesz już dodać pierwszy breakpoint (miejsce gdzie kod ma sie zatrzymać). 
W przykładowym projekcie możesz to zrobić w pliku src/index.php.
Następnie należy włączyć nasłuchiwanie w PhpStorm za pomocą ikony lub (*Run* | *Start Listening for PHP Debug Connections*).
Możesz teraz uruchomić http://localhost:8080 i włączyć debugowanie za pomocą pluginu *Xdebug* helper w Chrome (https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc).

Więcej na temat debugowania w innych przeglądarkach: https://www.jetbrains.com/help/phpstorm/browser-debugging-extensions.html
