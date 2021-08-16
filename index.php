<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasan Kürşad KORKMAZ | Ödev 1 Ve 2 Anasayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .selectMargin {
        margin-bottom: 5rem;
    }

    h3 {
        margin-bottom: 50px;
    }

    input {
        margin-bottom: 20px;

    }

    select {
        margin-bottom: 20px;

    }

    .buttons {
        display: flex;
        justify-content: space-around;
    }
    </style>
</head>

<body>
    <div class="row">
        <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="col-lg-12">
                    <h3>Aşağıdaki Butonlarla İlgili Ödeve Gidebilirsiniz</h3>


                    <div class="form-group row">
                        <div class="col-md-12 buttons">
    <!-- Javascript ile butonlara href özelliği eklendi böylece hem input button kullanılabildi hem de 2 defa form yazmak gerekmedi -->
                            <button type="button" name="result" class="btn btn-primary btn-lg btn-block" value="1. Ödeve Git" onclick="location.href='odev1_1.php';" >1.Ödeve
                                Git</button>
                            <button type="button" name="result" class="btn btn-primary btn-lg btn-block" value="2. Ödeve Git" onclick="location.href='odev1_2.php';" >2.Ödeve
                                Git</button>
                        </div>

                    </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

</body>

</html>
