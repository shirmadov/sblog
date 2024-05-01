@extends('layouts.app')

@section('title', 'Personal Area')

@section('headers')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js"></script>
    {{--<script src="https://cdn.tiny.cloud/1/2l183jmgeohh0y7sb48wid55xnl1fouhc42xs1pb438bztkb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}

@endsection

@section('content')

    <div class="editor__main">
        <div class="container">
            <div class="editor__wrapper">

                <div class="editor__btn">
                    <button class="editor__publish__btn js__editor__publish__btn">Publish</button>
                </div>
                <form id="editorForm" class="editorForm js__editor__form" action="" method="POST">

                    {{--                        <div class="editor__preview js__editor__preview">--}}
                    {{--                            <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">--}}
                    {{--                            <img class="editor__line__img" id="file-ip-1-preview">--}}
                    {{--                        </div>--}}
                    <div class="editor__line js__editor__line">
                        <div class="editor__settings js__editor__settings">
                            <div class="editor__plus__main js__editor__plus__main">
                                <svg class="editor__plus js__editor__plus" xmlns="http://www.w3.org/2000/svg" width="35"
                                     height="24" viewBox="0 0 40 32" fill="none">
                                    <rect x="0.5" y="0.75" width="39" height="30.5" rx="6.5" fill="#FFFBFB"
                                          stroke="black"/>
                                    <line x1="10" y1="15.5" x2="30" y2="15.5" stroke="black"/>
                                    <line class="js__editor__plus__stroke" x1="20.1667" y1="23.752" x2="20.1667" y2="7"
                                          stroke="black"/>
                                </svg>
                            </div>
                            <div class="editor__img__main js__editor__img__main">
                                <svg class="editor__img js__editor__img" xmlns="http://www.w3.org/2000/svg" width="35"
                                     height="24" viewBox="0 0 38 26" fill="none">
                                    <rect x="0.5" y="0.899902" width="36" height="24.2" rx="6.5" fill="#FFFBFB"
                                          stroke="black"/>
                                    <rect x="9.5" y="6.5" width="18" height="13" stroke="black"/>
                                    <path d="M10 19.5L16.5 12.5" stroke="black"/>
                                    <path d="M15.7553 12.6974L19.5 15.5" stroke="black"/>
                                    <path d="M18.9397 15.5114L27.4714 8.99998" stroke="black"/>
                                </svg>
                            </div>
                        </div>
                        <input type="text" id="myTextField" name="text__line__0"
                               class="editor__text__title js__editor__text" data-order="1" placeholder="Title">
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/user/editor.js')}}"></script>
    <script>


        const dragArea = document.querySelector('.editorForm');
        new Sortable(dragArea, {
            animation: 350
        });
    </script>
@endsection


