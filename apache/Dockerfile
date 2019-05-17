FROM httpd:2.4

WORKDIR /usr/local/apache2/htdocs  
#COPY index.html . 
CMD echo "Hello world!" > index.html
#CMD sudo chkconfig httpd on
#CMD sudo service httpd start
#HEALTHCHECK --interval=5s --timeout=3s \
#  CMD curl -f http://localhost/ || exit 1

VOLUME /usr/local/apache2/htdocs

EXPOSE 80


