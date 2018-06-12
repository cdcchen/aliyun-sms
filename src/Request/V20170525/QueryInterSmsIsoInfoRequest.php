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
 * Class QueryInterSmsIsoInfoRequest
 * @package Aliyun\Api\Sms\Request\V20170525
 */
class QueryInterSmsIsoInfoRequest extends RpcAcsRequest
{
    /**
     * QueryInterSmsIsoInfoRequest constructor.
     */
    function __construct()
    {
        parent::__construct("Dysmsapi", "2017-05-25", "QueryInterSmsIsoInfo");
        $this->setMethod("POST");
    }

    /**
     * @var string
     */
    private $resourceOwnerAccount;

    /**
     * @var string
     */
    private $countryName;

    /**
     * @var string
     */
    private $resourceOwnerId;

    /**
     * @var string
     */
    private $ownerId;

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
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName(string $countryName)
    {
        $this->countryName = $countryName;
        $this->queryParameters["CountryName"] = $countryName;
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