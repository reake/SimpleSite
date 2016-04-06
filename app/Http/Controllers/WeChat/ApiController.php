<?php
namespace App\Http\Controllers\WeChat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;

class UserController extends Controller
{
    public function auth(Request $request)
    {
        /**
         * Debug
         * http://mp.weixin.qq.com/debug/cgi-bin/sandboxinfo?action=showinfo&t=sandbox/index
         */
        $options = array(
            /**
             * Debug 模式，bool 值：true/false
             *
             * 当值为 false 时，所有的日志都不会记录
             */
            'debug'   => true,
            /**
             * 账号基本信息，请从微信公众平台/开放平台获取
             */
            'app_id'  => 'your-app-id',         // AppID
            'secret'  => 'your-app-secret',     // AppSecret
            'token'   => 'your-token',          // Token
            'aes_key' => '',                    // EncodingAESKey
            /**
             * 日志配置
             *
             * level: 日志级别, 可选为：
             *         debug/info/notice/warning/error/critical/alert/emergency
             * file：日志文件位置(绝对路径!!!)，要求可写权限
             */
            'log'     => [
                'level' => 'debug',
                'file'  => '/tmp/easywechat.log',
            ],
            /**
             * OAuth 配置
             *
             * scopes：公众平台（snsapi_userinfo / snsapi_base），开放平台：snsapi_login
             * callback：OAuth授权完成后的回调页地址
             */
            'oauth'   => [
                'scopes'   => ['snsapi_userinfo'],
                'callback' => '/examples/oauth_callback.php',
            ],
            /**
             * 微信支付
             */
            'payment' => [
                'merchant_id' => 'your-mch-id',
                'key'         => 'key-for-signature',
                'cert_path'   => 'path/to/your/cert.pem', // XXX: 绝对路径！！！！
                'key_path'    => 'path/to/your/key',      // XXX: 绝对路径！！！！
                // 'device_info'     => '013467007045764',
                // 'sub_app_id'      => '',
                // 'sub_merchant_id' => '',
                // ...
            ],
        );
        $app = new Application($options);

        $server = $app->server;

        $server->setMessageHandler(function ($message) {
            switch ($message->MsgType) {
                case 'event':
                    # 事件消息...
                    break;
                case 'text':
                    # 文字消息...
                    break;
                case 'image':
                    # 图片消息...
                    break;
                case 'voice':
                    # 语音消息...
                    break;
                case 'video':
                    # 视频消息...
                    break;
                case 'location':
                    # 坐标消息...
                    break;
                case 'link':
                    # 链接消息...
                    break;
                // ... 其它消息
                default:
                    # code...
                    break;
            }

            // ...
        });

        $app->server->serve()->send();
    }
}