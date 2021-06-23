<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


use Typed\TypedArray;

class EmailAppInfoDt extends TypedArray
{
    /**
     * 唯一标识
     * @var string
     */
    public $unique_id;

    /**
     * 推送接收邮箱
     * @var string
     */
    public $notify_email;

    /**
     * 是否验证
     */
    public $verified;

    /**
     * 创建时间
     * @var string
     */
    public $ctime;

}

