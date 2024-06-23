import './bootstrap';
import Alpine from 'alpinejs'
import Swal from 'sweetalert2'
import '@sweetalert2/themes/dark';
import { marked } from 'marked';
import DOMPurify from 'dompurify';


window.onload = function(e){
    document.getElementById('menu').classList.remove('hidden');
}

window.browserUtils = {
    emit: function(message) {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: response.data.message
        });
    },
    emitModalError: function(title,message) {
        Swal.fire({
            title: title,
            text: message,
            icon: "error"
        });
    },

}

let formController =  {
        submitForm(event) {
            var formData = new FormData(event.target);

            axios.request({
                method: event.target.method,
                url: event.target.action,
                data: formData,
                headers: {
                    '_token': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            }).then(response => {
                if(response.status < 300){
                    if(response.data.intended){
                        window.location.href = response.data.intended;
                    }
                    if(response.data.message){
                        browserUtils.emit(response.data.message);
                        return response.data;
                    }
                }

            }).catch(error => {
                browserUtils.emitModalError("Erro", error.response.data.message);
            })
        },


}



document.marked = marked
document.DOMPurify = DOMPurify
window.formController = formController
window.Alpine = Alpine
window.Swal = Swal

Alpine.start()
