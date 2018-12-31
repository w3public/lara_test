<?php
/**
 * Created by Bablu.
 * User: Bablu
 * Date: 12/24/2018
 * Time: 10:43 PM
 */

namespace App\billing;


class Stripe
{
    public $key;
    public function __construct($key) {
        $this->key = $key;
    }

    public function get_result($a,$b,$type)
    {
        if($type=='sum')
        {
            return $a+$b;
        }
        else if($type=='sub')
        {
            return $a-$b;
        }
        else if($type=='mul')
        {
            return $a*$b;
        }
        else if($type=='div')
        {
            return $a/$b;
        }
        else
            return 'Please Enter Valid Number';
    }
}