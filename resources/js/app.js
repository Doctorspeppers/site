import './bootstrap';
import Alpine from 'alpinejs'
import Swal from 'sweetalert2'
import '@sweetalert2/themes/dark';
import { marked } from 'marked';
import DOMPurify from 'dompurify';
import EditorJS from '@editorjs/editorjs';
import Embed from '@editorjs/embed';
import Underline from '@editorjs/underline';
import NestedList from '@editorjs/nested-list';
import marker from '@editorjs/marker';
import quote from '@editorjs/quote';
import CodeTool from '@editorjs/code';
import table from '@editorjs/table';
import header from '@editorjs/header';

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
            title: message
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
        async submitForm(event, callback = null) {
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
                    if(response.data.message){
                        browserUtils.emit(response.data.message);
                    }
                    if(callback){
                        callback(response.data);
                        return;
                    }

                    if(response.data.intended){
                        setInterval(function(){ window.location.href = response.data.intended; }, 2000);
                    }
                }

            }).catch(error => {
                browserUtils.emitModalError("Erro", error.response.data.message);
            })
        },
}



let editorJSController =  {
    editor: null,
    init: function(inputId){
        this.editor = new EditorJS({
            tools: {
                table: table,
                code: CodeTool,
                underline: Underline,
                marker: marker,
                quote: quote,
                header: header,
                list: {
                    class: NestedList,
                    inlineToolbar: true,
                    config: {
                      defaultStyle: 'unordered'
                    },
                },
                embed: {
                    class: Embed,
                    config: {
                        services: {
                            youtube: true,
                            coub: true,
                            imgur: true,
                            github: true,
                            facebook: true,
                            instagram: true,
                            codepen: {
                                regex: /https?:\/\/codepen.io\/([^\/\?\&]*)\/pen\/([^\/\?\&]*)/,
                                embedUrl: 'https://codepen.io/<%= remote_id %>?height=300&theme-id=0&default-tab=css,result&embed-version=2',
                                html: "<iframe height='300' scrolling='no' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'></iframe>",
                                height: 300,
                                width: 600,
                                id: (groups) => groups.join('/embed/')
                            }
                        }
                    }
                },
            },
            autofocus: true,
            holder: inputId,
        });
    },
}


document.marked = marked
document.DOMPurify = DOMPurify
window.formController = formController
window.Alpine = Alpine
document.Swal = Swal
window.editorJSController = editorJSController

Alpine.start()
