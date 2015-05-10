# HP WP
The HP Website

## Setup
To setup, it's recommended to use WPCli:

```
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    php wp-cli.phar --info
    chmod +x wp-cli.phar
    sudo mv wp-cli.phar /usr/local/bin/wp
```

Now we setup the wordpress:

```
    git clone repo-url my-site/
    cd my-site/
    wp core download
    wp core config --dbname=mysite --dbuser=root --dbpass=password --dbhost=127.0.0.1
```

If wordpress is installed, we are done. Otherwise, we can run:

```
    wp core install --url='http://localhost/my-site' --title='My Site' --admin_user=admin --admin_password=password --admin_email='me@example.com'
```
