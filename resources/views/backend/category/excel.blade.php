<div>
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $category->title}}</td>
                <td><?=substr("$category->description",0,40).'...See more'?></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
