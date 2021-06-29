<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class TplAppUpdateDt extends \Typed\TypedArray
{
    /**
     * 模版应用名称
     * @var string
     */
    public $app_name;

    /**
     * 微信应用UUID
     * @var string
     */
    public $wx_app;

    /**
     * 钉钉应用UUID
     * @var string
     */
    public $dd_app;

    /**
     * 邮箱应用UUID
     * @var string
     */
    public $email_app;

    /**
     * 模版
     * @var string
     */
    public $tpl_code;

    /**
     * 用备注
     * @var string
     */
    public $comment;

    /**
     * 唯一标识
     * @var string
     */
    public $unique_id;

}

