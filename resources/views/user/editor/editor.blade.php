@extends('layouts.app')

@section('title', 'Personal Area')

@section('headers')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js"></script>
@endsection

@section('content')

    <div class="editor__main">
        <div class="container">

           <div class="editor__wrapper js__editor__wrapper">
               Sapa Shirmadov

               <form id="editorForm" class="editorForm" action="" method="POST" class="">
                   <div class="editor__line js__editor__line">
                       <div class="editor__plus__main">
                           <svg class="editor__plus" xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 40 32" fill="none">
                               <rect x="0.5" y="0.75" width="39" height="30.5" rx="6.5" fill="#FFFBFB" stroke="black"/>
                               <line x1="10" y1="15.5" x2="30" y2="15.5" stroke="black"/>
                               <line x1="20.1667" y1="23.752" x2="20.1667" y2="7" stroke="black"/>
                           </svg>
                       </div>
                       <input id="myTextField" class="editor__text__title js__editor__text" type="text" placeholder="Title blog">
                   </div>
                   <div class="editor__line js__editor__line">
                       <div class="editor__plus__main">
                           <svg class="editor__plus" xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 40 32" fill="none">
                               <rect x="0.5" y="0.75" width="39" height="30.5" rx="6.5" fill="#FFFBFB" stroke="black"/>
                               <line x1="10" y1="15.5" x2="30" y2="15.5" stroke="black"/>
                               <line x1="20.1667" y1="23.752" x2="20.1667" y2="7" stroke="black"/>
                           </svg>
                       </div>
                       <input class="editor__text js__editor__text" type="text" placeholder="Write your article">
                   </div>
                   <div class="editor__line js__editor__line">
                       <div class="editor__plus__main">
                           <svg class="editor__plus" xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 40 32" fill="none">
                               <rect x="0.5" y="0.75" width="39" height="30.5" rx="6.5" fill="#FFFBFB" stroke="black"/>
                               <line x1="10" y1="15.5" x2="30" y2="15.5" stroke="black"/>
                               <line x1="20.1667" y1="23.752" x2="20.1667" y2="7" stroke="black"/>
                           </svg>
                       </div>
                       <input class="editor__text js__editor__text" type="text" placeholder="Write your Story">
                   </div>
               </form>

           </div>

        </div>
    </div>
@endsection

@section('js')

    <script type="module" src="{{asset('js/user/editor.js')}}"></script>

<script>
    const dragArea = document.querySelector('.js__editor__wrapper');
    new Sortable(dragArea, {
        animation:350
    });
</script>
@endsection


