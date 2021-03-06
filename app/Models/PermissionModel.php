<?php

namespace App\Models;

class PermissionModel extends Model
{

    // Name of the table
    protected $model = "permissions";

    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated_at',
        'deleted_at',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Load class 'staticaly'
     */
    public static function load()
    {
        return new static;
    }

    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields
        );   
    }
}