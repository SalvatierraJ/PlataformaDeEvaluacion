<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="./scripts/dashboard/menuseleccionar.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    function activateCurrentNav() {
        const currentUrl = window.location.href;
        const navLinks = document.querySelectorAll('.navList a');

        navLinks.forEach(link => {
            const linkUrl = link.href;
            if (currentUrl === linkUrl) {
                link.parentElement.classList.add('active');
            }
        });
    }
    activateCurrentNav();

    function abrir() {
        var file = document.getElementById("file").click();
    }



    function alert(type, msg, position = 'body') {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible position-fixed fade show custom-alert" role="alert">
                <strong class="me-3"> </strong>${msg}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        if (position == 'body') {
            document.body.append(element);
            element.classList.add('custom-alert');
        } else {
            document.getElementById(position).appendChild(element);
        }

        setTimeout(remAlert, 2000);
    }

    function remAlert() {
        document.getElementsByClassName('alert')[0].remove();
    }
    // function setActive(){
    //        let navbar = document.getElementById('dashboard-menu');
    //        let a_tags = navbar.getElementsByTagName('a');

    //        for(i=0; i<a_tags.length;i++){
    //         let file= a_tags[i].href.split('/').pop();
    //         let file_name = file.split('.')[0];

    //         if(document.location.href.indexOf(file_name) >= 0){
    //             a_tags[i].classList.add('active');
    //         }
    //        }

    //     }

    //     setActive();
</script>