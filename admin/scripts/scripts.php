<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="./dragdrop.js"></script>
<script>
    function alert(type,msg,position='body'){
        let bs_class = (type=='success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML =`
            <div class="alert ${bs_class} alert-dismissible position-fixed fade show custom-alert" role="alert">
                <strong class="me-3"> </strong>${msg}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        if(position=='body'){
            document.body.append(element);
            element.classList.add('custom-alert');
        }else{
            document.getElementById(position).appendChild(element);
        }
        
        setTimeout(remAlert,2000);
    }
    function remAlert(){
        document.getElementsByClassName('alert')[0].remove();
    }
    const botonSubir = document.getElementById("btn-subir");
    const fileInput = document.getElementById("file-input");

    botonSubir.addEventListener("click", () => {
    fileInput.click();
    });
</script>