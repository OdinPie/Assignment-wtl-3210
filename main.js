const form = document.querySelector('form');
statustxt = form.querySelector('.status');

form.onsubmit = (e) =>{
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST" , "back.php", "true");
    xhr.onload = () =>{
        if(xhr.readyState === 4 && xhr.status === 200){
            let response = xhr.response;
            console.log(response);
            statustxt.innerText = response;
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

