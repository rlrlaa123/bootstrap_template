<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>소개글 입력하기</h2>
    <form action="{{ route('admin.update',$intro->id) }}" method="POST">
        <input name="_method" type="hidden" value="PUT">
        {!! csrf_field() !!}
        <div class="form-group" {{ $errors->has('title') ? 'has-error' : '' }}>
            <label for="title">소개글(상단)</label>
            <input type="text" class="form-control" id="title" placeholder="Enter intro" name="title" value="{{ $intro->title }}">
            {!! $errors->first('title', '<span class="form-error">:message</span>') !!}
        </div>
        <div class="form-group" {{ $errors->has('description') ? 'has-error' : '' }}>
            <label for="description">소개글(하단)</label>
            <input type="text" class="form-control" id="description" placeholder="Enter intro" name="description" value="{{ $intro->description }}">
            {!! $errors->first('description', '<span class="form-error">:message</span>') !!}
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
