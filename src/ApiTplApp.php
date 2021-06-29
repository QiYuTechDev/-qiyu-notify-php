<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiTplApp extends ApiBase
{


    /**
     * 获取自定义模版APP详情
     * @param $query_args = ["unique_id" => "xxx"]
     */
    public static function do_get(
        $query_args
    ): ?TplAppInfoDt
    {
        $method = "GET";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/tpl/app";
        $path_args = [];
        $header = [];
        $body_args = [];
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return TplAppInfoDt::from_array($ret);
    }


    /**
     * 创建自定义模版APP
     */
    public static function do_put(
        TplAppCreateDt $body
    ): ?TplAppInfoDt
    {
        $method = "PUT";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/tpl/app";
        $path_args = [];
        $query_args = [];
        $header = [];
        $body_args = $body->to_array();
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return TplAppInfoDt::from_array($ret);
    }


    /**
     * 删除自定义模版推送配置
     * @param $query_args = ["unique_id" => "xxx"]
     */
    public static function do_delete(
        $query_args
    ): ?array
    {
        $method = "DELETE";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/tpl/app";
        $path_args = [];
        $header = [];
        $body_args = [];
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return $ret;
    }


    /**
     * 更新模版APP
     */
    public static function do_patch(
        TplAppUpdateDt $body
    ): ?TplAppInfoDt
    {
        $method = "PATCH";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/tpl/app";
        $path_args = [];
        $query_args = [];
        $header = [];
        $body_args = $body->to_array();
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return TplAppInfoDt::from_array($ret);
    }
}

