<!DOCTYPE html>
<html>
<body>

<h1>Pico y Placa Predictor</h1>
<form method="post" action="{{url('/predict')}}">
    @csrf
    <label for="plate">Plate:</label>
    <input type="text" name="plate">
    
    <label for="hour">Hour:</label>
    <input type="text" name ="hour">
    
    <label for="date">Date:</label>
    <input type="text" name="date">

    <button type="submit">Predict</button>
</form>
</body>
</html> 