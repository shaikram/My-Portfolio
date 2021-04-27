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
            //target: '#targetLayer',
                    beforeSubmit:function(){
                      // $('.progress-bar').width('0%');
                    },
                    uploadProgress: function(event, position, total, percentageComplete){
                        $('.progress-bar').animate({
                         marginLeft: '100%'
                        }, {
                         duration: 5000
                        });
                        // $('.progress-bar').width(percentageComplete + '%');
                    },
                    success:function(data){
                       //$('#loader-icon').hide();
                       //$('#targetLayer').show();
                       // $('.progress').hide();
                       $('.progress-bar').animate({
                        marginLeft: '0%'
                       }, {
                        duration: 1000
                       });
                       $('#portfolio_form').each(function(){
                            this.reset();
                        });

                    },
                    resetForm: true
           });
     //=================================================================================//

  });
});
