<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiWxApp extends ApiBase
{


    /**
     * 添加企业微信推送配置
     */
    public static function do_put(
        WxAppCreateDt $body
    ): ?WxAppInfoDt
    {
        $method = "PUT";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/wx/app";
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
        return WxAppInfoDt::from_array($ret);
    }


    /**
     * 删除企业微信配置
     * @param $query_args = ["unique_id" => "xxx"]
     */
    public static function do_delete(
        $query_args
    ): ?array
    {
        $method = "DELETE";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/wx/app";
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

}

