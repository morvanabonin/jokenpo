# Jokenpo

This is a simple app in PHP language, simulate a game Jokenpo,
for more information about Jokenpo rules, follow this link [Jokenpo](http://dojopuzzles.com/problemas/exibe/jokenpo/)

This code runs with:
PHP >= 7.2   
PHPUnit 8
Composer 1.9.1

This app runs in terminal.  
This code was run in a Linux terminal (Linux Mint 19.1)  
P.S: not tested in Windows Terminal

To run the app, follow the steps
* Install the Composer using the script _install-compose.sh_
  ```
  ./install-composer.sh
  ```
* Install dependencies running composer.phar file.
   ```
   php composer.phar install
   ```
* run inside directory app the follow command
    ```
    $ php main.php
    ```
* run tests
   ```
  ./vendor/bin/phpunit --bootstrap vendor/autoload.php src/JokenpoTest
   ```
