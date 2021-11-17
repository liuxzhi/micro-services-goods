<?php

declare (strict_types=1);
namespace App\Model;

/**
 */
class MerchandiseItemAttributeValue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'merchandise_item_attribute_value';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'merchandise_id', 'item_id', 'attribute_id', 'attribute_value_id', 'state', 'deleted_at', 'updated_at', 'created_at'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'merchandise_id' => 'integer', 'item_id' => 'integer', 'attribute_id' => 'integer', 'attribute_value_id' => 'integer', 'state' => 'integer', 'created_at' => 'integer', 'updated_at' => 'integer', 'deleted_at' => 'integer'];

    protected $dateFormat = 'U';
}