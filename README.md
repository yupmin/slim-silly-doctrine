# Slim + Silly + Doctrine Skeleton Application

This skeleton application was built for Composer. This makes setting up a new Slim + Silly + Doctrine application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

```
php composer.phar create-project yupmin/slim-silly-doctrine [my-app-name]
```

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` , `cache/` is web writeable.

## Use the Application

Run this command from the directory for cli console

```
php src/console
```

Run this command from the directory for Doctrine console After creating config.yml

```
cp .config.yml config.yml
```
Add Entity, Repository files

```

```

```
php vendor/bin/doctrine orm:schema-tool:update
```

That's it! Now go build something cool.

## Reference

* [Slim Skeleton](https://github.com/slimphp/Slim-Skeleton)
* [Silly](http://mnapoli.fr/silly/)
* [Doctrine](http://www.doctrine-project.org/)
