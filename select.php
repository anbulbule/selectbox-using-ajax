<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Select box</title>
</head>

<body>
    <div class=" text-white p-2 bg-secondary text-center mt-3">
        <h2>Dependancy Select box</h2>
    </div>
    <div class="container mt-5 col-4">

        <form action="">
            <label for="Country"> Country : </label>
            <select name="country" id="country" class="mt-3 form-control mb-4">
                <option value="">Select Country</option>
            </select>

            <label for=""> State :</label>
            <select name="state" id="state" class="mt-3 form-control">
                <option value=""></option>
            </select>
        </form>

    </div>
    <scrip src="bootstrap.bundle.js"></scrip>
    <script src="jquery.js"></script>
    <script>
    $(document).ready(function() {
        function loaddata() {
            $.ajax({
                url: "select_backend.php",
                type: "post",
                success: function(data) {
                    $('#country').append(data);
                }
            });
        }
        loaddata();

        $('#country').change(function() {
            var country = $('#country').val();
            $.ajax({
                url: "select_backend.php",
                type: "post",
                data: {cid : country},
                success: function(data) {
                    $('#state').html(data);
                }
            });
        });




    });
    </script>
</body>

</html>