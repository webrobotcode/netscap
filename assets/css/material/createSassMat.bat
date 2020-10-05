@ECHO OFF 

TITLE Material Framework
ECHO Please wait... compiling.
:: Building Sass
ECHO ============================
ECHO Sass building
ECHO ============================

cd "E:\My Program\Web\askMe\assets\css\material"
sass --watch material.scss:material.css
PAUSE