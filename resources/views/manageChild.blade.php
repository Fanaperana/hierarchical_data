<ul>
    @foreach($childs as $child)
        <li>
            <details>
                <summary>{{ $child->name . ' ['. $child->id . ']'}} @if(count($child->childs)==0) leaf @endif</summary>
                @if(count($child->childs))
                    @include('manageChild',['childs' => $child->childs])
                @endif
            </details>
        </li>
    @endforeach
</ul>
