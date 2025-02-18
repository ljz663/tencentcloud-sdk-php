<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFlexPayeeAccountInfo请求参数结构体
 *
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getOutUserId() 获取外部用户ID
 * @method void setOutUserId(string $OutUserId) 设置外部用户ID
 */
class QueryFlexPayeeAccountInfoRequest extends AbstractModel
{
    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 外部用户ID
     */
    public $OutUserId;

    /**
     * @param string $PayeeId 收款用户ID
     * @param string $OutUserId 外部用户ID
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("OutUserId",$param) and $param["OutUserId"] !== null) {
            $this->OutUserId = $param["OutUserId"];
        }
    }
}
