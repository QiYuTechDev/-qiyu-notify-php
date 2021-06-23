<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


use Typed\TypedArray;

class DdAppInfoDt extends TypedArray
{
    /**
     * 唯一标识
     * @var string
     */
    public $unique_id;

    /**
     * 应用名称
     * @var string
     */
    public $app_name;

    /**
     * 钉钉访问令牌
     * @var string
     */
    public $dd_ak;

    /**
     * 钉钉加密密钥
     * @var string
     */
    public $dd_sk;

    /**
     * 已验证
     */
    public $verified;

    /**
     * 创建时间
     * @var string
     */
    public $ctime;

}

