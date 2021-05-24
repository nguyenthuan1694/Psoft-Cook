@foreach($categories as $category)
    @if(count($category->children) > 0)
        <li class="has-child">
            <a href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->name }} <span class="arrow-right"><i class="ti-angle-right"></i></span></a>
            <ul class="sub-ul-menu sub-ul-menu-child">
                @include('frontend.includes.categories_top_menu',['categories' => $category->children])
            </ul>
        </li>
    @else
        <li><a class="categoris_top" href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
    @endif
@endforeach
