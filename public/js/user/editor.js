let app_url = location.origin;
// let editor__text = document.querySelectorAll('.js__editor__text');

function keyDown() {
    let editor__text = document.querySelectorAll('.js__editor__text');

    editor__text.forEach(function (item, index) {
        if (!item) return;
        let count = 0;
        console.log(item)
        item.addEventListener('keydown', (event) => {

            if (event.keyCode == 13 && count == 0) {
                count++
                console.log('Count:',count)
                let editor_main = item.parentElement;
                createLine();



                // let plus_icon = '   <div class="editor__plus__main">\n' +
                //     '                       <svg class="editor__plus" style="margin-right: 18px;" xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 40 32" fill="none">\n' +
                //     '                           <rect x="0.5" y="0.75" width="39" height="30.5" rx="6.5" fill="#FFFBFB" stroke="black"/>\n' +
                //     '                           <line x1="10" y1="15.5" x2="30" y2="15.5" stroke="black"/>\n' +
                //     '                           <line x1="20.1667" y1="23.752" x2="20.1667" y2="7" stroke="black"/>\n' +
                //     '                       </svg>\n' +
                //     '                   </div>'
                //
                // let create_div = document.createElement('div');
                // let create_input = document.createElement('input');
                //
                // create_div.classList.add('editor__line');
                // create_div.classList.add('js__editor__line');
                // create_input.placeholder = "New One";
                // create_input.type = 'text';
                // create_input.classList.add('editor__text');
                // create_input.classList.add('js__editor__text');
                //
                // create_div.innerHTML = plus_icon;
                // create_div.append(create_input);
                //
                // editor_main.insertAdjacentElement('afterend', create_div);
                // create_input.focus();
                //
                // editor__text = document.querySelectorAll('.js__editor__text');
                // console.log(editor__text)
                // keyDown()
            } else if (event.keyCode == 40 && index + 1 < editor__text.length) {
                editor__text[index + 1].focus();
            } else if (event.keyCode == 38 && index - 1 > 0) {
                editor__text[index - 1].focus();
            } else if (event.keyCode == 8) {
                let value = editor__text[index].value;
                if (value.length == 0) {
                    let editor_main = item.parentElement;
                    editor_main.remove();
                    // editor_main.parentNode.removeChild(editor_main);
                }
            }
        })
    });
}


async function createLine() {
    let url = app_url + '/editor/create_line';
    let formData = new FormData();
    let editor__text = document.querySelectorAll('.js__editor__text');
    formData.append('num_line', editor__text.length);

    const response = await sendData(formData, url);

    if( response.success === true ){
        let form = document.querySelector('.editorForm');
        console.log('Create New One');
        form.insertAdjacentHTML('beforeend', response.content);
        keyDown();
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


function showPlus() {
    let editor__text = document.querySelectorAll('.js__editor__text');
    editor__text.forEach(function (item, index) {
        if (!item) return;
        item.addEventListener('click', (event) => {
            console.log('Clicked Yes')

        })
    });
}


function push(list, items) {
    Array.prototype.push.apply(list, items);
    list.length_ = list.length;
    list.length_ += items.length;
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

document.addEventListener("DOMContentLoaded", function () {

    const csrfToken = document.querySelector('[name=csrf-token]').content;
    keyDown()
    // removeLine()
})
