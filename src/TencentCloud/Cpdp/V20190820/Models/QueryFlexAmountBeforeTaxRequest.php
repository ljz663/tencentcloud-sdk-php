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
 * QueryFlexAmountBeforeTax请求参数结构体
 *
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getIncomeType() 获取收入类型
LABOR:劳务所得
OCCASION:偶然所得
 * @method void setIncomeType(string $IncomeType) 设置收入类型
LABOR:劳务所得
OCCASION:偶然所得
 * @method string getAmountAfterTax() 获取税后金额
 * @method void setAmountAfterTax(string $AmountAfterTax) 设置税后金额
 */
class QueryFlexAmountBeforeTaxRequest extends AbstractModel
{
    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     */
    public $IncomeType;

    /**
     * @var string 税后金额
     */
    public $AmountAfterTax;

    /**
     * @param string $PayeeId 收款用户ID
     * @param string $IncomeType 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     * @param string $AmountAfterTax 税后金额
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

        if (array_key_exists("IncomeType",$param) and $param["IncomeType"] !== null) {
            $this->IncomeType = $param["IncomeType"];
        }

        if (array_key_exists("AmountAfterTax",$param) and $param["AmountAfterTax"] !== null) {
            $this->AmountAfterTax = $param["AmountAfterTax"];
        }
    }
}
