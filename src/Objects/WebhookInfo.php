<?php

namespace Telegram\Bot\Objects;

/**
 * Class Voice.
 *
 * @method string getUrl()                Webhook URL, may be empty if webhook is not set up
 * @method bool   isSet()                 True, if URL is set
 * @method bool   hasCustomCertificate()  True, if a custom certificate was provided for webhook certificate checks
 * @method int    getPendingUpdateCount() Number of updates awaiting delivery
 * @method int    getLastErrorDate()      (Optional). Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @method string getLastErrorMessage()   (Optional). Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @method int    getMaxConnections()     (Optional). Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @method array  getAllowedUpdates()     (Optional). A list of update types the bot is subscribed to. Defaults to all update types
 */
class WebhookInfo extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [];
    }
}
