CREATE USER 'mburenko'@'localhost' IDENTIFIED BY 'sEcurEvsd3bd90&4#m5:424pass';
CREATE DATABASE IF NOT EXISTS ucode_web;
GRANT ALL PRIVILEGES ON  * . * TO 'mburenko'@'localhost';
ALTER USER 'mburenko'@'localhost' IDENTIFIED WITH mysql_native_password BY 'sEcurEvsd3bd90&4#m5:424pass';