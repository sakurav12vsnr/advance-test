<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $fillable = [
            'contact_id',
            'name',
            'gender',
            'register_date',
            'email',
        ];

    public function contact()
    {
            return $this->belongsTo(Contact::class);
    }
}
