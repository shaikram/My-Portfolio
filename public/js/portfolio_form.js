$(document).ready(function(){
  $('#portfolio_form').submit(function(e){
    e.preventDefault();
    // var input = $('#port');

    for(var input = 1; input <= 9; input++){
      var port = 'port'+input;
      var focus = document.getElementById(port);
      var field = document.getElementById(port).value;
      var ext = ["jpg", "jpeg", "png"];
      var inp = [
                  "",
                  "Website Name",
                  "Website Url",
                  "Kind of system",
                  "Description",
                  "Cover Photo",
                  "Picture 1",
                  "Picture 2",
                  "Picture 3",
                  "Picture 4"
                ];
       // alert(fied.value);

       switch(true){

         case field.length == 0:
              alert(inp[input] + ' is required!');
              focus.focus();

          return false;
          break;

          case field.length <= 4:
              alert(inp[input] + ' must be 5 string or more!');
              focus.focus();

          return false;
          break;
       }
       if(input >= 5){
         var pos = field.indexOf('.') + 1;
         var res = field.substr(pos, 3);

             switch(true){

               case field.length == 0:
                    alert(inp[input] + ' is required!');
                    focus.focus();

                return false;
                break;

                case field.length <= 4:
                    alert(inp[input] + ' must be 5 string or more!');
                    focus.focus();

                return false;
                break;
             }

             for(var a = 0; res != ext[a]; a++){
               if(a > 2){
                 alert("The uploaded file must be in .jpg, .jpeg or .png extention!");
                 focus.focus();
                 return false;
               }
             }
             // alert("The uploaded file must be in .jpg, .jpeg or .png extention!");
             //     focus.focus();
       }

    }

    // alert('all goods');
    // =======After passing Validation send the data to server========/
    $.ajax({
      beforeSend:function(){
        $('.progress-bar').css('width', '0%');
      },
      UploadProgress:function(event, position, total, percentageComplete){

        $('.progress-bar').text(percentageComplete + '%');
        $('.progress-bar').animate({
                    width: percentageComplete + '%'
                   }, {
                    duration: 2000
                   });
      },
      url:"/upload-portfolio",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      type:"post",
      async:false,
      data:{
        "port1":port1
      },
      success:function(data){
        $('.progress').hide();
        alert(data + " Uploading Success");
      }
    });
    // $('#portfolio_form').ajaxForm({
    //   beforeSend:function(){
    //     //code here before uploading picture
    //   },
    //   UploadProgress:function(event, position, total, percentComplete){
    //     $('.progress-bar').text(percentComplete + '%');
    //     $('.progress-bar').css('width', percentComplete + '%');
    //   },
    //   success:function(data){
    //     if(data.errors){
    //       $('.progress-bar').text('0%');
    //       $('.progress-bar').css('width', '0%');
    //       alert(data.errors+'<br/>');
    //     }if(data.success){
    //       $('.progress-bar').text('uploaded');
    //       $('.progress-bar').css('width', '100%');
    //       alert(data.success +'<br/>');
    //       // $('#success').append(data.image); this is to show image
    //     }
    //
    //   }
    // });

     //=================================================================================//

  });
});
