#!/bin/sh
echo $DYLD_FALLBACK_LIBRARY_PATH | egrep "/Applications/drupal-7.41-1/common" > /dev/null
if [ $? -ne 0 ] ; then
PATH="/Applications/drupal-7.41-1/apps/drupal/drush:/Applications/drupal-7.41-1/sqlite/bin:/Applications/drupal-7.41-1/php/bin:/Applications/drupal-7.41-1/mysql/bin:/Applications/drupal-7.41-1/apache2/bin:/Applications/drupal-7.41-1/common/bin:$PATH"
export PATH
DYLD_FALLBACK_LIBRARY_PATH="/Applications/drupal-7.41-1/sqlite/lib:/Applications/drupal-7.41-1/mysql/lib:/Applications/drupal-7.41-1/apache2/lib:/Applications/drupal-7.41-1/common/lib:/usr/local/lib:/lib:/usr/lib:$DYLD_FALLBACK_LIBRARY_PATH"
export DYLD_FALLBACK_LIBRARY_PATH
fi

TERMINFO=/Applications/drupal-7.41-1/common/share/terminfo
export TERMINFO
##### SQLITE ENV #####
			
SASL_CONF_PATH=/Applications/drupal-7.41-1/common/etc
export SASL_CONF_PATH
SASL_PATH=/Applications/drupal-7.41-1/common/lib/sasl2 
export SASL_PATH
LDAPCONF=/Applications/drupal-7.41-1/common/etc/openldap/ldap.conf
export LDAPCONF
##### PHP ENV #####
		    
##### MYSQL ENV #####

##### APACHE ENV #####

##### CURL ENV #####
CURL_CA_BUNDLE=/Applications/drupal-7.41-1/common/openssl/certs/curl-ca-bundle.crt
export CURL_CA_BUNDLE
##### SSL ENV #####
SSL_CERT_FILE=/Applications/drupal-7.41-1/common/openssl/certs/curl-ca-bundle.crt
export SSL_CERT_FILE
OPENSSL_CONF=/Applications/drupal-7.41-1/common/openssl/openssl.cnf
export OPENSSL_CONF
OPENSSL_ENGINES=/Applications/drupal-7.41-1/common/lib/engines
export OPENSSL_ENGINES


. /Applications/drupal-7.41-1/scripts/build-setenv.sh
