{{-- NOTE - With more views, would use a layout view to hold this meta information to be used accross multiple pages --}}
{{-- CHANGE - Added HTML head information --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Overview</title>

    {{-- CHANGE - Added some basic styling. In a style tag for simplicity's sake (there's only one view) --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

{{-- CHANGE - Improved the markup for the tables. No longer using multiple loops --}}
{{-- <table>
    <tbody style="display: inline-block; margin-right: 1rem">
        <th>Employee</th>
        @foreach ($sales as $sale)
            <tr><td>{{$sale->employee}}</td></tr>
        @endforeach
    </tbody>

    <tbody style="display: inline-block; margin-right: 1rem">
    <th>Date Time of Sale</th>
    @foreach ($sales as $sale)
        <tr><td>{{$sale->date_time_of_sale}}</td></tr>
    @endforeach
    </tbody>

    <tbody style="display: inline-block; margin-right: 1rem">
    <th>Sale Price</th>
    @foreach ($sales as $sale)
        <tr><td>{{$sale->sale_price}}</td></tr>
    @endforeach
    </tbody>

    <tbody style="display: inline-block; margin-right: 1rem">
    <th>Product Id</th>
    @foreach ($sales as $sale)
        <tr><td>{{$sale->product_id}}</td></tr>
    @endforeach
    </tbody>
</table>

<table>
    <tbody style="display: inline-block; margin-right: 1rem">
        <th>Id</th>
        @foreach ($employees as $employee)
            <tr><td>{{$employee->id}}</td></tr>
        @endforeach
    </tbody>

    <tbody style="display: inline-block; margin-right: 1rem">
    <th>First Name</th>
    @foreach ($employees as $employee)
        <tr><td>{{$employee->first_name}}</td></tr>
    @endforeach
    </tbody>

    <tbody style="display: inline-block; margin-right: 1rem">
    <th>Last Name</th>
    @foreach ($employees as $employee)
        <tr><td>{{$employee->last_name}}</td></tr>
    @endforeach
    </tbody>

    <tbody style="display: inline-block; margin-right: 1rem">
    <th>Date of Birth</th>
    @foreach ($employees as $employee)
        <tr><td>{{$employee->date_of_birth}}</td></tr>
    @endforeach
    </tbody>

    <tbody style="display: inline-block; margin-right: 1rem">
    <th>Email</th>
    @foreach ($employees as $employee)
        <tr><td>{{$employee->email}}</td></tr>
    @endforeach
    </tbody>
</table> 

Etc for products...

--}}

<body>
    <div class="container">
        <h2>Employees</h2>
        <table>
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->date_of_birth }}</td>
                        <td>{{ $employee->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Products</h2>
        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Original Price</th>
                    <th>Discount 20% when over Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->original_price }}</td>
                        <td>{{ $product->discount_20_percent_when_over_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Sales</h2>
        <table>
            <thead>
                <tr>
                    <th>Sale ID</th>
                    <th>Employee ID</th>
                    <th>Product ID</th>
                    <th>Sale Price</th>
                    <th>Date of Sale</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->employees_id }}</td>
                        <td>{{ $sale->products_id }}</td>
                        <td>{{ $sale->sale_price }}</td>
                        <td>{{ $sale->date_time_of_sale }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
