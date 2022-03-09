let app_url = location.origin;
let open_plus = false;
// let editor__text = document.querySelectorAll('.js__editor__text');
// let count = 0;
function keyDown() {
    let count = 0;
    let editor__text = document.querySelectorAll('.js__editor__text');

    editor__text.forEach(function (item, index) {
        if (!item) return;
        item.addEventListener('keydown', (event) => {

            // event.preventDefault();
            if ( event.keyCode == 13 && count==0) {
                count++;

                let editor_main = item.parentElement;
                let plus_icon = '   <div class="editor__plus__main js__editor__plus__main">\n' +
                    '                       <svg class="editor__plus js__editor__plus" style="margin-right: 30px;" xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 40 32" fill="none">\n' +
                    '                           <rect x="0.5" y="0.75" width="39" height="30.5" rx="6.5" fill="#FFFBFB" stroke="black"/>\n' +
                    '                           <line x1="10" y1="15.5" x2="30" y2="15.5" stroke="black"/>\n' +
                    '                           <line class="js__editor__plus__stroke" x1="20.1667" y1="23.752" x2="20.1667" y2="7" stroke="black"/>\n' +
                    '                       </svg>\n' +
                    '                   </div>' +
                    '  <div class="editor__img__main js__editor__img__main">\n' +
                    '                           <svg class="editor__img js__editor__img" xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 38 26" fill="none">\n' +
                    '                               <rect x="0.5" y="0.899902" width="36" height="24.2" rx="6.5" fill="#FFFBFB" stroke="black"/>\n' +
                    '                               <rect x="9.5" y="6.5" width="18" height="13" stroke="black"/>\n' +
                    '                               <path d="M10 19.5L16.5 12.5" stroke="black"/>\n' +
                    '                               <path d="M15.7553 12.6974L19.5 15.5" stroke="black"/>\n' +
                    '                               <path d="M18.9397 15.5114L27.4714 8.99998" stroke="black"/>\n' +
                    '                           </svg>\n' +
                    '                       </div> '



                let create_div = document.createElement('div');
                let create_div_settings = document.createElement('div');
                let create_input = document.createElement('input');

                create_div_settings.classList.add('editor__settings');
                create_div_settings.classList.add('js__editor__settings');
                create_div.classList.add('editor__line');
                create_div.classList.add('js__editor__line');
                create_input.placeholder = "New One";
                create_input.type = 'text';
                create_input.style.marginLeft = '4px';
                create_input.name = 'text__line__'+editor__text.length;
                create_input.classList.add('editor__text');
                create_input.classList.add('js__editor__text');

                create_div_settings.innerHTML = plus_icon;
                create_div.append(create_div_settings)

                create_div.append(create_input);

                editor_main.insertAdjacentElement('afterend', create_div);
                create_input.focus();

                keyDown()


            } else if (event.keyCode == 40 && index + 1 < editor__text.length) {
                editor__text[index + 1].focus();
            } else if (event.keyCode == 38 && index - 1 > 0) {
                editor__text[index - 1].focus();
            } else if (event.keyCode == 8) {
                let value = editor__text[index].value;
                if (value.length == 0 && index > 0) {
                    let editor_main = item.parentElement;
                    editor_main.remove();
                    if(index > 0){
                        editor__text[index-1].focus();
                    }
                }
            }
        })
    });
}


async function createLine() {
    let url = app_url + '/editor/create_line';
    let formData = new FormData();
    // let editor__text = document.querySelectorAll('.js__editor__text');
    formData.append('num_line', 1);

    const response = await sendData(formData, url);

    if( response.success === true ){
        let form = document.querySelector('.editorForm');
        console.log('Create New One');
        form.insertAdjacentHTML('beforeend', response.content);
        // keyDown();
    }

}



async function sendData(formData, url) {
    try {
        const csrfToken = document.querySelector('[name=csrf-token]').content;
        const headers = new Headers({
            'X-CSRF-TOKEN': csrfToken,
            'Cache-Control': 'no-cache, no-store'
        })
        const response = await fetch(url, {
            method: 'POST',
            headers,
            body: formData
        })
            .then(res => res.json())

        return response
    } catch (e) {
        console.log('Error:', e);
    }

}


function removeLine(){
    document.addEventListener('keydown', (e)=>{
        const target = e.target;
        if (!target.closest('.js__editor__text')) return;
        console.log(e.key == 'Enter')
        let editor__text = document.querySelectorAll('.js__editor__text');

        editor__text.forEach((item, index)=>{

            if(e.key == 'Enter'){
                createLine()
            }
        })
    })
}

function publishStory(){
    let my_form = document.getElementById('editorForm');

    document.addEventListener('click', async (event)=>{
        let target = event.target;
        if(!target.closest('.js__editor__publish__btn')) return;
        let formData = new FormData(my_form);
        let url = app_url + '/editor/save_story';

        let response = await sendData(formData,url)


    })
}

function openPlus(){
    document.addEventListener('click', async(e)=>{
        let target = e.target;
        if (!target.closest('.js__editor__settings')) return;

        let get_parent = target.closest('.js__editor__settings').parentElement;
        let get_input = get_parent.querySelector('.js__editor__text');
        let get_plus = target.closest('.js__editor__plus');
        let get_settings = target.closest('.js__editor__settings');
        let get_img = (get_settings != null)?get_settings.querySelector('.js__editor__img__main'):null;
        let get_stroke = (get_plus != null)?get_plus.querySelector('.js__editor__plus__stroke'):null;


        if(open_plus == false && (get_img != null && get_stroke !=null)){
            get_stroke.classList.add('editor__plus__stroke');
            get_img.style.display ='inline-block';
            get_input.placeholder = ''
            open_plus = true;
        }else if(get_img != null && get_stroke != null){
            get_stroke.classList.remove("editor__plus__stroke");
            get_img.style.display ='none';
            open_plus = false;
        }

    });
}

function textToImg(){
    // document.addEventListener('click', async)
}

function readURL(input) {
    console.log(input.files,input.files[0])
    if (input.files && input.files[0]) {
        console.log('Came');
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}



document.addEventListener("DOMContentLoaded", function () {

    const csrfToken = document.querySelector('[name=csrf-token]').content;
    keyDown()
    publishStory()
    openPlus()


})
