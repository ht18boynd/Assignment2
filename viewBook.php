<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title></title></head>
    <body>
        <div><a href="createBook.php">Create New</a></div>
        <form method="get">
            Price Form$ <input name="f"  />     
                   To $ <input  name="t" />
            <input type="submit" name="btnSearch" value="Search" />  <!-- Search-->
        </form>
        <table>
            <thead>
                <tr>
                 <td>BookID</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Author</td>
            </tr>
            </thead>
            <tbody>
                <?php

            include('db.php');
            $link=connectDB();
            $sql = "select id, name,price ,author from tbbook";

            if (isset($_GET['btnSearch']))
            {
                $f = $_GET['f'];
                $t = $_GET['t'];

                $sql .=" where price BETWEEN  $f AND $t";
            }
            $result = mysqli_query($link , $sql);
            if (!$result)
            {
                die("data access error");
            }
            if (mysqli_num_rows($result) >0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    //-1
                ?>

                <tr>
                    <td>
                        <?php echo $row[0]?>
                    </td>
                    <td>
                        <?php echo $row[1]?>
                    </td>
                    <td>
                        <?php echo $row[2]?>
                    </td>
                    <td>
                        <?php echo $row[3]?>
                    </td>

                </tr>

                <?php
                          // -1
                }
            }else{
        //-2
                ?>
                <tr>
                    <td colspan="4">Nodata</td>
                </tr>
                <?php
        //-2
        }

                ?>


             
                </tbody>
</table>
    </body>
</html>