<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Laravel Search</title>
</head>
<body>
    <div class="container my-5 py-5 px-5 mx-5">
    <!-- Search input -->
    <form>
        <input
        type="search"
        class="form-control"
        placeholder="Find user here"
        name="search"
        value="{{ request('search') }}"
    >
    </form>

    <!-- List items -->
    <ul class="list-group mt-3">

        @forelse ($users as $user)
        <li class="list-group-item">{{ $user->name }}</li>
        @empty
      <li class="list-group-item list-group-item-danger">User Not Found.</li>
        @endforelse


    </ul>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
