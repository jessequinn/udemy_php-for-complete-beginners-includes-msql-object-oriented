<?php

namespace Admin;

use Illuminate\Database\Eloquent\Model;
use Valitron\Validator;

final class Post extends Model
{
    public $timestamps = false;
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    protected $fillable = [
        'post_category_id',
        'post_title',
        'post_author',
        'post_user',
        'post_date',
        'post_img',
        'post_content',
        'post_tags',
        'post_comment_count',
        'post_status',
        'post_views_count',
        ];

    public function getValidator($data)
    {
        $validator = new Validator($data);
        $validator->rule('required', 'post_title');
        $validator->rule('lengthBetween', 'post_title', 1, 255);
        $validator->rule('required', 'post_author');
        $validator->rule('lengthBetween', 'post_author', 1, 255);
        $validator->rule('required', 'post_tags');
        $validator->rule('lengthBetween', 'post_tags', 1, 255);
        $validator->rule('required', 'post_status');
        $validator->rule('lengthBetween', 'post_status', 1, 255);
        $validator->rule('required', 'post_category');
        $validator->rule('required', 'post_content');

        return $validator;
    }
}