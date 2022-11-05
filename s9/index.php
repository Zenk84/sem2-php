<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bai Tap 1</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>    
        <style>
            .right {
                text-align: right;
            }
            th {
                text-align: center;
            }
            td:first-child {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Profile</h1>
            <form action="http://localhost/k48/s9/backend.php" method="GET">
                <input type="hidden" name="id" value="14">
                <table>
                    <tr>
                        <td><label>Full Name:</label></td>
                        <td><input type="text" name="fullName"></td>
                    </tr>
                    <tr>
                        <td><label>Age:</label></td>
                        <td><input type="number" name="age" min="16"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Save"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>