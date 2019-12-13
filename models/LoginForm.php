<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;
use app\models\Country;


/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $email;
    public $password;
    public $example;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required'],
            // rememberMe must be a boolean value
            // password is validated by validatePassword()
            //['password', 'validatePassword'],
        ];
    }
   public function login(){
 
    $ret=false;
    //if ($this->email==='mail@ru'){$ret=true;}
    //$this->email='stand';
    //$example=Country::findOne('Russia');
    //$this->example=$example->name; //User::findOne('mail@ru')->id;
     return $ret;
    
   }
 
    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        return User::findOne(['email'=>$this->email]);
    }
}
