<?php

namespace Aliyun\Api\Sms\Request\V20170525;

use Aliyun\Core\RpcAcsRequest;

/**
 * Class QuerySendDetailsRequest
 * @package Aliyun\Api\Sms\Request\V20170525
 */
class QuerySendDetailsRequest extends RpcAcsRequest
{
    /**
     * QuerySendDetailsRequest constructor.
     */
    function __construct()
    {
        parent::__construct("Dysmsapi", "2017-05-25", "QuerySendDetails");
        $this->setMethod("POST");
    }

    /**
     * @var string
     */
    private $sendDate;

    /**
     * @var int
     */
    private $pageSize;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $resourceOwnerAccount;

    /**
     * @var int
     */
    private $currentPage;

    /**
     * @var string
     */
    private $bizId;

    /**
     * @var string
     */
    private $resourceOwnerId;

    /**
     * @var string
     */
    private $ownerId;

    /**
     * @return mixed
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * @param string $sendDate
     */
    public function setSendDate(string $sendDate)
    {
        $this->sendDate = $sendDate;
        $this->queryParameters["SendDate"] = $sendDate;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;
        $this->queryParameters["PageSize"] = $pageSize;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        $this->queryParameters["PhoneNumber"] = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getResourceOwnerAccount(): string
    {
        return $this->resourceOwnerAccount;
    }

    /**
     * @param string $resourceOwnerAccount
     */
    public function setResourceOwnerAccount(string $resourceOwnerAccount)
    {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }

    /**
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    /**
     * @param int $currentPage
     */
    public function setCurrentPage(int $currentPage)
    {
        $this->currentPage = $currentPage;
        $this->queryParameters["CurrentPage"] = $currentPage;
    }

    /**
     * @return string
     */
    public function getBizId(): string
    {
        return $this->bizId;
    }

    /**
     * @param string $bizId
     */
    public function setBizId(string $bizId)
    {
        $this->bizId = $bizId;
        $this->queryParameters["BizId"] = $bizId;
    }

    /**
     * @return string
     */
    public function getResourceOwnerId(): string
    {
        return $this->resourceOwnerId;
    }

    /**
     * @param string $resourceOwnerId
     */
    public function setResourceOwnerId(string $resourceOwnerId)
    {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }

    /**
     * @return string
     */
    public function getOwnerId(): string
    {
        return $this->ownerId;
    }

    /**
     * @param string $ownerId
     */
    public function setOwnerId(string $ownerId)
    {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }

}