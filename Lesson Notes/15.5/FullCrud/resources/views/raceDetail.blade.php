<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Race Detail</h1>
    <p>Name: {{$race['raceName']}}</p>
    <p>Location: {{$race['location']}}</p>
    <p>Distance: {{$race['distance']}}</p>
    <p>Start Date: {{ gmDate('d M Y', $race['startDate'])}}</p>
    <a href="#">edit</a>
    
</body>
</html>