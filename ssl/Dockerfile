FROM centos:7

RUN yum -y install httpd php php-mysql

COPY /html-ssl/. /var/www/html
RUN echo "<? phpinfo(); ?>" >/var/www/html/test.php

CMD apachectl -DFOREGROUND

