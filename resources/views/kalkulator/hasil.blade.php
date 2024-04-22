<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
    <style>
        body{
            background: #496989;
        }
        table{
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            background-color: #DDDDDD;
        }
        input[type="text"]{
            padding: 10px ;
            font-size: 30px;
            font-weight: bold;
            border: 2px solid black;
            border-radius: 5px;
        }
        input[type="submit"]{
            width: 100%;
            background-color: #240A34;
            color: #DDDDDD;
            padding: 10px 50px;
            font-size: 30px;
            border:none;
            border-radius: 5px;
        }
        </style>
</head>
<body>
    <form action="{{route('hitung')}}" method="post">
        @csrf
        <table>
            <tr>
                <td colspan="4" align="center">KALKULATOR</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="angka1" id=""></td>
                <td colspan="2"><input type="text" name="angka2" id=""></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="text" name="hasil" value="{{$hasil}}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="operator" value="kali"></td>
                <td><input type="submit" name="operator" value="bagi"></td>
                <td><input type="submit" name="operator" value="tambah"></td>
                <td><input type="submit" name="operator" value="kurang"></td>
            </tr>
            <tr>
                <td colspan="4"><input type="submit" name="operator" value="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>