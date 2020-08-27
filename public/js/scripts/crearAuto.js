const divImagen = document.getElementById('contenedor_img');

const  input_file = document.getElementById('slect_img')

const  imagen = document.getElementById('img')



divImagen.addEventListener('click' ,()=> input_file.click());



input_file.addEventListener("change", (e)=>{
    const archivo = e.target.files[0];
    const fileReader = new FileReader();
    fileReader.readAsDataURL(archivo);
    fileReader.addEventListener("load", (e)=>{
        imagen.classList.remove('imagen');
        imagen.setAttribute("src", e.target.result);

    });
})

////register


