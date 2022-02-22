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

                   <div class="editor__line js__editor__line">
                       <div class="editor__plus__main">
                           <svg class="editor__plus" xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 40 32" fill="none">
                               <rect x="0.5" y="0.75" width="39" height="30.5" rx="6.5" fill="#FFFBFB" stroke="black"/>
                               <line x1="10" y1="15.5" x2="30" y2="15.5" stroke="black"/>
                               <line x1="20.1667" y1="23.752" x2="20.1667" y2="7" stroke="black"/>
                           </svg>
                       </div>
                       <input id="myTextField" name="text__line__0" class="editor__text__title js__editor__text" data-order="1" type="text" placeholder="Title blog">
                   </div>
{{--                   <div class="editor__line js__editor__line">--}}
{{--                       <div class="editor__plus__main">--}}
{{--                           <svg class="editor__plus" xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 40 32" fill="none">--}}
{{--                               <rect x="0.5" y="0.75" width="39" height="30.5" rx="6.5" fill="#FFFBFB" stroke="black"/>--}}
{{--                               <line x1="10" y1="15.5" x2="30" y2="15.5" stroke="black"/>--}}
{{--                               <line x1="20.1667" y1="23.752" x2="20.1667" y2="7" stroke="black"/>--}}
{{--                           </svg>--}}
{{--                       </div>--}}
{{--                       <input class="editor__text js__editor__text" name="message2" type="text" data-order="2" placeholder="Write your article">--}}
{{--                   </div>--}}
               </form>
           </div>

        </div>
    </div>
@endsection

@section('js')
    <script type="module" src="{{asset('js/user/editor.js')}}"></script>
<script>
    const dragArea = document.querySelector('.editorForm');
    new Sortable(dragArea, {
        animation:350
    });
</script>
@endsection


