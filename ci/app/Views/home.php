<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Test</title>
</head>
<body>
    <center><h1>Test Page</h1></center>
    <form method="post" action="<?=base_url('collectafricacall')?>">
        <textarea type="text" name="data" placeholder="JSON DATA"></textarea>
        <input type="submit" value="Test">
    </form>
</body>
</html>