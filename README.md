# Module Bluethink whatsapp-button

## Main Functionalities

- This module is used to add whatsapp button on frontend so user can directly communicate with store owner using whatsapp icon.

### Type 1: Zip file

- Enable the module by running `php bin/magento module:enable Bluethinkinc_WhatsAppChat`
- Apply database updates by running `php bin/magento setup:upgrade`
- Compilation by running `php bin/magento setup:di:compile`
- Static content deploy by running `php bin/magento setup:static-content:deploy`
- Flush the cache by running `php bin/magento cache:flush`

## Configuration


![Configuration Setting](doc/images/1-whatsapp-configuration.png)
- Select from configuration and Save Config.

## Preview

- Whatsapp icon on frontend
![Address Book State/Provinces before setting saved](doc/images/2-whatsapp-button.png)

- Whatsapp page on frontend
![Checkout Page State/Provinces before setting saved](doc/images/3-whatsapp-button-click.png)

![Checkout Page State/Provinces before setting saved](doc/images/4-whatsapp.png)
