let app_url = location.origin;
let open_plus = false;

function publishBlog(){
    document.querySelector('#form').addEventListener('submit', async (e)=>{
        e.preventDefault();
        let target = e.target;
        let formData = new FormData(target);
        let url = app_url+'/editor/publish';
        let response = await sendData(formData, url);
    })
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


document.addEventListener("DOMContentLoaded", function () {

    publishBlog();
})
