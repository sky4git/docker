FROM httpd:2.4

#WORKDIR /usr/local/apache2/htdocs  
#COPY index.html . 
RUN echo "Hello world!" > /usr/local/apache2/htdocs/hello.html
#CMD sudo chkconfig httpd on
#CMD sudo service httpd start
HEALTHCHECK --interval=5s --timeout=3s \
  CMD curl -f http://localhost/hello.html || exit 1

VOLUME /usr/local/apache2/htdocs/

EXPOSE 80


