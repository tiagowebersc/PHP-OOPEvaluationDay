<? php ?>
<!DOCTYPE html>
<html>

<head>
    <title>Exercice 3</title>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="result"></div>
            <div class="col-md-5">

                <form method="post" class="form-horizontal well well-sm">
                    <fieldset>
                        <legend>New Vehicle</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="brand">Brand</label>
                            <div class="col-md-8">
                                <input id="brand" name="brand" type="text" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="model">Model</label>
                            <div class="col-md-8">
                                <input id="model" name="model" type="text" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="year">Year</label>
                            <div class="col-md-8">
                                <input id="year" name="year" type="number" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="color">Color</label>
                            <div class="col-md-8">
                                <input id="color" name="color" type="text" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"><button type="submit" class="btn btn-primary">Add</button></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('button[type="submit"]').click(function(e) {
                e.preventDefault();
                document.querySelector(".result").innerHTML = "";
                $.ajax({
                    url: 'addCar.php',
                    type: 'post',
                    data: $('form').serialize(),
                    dataType: 'html',
                    success: function(result) {
                        const array = result.split(";");
                        for (let item of array) {
                            const key = item.split("=");
                            if (key[0] === 'success' && key[1].length > 0) {
                                document.querySelector(".result").innerHTML = "<div class=\"col-md-6 col-md-offset-3\"><div class=\"alert alert-success\">" + key[1] + "</div></div><br>";
                                document.querySelector("#brand").value = "";
                                document.querySelector("#model").value = "";
                                document.querySelector("#year").value = "";
                                document.querySelector("#color").value = "";
                            } else if (key[1].length > 0) {
                                document.querySelector(".result").innerHTML = "<div class=\"col-md-6 col-md-offset-3\"><div class=\"alert alert-danger\">" + key[1] + "</div></div><br>";
                            }
                        }
                    },
                    error: function(err) {
                        document.querySelector(".result").innerHTML = "<div class=\"col-md-6 col-md-offset-3\"><div class=\"alert alert-danger\">Erro to call add car!</div></div><br>";
                        console.error("erro");
                    }
                });
            });
        });
    </script>
</body>

</html>