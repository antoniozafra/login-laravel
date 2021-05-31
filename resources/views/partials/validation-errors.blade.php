@if ($errors->any())
<ul>
    @foreach ($errors->all() as $errorItem)
    
        <li>{{$errorItem}}</li>
        
    @endforeach
</ul>
    
@endif