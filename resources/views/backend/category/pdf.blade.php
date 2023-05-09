<header>
    <h3>CHOCO TREAT</h3>
    <p>Categories List</p><hr>
</header>

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

<footer>
    <p>Signature</p> 
    <p>Date:...../...../.....</p><hr>
</footer>

<style>
    table{
        width: 100%;
    }
    table, tr, th, td{
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
    }
    h3{
        text-align: center;
    }
    
    p{
        margin-top: 70px;
    }

    hr{
        margin-top: -10px;
        margin-bottom: 60px;
    }

</style>