@foreach($categories as $category)
    @if ($type == 'multiple')
        @if(in_array($category->id, $selected))
            <option value="{{ $category->id }}" selected>{{ $dash . '--| ' . $category->name }}</option>
        @else
            <option value="{{ $category->id }}">{{ $dash . '--| ' . $category->name }}</option>
        @endif
        @if(count($category->children) > 0)
            @include('backend.includes.categories_options',['categories' => $category->children, 'dash' => $dash . '--', 'selected' => $selected, 'type' => 'multiple'])
        @endif
    @else
        @if($category->id == $selected)
            <option value="{{ $category->id }}" selected>{{ $dash . '--| ' . $category->name }}</option>
        @else
            <option value="{{ $category->id }}">{{ $dash . '--| ' . $category->name }}</option>
        @endif
        @if(count($category->children) > 0)
            @include('backend.includes.categories_options',['categories' => $category->children, 'dash' => $dash . '--', 'selected' => $selected])
        @endif
    @endif
@endforeach
