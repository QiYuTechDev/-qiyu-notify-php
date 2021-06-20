<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiTplAppList extends ApiBase
{


    /**
     * 获取所有的自定义模版推送的配置
     * @return TplAppInfoDt[]
     */
    public static function do_get(): ?array
    {
        $method = "GET";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/tpl/app/list";
        $path_args = [];
        $query_args = [];
        $header = [];
        $body_args = [];
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return array_map([TplAppInfoDt::class, 'from_array'], $ret);
    }


}

