const divImag = document.getElementById('div_img');

const  input = document.getElementById('avatar')

const  image = document.getElementById('img_register')

const  icono = document.getElementById('avatar_icono')

divImag.addEventListener('click' ,()=> input.click());



input.addEventListener("change", (e)=>{
    const archivo = e.target.files[0];
    const fileReader = new FileReader();
    fileReader.readAsDataURL(archivo);
    fileReader.addEventListener("load", (e)=>{
        image.classList.remove('img_register');
        icono.classList.add('d-none');
        image.setAttribute("src", e.target.result);

    });
})
