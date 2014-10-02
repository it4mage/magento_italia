PUG MoRE Italy Setup
=====================
Italian localization for Magento.


Description
-----------
Italian localization for Magento: translations and regions dictionary (province).
Please, use it on your Magento projects with Composer and improve it with our contribution process (see Contributing).

Requirements
------------
- PHP >= 5.2.0
- Mage_Core
- ...

Compatibility
-------------
- Magento CE >= 1.6
- Magento EE >= 1.11

Installation Instructions
-------------------------
Installation is possible in two different ways.

**Composer and [Magento Composer Installer](https://github.com/magento-hackathon/magento-composer-installer) (preferred way)**

Add the dependency to your `composer.json` file. Like this example:
```
{
    ...
    "require": {
        ...
        "pug-more/magento-italian-extension": "dev-master"
    },
    ...
    "repositories": [
        {
            "type": "composer",
            "url": "http://packages.firegento.com"
        },
        ...
        {
            "type": "vcs",
            "url":  "git@github.com:pug-more/magento_italia.git"
        }
    ]
}
```
And then install the new dependency with `composer update pug-more/magento-italian-extension`.

**[Modman](https://github.com/colinmollenhour/modman)**

Run `modman clone git@github.com:pug-more/magento_italia.git`.


Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/pug-more/magento_italia/issues).

Contribution
------------
Any contribution is highly appreciated.
You can fork the repository at https://github.com/pug-more/magento_italia and use your own fork in your project (see [Composer documentation](https://getcomposer.org/doc/05-repositories.md#loading-a-package-from-a-vcs-repository) for this).
When you're ready to submit your changes open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests) with your fork.
Please do it (especially for translations) so we can all take advantage of open source community work.

Developers
----------
Francesco Marangi  
[@fmarangi](https://twitter.com/fmarangi)

Alessandro Ronchi   
[@aleron75](https://twitter.com/aleron75)

Manuele Menozzi
[@mmenozzi](https://twitter.com/mmenozzi)

License
-------
[The MIT License](http://opensource.org/licenses/MIT)

Copyright
---------
Copyright (c) 2012 PUG Modena e Reggio Emilia
