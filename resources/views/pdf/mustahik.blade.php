<!DOCTYPE html>
<html>

<head>
    <title>Data Mustahik</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .header-table {
            width: 100%;
            border: none;
            margin-bottom: 20px;
        }

        .header-table td {
            border: none;
            padding: 0;
        }

        h4 {
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        tfoot td {
            font-weight: bold;
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h4>Data Mustahik <br> Penerima Program Pendayagunaan ZIS</h4>

    <table class="header-table">
        <tr>
            <td style="text-align: left;">Nama Lembaga: Masjid Al Amin</td>
            <td style="text-align: right;">Tanggal: {{ date('d/m/Y') }}</td>
        </tr>
    </table>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kategori Asnaf</th>
                {{-- <th width="15%">Beras (kg)</th>
                <th width="20%">Uang (Rp)</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $index => $record)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $record->nama }}</td>
                    <td>{{ $record->alamat }}</td>
                    <td>{{ $record->kategori_asnaf }}</td>
                    {{-- <td class="text-center">{{ number_format($record->jumlah_terima_beras, 2) }}</td>
                    <td class="text-center">Rp {{ number_format($record->jumlah_terima_uang, 0, ',', '.') }}</td> --}}
                </tr>
            @endforeach
        </tbody>
        {{-- <tfoot>
            <tr>
                <td colspan="4" class="text-right">Total Rekap:</td>
                <td class="text-center">{{ number_format($records->sum('jumlah_terima_beras'), 2) }} kg</td>
                <td class="text-center">Rp {{ number_format($records->sum('jumlah_terima_uang'), 0, ',', '.') }}</td>
            </tr>
        </tfoot> --}}
    </table>
</body>

</html>
