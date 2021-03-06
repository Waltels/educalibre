 //Slug automático
 document.getElementById("title").addEventListener('keyup', slugChange);

 function slugChange(){
     
     title = document.getElementById("title").value;
     document.getElementById("slug").value = slug(title);

 }

 function slug (str) {
     var $slug = '';
     var trimmed = str.trim(str);
     $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
     replace(/-+/g, '-').
     replace(/^-|-$/g, '');
     return $slug.toLowerCase();
 }
 //CKEDITOR

 ClassicEditor
 .create( document.querySelector( '#description' ) )
 .then( editor => {
     console.log( 'Editor was initialized', editor );
 } )
 .catch( err => {
     console.error( err.stack );
 } );
 //segundo
 ClassicEditor
 .create( document.querySelector( '#desfoto' ) )
 .then( editor => {
     console.log( 'Editor was initialized', editor );
 } )
 .catch( err => {
     console.error( err.stack );
 } );
 //Cambiar imagen
 document.getElementById("file").addEventListener('change', cambiarImagen);

 function cambiarImagen(event){
     var file = event.target.files[0];

     var reader = new FileReader();
     reader.onload = (event) => {
         document.getElementById("picture").setAttribute('src', event.target.result); 
     };

     reader.readAsDataURL(file);
 }