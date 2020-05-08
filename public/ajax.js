$("#addItem").click(function () {
$.ajax({
    url: '/item/add',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    },
    method: 'get',
    success:function (data) {
        $("#showAddItem").html(data);
    }
});
});


ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
