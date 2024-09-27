<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'budget', 'deadline', 'user_id',
    ];
            public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function engineer()
        {
            return $this->belongsTo(User::class, 'engineer_id');
        }

        public function company()
        {
            return $this->belongsTo(User::class, 'company_id');
        }

        public function assignments()
        {
            return $this->hasMany(ProjectAssignment::class);
        }

        public function bids()
        {
             return $this->hasMany(Bid::class);
        }


}




   