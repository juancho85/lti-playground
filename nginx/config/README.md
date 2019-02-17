## Generating self signed certificates

`openssl req \
-newkey rsa:2048 -nodes -keyout webserver.key \
-x509 -days 9999 -out webserver.crt`

## Generate a certificate signing request based on an existing certificate
openssl x509 -x509toreq -in webserver.crt -out webserver.csr -signkey webserver.key

## More on the subject
https://www.sslshopper.com/article-most-common-openssl-commands.html

