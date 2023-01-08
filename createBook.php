<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title></title></head>
    <body>
        <h2>Create New Book</h2>
        <hr />
      <form action="processCreate.php" method="post">
            <table>
 
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name" value="" />
                    </td>
                </tr>
                <tr>
                    <td>Author:</td>
                    <td>
                        <input type="text" name="author" value="" />
                    </td>
                </tr>
                <tr>
                    <td>Unit Price:</td>
                    <td>
                        <input type="number" name="price" value="" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit" />
                        <input type="reset" name="reset" value="Reset" />
                    </td>
                </tr> 
            </table>
       </form>
    </body>

</html>