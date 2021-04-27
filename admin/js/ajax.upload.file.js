$(document).ready(function(){
   $('#uploadImage').submit(function(event){
     
       if($('#uploadFile').val() && $('#port_photo1').val() && $('#port_photo2').val() && $('#port_photo3').val() && $('#port_photo4').val()){
           event.preventDefault();
           //$('#loader-icon').show();
           //$('#targetLayer').hide();
           $('.progress').show();

           $(this).ajaxSubmit({
               //target: '#targetLayer',
               beforeSubmit:function(){
                 $('.progress-bar').width('0%');
               },
               uploadProgress: function(event, position, total, percentageComplete){
                   $('.progress-bar').animate({
                    width: percentageComplete + '%'
                   }, {
                    duration: 1000
                   });
               },
               success:function(){
                  //$('#loader-icon').hide();
                  //$('#targetLayer').show();
                  $('.progress').hide();
                  alert("Uploading Success");
               },
               resetForm: true
           });
       }
       return false;
   });
});
