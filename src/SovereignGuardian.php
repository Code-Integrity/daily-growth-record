<?php

declare(strict_types=1);

namespace Sovereign\Security;

/**
* SovereignGuardian: 不可侵の聖域を守るための「浄化と検閲」の論理
*/
class SovereignGuardian
{
    /**
    * 入力を厳格に検閲し、正の浮動小数点数のみを抽出する
    */
    public static function validatePositiveFloat(mixed $input): float
    {
        // ホワイトリスト方式：半角数字と小数点以外は一切拒絶
        if (!preg_match('/^[0-9]+(\.[0-9]+)?$/', (string)$input)) {
            throw new \InvalidArgumentException("Detection: Unauthorized characters in input.");
        }

        $value = (float)$input;

        if ($value <= 0) {
            throw new \InvalidArgumentException("Denial: Value must be greater than zero.");
        }

        return $value;
    }

    /**
    * 出力を浄化し、XSSという名の牙を抜く
    */
    public static function purify(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
