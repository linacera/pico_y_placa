<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class='box'>
            <div >
                <h1 class="display-3 title">{{$plate}}</h1>
                @if($predict)
                <h1 class="display-4 title">You are good to go!! :D</h1>
                <img src="{{url('/img/drive.png')}}" alt="drive">
                @else
                <h1 class="display-4 title">You shouldn't go out!! :c</h1>
                <img src="{{url('/img/stayHome.png')}}" alt="stayHome">
                @endif
            </div>
        </div>

        
    </div>
</body>
</html> 