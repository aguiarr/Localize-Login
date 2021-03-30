# Localize Login

Version: 1.1.0<br/>

Author: Matheus Aguiar <br/>
Author URL: https://github.com/aguiarr <br/>
Author Email: aguiartgv@gmail.com <br/>
Linkdin: https://www.linkedin.com/in/matheus-de-aguiar-sim%C3%B5es-42910275/ <br/>

## About
This is a login system made with PHP.

### Observations
#### To use the application you will need some settings:
 - Create a database 'localize';
 
 - Change the 'Access.php' file to configure the mail sending (app/Services/PHPMailer/Access.php);
    - Host
    - Port
    - Email
    - Password
 - Run the command 'yarn install' to install the project dependencies;
    - Run 'yarn dev' or 'yarn build' to build the CSS and JS files;
  
 - Run the command 'composer install' or 'composer update' to install the autoload and the php dependencies;

## Technologies used

### Back-end
 - PHP
 - PDO
 - MySql
 - PHPMailer

### Front-end
 - CSS
 - JS
 - SASS

## Build
 - Gulp
 - Yarn
 - Composer