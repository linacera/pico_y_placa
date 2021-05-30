<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="display-3">Pico y Placa Predictor</h1>

        <form method="post" action="{{url('/predict')}}">
            @csrf
            <div class="mb-3">
                <label for="plate" class="form-label">Plate:</label>
                <input type="text" name="plate" class="form-control" placeholder="Plate number">
                <p>{{ $errors->first('plate') }}</p>
            </div>
            <div class="mb-3">
                <label for="hour" class="form-label">Hour:</label>
                <input type="text" name ="hour" class="form-control" placeholder="Hour">
                <p>{{ $errors->first('hour') }}</p>
            </div>
            
            <div class="mb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="text" name="date" class="form-control" placeholder="Date">
                <p>{{ $errors->first('date') }}</p>
            </div>
            <button type="submit" class="btn btn-primary">Predict</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html> 