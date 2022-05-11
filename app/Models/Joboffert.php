<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Job Offert Model
 * @author Brayan Rincon <hi@bracodev.com>
 * @category Models
 * @package App\Model
 */
class Joboffert extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    /**
     * The users that belong to the job offert.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
