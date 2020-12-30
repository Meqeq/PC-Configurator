<div class="m-2">
    <h4 class="bg-gray-100 p-0.5">{{$display}}</h4>
    <div class="p-0.5 flex"> 
        @foreach($values as $value)
        <div class="flex m-2 flex-wrap">
            <div class="px-1">
                <label for="{{$value}}">{{$value}}</label>
            </div>
            <div>
                <input type="radio" name="{{$name}}" id="{{$value}}" value={{$value}} @if(old($name) == $value) checked @endif>
            </div>
        </div>
        @endforeach
    </div>
</div>


