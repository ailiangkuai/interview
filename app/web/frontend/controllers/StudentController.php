<?php

namespace application\web\frontend\controllers;



use application\user\services\StudentService;
use application\web\frontend\components\Controller;

/**
 * Class StudentController 学员管理
 * @package application\web\frontend\controllers
 */
class StudentController extends Controller
{
    /**
     * actionCreate 添加学员
     * @return string|\yii\web\Response
     */
    public function actionCreate(){
        /* @var StudentService $studentService*/
        $studentService = \Yii::$app->student;
        $model = $studentService->createStudent(\Yii::$app->request->post());
        if (!$model->hasErrors()) {
            return $this->redirect('index');
        }
        return $this->render('create',[
            'model'=>$model
        ]);
    }

    /**
     * actionIndex 学员列表
     * @return string
     */
    public function actionIndex(){
        /* @var StudentService $studentService*/
        $studentService = \Yii::$app->student;
        $dataProvider = $studentService->getStudentProvider();
        return $this->render('index',[
            'dataProvider'=>$dataProvider
        ]);
    }
}