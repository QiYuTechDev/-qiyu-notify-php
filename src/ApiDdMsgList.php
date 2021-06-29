<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiDdMsgList extends ApiBase
{


    /**
     * 获取钉钉APP最新消息列表
     * @param $query_args = ["unique_id" => "xxx"]
     * @return DdMsgDt[]
     */
    public static function do_get(
        $query_args
    ): ?array
    {
        $method = "GET";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/dd/msg/list";
        $path_args = [];
        $header = [];
        $body_args = [];
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return array_map([DdMsgDt::class, 'from_array'], $ret);
    }


}

