FROM 7.3.5-apache-stretch


#CMD echo "Hello world!" > index.html

FROM mysql
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=mydb
RUN --name some-mysql -e MYSQL_ROOT_PASSWORD=MYSQL_ROOT_PASSWORD -d mysql:tag --character-set-server=utf8mb4 --collation-server=utf8mb4_unicode_ci

WORKDIR /var/www/html  
RUN echo '<?php $con = mysqli_connect("localhost","root","mydb","my_db"); if (mysqli_connect_errno()){ echo "Failed to connect to MySQL: " . mysqli_connect_error(); } ?>' > mysql.php

EXPOSE 80


