<?php
/**
 * 邢帅教育
 * 本源代码由邢帅教育及其作者共同所有，未经版权持有者的事先书面授权，
 * 不得使用、复制、修改、合并、发布、分发和/或销售本源代码的副本。
 *
 * @copyright Copyright (c) 2016 xsteach.com all rights reserved.
 */


namespace application\user\forms;



use application\user\models\Teacher;

class TeacherForm extends Teacher
{
    public function rules()
    {
        return [
            [['name','tel'],'required'],
        ];
    }
}