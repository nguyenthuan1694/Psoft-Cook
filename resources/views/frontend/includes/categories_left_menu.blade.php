@foreach($categories as $category)
    @if(count($category->children) > 0)
        <li class="list-category-has-child">
            <a href="{{ route('category', ['slug' => $category->slug]) }}"><span class="title-cate">{{ $category->name }}</span></a>
            <span class="icon-sub-menu"><i class="ti-angle-down float-right"></i></span>
                <ul class="">
                    @include('frontend.includes.categories_left_menu', ['categories' => $category->children])
                </ul>
        </li>
    @else
        <li><a class="categories_left" href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
    @endif
@endforeach
