<?php

namespace App\Models\Traits\Attribute;

trait CouponAttribute
{
    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case config('common.coupon.status.used'):
                return '<span class="badge badge-dark">Used</span>';
            case config('common.coupon.status.active'):
                return '<span class="badge badge-success">Active</span>';
            default:
                return '<span class="badge badge-secondary">Inactive</span>';
        }
    }

    public function getValueLabelAttribute()
    {
        if ($this->type == config('common.coupon.type.percent')) {
            return $this->value . ' %';
        } else {
            return $this->value . ' VNĐ';
        }
    }
}
