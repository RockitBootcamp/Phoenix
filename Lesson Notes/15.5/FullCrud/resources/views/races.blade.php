<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Races</h1>

    <ul>
    @foreach($races as $race)
        <li><a href="/races/{{$race['raceId']}}">{{$race['raceName']}}</a> <button data="{{$race['raceId']}}">x</button></li>
    @endforeach
    </ul>

    
    <a href="/editor">New Race</a>
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>

        
        $(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                }
            });

            var base_url = 'http://localhost:8000/';

            $("button").on("click", function(e){

                var raceId = $(this).attr("data");

                $.post( base_url + "/api/removeRace", {raceId: raceId}, function(res){

                    console.log(res);
                });
                
            });


        });
    </script>
</body>
</html>