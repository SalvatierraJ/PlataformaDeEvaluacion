function manejarCambioImagen(idInput, idPrevisualizacion) {
  console.log('entre aqui');
  const selectImage = document.getElementById(idInput);
  selectImage.addEventListener("change", (e) => {
    const imagePreview = document.getElementById(idPrevisualizacion);
    const objectUrl = URL.createObjectURL(e.target.files[0]);
    imagePreview.src = objectUrl;
    console.log(objectUrl);
  });
}