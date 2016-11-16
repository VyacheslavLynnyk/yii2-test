<?php
namespace frontend\componen;

use yii\base\Component;

class Common extends Component
{
    public static function sendMail($mail, $subject, $body, $name = '' )
    {
        Yii::$app->mail->compose()
            ->setFrom(['noreply@example.com' => 'My Example Site'])
            ->setTo([$mail => $name])
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();
    }
}