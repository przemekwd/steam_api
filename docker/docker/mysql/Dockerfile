FROM mysql:5.7

RUN apt update && apt-get install -y nano

COPY mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf

RUN usermod -u 1000 mysql
