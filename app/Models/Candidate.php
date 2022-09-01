<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'first_name', 'second_name', 'first_last_name', 'second_last_name', 'gender', 'birthdate', 'national_committee_id', 'official_picture'];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function national_committee(){
        return $this->belongsTo(NationalCommittee::class, 'national_committee_id');
    }
}
