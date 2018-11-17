<html>
<head>
<style>
select{
  width:100%;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:3px;
  border: 1px solid black;
}
.table{
    border: 1px solid black ;
}
</style>
</head>
<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
?>
<form action="task9_22.php" method="post">
    <table class="table">
        <tr>
            <td><label>Maker: </label></td>
            <td><select name="makers" id="makers">
            <?php
                for($i=0;$i<sizeof($makers);$i++){
                echo '<option>' . $makers[$i] . '</option>';
                }
            ?>    
            </select> </br></td>
        </tr>
        <tr>
            <td><label>Year: </label></td>
            <td><select name="years" id="years">
            <?php
                for($i=2018;$i>1900;$i--){
                echo '<option>' . ($i) . '</option>';
                }
            ?>    
            </select> </br></td>
        </tr>
        <tr>
            <td><label>Model: </label></td>
            <td><input type="text" name="model"></br></td>
        </tr>
        <tr>
            <td><label>Engine: </label></td>
            <td><?php
                for($i=0;$i<sizeof($engine);$i++){
                echo '<input type="radio" name="engine" value="'.$engine[$i].'"> '.$engine[$i].'<br>';
                }
            ?>  </td> 
        </tr>
        <tr>
            <td><label>Price: </label></td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td><label>Additional: </label></td>
            <td><input type="checkbox" name="additional1" value="yes"> tax payed<br>
            <input type="checkbox" name="additional2" value="yes"> technical check passed<br>
            <input type="checkbox" name="additional3" value="yes" checked>doesn't require investment<br>
        </td>
         </tr>
        <tr><td><input type="submit"/></td></tr>
    </table>
</form