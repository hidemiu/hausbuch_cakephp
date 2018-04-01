# hausbuch_cakephp
hausbuch tool by cakephp

# Intial set up
### Copy vendor
### Vagrant up
### Set up MySQL 5.6
- sudo mysql_secure_installation ... Same as usual + mysql
- create user username@localhost identified by 'password';
- grant all on hausbuch. * to username@localhost;
### app.php
- Copy from `app.default.php`
- Write down under "Datasoures"... 'username', 'password', 'database'.
### Migrate
- cd /var/www/html
- bin/cake migrations migrate
### Apache setting for CSS
- sudo vi /etc/httpd/conf/httpd.conf
```
<Directory "/var/www/html">
  Options FollowSymLinks
  AllowOverride All
</Directory>
```
- sudo systemctl restart httpd

### http://192.168.33.111/hausbuch/
