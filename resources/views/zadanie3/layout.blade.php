<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <title>Zadanie 3</title>
</head>
<body>
    @yield('content')
    <script>
        const changeDisplayForm = (type) => {
            if(type == 'indyvidual') {
                $('.indyvidual-form').show();
                $('.company-form').hide();
            } else {

                $('.indyvidual-form').hide();
                $('.company-form').show();
            }
          }

        $( function() {
          $( "#DOB" ).datepicker();
          let defaultSelected = $("input[name='type']:checked").val();
          changeDisplayForm(defaultSelected);

          $("input[name='type']").on("change", function () {
            let selectedValue = $(this).val();
            changeDisplayForm(selectedValue);
          });

        });
    </script>
</body>
</html>
