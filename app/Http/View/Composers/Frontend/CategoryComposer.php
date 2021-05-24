<?php


namespace App\Http\View\Composers\Frontend;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer
{
    /** @var Category  */
    protected $categories;

    /**
     * MenuComposer constructor.
     * @param Category $categories
     */
    public function __construct(Category $categories)
    {
        $this->categories = $categories;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories->root()->get());
    }
}