<?php

namespace Admin;

use Illuminate\Database\Eloquent\Model;
use Valitron\Validator;

final class Comment extends Model
{
    public $timestamps = false;
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    protected $fillable = [
        'comment_post_id',
        'comment_author',
        'comment_email',
        'comment_content',
        'comment_status',
        'comment_date',
        ];

    public function getValidator($data)
    {
        $validator = new Validator($data);
        $validator->rule('required', 'comment_post_id');
        $validator->rule('required', 'comment_author');
        $validator->rule('lengthBetween', 'comment_author', 1, 255);
        $validator->rule('required', 'comment_email');
        $validator->rule('lengthBetween', 'comment_email', 1, 255);
        $validator->rule('required', 'comment_content');

        return $validator;
    }
}