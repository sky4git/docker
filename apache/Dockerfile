FROM httpd:2.4
WORKDIR /var/www/html  
COPY index.html  . 
#HEALTHCHECK --interval=5s --timeout=3s \
  CMD curl -f http://localhost/ || exit 1
#CMD echo "Hello world!" > index.html

EXPOSE 80


