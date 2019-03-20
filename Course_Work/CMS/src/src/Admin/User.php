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
        'user_image',
        'user_role',
        'randSalt',
        ];

    public function getValidator($data)
    {
        $validator = new Validator($data);
        $validator->rule('required', 'user_username');
        $validator->rule('lengthBetween', 'user_username', 1, 255);
        $validator->rule('required', 'user_password');
        $validator->rule('lengthBetween', 'user_password', 1, 255);
        $validator->rule('required', 'user_firstname');
        $validator->rule('lengthBetween', 'user_firstname', 1, 255);
        $validator->rule('required', 'user_lastname');
        $validator->rule('lengthBetween', 'user_lastname', 1, 255);
        $validator->rule('required', 'user_email');
        $validator->rule('lengthBetween', 'user_email', 1, 255);
//        $validator->rule('required', 'user_image');
//        $validator->rule('lengthBetween', 'user_image', 1, 255);
        $validator->rule('required', 'user_role');
        $validator->rule('lengthBetween', 'user_role', 1, 255);

        return $validator;
    }
}