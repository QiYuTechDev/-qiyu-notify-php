<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiEmailMsgList extends ApiBase
{


    /**
     * 获取电子邮箱的邮件信息
     * @return EmailMsgDt[]
     */
    public static function do_get(
        $query_args
    ): ?array
    {
        $method = "GET";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/email/msg/list";
        $path_args = [];
        $header = [];
        $body_args = [];
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return array_map([EmailMsgDt::class, 'from_array'], $ret);
    }


}

