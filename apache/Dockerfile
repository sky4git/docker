FROM httpd
WORKDIR /var/www/html  
#COPY index.html . 
CMD echo "Hello world!" > index.html
CMD chkconfig httpd on
CMD service httpd start
HEALTHCHECK --interval=5s --timeout=3s \
  CMD curl -f http://localhost/ || exit 1

EXPOSE 80


