<html>
    <body>
        <table>
            <thead>
                <th> email </th>
                <th> pws </th>

<?php
include "./connect.php";
echo(new date());
$query = "SELECT * FROM opencourse";
$quey_exe = mysqli_query($connection, $query);
while($result = mysqli_fetch_array($quey_exe))
{ ?>

    <tr>
        <td>
            <?php echo $result["email"]; ?>
</td>

<td>
    <?php echo $result["pws"]; ?>
</td>

<td>
    <?php echo $result["cpws"]; ?>
</td>

<?php  }  ?>

</table>
</body>
</html>

/*------------food story-----------*/
.food-types
{
    padding: 100px 0;
}
.food-box
{
    margin: 80px 0;
}
.title-breakfast h1
{
    padding:40px 0;
}
.title-breakfast 
{
    margin:0 auto 80px;
    height:120px;
    width:80%;
    max-width:700px;
    background: white;
    position: relative;
    box-shadow: 0 4px 5px 0 rgba(0,0,50,0.5);
}
.title-breakfast::after
{
    content:'';
    height:100px;
    width:200px;
    background-color: #f992a6;
    position: absolute;
    top:-10px;
    left:-10px;
    z-index: -1;
}
.title-breakfast::before
{
    content:'';
    height:100px;
    width:200px;
    background-color: #f992a6;
    position: absolute;
    bottom:-10px;
    right:-10px;
    z-index: -1;
}
.Delicious food
{
    display: block;
    margin-bottom: 20px;
    
}
.Delicious food img
{
    width:100%;
}
h4
{
    background-color: aquamarine;
    color: #ff0000;
    width: 250px; 
    font-style: italic;
}
h3
{
    background-color: crimson;
    color: #fff;
    width:250px;
    font-style: italic;
}
.Menu
{
    display: block;
    
}
h6
{
    color: forestgreen;
}
