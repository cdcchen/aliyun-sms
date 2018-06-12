<?php

namespace Aliyun\Api\Sms\Request\V20170525;

use Aliyun\Core\RpcAcsRequest;

/**
 * Class SendSmsRequest
 * @package Aliyun\Api\Sms\Request\V20170525
 */
class SendSmsRequest extends RpcAcsRequest
{
    /**
     * SendSmsRequest constructor.
     */
    public function __construct()
    {
        parent::__construct("Dysmsapi", "2017-05-25", "SendSms");
        $this->setMethod("POST");
    }

    /**
     * @var string
     */
    private $templateCode;

    /**
     * @var string
     */
    private $phoneNumbers;

    /**
     * @var string
     */
    private $signName;

    /**
     * @var string
     */
    private $resourceOwnerAccount;

    /**
     * @var string
     */
    private $templateParam;

    /**
     * @var string
     */
    private $resourceOwnerId;

    /**
     * @var string
     */
    private $ownerId;

    /**
     * @var string
     */
    private $outId;

    /**
     * @var string
     */
    private $smsUpExtendCode;

    /**
     * @return string
     */
    public function getTemplateCode(): string
    {
        return $this->templateCode;
    }

    /**
     * @param string $templateCode
     */
    public function setTemplateCode(string $templateCode)
    {
        $this->templateCode = $templateCode;
        $this->queryParameters["TemplateCode"] = $templateCode;
    }

    /**
     * @return string
     */
    public function getPhoneNumbers(): string
    {
        return $this->phoneNumbers;
    }

    /**
     * @param string $phoneNumbers
     */
    public function setPhoneNumbers(string $phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
        $this->queryParameters["PhoneNumbers"] = $phoneNumbers;
    }

    /**
     * @return string
     */
    public function getSignName(): string
    {
        return $this->signName;
    }

    /**
     * @param string $signName
     */
    public function setSignName(string $signName)
    {
        $this->signName = $signName;
        $this->queryParameters["SignName"] = $signName;
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
     * @return string
     */
    public function getTemplateParam(): string
    {
        return $this->templateParam;
    }

    /**
     * @param string $templateParam
     */
    public function setTemplateParam(string $templateParam)
    {
        $this->templateParam = $templateParam;
        $this->queryParameters["TemplateParam"] = $templateParam;
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

    /**
     * @return string
     */
    public function getOutId(): string
    {
        return $this->outId;
    }

    /**
     * @param string $outId
     */
    public function setOutId(string $outId)
    {
        $this->outId = $outId;
        $this->queryParameters["OutId"] = $outId;
    }

    /**
     * @return string
     */
    public function getSmsUpExtendCode(): string
    {
        return $this->smsUpExtendCode;
    }

    /**
     * @param string $smsUpExtendCode
     */
    public function setSmsUpExtendCode(string $smsUpExtendCode)
    {
        $this->smsUpExtendCode = $smsUpExtendCode;
        $this->queryParameters["SmsUpExtendCode"] = $smsUpExtendCode;
    }
}