<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiEmailApp extends ApiBase
{


    /**
     * 添加电子邮箱
     * @param $query_args = ["email" => "xxx"]
     */
    public static function do_put(
        $query_args
    ): ?array
    {
        $method = "PUT";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/email/app";
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
     * 删除电子邮箱推送配置
     * @param $query_args = ["unique_id" => "xxx"]
     */
    public static function do_delete(
        $query_args
    ): ?array
    {
        $method = "DELETE";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/email/app";
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

