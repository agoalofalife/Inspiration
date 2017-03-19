<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inspiration</title>
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>

        window.user = <?php echo json_encode([
                'user' => Auth::user(),
        ]); ?>
    </script>
<body>
<div id="app">
    <index></index>
</div>

</body>
<script src="/js/inspiration.app.js"></script>
</html>
