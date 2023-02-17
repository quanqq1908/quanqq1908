const hovaten = document.getElementById('hovaten')
const matkhau= document.getElementById('matkhau')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')
form.addEventListener('sumit',(e) => {
    let messages = []
    if(hovaten.value === '' || hovaten.value == null){
        messages.push('Không được để trống tên đăng nhập')
    }
    if (messages.length > 0){
    e.preventDefault();
    }
})