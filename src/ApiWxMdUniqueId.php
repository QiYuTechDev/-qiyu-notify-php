<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiWxMdUniqueId extends ApiBase
{


    /**
     * 发送 Markdown 通知消息到企业微信
     * @param $path_args = ["unique_id" => "xxx"]
     */
    public static function do_post(
        $path_args
        , NotifyArgs $body
    ): ?array
    {
        $method = "POST";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/wx/md/{unique_id}";
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


}

