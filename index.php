<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Calculator </title>
</head>
<body>
    <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="operation">
            <label> Choose Operation! </label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
        </select>
        <input type="text" name="num02" placeholder="Number 2">
        <button type="submit"> Calculate! </button>
    </form>
</body>
</html>

<!--Passage of Data -->