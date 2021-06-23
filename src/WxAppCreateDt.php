<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;



use Typed\TypedArray;

class WxAppCreateDt extends TypedArray
{
    /**
     * 应用名称
     * @var string
     */
    public $app_name;

    /**
     * 企业微信 -> 公司ID
     * @var string
     */
    public $corp_id;

    /**
     * 企业微信 -> 微信令牌
     * @var string
     */
    public $wx_token;

    /**
     * 企业微信 -> AES密钥
     * @var string
     */
    public $aes_key;

    /**
     * 企业微信 -> AgentID
     * @var int
     */
    public $agent_id;

    /**
     * 企业微信 -> Secret
     * @var string
     */
    public $secret;

}

