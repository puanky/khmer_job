<!-- jQuery -->    

    <script type="text/javascript">
        $(function () {
            $('.datetimepicker').datetimepicker({
                format: 'YYYY-MM-DD'
             });
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/jquery.confirm.min.js"></script>
    <script src="<?php echo base_url()?>assets/confirm/confirm-bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/sb-admin-2.js"></script>

    <script type="text/javascript">
        $("#mceu_39-inp").mouseover(function(){alert();}); 
        
    </script>
    <!--tinymce-->
    <script>
        
        tinymce.init({
          selector: 'textarea',
          height: 500,
          plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            /*toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",*/
             toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent imageupload",
          //       setup: function(editor) {
          //           var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
          //           $(editor.getElement()).parent().append(inp);

          //           inp.on("change",function(){
          //               var input = inp.get(0);
          //               var file = input.files[0];
          //               var fr = new FileReader();
          //               fr.onload = function() {
          //                   var img = new Image();
          //                   img.src = fr.result;
          //                   editor.insertContent('<img src="'+img.src+'"/>');
          //                   inp.val('');
          //               }
          //               fr.readAsDataURL(file);
          //           });

          //           editor.addButton( 'imageupload', {
          //               text:"image",
          //               icon: false,
          //               onclick: function(e) {
          //                   inp.trigger('click');
          //               }
          //           });
          //       },
          // imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
          // content_css: [
          //   '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
          //   '//www.tinymce.com/css/codepen.min.css'
          // ]
        });
    </script>    


</body>

</html>
