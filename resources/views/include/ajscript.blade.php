<script type="text/javascript">
  
$("#agent_add_id").click(function(event){  event.preventDefault();
 

 $.post("{{url('agent-save')}}", $('#agent_add_from').serialize())
             .done(function(msg){ 

                      if(msg.ag_name){
                        $('#ag_nameerr').text(msg.ag_name);
                      }else{
                        $('#ag_nameerr').text('');
                      }

                         
                     }).fail(function(xhr, status, error) {
                 console.log(error);
            });
   
})


</script>