mysql_intro
===========
Objectives:
-----------
* understand the table nature of relational databases
* show how to use the mysql cmdline client
* describe very basic usage insert, update, & select statements
* create v1 of schema for AVNET project as a group

MySql/PHP Setup
---------------
* On Linux
 * > sudo apt-get install mysql-server
 * > sudo apt-get install php5-mysql
 * restart apache (> sudo apachectl restart)

* On OsX
 * edit /etc/php.ini:
look a line that starts with: "mysqli.default_socket", update it to read:
mysqli.default_socket = /tmp/mysql.sock
 * restart apache (> sudo apachectl restart)
