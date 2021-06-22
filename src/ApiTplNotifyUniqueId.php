<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiTplNotifyUniqueId extends ApiBase
{


    /**
     * 发送自定义模版通知消息
     */
    public static function do_post(
        $path_args
    ): ?array
    {
        $method = "POST";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/tpl/notify/{unique_id}";
        $query_args = [];
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

