<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Selamün aleyküm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="dist/output.css" rel="stylesheet">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="container mx-auto flex flex-col gap-14 ">
        <?php include "components/section.php"; ?>
        <?php include "components/maintable.php"; ?>
        <div class="w-full border p-5 box-border" id="output">
            <?php include "components/addBooksForm.php"; ?>


        </div>



    </div>



    <script src=" dist/output.js">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    </script>


</body>

</html>