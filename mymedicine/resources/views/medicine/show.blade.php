<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1>Product Detail</h1>
    <p>Category ID: {{ $medicine['category']['id'] }}</p>
    <p>Category ID: {{ $medicine['category']['name'] }}</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Generic Name</td>
                <td>{{ $medicine['generic_name'] }}</td>
            </tr>
            <tr>
                <td>Form</td>
                <td>{{ $medicine['form'] }}</td>
            </tr>
            <tr>
                <td>Restriction Formula</td>
                <td>{{ $medicine['restriction_formula'] }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{ $medicine['description'] }}</td>
            </tr>
            <tr>
                <td>Faskes TK 1</td>
                <td>{{ $medicine['faskes_tk1'] }}</td>
            </tr>
            <tr>
                <td>Faskes TK 2</td>
                <td>{{ $medicine['faskes_tk2'] }}</td>
            </tr>
            <tr>
                <td>Faskes TK 3</td>
                <td>{{ $medicine['faskes_tk3'] }}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{ $medicine['category']['name'] }}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
