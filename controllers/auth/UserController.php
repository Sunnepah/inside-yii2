<?php

namespace app\controllers\auth;

use yii\web\Controller;

/**
 * Class UserController
 * @package app\controllers\auth
 */
class UserController extends Controller
{
    /**
     * Login.
     *
     * @return string
     */
    public function actionLogin()
    {
        return $this->render('login');
    }
}
