<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "user_details".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $f_name
 * @property string $l_name
 * @property integer $p_phone
 * @property integer $s_phone
 * @property string $s_question
 * @property string $s_answer
 * @property string $p_email
 * @property string $s_email
 * @property integer $role
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 * @property User $id0
 */
class UserDetails extends ActiveRecord
{
    const ROLE_USER  = 10;
    const ROLE_ADMIN = 20;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_details';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'f_name', 'p_phone', 's_question', 's_answer', 'p_email'], 'required'],
            [['p_phone', 's_phone', 'role'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['f_name', 'l_name'], 'string', 'max' => 16],
            [['s_question', 's_answer'], 'string', 'max' => 128],
            [['p_email', 's_email'], 'string', 'max' => 64],
            ['role', 'default', 'value' => 10],
            ['role', 'in', 'range' => [self::ROLE_USER, self::ROLE_ADMIN]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'created_at' => 'Created At',
            'deleted_at' => 'Deleted At',
            'f_name'     => 'First Name',
            'id'         => 'ID',
            'l_name'     => 'Last Name',
            'p_email'    => 'Primary Email',
            'p_phone'    => 'Primary Phone',
            'role'       => 'Role',
            's_answer'   => 'Security Answer',
            's_email'    => 'Secondary Email',
            's_phone'    => 'Secondary Phone',
            's_question' => 'Security Question',
            'updated_at' => 'Updated At',
            'user_id'    => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserAccount()
    {
        return $this->hasOne(User::className(), ['user_id' => 'id']);
    }

    /**
     * [isUserAdmin description]
     * @param  integer  $user_id
     * @return boolean
     */
    public static function isUserAdmin($user_id)
    {
        if (static::findOne(['user_id' => $user_id, 'role' => self::ROLE_ADMIN])){

            return true;
        } else {

            return false;
        }

        return false;
    }

    /* convert the datetime<->timestamp between saving and displaying */

    public function beforeSave($insert)
    {
        // convert datetime to timestamp for MDL, but only for 'Expiration' attrib.
        $this->setAttribute('created_at', strtotime($this->getAttribute('created_at')) );
        $this->setAttribute('updated_at', strtotime($this->getAttribute('updated_at')) );

        return $this;
    }

    public function afterFind()
    {
        // convert timestamp to datetime for CNTL/VW, but only for 'Expiration' attrib.
        $this->setAttribute('created_at', date('Y-m-d H:i:s', $this->getAttribute('created_at')));
        $this->setAttribute('updated_at', date('Y-m-d H:i:s', $this->getAttribute('updated_at')));

        return $this;
    }
}
