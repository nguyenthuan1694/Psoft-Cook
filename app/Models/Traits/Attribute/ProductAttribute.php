<?php


namespace App\Models\Traits\Attribute;


use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

trait ProductAttribute
{
    public function getStatusLabelAttribute()
    {
        if ($this->status == config('common.product.status.active')) {
            return '<span class="badge badge-success">Active</span>';
        } else {
            return '<span class="badge badge-secondary">Inactive</span>';
        }
    }

    public function getCurrentPromotionAttribute()
    {
        if ($this->promotions->count()) {
            return $this->promotions()->where('date_start', '<=', Carbon::now())->first();
        }
        return null;
    }
}
