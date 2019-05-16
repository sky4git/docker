FROM httpd
COPY ./public-html/ /usr/local/apache2/htdocs/
WORKDIR ./public-html/ 
#COPY index.html . 
CMD echo "Hello world!" > index.html
#CMD chkconfig httpd on
#CMD service httpd start
HEALTHCHECK --interval=5s --timeout=3s \
  CMD curl -f http://localhost/ || exit 1

VOLUME ./public-html/

EXPOSE 80


