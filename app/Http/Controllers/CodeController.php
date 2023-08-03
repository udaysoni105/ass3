<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class YourModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute1',
        'attribute2',
        // Add other fillable attributes
    ];

    /**
     * The validation rules for the model attributes.
     *
     * @var array
     */
    protected $validationRules = [
        'attribute1' => ['required', 'string'],
        'attribute2' => ['required', 'integer'],
        // Add validation rules for other attributes
    ];

    /**
     * Perform validation before saving the model.
     *
     * @param  array  $options
     * @return bool
     * @throws \Exception
     */
    public function save(array $options = [])
    {
        $validator = Validator::make($this->attributesToArray(), $this->validationRules);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }

        return parent::save($options);
    }
}

