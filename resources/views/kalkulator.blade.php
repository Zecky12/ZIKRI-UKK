<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KALKULATOR 1</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #76885B;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    #calculator-container {
        background-color: #FF9800;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    h1 {
        margin-top: 0;
        color: #333;
    }

    input[type="text"] {
        width: 200px;
        height: 40px;
        font-size: 18px;
        margin-bottom: 15px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #333;
        color: #90D26D;
    }

    table {
        margin: 0 auto;
    }

    table td {
        padding: 10px;
    }

    input[type="button"] {
        width: 50px;
        height: 50px;
        font-size: 20px;
        background-color: #AF8260;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.8s ease;
    }

    input[type="button"]:hover {
        background-color: #2C7865;
    }

    input[type="button"]:active {
        background-color: #2C7865;
    }
</style>
<body>
    <div id="calculator-container">
        <form name="form1" action="" method="POST">
            <h1 align="center">KALKULATOR 1</h1>
            <h4><a href="2">Kalkulator 2</a></h4>
            <center>
            <input type="text" name="text1" id="">
            <table>
                
                <tr>
                    <td><input type="button" value="C" onclick="form1.text1.value=''"></td>
                    <td></td>
                    <td></td>
                    <td><input type="button" value="+" onclick="form1.text1.value+='+'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="7" onclick="form1.text1.value+='7'"></td>
                    <td><input type="button" value="8" onclick="form1.text1.value+='8'"></td>
                    <td><input type="button" value="9" onclick="form1.text1.value+='9'"></td>
                    <td><input type="button" value="-" onclick="form1.text1.value+='-'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="4" onclick="form1.text1.value+='4'"></td>
                    <td><input type="button" value="5" onclick="form1.text1.value+='5'"></td>
                    <td><input type="button" value="6" onclick="form1.text1.value+='6'"></td>
                    <td><input type="button" value="*" onclick="form1.text1.value+='*'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="1" onclick="form1.text1.value+='1'"></td>
                    <td><input type="button" value="2" onclick="form1.text1.value+='2'"></td>
                    <td><input type="button" value="3" onclick="form1.text1.value+='3'"></td>
                    <td><input type="button" value="/" onclick="form1.text1.value+='/'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="." onclick="form1.text1.value+='.'"></td>
                    <td><input type="button" value="0" onclick="form1.text1.value+='0'"></td>
                    <td><input type="button" value="00" onclick="form1.text1.value+='00'"></td>
                    <td><input type="button" value="=" onclick="form1.text1.value=eval(form1.text1.value)"></td>
                </tr>
            </table>
            </center>
        </form>
    </div>
</body>
</html>