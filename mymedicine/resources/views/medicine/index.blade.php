<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        {{-- <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p> --}}
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Generic Name</th>
                    <th>Form</th>
                    <th>Restriction Formula</th>
                    <th>Description</th>
                    <th>Faskes TK 1</th>
                    <th>Faskes TK 2</th>
                    <th>Faskes TK 3</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicineCollection as $medicine)
                <tr>
                    <td>{{ $medicine['generic_name'] }}</td>
                    <td>{{ $medicine['form'] }}</td>
                    <td>{{ $medicine['restriction_formula'] }}</td>
                    <td>{{ $medicine['description'] }}</td>
                    <td>{{ $medicine['faskes_tk1'] }}</td>
                    <td>{{ $medicine['faskes_tk2'] }}</td>
                    <td>{{ $medicine['faskes_tk3'] }}</td>
                    <td>{{ $medicine['category']['name'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
