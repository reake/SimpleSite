<?php
namespace App\Utility;

class Response
{
    public static $codes = array(
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
        $result = array(
            'status' => self::$codes[$code],
            'result' => $data
        );
        echo json_encode($result);
    }
}