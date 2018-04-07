# How to use in your project

## Include in your composer.json

    "repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Debojyoti/PhpRoute/.git",
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

# Run ### `composer update`

# Usage
    
    require "path/to/autoload.php";

    use Debojyoti\PhpRoute;

    $con = new PhpRoute();