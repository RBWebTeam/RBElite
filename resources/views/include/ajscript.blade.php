<script type="text/javascript">
  
$("#agent_add_id").click(function(event){  event.preventDefault();
 

 $.post("{{url('agent-save')}}", $('#agent_add_from').serialize())
             .done(function(msg){ 

                      if(msg.ag_name){
                        $('#ag_nameerr').text(msg.ag_name);
                      }else{
                        $('#ag_nameerr').text('');
                      }
                      if(msg.ag_address){
                        $('#valid_ag_address').text(msg.ag_address);
                      }else{
                        $('#valid_ag_address').text('');
                      }
                      if(msg.ag_contact_no){
                        $('#valid_ag_contact_no').text(msg.ag_contact_no);
                      }else{
                        $('#valid_ag_contact_no').text('');
                      }
                      if(msg.ag_email){
                        $('#valid_ag_email').text(msg.ag_email);
                      }else{
                        $('#valid_ag_email').text('');
                      }
                      if(msg.password){
                        $('#valid_agent_password').text(msg.password);
                      }else{
                        $('#valid_agent_password').text('');
                      }

                       if(msg.confirm_password){
                        $('#valid_agent_cagent_password').text(msg.confirm_password);
                      }else{
                        $('#valid_agent_cagent_password').text('');
                      }

                      
                      if(msg.rto_id){
                        $('#valid_ag_rto_id').text(msg.rto_id);
                      }else{
                        $('#valid_ag_rto_id').text('');
                      }

                      if(msg==0){
                      	window.location.href = "{{url('agent-list')}}";
                      }

                         
                     }).fail(function(xhr, status, error) {
                 console.log(error);
            });
   
})



$("#Elite_add_id").click(function(event){  event.preventDefault();
 
    if($('#com_id').val()!=0 && $('#Short_Name').val()!=0 && $('#numb').val()!=0){
 $.post("{{url('elite-save')}}", $('#Elite_add_from').serialize())
             .done(function(msg){ 

                     if(msg==0){
                              window.location.href = "{{url('elite-card-master')}}";
                     }else{
                     	console.log("error");
                     }

                         
                     }).fail(function(xhr, status, error) {
                 console.log(error);
            });
                 }else{
                    
                 	 $('#elitevalid_id').text("Please fill out this form carefully...");
                 }
   
})


</script>