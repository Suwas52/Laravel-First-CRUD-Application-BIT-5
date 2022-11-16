<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
</head>

<body>

    <div class="container mt-5">
        <h2> Edit Category </h2>
        <div class="row">
            <div class="col-sm-4">
                <form method="POST" action="/category-update/{{$category->id}}">
                    @csrf
                    @method('put')
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Enter the title" class="form-control"
                        value="{{ $category->title}}" />
                    <button class="btn btn-primary mt-4" type="submit">Update</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>