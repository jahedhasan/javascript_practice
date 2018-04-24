<table>
    <tr>
        <td>First Name:</td>
        <td><input type="text" id="first_name" ></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><input type="text" id="last_name" ></td>
    </tr>
    <tr>
        <td>Full Name:</td>
        <td><input type="text" id="full_name" > </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="button" id="btn" value="Show Full Name"> </td>
    </tr>

</table>


<script>
    var button = document.getElementById('btn');
    button.onclick=function(){
        var firstName=document.getElementById('first_name').value;
        var lastName=document.getElementById('last_name').value;
        var full_name= firstName+' '+lastName;
        document.getElementById('full_name').value=full_name;
        
    };
</script>
