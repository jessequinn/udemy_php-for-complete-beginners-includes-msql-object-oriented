<?php

namespace Admin;

use Illuminate\Database\Eloquent\Model;
use Valitron\Validator;

final class User extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_username',
        'user_password',
        'user_firstname',
        'user_lastname',
        'user_email',
        'user_role'
        ];

    public function getValidator($data)
    {
        $validator = new Validator($data);
        $validator->rule('required', [
            'user_username',
            'user_password',
            'user_firstname',
            'user_lastname',
            'user_email',
            'user_role',
        ]);
        $validator->rule('lengthBetween', 'user_username', 1, 255);
        $validator->rule('lengthBetween', 'user_password', 1, 255);
        $validator->rule('lengthBetween', 'user_firstname', 1, 255);
        $validator->rule('lengthBetween', 'user_lastname', 1, 255);
        $validator->rule('lengthBetween', 'user_email', 1, 255);
        $validator->rule('lengthBetween', 'user_role', 1, 255);

        return $validator;
    }

    public function getNameAttribute($randSalt)
    {
        if ($this->exists) {
            return $randSalt;
        } else {
            return 'default randSalt';
        }
    }
}