<!doctype html>
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age2</th></tr>
        @foreach ($categories as $categories)
            <tr>
                <td>{{$categories->sports}}</td>
            </tr>
        @endforeach
        </table>
</html>