<?php

namespace App\Models\Traits\Method;


trait CouponMethod
{
    /**
     * Calculate discount value
     *
     * @param $subtotal
     * @return float
     */
    public function discount($subtotal)
    {
        $subtotal = (float) str_replace(',', '', $subtotal);
        if ($this->type == config('common.coupon.type.fixed')) {
            return $this->value;
        } elseif ($this->type == config('common.coupon.type.percent')) {
            return round(($this->value/100) * $subtotal);
        }
    }
}