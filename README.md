it4mage Italy Setup
=====================
Italian localization for Magento 1.x.


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

**Preferred way: Composer and [Magento Composer Installer](https://github.com/magento-hackathon/magento-composer-installer)**

Add the dependency to your `composer.json` with this command:

    composer require it4mage/magento-italian-extension dev-master

**Alternative way: [Modman](https://github.com/colinmollenhour/modman)**

Run `modman clone git@github.com:it4mage/magento_italia.git`

Email templates customizations
------------------------------

Probably you may need to customize e-mail templates for your specific project but if you install the extension with
Composer or Modman you'll find that all templates are symlinked so you can't customize them. To do so we suggest you to
use [Yireo_EmailOverride](https://github.com/yireo/Yireo_EmailOverride) extension that allows to customize e-mail
templates at theme level.

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/it4mage/magento_italia/issues).

Contribution
------------
Any contribution is highly appreciated.
You can fork [the repository](https://github.com/it4mage/magento_italia) and use your own fork in your project (see [Composer documentation](https://getcomposer.org/doc/05-repositories.md#loading-a-package-from-a-vcs-repository) for this).
When you're ready to submit your changes open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests) with your fork.
Please do it (especially for translations), so we can all take advantage of open source community work.

Developers
----------
Francesco Marangi ([@fmarangi](https://twitter.com/fmarangi))
Alessandro Ronchi ([@aleron75](https://twitter.com/aleron75))
Manuele Menozzi ([@mmenozzi](https://twitter.com/mmenozzi))

License
-------
[The OSL-3.0 License](http://opensource.org/licenses/OSL-3.0)
