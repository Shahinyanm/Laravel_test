<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name','country','city','street','number','postcode','company_type-id','currency_id','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }

    public function type(){
        return $this->belongsTo(CompanyType::class);
    }
}
