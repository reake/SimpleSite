<?php
namespace App\Utility;

class Response
{
    public static $codes
        = array(
            1001 => array(
                'code' => 1001,
                'desc' => '正常'
            )
        );

    /**
     * JsonReturn
     *
     * @param $code
     * @param $data
     */
    public static function jsonReturn($code, $data)
    {
        if (isset(self::$codes[$code])) {
            $result = array(
                'status' => self::$codes[$code],
                'result' => $data
            );
        } else {
            $result = array(
                'status' => array(
                    'code' => 4444,
                    'desc' => 'Unknown Error'
                ),
                'result' => $data
            );
        }

        echo json_encode($result);
    }
}