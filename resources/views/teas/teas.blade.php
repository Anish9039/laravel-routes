<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

    <ul>


<h1>Here is list of chai </h1>
    @foreach ($teas as $tea)
    <li>
<a href="/teas/{{$tea['id']}}">{{$tea['Name']}}</a>
</li>
 @endforeach


 
</ul>

</div>

</body>
</html>