<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<style>
#select {
  width: 50px;
  height: 50px;
  border: 1px solid grey;
  padding: 5px;;
  margin: 20px;
}

table, th {
  padding: 5px;
  margin: 10px;
  text-align: center;
}

table {
  border: 1px solid grey;
}
</style>

<?php

$print_table = [
  "first_name" => "Michael",
  "last_name" => "Choi",
  "nick_name" => "Sensei",
  "hobby" => "drinking_tea",
  "talent" => "sudoku"

];

$sample_array = ["CA", "WA", "UT", "TX", "AZ", "NY"];

class HTML_helper {

function print_table($arr) {
    $table = "<table>";
    foreach ($arr as $key => $value) {
      $table .= "<th>$key</th>";
      }
      $table .= "<tr>";

    foreach ($arr as $key => $value) {
      $table .= "<td>$value</td>";

        }
      $table .= "</tr></table>";
      echo $table;
  }

  function print_select($name,$arr) {
    $select_output = "<div id='select'><select name='".$name."'>";
    for($i=0; $i<count($arr); $i++) {
      $select_output .= "<option value='" . $arr[$i] . "'>" . $arr[$i] . "</option>" ;
    }
    $select_output .= "</select></div>";
    echo $select_output;
  }
}

$display_html = new HTML_helper();
$display_html->print_table($print_table);
$display_html->print_select('state',$sample_array);

 ?>
</body>
</html>
