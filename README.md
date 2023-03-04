composer install

php bin/console make:migration

php bin/console doctrine:schema:drop --full-database --force

php bin/console doctrine:schema:create

php bin/console doctrine:migrations:migrate

symfony server:start OR symfony serve


symfony new blog --full OR composer create-project symfony/website-skeleton blog (this is the one we used)

php bin/console make:controller (+name of the controller(after executing or next to it))

symfony serve

php bin/console doctrine:database:create

php bin/console make:entity (+name of the entity(after executing or next to it)) (it will ask to generate attributes and their types (string/text/relation...))

php bin/console make:migration
php bin/console doctrine:migrations:migrate

php bin/console doctrine:fixtures:load (add/generate data to DB)

php bin/console make:migration
php bin/console doctrine:migrations:migrate

php bin/console make:form (+name of the entity(after executing or next to it) (NameType))

php bin/console make:user (+name of the security user class (User))

php bin/console make:migration
php bin/console doctrine:migrations:migrate

php bin/console make:auth (+1 + name of the authenticator class (AppAuthenticator))

other commands (installing some packages for auth...)


Edit 2 codes (image(index.html line 40) + user name(index.html line 30)) (we used static data, because we used factory data (seed))
instead use only dynamic ones (delete the if else conditions)