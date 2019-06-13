FROM httpd:2.4-alpine

WORKDIR /usr/local/apache2/htdocs  
#COPY index.html . 
RUN echo "Hello world!" > hello.html
RUN echo '<?php $con = mysqli_connect("localhost","root","mydb","my_db"); if (mysqli_connect_errno()){ echo "Failed to connect to MySQL: " . mysqli_connect_error(); } ?>' > mysql.php
#CMD sudo chkconfig httpd on
#CMD sudo service httpd start
HEALTHCHECK --interval=5s --timeout=3s \
  CMD curl -f http://localhost/hello.html || exit 1





