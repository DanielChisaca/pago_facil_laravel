<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paises</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th color="red" >Ciudades</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais=>$informacion)
                <tr>
                    <td rowspan="3">  {{  $pais  }}  </td>
                    <td rowspan="3">  {{  $informacion["Capital"]  }}  </td>
                    <td rowspan="3">  {{  $informacion["Moneda"]  }}  </td>
                    <td bgcolor= "red" >  {{  $informacion["Ciudades"][0] }} </td>
                </tr>

                <tr>
                    <td bgcolor= "red">  {{  $informacion["Ciudades"][1]}}  </td>
                </tr>

                <tr>
                    <td bgcolor= "red">  {{  $informacion["Ciudades"][2]}}  </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>