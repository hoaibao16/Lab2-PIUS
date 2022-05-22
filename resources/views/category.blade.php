<html>
    <head>
        <title>View category by id</title>
        <meta charset ="utf-8">
    </head>
    <body>
        @foreach ($view as $row)
        @if ($row->activity === false)
        <h1>404 ERROR</h1>
        @else
        <div>
            <h1>{{'CATEGORY ID: ' .$row->id}}</h1>
            <p>{{'Name: '.$row->name}}</p>
            <p>{{'Character code: '.$row->code}}</p>
            <p>{{'Parent category: '.$row->parentCategory}}</p>
            <p>{{'Date and time of creation: '.$row->created_at}}</p>

            <form action="" method="get">
                <input type="text" name="txtPrice" placeholder="Enter price">
                <br>
                <button type="submit">Filter</button>
            </form>

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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pro as $row)
                    <tr>     
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>       
                        <td>{{$row->code}}</td>
                        <td>{{$row->description}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->numberUnits}}</td>
                        <td><img src= {{$row->urlimg}} style="width:128px;height:128px;"></td>
                    </tr>                
                    @endforeach
                </tbody>
            </table>
        </div>

        @endif
        @endforeach
    </body>
</html>