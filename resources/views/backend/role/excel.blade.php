<div>
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $role->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
