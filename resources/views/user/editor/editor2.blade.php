@extends('layouts.app')

@section('title', 'Personal Area')

@section('headers')

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')

    <div class="editor__main">
        <div class="container">
{{--            <div id="summernote">Hello Summernote</div>--}}
            <form style="width: 900px" id="form">
                @csrf
                <button class="editor__publish__btn js__editor__publish__btn" style="float: right; margin-bottom: 10px" type="submit">Publish</button>
                <textarea id="summernote" name="editordata"></textarea>
{{--                <input type="file" name="file">--}}

            </form>
        </div>
    </div>
@endsection

@section('js')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{asset('js/user/editor2.js')}}"></script>
    <script type="text/javascript">
        var intFrameHeight = window.innerHeight;

        console.log(intFrameHeight);
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 5',
                tabsize: 2,
                height: intFrameHeight-200,
                width:800,
                maxHeight: 700,
            });
        });
    </script>
@endsection


