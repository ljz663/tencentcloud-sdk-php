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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDosAttackTopData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getMetricName() 获取过滤指标
 * @method void setMetricName(string $MetricName) 设置过滤指标
 * @method integer getLimit() 获取查询前多少名,传值为0 全量
 * @method void setLimit(integer $Limit) 设置查询前多少名,传值为0 全量
 * @method array getZoneIds() 获取站点集合
 * @method void setZoneIds(array $ZoneIds) 设置站点集合
 * @method array getPolicyIds() 获取ddos策略组id 集合
 * @method void setPolicyIds(array $PolicyIds) 设置ddos策略组id 集合
 * @method integer getPort() 获取端口号
 * @method void setPort(integer $Port) 设置端口号
 * @method string getProtocolType() 获取协议类型,tcp,udp,all
 * @method void setProtocolType(string $ProtocolType) 设置协议类型,tcp,udp,all
 * @method string getAttackType() 获取攻击类型,flood,icmpFlood......,all
 * @method void setAttackType(string $AttackType) 设置攻击类型,flood,icmpFlood......,all
 */
class DescribeDDosAttackTopDataRequest extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 过滤指标
     */
    public $MetricName;

    /**
     * @var integer 查询前多少名,传值为0 全量
     */
    public $Limit;

    /**
     * @var array 站点集合
     */
    public $ZoneIds;

    /**
     * @var array ddos策略组id 集合
     */
    public $PolicyIds;

    /**
     * @var integer 端口号
     */
    public $Port;

    /**
     * @var string 协议类型,tcp,udp,all
     */
    public $ProtocolType;

    /**
     * @var string 攻击类型,flood,icmpFlood......,all
     */
    public $AttackType;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $MetricName 过滤指标
     * @param integer $Limit 查询前多少名,传值为0 全量
     * @param array $ZoneIds 站点集合
     * @param array $PolicyIds ddos策略组id 集合
     * @param integer $Port 端口号
     * @param string $ProtocolType 协议类型,tcp,udp,all
     * @param string $AttackType 攻击类型,flood,icmpFlood......,all
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }
    }
}
