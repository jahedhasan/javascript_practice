

<table>
    <tr>
        <td>First Name:</td>
        <td><input type="number" id="first_num" ></td>
    </tr>
    <tr>
        <td>Last Number:</td>
        <td><input type="number" id="last_num" ></td>
    </tr>
    <tr>
        <td>Result:</td>
        <td><input type="text" id="result" > </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="button" value="+" onclick="calculator('+');">
            <input type="button" value="-" onclick="calculator('-');">
            <input type="button" value="*" onclick="calculator('*');">
            <input type="button" value="/" onclick="calculator('/');">
            <input type="button" value="%" onclick="calculator('%');">
        </td>
    </tr>
</table>

<script>
    function calculator(operator){
        var firstNumber= Number(document.getElementById('first_num').value);
        var lastaNumber= Number(document.getElementById('last_num').value);
        switch(operator){
            case '+':
                var result = firstNumber + lastaNumber;
                break;
            case '-':
                var result = firstNumber - lastaNumber;
                break;
            case '*':
                var result = firstNumber * lastaNumber;
                break;
            case '/':
                var result = firstNumber / lastaNumber;
                break;
            case '%':
                var result = firstNumber % lastaNumber;
                break;    
        }
        
        document.getElementById("result").value= result;
    }

</script>
    