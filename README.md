it4mage Italy Setup
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

**Preferred way: Composer and [Magento Composer Installer](https://github.com/magento-hackathon/magento-composer-installer)**

Add the dependency to your `composer.json` file. Like this example:

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
    
Then install the new dependency with `composer update pug-more/magento-italian-extension`.
Finally, add this to your `.gitignore` (if needed):

    app/code/community/PugMoRe/Italia
    app/etc/modules/PugMoRe_Italia.xml
    app/locale/it_IT/Mage_AdminNotification.csv
    app/locale/it_IT/Mage_Adminhtml.csv
    app/locale/it_IT/Mage_Api.csv
    app/locale/it_IT/Mage_Api2.csv
    app/locale/it_IT/Mage_Authorizenet.csv
    app/locale/it_IT/Mage_Backup.csv
    app/locale/it_IT/Mage_Bundle.csv
    app/locale/it_IT/Mage_Captcha.csv
    app/locale/it_IT/Mage_Catalog.csv
    app/locale/it_IT/Mage_CatalogInventory.csv
    app/locale/it_IT/Mage_CatalogRule.csv
    app/locale/it_IT/Mage_CatalogSearch.csv
    app/locale/it_IT/Mage_Centinel.csv
    app/locale/it_IT/Mage_Checkout.csv
    app/locale/it_IT/Mage_Cms.csv
    app/locale/it_IT/Mage_Compiler.csv
    app/locale/it_IT/Mage_Connect.csv
    app/locale/it_IT/Mage_Contacts.csv
    app/locale/it_IT/Mage_Core.csv
    app/locale/it_IT/Mage_Cron.csv
    app/locale/it_IT/Mage_CurrencySymbol.csv
    app/locale/it_IT/Mage_Customer.csv
    app/locale/it_IT/Mage_Dataflow.csv
    app/locale/it_IT/Mage_Directory.csv
    app/locale/it_IT/Mage_Downloadable.csv
    app/locale/it_IT/Mage_Eav.csv
    app/locale/it_IT/Mage_GiftMessage.csv
    app/locale/it_IT/Mage_GoogleAnalytics.csv
    app/locale/it_IT/Mage_GoogleBase.csv
    app/locale/it_IT/Mage_GoogleCheckout.csv
    app/locale/it_IT/Mage_GoogleOptimizer.csv
    app/locale/it_IT/Mage_ImportExport.csv
    app/locale/it_IT/Mage_Index.csv
    app/locale/it_IT/Mage_Install.csv
    app/locale/it_IT/Mage_Log.csv
    app/locale/it_IT/Mage_Media.csv
    app/locale/it_IT/Mage_Newsletter.csv
    app/locale/it_IT/Mage_Oauth.csv
    app/locale/it_IT/Mage_Page.csv
    app/locale/it_IT/Mage_PageCache.csv
    app/locale/it_IT/Mage_Paygate.csv
    app/locale/it_IT/Mage_Payment.csv
    app/locale/it_IT/Mage_Paypal.csv
    app/locale/it_IT/Mage_PaypalUk.csv
    app/locale/it_IT/Mage_Persistent.csv
    app/locale/it_IT/Mage_Poll.csv
    app/locale/it_IT/Mage_ProductAlert.csv
    app/locale/it_IT/Mage_Rating.csv
    app/locale/it_IT/Mage_Reports.csv
    app/locale/it_IT/Mage_Review.csv
    app/locale/it_IT/Mage_Rss.csv
    app/locale/it_IT/Mage_Rule.csv
    app/locale/it_IT/Mage_Sales.csv
    app/locale/it_IT/Mage_SalesRule.csv
    app/locale/it_IT/Mage_Sendfriend.csv
    app/locale/it_IT/Mage_Shipping.csv
    app/locale/it_IT/Mage_Sitemap.csv
    app/locale/it_IT/Mage_Strikeiron.csv
    app/locale/it_IT/Mage_Tag.csv
    app/locale/it_IT/Mage_Tax.csv
    app/locale/it_IT/Mage_Usa.csv
    app/locale/it_IT/Mage_Weee.csv
    app/locale/it_IT/Mage_Widget.csv
    app/locale/it_IT/Mage_Wishlist.csv
    app/locale/it_IT/Mage_XmlConnect.csv
    app/locale/it_IT/Phoenix_BankPayment.csv
    app/locale/it_IT/Phoenix_Moneybookers.csv
    app/locale/it_IT/template/email/account_new.html
    app/locale/it_IT/template/email/account_new_confirmation.html
    app/locale/it_IT/template/email/account_new_confirmed.html
    app/locale/it_IT/template/email/account_password_reset_confirmation.html
    app/locale/it_IT/template/email/admin_password_new.html
    app/locale/it_IT/template/email/admin_password_reset_confirmation.html
    app/locale/it_IT/template/email/contact_form.html
    app/locale/it_IT/template/email/currency_update_warning.html
    app/locale/it_IT/template/email/log_clean_warning.html
    app/locale/it_IT/template/email/moneybookers_activateemail.html
    app/locale/it_IT/template/email/newsletter_subscr_confirm.html
    app/locale/it_IT/template/email/newsletter_subscr_success.html
    app/locale/it_IT/template/email/newsletter_unsub_success.html
    app/locale/it_IT/template/email/password_new.html
    app/locale/it_IT/template/email/payment_failed.html
    app/locale/it_IT/template/email/product_alert_cron_error.html
    app/locale/it_IT/template/email/product_price_alert.html
    app/locale/it_IT/template/email/product_share.html
    app/locale/it_IT/template/email/product_stock_alert.html
    app/locale/it_IT/template/email/sales/creditmemo_new.html
    app/locale/it_IT/template/email/sales/creditmemo_new_guest.html
    app/locale/it_IT/template/email/sales/creditmemo_update.html
    app/locale/it_IT/template/email/sales/creditmemo_update_guest.html
    app/locale/it_IT/template/email/sales/invoice_new.html
    app/locale/it_IT/template/email/sales/invoice_new_guest.html
    app/locale/it_IT/template/email/sales/invoice_update.html
    app/locale/it_IT/template/email/sales/invoice_update_guest.html
    app/locale/it_IT/template/email/sales/order_new.html
    app/locale/it_IT/template/email/sales/order_new_guest.html
    app/locale/it_IT/template/email/sales/order_update.html
    app/locale/it_IT/template/email/sales/order_update_guest.html
    app/locale/it_IT/template/email/sales/shipment_new.html
    app/locale/it_IT/template/email/sales/shipment_new_guest.html
    app/locale/it_IT/template/email/sales/shipment_update.html
    app/locale/it_IT/template/email/sales/shipment_update_guest.html
    app/locale/it_IT/template/email/sitemap_generate_warning.html
    app/locale/it_IT/template/email/token.html
    app/locale/it_IT/template/email/wishlist_share.html

**Alternative way: [Modman](https://github.com/colinmollenhour/modman)**

Run `modman clone git@github.com:pug-more/magento_italia.git`.

Email templates customizations
------------------------------

Probably you may need to customize e-mail templates for your specific project but if you install the extension with
Composer or Modman you'll find that all templates are symlinked so you can't customize them. To do so we suggest you to
use [Yireo_EmailOverride](https://github.com/yireo/Yireo_EmailOverride) extension that allows to customize e-mail
templates at theme level.

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/pug-more/magento_italia/issues).

Contribution
------------
Any contribution is highly appreciated.
You can fork [the repository](https://github.com/pug-more/magento_italia) and use your own fork in your project (see [Composer documentation](https://getcomposer.org/doc/05-repositories.md#loading-a-package-from-a-vcs-repository) for this).
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

Copyright
---------
Copyright (c) 2012 PUG Modena e Reggio Emilia
