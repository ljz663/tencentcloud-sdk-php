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

namespace TencentCloud\Dbbrain\V20191016;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbbrain\V20191016\Models as Models;

/**
 * @method Models\CreateDBDiagReportTaskResponse CreateDBDiagReportTask(Models\CreateDBDiagReportTaskRequest $req) 创建健康报告，并可以选择是否发送邮件。
 * @method Models\CreateMailProfileResponse CreateMailProfile(Models\CreateMailProfileRequest $req) 创建邮件配置。其中入参ProfileType表示所创建配置的类型，ProfileType 取值包括：dbScan_mail_configuration（数据库巡检邮件配置）、scheduler_mail_configuration（定期生成邮件配置）。
 * @method Models\CreateSecurityAuditLogExportTaskResponse CreateSecurityAuditLogExportTask(Models\CreateSecurityAuditLogExportTaskRequest $req) 创建安全审计日志导出任务。
 * @method Models\DeleteSecurityAuditLogExportTasksResponse DeleteSecurityAuditLogExportTasks(Models\DeleteSecurityAuditLogExportTasksRequest $req) 删除安全审计日志导出任务。
 * @method Models\DescribeAllUserContactResponse DescribeAllUserContact(Models\DescribeAllUserContactRequest $req) 获取邮件发送中联系人的相关信息。
 * @method Models\DescribeAllUserGroupResponse DescribeAllUserGroup(Models\DescribeAllUserGroupRequest $req) 获取邮件发送联系组的相关信息。
 * @method Models\DescribeDBDiagEventResponse DescribeDBDiagEvent(Models\DescribeDBDiagEventRequest $req) 获取实例异常诊断事件的详情信息。
 * @method Models\DescribeDBDiagHistoryResponse DescribeDBDiagHistory(Models\DescribeDBDiagHistoryRequest $req) 获取实例诊断事件的列表。
 * @method Models\DescribeDBSpaceStatusResponse DescribeDBSpaceStatus(Models\DescribeDBSpaceStatusRequest $req) 获取指定时间段内的实例空间使用概览，包括磁盘增长量(MB)、磁盘剩余(MB)、磁盘总量(MB)及预计可用天数。
 * @method Models\DescribeSecurityAuditLogDownloadUrlsResponse DescribeSecurityAuditLogDownloadUrls(Models\DescribeSecurityAuditLogDownloadUrlsRequest $req) 查询安全审计日志导出文件下载链接。目前日志文件下载仅提供腾讯云内网地址，请通过广州地域的腾讯云服务器进行下载。
 * @method Models\DescribeSecurityAuditLogExportTasksResponse DescribeSecurityAuditLogExportTasks(Models\DescribeSecurityAuditLogExportTasksRequest $req) 查询安全审计日志导出任务列表。
 * @method Models\DescribeSlowLogTimeSeriesStatsResponse DescribeSlowLogTimeSeriesStats(Models\DescribeSlowLogTimeSeriesStatsRequest $req) 获取慢日志统计柱状图。
 * @method Models\DescribeSlowLogTopSqlsResponse DescribeSlowLogTopSqls(Models\DescribeSlowLogTopSqlsRequest $req) 按照Sql模板+schema的聚合方式，统计排序指定时间段内的top慢sql。
 * @method Models\DescribeTopSpaceTableTimeSeriesResponse DescribeTopSpaceTableTimeSeries(Models\DescribeTopSpaceTableTimeSeriesRequest $req) 获取实例占用空间最大的前几张表在指定时间段内的每日由DBbrain定时采集的空间数据，默认返回按大小排序。
 * @method Models\DescribeTopSpaceTablesResponse DescribeTopSpaceTables(Models\DescribeTopSpaceTablesRequest $req) 获取实例Top表的实时空间统计信息，默认返回按大小排序。
 * @method Models\ModifyDiagDBInstanceConfResponse ModifyDiagDBInstanceConf(Models\ModifyDiagDBInstanceConfRequest $req) 修改实例巡检开关。
 */

class DbbrainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbbrain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dbbrain";

    /**
     * @var string
     */
    protected $version = "2019-10-16";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("dbbrain")."\\"."V20191016\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
