<div class="section">
    <p>Hi, Admin</p>
    <p>Somone has send contact information in DDA. Below are his/her information</p>
    <ul>
        @foreach($inputs as $key => $input)
            <li>{{$key}}: {{$input}}</li>
        @endforeach
    </ul>
</div>