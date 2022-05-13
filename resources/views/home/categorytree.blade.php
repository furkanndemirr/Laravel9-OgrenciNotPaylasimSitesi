@foreach($children as $subcategory)
    <ul>
        @if(count($subcategory->children))
            <li style="color: #cccccc;font-family: 'Arial Black'">{{$subcategory->title}}</li>
            <ul>
                @include('home.categorytree',['$children'=>$subcategory->$children])
            </ul>
            <hr>
        @else
        <li><a href="{{route('categorycontents',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
