<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminNavigation extends Model
{
    protected $fillable=[
        'name','slug','icon','link','parent_id','type','active','delete'
    ];

    protected $hidden = [
        'id',
    ];

    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'parent_id');
    }

    public function scopeOnlyParent($q)
    {
        return $q->whereNull('parent_id');
    }
}
