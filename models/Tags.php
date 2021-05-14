<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property int $docid
 * @property int $tagid
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['docid', 'tagid'], 'required'],
            [['docid', 'tagid'], 'integer'],
            [['docid', 'tagid'], 'unique', 'targetAttribute' => ['docid', 'tagid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'docid' => 'Docid',
            'tagid' => 'Tagid',
        ];
    }
}
