<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace Aliyun\Api\Sms\Request\V20170525;

use Aliyun\Core\RpcAcsRequest;

/**
 * Class SendInterSmsRequest
 * @package Aliyun\Api\Sms\Request\V20170525
 */
class SendInterSmsRequest extends RpcAcsRequest
{
    /**
     * SendInterSmsRequest constructor.
     */
    function __construct()
    {
        parent::__construct("Dysmsapi", "2017-05-25", "SendInterSms");
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
    private $countryCode;

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
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode)
    {
        $this->countryCode = $countryCode;
        $this->queryParameters["CountryCode"] = $countryCode;
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

}