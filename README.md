# How to use in your project

## Include in your composer.json

    "repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Debojyoti/PhpRoute",
            "autoload": {
                "psr-4" : {
                    "Debojyoti\\" : "src"
                }
            }
        }
    ],
      "require": {
        "Debojyoti/PhpRoute": "dev-master"
    }

# Run 
`composer update`

# Add .htaccess file with the content

```
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /index.php?path=$1 [NC,L,QSA]
```

# Usage
    
    require "path/to/autoload.php";

    use Debojyoti\PhpRoute;

    $con = new PhpRoute();