<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'engineer_id', 'company_id', 'amount', 'message', 'status'];

    // Relationship with Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    // Relationship with Engineer (User)
    public function engineer()
    {
        return $this->belongsTo(User::class, 'engineer_id');
    }

    // Relationship with Company (User)
    public function company()
    {
        return $this->belongsTo(User::class, 'company_id');
    }
    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
