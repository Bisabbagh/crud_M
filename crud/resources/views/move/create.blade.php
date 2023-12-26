<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create move</h1>
    <form method="POST" action="{{route('move.store')}}">
        @csrf
        @method('post')
        <div>
            <label> Move name</label>
            <input type="text" name="name" placeholder="name">

        </div>
        <div>
            <label> Move discription</label>
            <input type="text" name="desc" placeholder="discription">

        </div>
        <div>
            <label> Move URL</label>
            <input type="text" name="url" placeholder="URL move">

        </div>

        <div>
            <input type="submit" value="Save move">
        </div>

    </form>
    
</body>
</html>