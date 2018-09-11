FROM drud/nginx-php70:typo3

USER root

RUN rm -rf /var/www/html && mkdir -p /var/www/html

COPY index.php /var/www/html
COPY typo3/ /var/www/html/typo3/
COPY typo3conf/ /var/www/html/typo3conf/
COPY vendor/ /var/www/html/vendor/

RUN rm /var/www/html/typo3conf/AdditionalConfiguration.php &&\
    PLATFORM=typo3 /pod-init.sh

RUN chown -R 33:33 /var/www/html

EXPOSE 8080 8443

# Container should run as www-data
USER 33

CMD ["/start.sh"]

