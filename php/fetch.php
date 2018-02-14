<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM product 
  WHERE product_name LIKE '%".$search."%'
  OR product_code LIKE '%".$search."%' 
  OR price LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM product ORDER BY product_code
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>product_name</th>
     <th>product_code</th>
     <th>price</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["product_name"].'</td>
    <td>'.$row["product_code"].'</td>
    <td>'.$row["price"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>