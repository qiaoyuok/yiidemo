<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documents".
 *
 * @property int $id
 * @property int $group_id
 * @property int $group_id2
 * @property string $date_added
 * @property string $title
 * @property string $content
 */
class Documents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'group_id2', 'date_added', 'title', 'content'], 'required'],
            [['group_id', 'group_id2'], 'integer'],
            [['date_added'], 'safe'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'group_id2' => 'Group Id2',
            'date_added' => 'Date Added',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }
}
