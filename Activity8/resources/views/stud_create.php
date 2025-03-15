<html>
    <head>
        <title>
            Student Management | Add
        </title>
        <body>
            <form action="/create" method = "post">
                <input type="hidden name" name = "_token" value = "<?Php echo csrf_token(); ?>">
                <table>
                    <tr>
                    <td>Name</td>
                    <td><input type="text" name = 'stud_name' /></td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <input type="submit" value = "Add student">
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    </head>
</html>