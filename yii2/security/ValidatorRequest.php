<?php

namespace app\security;


class ValidatorRequest
{

    public static function validatorHeader($headers)
    {
        $accept = $headers->get('Authorization');
        // throw new \yii\web\NotFoundHttpException('The requested page does not exist.', 500);
        return $accept;
    }
}
