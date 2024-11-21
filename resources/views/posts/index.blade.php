<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بحث المشاركات</title>

    <!-- تضمين Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">بحث المشاركات</h1>

        <!-- نموذج البحث -->
        <form method="GET" action="{{ route('posts.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="ابحث هنا..." value="{{ old('search', $searchTerm) }}">
                <button type="submit" class="btn btn-primary">بحث</button>
            </div>
        </form>

        <!-- عرض نتائج البحث -->
        @if($posts->count() > 0)
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>POST ID</th>
                        <th>POST TITLE</th>
                        <th>CATEGORY NAME</th>
                        <th>USER NAME</th>
                        <th>POST DESCRIPTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->content }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="alert alert-warning">لا توجد نتائج مطابقة للبحث.</p>
        @endif
    </div>

    <!-- تضمين Bootstrap JS و Popper.js (اختياري) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybDq71t2j5X64+ldAHv7a4r5TtDb2p8LkXpnf8pcYNBx3yC0E8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Lg4lYHXpHExDDo9x5R2bl74AXp7aXyq8kaDkQ96Yz7jq6rD" crossorigin="anonymous"></script>

</body>
</html>
