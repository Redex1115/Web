<html>
    <head>
        <title>Southern Online</title>
    </head>
    <body>
        <h1>Order List</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <td>Order ID</td>
                        <td>Order Date</td>
                        <td>Order Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>RM {{$item->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>