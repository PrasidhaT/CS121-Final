<?php
  require('top.php');
?>
<div class="container">
  <h1>Room Entry Logs</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Room</th>
        <th>Name</th>
        <th>Entry Time</th>
      </tr>
    </thead>
    <tbody>

<?php
if (mysqli_num_rows($result) > 0) {
// output data of each row
	while($row = mysqli_fetch_assoc($result)) {

  //this is the format in which we are displaying data:
  //   <tr class="table-success">
  //   <td>Bedroom</td>
  //   <td>Prasidha</td>
  //   <td>1:20PM</td>
  // </tr>

    echo "<tr class='".$row['logType']."'>"
          ."<td>".$row['room']."</td>"
          ."<td>".$row['name']."</td>"
          ."<td>".$row['time']."</td>"
          ."</tr>";
	}
}
?>
    </tbody>
  </table>
</div>
<?php
  require('footer.php');
?>