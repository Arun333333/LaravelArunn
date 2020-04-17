cls ::clears the screen
cd /D "C:\laravel\arunn"
start notepad++
git add .
git commit -m "%1"
git push origin master
start cmd.exe @cmd /k "C:\laravel\arunn && php artisan serve
::wait four seconds, for the server to start before loading localhost:8000
timeout /t 4
start /B chrome https://stackoverflow.com 
start /B chrome https://localhost8000 
start /B chrome https://github.com/Arun333333/LaravelArunn
start cmd.exe @cmd /k "C:\Program Files\Git\bin\sh.exe"
%SystemRoot%\explorer.exe "C:\laravel\arunn"
start "C:\Program Files\MySQL\MySQL Workbench 8.0 CE\MySQLWorkbench.exe" 
cd /D "C:\Program Files\MySQL\MySQL Server 8.0\bin"
start cmd.exe @cmd /k "mysqld.exe -u root -p"