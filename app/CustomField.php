<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomField extends Model {

	protected $fillable=[
        'fieldName',
        'fieldType',
            'entityId'
    ];

}
