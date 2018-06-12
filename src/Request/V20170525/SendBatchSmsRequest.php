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
 * Class SendBatchSmsRequest
 * @package Aliyun\Api\Sms\Request\V20170525
 */
class SendBatchSmsRequest extends RpcAcsRequest
{
    /**
     * SendBatchSmsRequest constructor.
     */
    function __construct()
    {
        parent::__construct("Dysmsapi", "2017-05-25", "SendBatchSms");
        $this->setMethod("POST");
    }

    /**
     * @var string
     */
    private $templateCode;

    /**
     * @var string
     */
    private $templateParamJson;

    /**
     * @var string
     */
    private $resourceOwnerAccount;

    /**
     * @var string
     */
    private $smsUpExtendCodeJson;

    /**
     * @var string
     */
    private $resourceOwnerId;

    /**
     * @var string
     */
    private $signNameJson;

    /**
     * @var string
     */
    private $ownerId;

    /**
     * @var string
     */
    private $phoneNumberJson;

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
    public function getTemplateParamJson(): string
    {
        return $this->templateParamJson;
    }

    /**
     * @param string $templateParamJson
     */
    public function setTemplateParamJson(string $templateParamJson)
    {
        $this->templateParamJson = $templateParamJson;
        $this->queryParameters["TemplateParamJson"] = $templateParamJson;
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
    public function getSmsUpExtendCodeJson(): string
    {
        return $this->smsUpExtendCodeJson;
    }

    /**
     * @param string $smsUpExtendCodeJson
     */
    public function setSmsUpExtendCodeJson(string $smsUpExtendCodeJson)
    {
        $this->smsUpExtendCodeJson = $smsUpExtendCodeJson;
        $this->queryParameters["SmsUpExtendCodeJson"] = $smsUpExtendCodeJson;
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
    public function getSignNameJson(): string
    {
        return $this->signNameJson;
    }

    /**
     * @param string $signNameJson
     */
    public function setSignNameJson(string $signNameJson)
    {
        $this->signNameJson = $signNameJson;
        $this->queryParameters["SignNameJson"] = $signNameJson;
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
    public function getPhoneNumberJson(): string
    {
        return $this->phoneNumberJson;
    }

    /**
     * @param string $phoneNumberJson
     */
    public function setPhoneNumberJson(string $phoneNumberJson)
    {
        $this->phoneNumberJson = $phoneNumberJson;
        $this->queryParameters["PhoneNumberJson"] = $phoneNumberJson;
    }

}