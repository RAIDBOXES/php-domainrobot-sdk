<?php

namespace Domainrobot\Service;

use Domainrobot\Domainrobot;
use Domainrobot\Lib\ArrayHelper;
use Domainrobot\Lib\DomainrobotConfig;
use Domainrobot\Model\PollMessage;
use Domainrobot\Model\DomainrobotPromise;
use Domainrobot\Service\DomainrobotService;

class PollMessageService extends DomainrobotService
{
    /**
     *
     * @param DomainrobotConfig $domainrobotConfig
     */
    public function __construct(DomainrobotConfig $domainrobotConfig)
    {
        parent::__construct($domainrobotConfig);
    }


    /**
     * Fetches the latest poll message. To receive the next message, the current
     * message needs to be confirmed via the confirm function.
     *
     * The poll system works according to the "First In First Out (FIFO)" principle.
     * More information at https://help.internetx.com/display/APIPROCESSEN/Asynchronous+Notifications#AsynchronousNotifications-Polling
     *
     * @return PollMessage
     */
    public function info()
    {
        $domainrobotPromise = $this->infoAsync();
        $domainrobotResult = $domainrobotPromise->wait();

        return new PollMessage(ArrayHelper::getValueFromArray($domainrobotResult->getResult(), 'data.0', []));
    }

    /**
     * Fetches the latest poll message. To receive the next message, the current
     * message needs to be confirmed via the confirm function.
     *
     * The poll system works according to the "First In First Out (FIFO)" principle.
     * More information at https://help.internetx.com/display/APIPROCESSEN/Asynchronous+Notifications#AsynchronousNotifications-Polling
     *
     * @return GuzzleHttp\Promise\PromiseInterface $promise
     */
    public function infoAsync()
    {
        return $this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/poll",
            'GET'
        );
    }


    /**
     * Confirms the PollMessage with the given id.
     *
     * @param [int] $id
     * @return
     */
    public function confirm($id)
    {
        $domainrobotPromise = $this->confirmAsync($id);
        $domainrobotResult = $domainrobotPromise->wait();

        Domainrobot::setLastDomainrobotResult($domainrobotResult);
    }

    /**
     * Confirms the PollMessage with the given id.
     *
     * @param [int] $id
     * @return DomainrobotPromise
     */
    public function confirmAsync($id)
    {
        return $this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/poll/$id",
            'PUT'
        );
    }
}
