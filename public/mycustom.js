$( document ).ready(function() {

    $('.del-user').on('click',function()
    {
        var f=confirm("Do you want to delete");
        if(f){

            var del_id=$(this).data('id');
            $.ajax( "deleteData/"+del_id+"/1")
              .done(function( res ) {
                  var trid="#tr-"+del_id;
                  $(trid).hide();
                  $('.ajax-msg').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Userdata Deleted</div>').fadeOut(2000);

            });//end of function    
        }//end of if
        
    });//end of function

    
    $('#update_id').submit(function(){
      
      var st=$(this).val();
      //console.log("data updated="+st);
      var url= " update_action_data ";
      var f=confirm("!!Do you want to update!!");
      if(f){
        
      $.ajax({

        type: "POST",
        datatype: "html",
        data : { state : st },
        url:url,
        success:function(data){
          console.log(data);
          var trid="#tr-";
          $(trid).hide();
          $('.ajax-msg').html('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Userdata Deleted</div>').fadeOut(2000);

        },
      
      });

     };
   
   });

});