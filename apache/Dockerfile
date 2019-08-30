FROM httpd:2.4-alpine

ENV PLUGIN_S3_CLOUDFRONT_VERSION="2.2.1"

RUN apk update; \
    apk upgrade; \
    apk add git;
# Copy apache vhost file to proxy php requests to php-fpm container
COPY demo.apache.conf /usr/local/apache2/conf/demo.apache.conf
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf

COPY index.php /usr/local/apache2/htdocs/  

WORKDIR /usr/local/apache2/htdocs  
#COPY index.html . 
RUN echo "Hello world!" > hello.html
RUN git clone https://github.com/sky4git/WordPress.git; \ 
    mv WordPress/* .; \
    rm -rf WordPress;

# Download S3 and CloudFront plugin
RUN curl -o amazon-s3-and-cloudfront.zip https://downloads.wordpress.org/plugin/amazon-s3-and-cloudfront.${PLUGIN_S3_CLOUDFRONT_VERSION}.zip \
  && unzip amazon-s3-and-cloudfront.zip -d /usr/local/apache2/htdocs/wp-content/plugins \
	&& rm amazon-s3-and-cloudfront.zip

#RUN echo '<?php $con = mysqli_connect("localhost","root","mydb","my_db"); if (mysqli_connect_errno()){ echo "Failed to connect to MySQL: " . mysqli_connect_error(); } ?>' > index.php
#CMD sudo chkconfig httpd on
#CMD sudo service httpd start
HEALTHCHECK --interval=5s --timeout=3s \
  CMD curl -f http://localhost/hello.html || exit 1

VOLUME /usr/local/apache2/htdocs

ENTRYPOINT [ "httpd", "-D", "FOREGROUND" ]  





