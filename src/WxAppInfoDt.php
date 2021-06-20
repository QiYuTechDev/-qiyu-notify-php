<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


use Typed\TypedArray;

class WxAppInfoDt extends TypedArray
{


    /**
     * 唯一标识
     * @var string
     */

    public $unique_id;


    /**
     * 企业微信公司ID
     * @var string
     */

    public $corp_id;


    /**
     * 微信令牌
     * @var string
     */

    public $wx_token;


    /**
     * AES密钥
     * @var string
     */

    public $aes_key;


    /**
     * AgentID
     * @var int
     */

    public $agent_id;


    /**
     * 企业微信Secret
     * @var string
     */

    public $secret;


    /**
     * 已验证
     */

    public $verified;


    /**
     * 验证时间
     * @var string
     */

    public $verify_time;


    /**
     * 创建时间
     * @var string
     */

    public $ctime;


}

