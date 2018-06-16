<?php

namespace Telegram\Bot\Objects;

/**
 * Class SuccessfulPayment.
 *
 * @method string       getCurrency()                   Three-letter ISO 4217 currency code
 * @method int          getTotalAmount()                Total price in the smallest units of the currency (integer, not float/double).
 * @method string       getInvoicePayload()             Bot specified invoice payload
 * @method string       getSippingOptionId()            (Optional). Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @method OrderInfo    getOrderInfo()                  (Optional). Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @method string       getTelegramPaymentChargeId()    (Optional). Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @method string       getProviderPaymentChargeId()    (Optional). A list of update types the bot is subscribed to. Defaults to all update types
 */
class SuccessfulPayment extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [];
    }
}
