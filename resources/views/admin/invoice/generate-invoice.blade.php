<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #{{ $student->id }}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>

<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-center"> جمعية العلماء المسلمين الجزائين </h2>
                    <h3 class="text-center">شعبة مغنية</h3>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: #{{ $student->id }}</span> <br>
                    <span>Date: {{ $student->updated_at->format('d-m-Y ') }}</span> <br>
                    <span>School : {{ $student->school->name }}</span> <br>
                    <span>Address: {{ $student->school->address }}</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>{{ $student->id }}</td>

                <td>Full Name:</td>
                <td>{{ $student->firstName }} {{ $student->lastName }}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{ $student->category->name }}</td>

                <td>Email Id:</td>
                <td>ismail@gmail.com</td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>>{{ $student->updated_at->format('d-m-Y A') }}</td>

                <td>Phone:</td>
                <td>{{ $student->father_phone }}</td>
            </tr>
            <tr>
                <td>Type Subscription</td>
                <td>شهري</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Arrived receipt
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Prix Annuel</th>
                <th>Prix Abonne</th>
                <th>Prix Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $student->id }}</td>
                <td>
                    {{ $student->prix_annuel }}
                </td>
                <td>{{ $student->prix_abonne }}</td>
                <td>{{ $student->prix_total }}</td>
            </tr>
            {{-- <tr>
                <td width="10%">17</td>
                <td>
                    Vivo V19
                </td>
                <td width="10%">$699</td>
                <td width="10%">1</td>
                <td width="15%" class="fw-bold">$699</td>
            </tr>
            <tr>
                <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
                <td colspan="1" class="total-heading">$14699</td>
            </tr> --}}
        </tbody>
    </table>

    <br>
    <p class="text-center">
        وَرَتِّلِ الْقُرْآنَ تَرْتِيلا
    </p>

</body>

</html>
