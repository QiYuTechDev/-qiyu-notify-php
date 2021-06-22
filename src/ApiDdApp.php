<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiDdApp extends ApiBase
{


    /**
     * 添加钉钉推送配置
     */
    public static function do_put(
        DdAppCreateDt $body
    ): ?array
    {
        $method = "PUT";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/dd/app";
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
        return $ret;
    }


    /**
     * 删除钉钉推送配置
     */
    public static function do_delete(
        $query_args
    ): ?array
    {
        $method = "DELETE";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/dd/app";
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

