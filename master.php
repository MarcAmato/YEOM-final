<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
    border: 1px solid black;
}
textarea {
    resize: none;
}
</style>
<script>
// Add/Delete table rows functions adapted from: https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_table_insert_deleterow
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
}
    
function myCreateFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = "<textarea name='' id='' cols='30' rows='2'>$3.00</textarea>";
    cell2.innerHTML = "NEW CELL2";
}
</script>
</head>
<body>

<div align="center"><h1>Master Food and Beverage List</h1></div>

<table id="myTable" align="center">
  <tr>
    <th>Item</th>
    <th>Cost</th>
    <th>Date</th>
    <th></th>
  </tr>
  <tr>
    <td><textarea>Beans on Toast</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Omlette</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Jacket Potato</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Toad in the Hole</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Boiled Egg</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Seafood Tangine</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Orange-Sesame Noodles with Grilled Shrimp</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Sesame-crusted Tuna with Teriyaki Stir-Fry</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Cabbage Rolls</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Fettuccine Alfredo</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Crispy Baked Tofu</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Coffee - Instant</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Milo</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Pinot Noir</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
  <tr>
    <td><textarea>Kale Smoothie</textarea></td>
    <td><textarea>$3.00</textarea></td>
    <td><textarea>11/11/2018</textarea></td>
    <td><input align="center" type="button" value="Delete" onclick="deleteRow(this)"></td>
  </tr>
</table>
<br>

<div align="center"><button onclick="myFunction()">New Dish</button></div>

<script>
function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML = "<textarea>Item Name</textarea>";
    cell2.innerHTML = "<textarea>$0.00</textarea>";
    cell3.innerHTML = "<textarea>dd/mm/yyyy</textarea>";
    cell4.innerHTML = "<input align='center' type='button' value='Delete' onclick='deleteRow(this)'>";
}
</script>

<!--Navigate back to Home Page  -->
<a href="index.php">Back to Home Page</a>

</body>
</html>
