<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBalance extends Model
{
    protected $table = 'user_balances';

    protected $fillable = ['user_id','details','charge','balance_type','balance','old_balance','new_balance'];
}
