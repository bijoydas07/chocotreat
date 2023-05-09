<header>
    <h3>CHOCO TREAT</h3>
    <p>users List</p><hr>
</header>

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