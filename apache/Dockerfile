FROM httpd:2.4
WORKDIR /var/www/html  
COPY index.html  . 
RUN --name myapache
#CMD echo "Hello world!" > index.html

FROM mysql
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=mydb
RUN --name some-mysql -e MYSQL_ROOT_PASSWORD=MYSQL_ROOT_PASSWORD -d mysql:tag --character-set-server=utf8mb4 --collation-server=utf8mb4_unicode_ci

EXPOSE 80
EXPOSE 3306

