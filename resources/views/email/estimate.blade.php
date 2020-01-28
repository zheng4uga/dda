<div class="section">
    <p>Hi, Admin</p>
    <p>Someone has send an estimate form in DDA website. Below are his/her information</p>
    <ul>
        @foreach($inputs as $key=>$input)
            <li>{{$key}}: {{$input}}</li>
        @endforeach
    </ul>
    
</div>