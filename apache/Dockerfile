FROM httpd:2.4

WORKDIR /var/www/html  
#COPY index.html . 
CMD echo "Hello world!" > index.html
#CMD sudo chkconfig httpd on
#CMD sudo service httpd start
#HEALTHCHECK --interval=5s --timeout=3s \
#  CMD curl -f http://localhost/ || exit 1

VOLUME /var/www/html

EXPOSE 80


