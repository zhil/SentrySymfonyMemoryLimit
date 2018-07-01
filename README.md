Sentry Symfony Memory Limit Bug demo    
==========

For some reasons sentry-symfony-bundle do not catch memory limit exception.

Steps to reproduce

* git clone git@github.com:zhil/SentrySymfonyMemoryLimit.git
* cd SentrySymfonyMemoryLimit
* composer install
* put valid sentry DSN in parameters.yml
* ./bin/console server:run --docroot=web --env=prod
* http://127.0.0.1:8000/fatal runtime error catched
* http://127.0.0.1:8000/mem memory limit error is not catched