<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Data</h2>

<table>
        
  <tr>

  <th>Name </th>
    <th>Mobile NO</th>
  </tr>
  @foreach ($studentsdata as $item)

  <tr>
  <td>{{$item->name}}</td>
  <td>{{$item->mobile}}</td>
    @endforeach

  </tr>




</table>

</body>
</html>
