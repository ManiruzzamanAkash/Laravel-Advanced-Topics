<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>AJAX Example</title>
</head>

<body>
    <div class="container row justify-content-center mb-5" id="post-details" data-post-id="{{ $post->id }}">
        <div class="col-md-8 mt-5 card card-body">
            <h2>{{ $post->title }}</h2>
            <div>
                {!! $post->description !!}
            </div>
        </div>

        <div class="mt-2">
            <h3>Comments</h3>

            <div id="post-comments">
                Loading Comments...
                <i class="fa fa-spin fa-spinner fa-3x"></i>
            </div>

            <h3 class="mt-5">New Comment</h3>

            <div class="alert alert-success visually-hidden" id="successMessage">Comments saved successfully !!</div>
            <form method="post" id="comment-form-submit">
                @csrf

                <textarea class="form-control" name="comment" id="comment-input" rows="3" placeholder="Enter comments"></textarea>
                <div id="comment-error-data" class="text-danger"></div>
                <br>

                <button type="submit" class="btn btn-success " id="save-comment-button">
                    Save
                </button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
