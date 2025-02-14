<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>target-input</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- 1. Define some markup -->
    <input id="foo" type="text" value="hello">
    <button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo">Copy</button>

    <!-- 2. Include library -->
    <script src="dist_clipboard/clipboard.min.js"></script>

    <!-- 3. Instantiate clipboard -->
    <script>
    var clipboard = new Clipboard('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
</body>
</html>
