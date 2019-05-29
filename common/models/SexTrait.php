<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.05.2019
 * Time: 16:55
 */

namespace common\models;

use Yii;

trait SexTrait
{
    public function getAllSex()
    {
//    user.sex берем з common-config-params.php
        return Yii::$app->params['user.sex'];
    }

    public function getMale()
    {
        return Yii::$app->params['user.sex']['male'];
    }

    public function getFemale()
    {
        return Yii::$app->params['user.sex']['female'];
    }

    public function getUnderfinedSex()
    {
        return Yii::$app->params['user.sex']['underfined'];
    }
}