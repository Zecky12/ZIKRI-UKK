<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkuator 2</title>
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #B5C18E;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #F5EFE6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #DEAC80
        }

        input[type="text"] {
            width: calc(80% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #AF8260;
            border-radius: 5px;
            font-size: 18px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        input[type="button"] {
            width: 100%;
            padding: 15px 0;
            border: none;
            border-radius: 5px;
            background-color: #FEFAE0;
            color: #5F6F52;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="button"]:hover {
            background-color: #AF8260;
        }

        input[type="button"][style="background-color: red;"] {
            background-color: #AF8260;
        }

        input[type="button"][style="background-color: red;"]:hover {
            background-color: #AF8260;
        }
</style>
<body>
    <form name="form1" action="" method="POST">
        <tr>
            <td>
                <h1>
                    <center><font color="black">KALKULATOR 2</font></center>
                    <h4 align="center"><a href="1">Kalkulator 1</a></h4>
                </h1>
            </td>
        </tr>
        <center>
            <input type="text" name="text1" id="">
            <table>
                <tr>
                <td><input type="button" value="7" onClick="form1.text1.value+='7'"></td>
                <td><input type="button" value="8" onClick="form1.text1.value+='8'"></td>
                <td><input type="button" value="9" onClick="form1.text1.value+='9'"></td>
                <td><input type="button" value="x" onClick="form1.text1.value+='*'"></td>
            </tr>
                <tr>
                <td><input type="button" value="4" onClick="form1.text1.value+='4'"></td>
                <td><input type="button" value="5" onClick="form1.text1.value+='5'"></td>
                <td><input type="button" value="6" onClick="form1.text1.value+='6'"></td>
                <td><input type="button" value=":" onClick="form1.text1.value+='/'"></td>
            </tr>
                <tr>
                <td><input type="button" value="1" onClick="form1.text1.value+='1'"></td>
                <td><input type="button" value="2" onClick="form1.text1.value+='2'"></td>
                <td><input type="button" value="3" onClick="form1.text1.value+='3'"></td>
                <td><input type="button" value="+" onClick="form1.text1.value+='+'"></td>
            </tr>
                <tr>
                <td><input type="button" value="C" onClick="form1.text1.value=''"></td>
                <td><input type="button" value="0" onClick="form1.text1.value+='0'"></td>
                 <td style=background-color: red; ><input type="button" value="=" onClick="form1.text1.value=eval(form1.text1.value)"></td><td>
                    <input type="button" value="-" onClick="form1.text1.value+='-'"></td>
               
            </tr>
            </table>
        </center>
    </form>
</body>
</html>