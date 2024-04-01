c:\xampp\mysql\bin\mysql -uroot -pletmein@4891021408271209 -e "DROP DATABASE IF EXISTS db_imt;"
c:\xampp\mysql\bin\mysql -uroot -pletmein@4891021408271209 -e "CREATE DATABASE db_imt;"
c:\xampp\mysql\bin\mysql -uroot -pletmein@4891021408271209 db_imt < db_backup\db\db_latest.sql --verbose
