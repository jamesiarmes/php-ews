<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 20-7-15
 * Time: 16:27
 */

namespace jamesiarmes\PEWS;

class Caster
{

    public static function cast($value, $type)
    {
        $casts = self::getCasts();
        $fromType = gettype($value);
        if ($fromType == "object") {
            $fromType = get_class($value);
        }

        if ($fromType == $type || ($type == "ExchangeFormat" && gettype($value) !== "object")) {
            return $value;
        }

        if (!empty($casts[$type][$fromType])) {
            return $casts[$type][$fromType]($value);
        }

        return null;
    }

    public static function castExists($from, $to)
    {
        $casts = self::getCasts();
        return !(empty($casts[$to][$from]));
    }

    private static function getCasts()
    {
        return [
            'DateTime' => [
                'string' => function ($value) {
                    return new \DateTime($value);
                }
            ],

            'ExchangeFormat' => [
                'DateTime' => function ($value) {
                    return $value->format('c');
                }
            ]
        ];
    }
}
