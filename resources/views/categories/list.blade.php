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
        <h2>Categories <a class="btn btn-secondary" href="/category-create">New Categories</a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->index +1}}</td>
                    <td>{{ $category->title}}</td>
                    <td>
                        <a href="/category-edit/{{$category->id}}" type="button" class="btn btn-primary">Edit</a>
                        <!-- <a href="/category-delete/{{$category->id}}" type="button" class="btn btn-danger">Delete</a> -->

                        <form method="post" action="/category-delete/{{$category->id}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mt-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>