<div>
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->phone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
