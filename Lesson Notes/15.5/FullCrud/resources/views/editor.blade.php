<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>New Race</h1>

    <form  method="post">
        {!! csrf_field() !!}

        <label>Name:
            <input type="text" name="raceName" placeholder="Race name">
        </label>
        <br>
        <label>Distance:
            <input type="text" name="distance" placeholder="Race Distance">
        </label>
        <br>
        <label>Location:
            <input type="text" name="location" placeholder="Race Location">
        </label>
        <br>
        <label>Start Date:
            <input type="text" name="startDate" placeholder="Start Date">
        </label>
        <br>
        <button type="submit" name="save">Save</button>
        <a href="/races">Cancel</a>

    </form>
    
</body>
</html>