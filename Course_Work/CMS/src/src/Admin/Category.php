<?php

namespace Admin;

use Illuminate\Database\Eloquent\Model;
use Valitron\Validator;

final class Category extends Model
{
    public $timestamps = false;
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    protected $fillable = ['cat_title'];

    public function update(array $attributes = [], array $options = [])
    {
        $validator = $this->getValidator($attributes);
        if (!$validator->validate()) {
            $messages = [];
            foreach ($validator->errors() as $fieldName => $errors) {
                $messages[] = current($errors);
            }
            $message = implode("\n", $messages);
            throw new \Exception($message);
        }
        return parent::update($attributes);
    }

    public function getValidator($data)
    {
        $validator = new Validator($data);
        $validator->rule('required', 'cat_title');
        $validator->rule('lengthBetween', 'cat_title', 1, 255);
//        $validator->labels([
//            'cat_title' => 'Title',
//        ]);

        return $validator;
    }
}