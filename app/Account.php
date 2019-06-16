<?php
/**
 * Created by PhpStorm.
 * User: paddy.
 * Date: 2019-06-16
 * Time: 15:27
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    protected $fillable = [
        'acc_IBAN', 'acc_BIC', 'acc_vefueger',
    ];

    public function User()
    {
        $this->hasOne(Account::class);
    }

    public static function generateAccount(){
        return [
            'acc_IBAN' => Account::generateIBAN(),
            'acc_BIC' => 'BIC123',
            'acc_verfueger' => Account::generateCustomerNmb(),
        ];
    }
    public static function generateIBAN(){
        return ('AT'.mt_rand(000000, 999999));
    }
    public static function generateCustomerNmb()
    {
        return (mt_rand(000000, 999999));
    }

}