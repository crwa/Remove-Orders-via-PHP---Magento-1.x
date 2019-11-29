# Remove-Orders-via-PHP---Magento-1.x

Here is an example code that can help us more easily exclude sales orders from Magento 1.
The Magento system does not have the ability to order deletion natively, but in a certain situation we may need to clean up, for example, test orders we perform before delivering a store to a customer.

With that in mind, we have created PHP code that can help us exclude sales orders based on the order number.

In the file enter the order ids you wish to delete, upload the file to the root of your Magento directory and access it via URL.

This script has been tested up to Magento version 1.9.3.