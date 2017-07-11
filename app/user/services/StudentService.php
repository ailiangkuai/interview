<?php
/**
 * 邢帅教育
 * 本源代码由邢帅教育及其作者共同所有，未经版权持有者的事先书面授权，
 * 不得使用、复制、修改、合并、发布、分发和/或销售本源代码的副本。
 *
 * @copyright Copyright (c) 2016 xsteach.com all rights reserved.
 */


namespace application\user\services;


use application\user\forms\StudentForm;
use application\user\models\Student;
use yii\base\Component;
use yii\data\ActiveDataProvider;

/**
 * Class StudentService 学员接口
 * @package application\user\services
 * @author yaoyongfeng
 */
class StudentService extends Component
{
    /**
     * createStudent 新增学员
     * @param array $data
     * @param string|null $formName 表单名称
     * @param array|null $attributeNames 需要入库的属性
     * @param bool $onlyValidator
     * @return StudentForm
     */
    public function createStudent(array $data, $formName = null, $attributeNames = null, $onlyValidator = false){

        $model = new StudentForm();
        if ($model->load($data, $formName)) {
            if ($onlyValidator) {
                $model->validate($attributeNames);
            } else {
                $model->insert(true, $attributeNames);
            }
        }
        return $model;
    }


    /**
     * getStudentProvider 学员列表
     * @param int $pageSize
     * @return ActiveDataProvider
     */
    public function getStudentProvider($pageSize = 20){
        return (new ActiveDataProvider([
            'query'=>Student::find(),
            'pagination'=>[
                'pageSize'=>$pageSize
            ]
        ]));
    }
}