<!doctype html>
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->categories->first()->sports}}</td>
            </tr>
        @endforeach
        </table>
</html>