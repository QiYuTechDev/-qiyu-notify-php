<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


use Typed\TypedArray;

class ChatwootWebHookDt extends TypedArray
{
    /**
     * 事件名称
     * @var string
     */
    public $event;

    /**
     * 消息ID
     * @var string
     */
    public $id;

    /**
     * 消息内容
     * @var string
     */
    public $content;

    /**
     * 发送时间
     * @var string
     */
    public $created_at;

    /**
     * 消息类型
     * @var string
     */
    public $message_type;

    /**
     * 内容类型
     * @var string
     */
    public $content_type;

    /**
     * 内容属性
     */
    public $content_attributes;

    /**
     * 来源ID
     * @var string
     */
    public $source_id;

    /**
     * 发送者
     */
    public $sender = ChatwootSenderDt::class;

    /**
     * 联系人
     */
    public $contact = ChatwootContactDt::class;

    /**
     * 会话信息
     */
    public $conversation = ChatwootConversationDt::class;

    /**
     * 账号信息
     */
    public $account = ChatwootAccountDt::class;

}

