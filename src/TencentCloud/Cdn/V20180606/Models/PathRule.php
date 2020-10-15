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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分路径回源配置规则。
 *
 * @method boolean getRegex() 获取是否是正则匹配。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegex(boolean $Regex) 设置是否是正则匹配。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取URL路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置URL路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrigin() 获取路径匹配时的回源源站。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrigin(string $Origin) 设置路径匹配时的回源源站。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerName() 获取路径匹配时的回源Host头部。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerName(string $ServerName) 设置路径匹配时的回源Host头部。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginArea() 获取源站所属区域，支持CN，OV。分别表示国内或海外。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginArea(string $OriginArea) 设置源站所属区域，支持CN，OV。分别表示国内或海外。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getForwardUri() 获取路径匹配时的回源URI路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForwardUri(string $ForwardUri) 设置路径匹配时的回源URI路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRequestHeaders() 获取路径匹配时的回源头部设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestHeaders(array $RequestHeaders) 设置路径匹配时的回源头部设置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PathRule extends AbstractModel
{
    /**
     * @var boolean 是否是正则匹配。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regex;

    /**
     * @var string URL路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string 路径匹配时的回源源站。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Origin;

    /**
     * @var string 路径匹配时的回源Host头部。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerName;

    /**
     * @var string 源站所属区域，支持CN，OV。分别表示国内或海外。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginArea;

    /**
     * @var string 路径匹配时的回源URI路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForwardUri;

    /**
     * @var array 路径匹配时的回源头部设置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestHeaders;

    /**
     * @param boolean $Regex 是否是正则匹配。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path URL路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Origin 路径匹配时的回源源站。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerName 路径匹配时的回源Host头部。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginArea 源站所属区域，支持CN，OV。分别表示国内或海外。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ForwardUri 路径匹配时的回源URI路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RequestHeaders 路径匹配时的回源头部设置。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("OriginArea",$param) and $param["OriginArea"] !== null) {
            $this->OriginArea = $param["OriginArea"];
        }

        if (array_key_exists("ForwardUri",$param) and $param["ForwardUri"] !== null) {
            $this->ForwardUri = $param["ForwardUri"];
        }

        if (array_key_exists("RequestHeaders",$param) and $param["RequestHeaders"] !== null) {
            $this->RequestHeaders = [];
            foreach ($param["RequestHeaders"] as $key => $value){
                $obj = new HttpHeaderRule();
                $obj->deserialize($value);
                array_push($this->RequestHeaders, $obj);
            }
        }
    }
}
