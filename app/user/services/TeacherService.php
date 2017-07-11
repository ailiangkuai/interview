<?php
/**
 * 邢帅教育
 * 本源代码由邢帅教育及其作者共同所有，未经版权持有者的事先书面授权，
 * 不得使用、复制、修改、合并、发布、分发和/或销售本源代码的副本。
 *
 * @copyright Copyright (c) 2016 xsteach.com all rights reserved.
 */


namespace application\user\services;


use application\user\forms\TeacherForm;
use yii\base\Component;

class TeacherService extends Component
{
    /**
     * createStudent 新增老师
     * @param array $data
     * @param string|null $formName 表单名称
     * @param array|null $attributeNames 需要入库的属性
     * @param bool $onlyValidator
     * @return TeacherForm
     */
    public function createStudent(array $data, $formName = null, $attributeNames = null, $onlyValidator = false){

        $model = new TeacherForm();
        if ($model->load($data, $formName)) {
            if ($onlyValidator) {
                $model->validate($attributeNames);
            } else {
                $model->insert(true, $attributeNames);
            }
        }
        return $model;
    }
}