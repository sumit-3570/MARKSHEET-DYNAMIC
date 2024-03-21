<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            background: #200122;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #6f0000, #200122);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #6f0000, #200122); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



        }

        form {
            width: 782px;
          
            margin: 50px auto;
        }

        .font {
            width: 50%;
            font-size: 100px;
            padding: 0px 100px;
            margin-left: 7px;
        }

        input {
            width: 47%;
            height: 44px;
            padding-top: 9px;
            font-size: 20px;
            text-align: center;
            background: #4B79A1;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #283E51, #4B79A1);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #283E51, #4B79A1);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



        }

        label {
            background: #f7ff00;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #db36a4, #f7ff00);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #db36a4, #f7ff00);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        #enquiry {
            width: 100%;
            height: 100px;
        }

        .button {

            padding: 10px 20px;
            background-color: chartreuse;

        }

        .color {
            background: #834d9b;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #d04ed6, #834d9b);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #d04ed6, #834d9b);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        table {
           
            padding: 10px 15px;
            background-color: #b92b27;
            margin: 0px auto;
            background: #03001e;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #03001e;
            margin: 100px auto;

        }

        th,
        td {
            padding: 10px 15px;
            text-align: center;
            color: #d04ed6;
             color: #03001e;
        }
    </style>

</head>

<body>
    <form method="post">
        <h1 class="text-center border bordr-1 border-danger color ">Markesheet</h1>

        <label for="" class="border border-1 border-danger fs-3 fw-normal font my-2">MATH</label>
        <input type="text" name="MATH" id="">
        <label for="" class="border border-1 border-danger fs-3 fw-normal font my-2">ENGLISH</label>
        <input type="text" name="ENG" id="">
        <label for="" class="border border-1 border-danger fs-3 fw-normal font my-2">SCIENCE</label>
        <input type="text" name="SCIENCE" id="">
        <label for="" class="border border-1 border-danger fs-3 fw-normal font my-2">SST</label>
        <input type="text" name="SST" id="">
        <label for="" class="border border-1 border-danger fs-3 fw-normal font my-2">HINDI</label>
        <input type="text" name="HINDI" id="">

        <div class="text-center">
            <button class="btn button my-2" type="submit">Submit Form</button>
        </div>







    </form>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script>


    $('form').submit(

        function () {

            let formData = new FormData(this);

            formData.append('key', 'Markesheet task');

            $.ajax(
                {

                    url: "Common_Ajax.php",
                    type: "post",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (resp) {
                        $('body').html(resp);

                    }
                }

            )

            return false;
        }
    )

</script>

</html>