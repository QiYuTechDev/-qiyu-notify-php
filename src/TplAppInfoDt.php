<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


use Typed\TypedArray;

class TplAppInfoDt extends TypedArray
{
    /**
     * 模版应用名称
     * @var string
     */
    public $app_name;

    /**
     * 唯一标识
     * @var string
     */
    public $unique_id;

    /**
     * 微信应用信息
     */
    public $wx_app = WxAppInfoDt::class;

    /**
     * 邮箱应用信息
     */
    public $email_app = EmailAppInfoDt::class;

    /**
     * 钉钉应用信息
     */
    public $dd_app = DdAppInfoDt::class;

    /**
     * 模版
     * @var string
     */
    public $tpl_code;

    /**
     * 备注
     * @var string
     */
    public $comment;

    /**
     * 创建时间
     * @var string
     */
    public $ctime;

}

