<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <table style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Form</th>
                <th>Formula</th>
                <th>Tk1</th>
                <th>Tk2</th>
                <th>Tk3</th>
            </tr>
        </thead>
        <tbody>
            @foreach($queryBuilder as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name_medicines}}</td>
                <td>{{$d->description_medicines}}</td>
                <td>{{$d->form_medicines}}</td>
                <td>{{$d->formula_medicines}}</td>
                <td>{{$d->tk1_medicines}}</td>
                <td>{{$d->tk2_medicines}}</td>
                <td>{{$d->tk3_medicines}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>