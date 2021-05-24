<?php

namespace App\Models\Traits\Attribute;

trait OrderAttribute
{
    public function getStatusTextAttribute()
    {
        switch ($this->status) {
            case config('common.order.status.ordered'):
                return 'Ordered';
            case config('common.order.status.processing'):
                return 'Processing';
            case config('common.order.status.cancelled'):
                return 'Cancelled';
            case config('common.order.status.done'):
                return 'Done';
            default:
                return 'Failed';
        }
    }

    public function getShippingMethodTextAttribute()
    {
        switch ($this->shipping_method_id)
        {
            case config('common.shipping.method.standard'):
                return 'Standard';
        }
    }
}
