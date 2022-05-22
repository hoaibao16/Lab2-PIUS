<html>
    <head>
        <title>View all products</title>
        <meta charset ="utf-8">
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th witdh = 10%>ID</th>
                    <th>Name</th>
                    <th>Character code</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>NUmber of units</th>
                    <th>Image</th>
                    <th>Category ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($view as $row)
                <tr>     
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>       
                    <td>{{$row->code}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->price}}</td>
                    <td>{{$row->numberUnits}}</td>
                    <td><img src= {{$row->urlimg}} style="width:128px;height:128px;"></td>
                    <td>{{$row->category_id}}</td>
                </tr>                
                @endforeach
            </tbody>
        </table>
    </body>
</html>