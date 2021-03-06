<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPumpGroups()
    {
        return $this->render('pump-groups');
    }

    public function actionPumpsSchedule()
    {
        return $this->render('pumps-schedule');
    }
}