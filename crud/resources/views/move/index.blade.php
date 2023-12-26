<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Move</h1>
    <div>
        <table border="2">
<tr>
    <td>
        Id
    </td>
    <td>
        Name
    </td>
    <td>
        URL
    </td>
    <td>
        Description
    </td>
</tr>
@foreach ($moves as $move)
<tr>

    <td>
        {{$move->id}}

        
    </td>
    <td>
        {{$move->name}}

        
    </td>
    <td>
        {{$move->url}}

        
    </td>
    <td>
        {{$move->description}}

        
    </td>
    
</tr>
    
@endforeach


        </table>

    </div>
    
</body>
</html>