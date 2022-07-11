<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZmanufacturerYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Update </title>
</head>

<body>
    <div class="container fluid">
        <h2>Eidt car</h2>
        <a href="http://localhost:8000/cars">Back to list</a>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- phai co enctype= multipart/form-data neu ko nos ko hien thi  -->
        <form action="{{route('cars.update', $car->id)}}" class="was-validated" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="img" class="form-label"></label>
            <img id="output" class="img-thumbnail" width="200px" src="/images/{{isset($car)?$car->image:''}}" alt="" />
            <input type="file" name="image" class="form-control" onChange="loadFile(event)">

            <label for="ex" class="form-label"></label>
            <input type="text" name="description" class="form-control" value="{{isset($car)?$car->description:''}}">

            <label for="" class="form-label"></label>
            <select class="form-select" aria-label="Default select example" name="mf_id">
                @foreach( $manufacturers as $mf )
                <option value="{{ $mf->id }}" {{ $car->manufacturers->id == $mf->id? "selected" :"" }}>
                    {{ $mf->mf_name }}
                </option>
                @endforeach
            </select>

            <label for="ex" class="form-label"></label>
            <input type="text" name="model" class="form-control" value="{{isset($car)?$car->model:''}}">

            <label for="ex" class="form-label"></label>
            <input type="date" name="produced_on" class="form-control" value="{{isset($car)?$car->produced_on:''}}"><br>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <script>
            const loadFile = (event) => {
                console.log("changed");
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };
        </script>
    </div>
</body>

</html>