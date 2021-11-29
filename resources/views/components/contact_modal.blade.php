
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->

    <div id="cont_own_modal" >
        
        <button onclick="open_cont_modal()"><i class="fa fa-times fa-2x"></i></button>
       <p class="fp">Contact our owner</p>   
       
            
            <div class="contact_owner_parent_div">
                <div class="contact_owner_child_div">
                  <div class="contact_owner_text_div">
                    <h1>Fill out this one - time contact form</h1>
                    <p>We will contact back as well as soon.</p>
                  </div>
                  <form name="cont_form" id="cont_form">
                    @csrf
                    <div class="name_div">
                      <input type="text" name="cname" id="cname" placeholder="Name" required />
                    </div>
                    <div class="email_div">
                      <input type="email" name="cemail" id="cemail" placeholder="Email" required />
                    </div>
          
                    <div class="mobile_number_div">
                      <select>
                        <option selected="">IND +91</option>
                      </select>
                      <input
                        type="tel"
                        name="cmobile"
                        id="cmobile"
                        placeholder="Number"
                        maxlength="10"
                        minlength="10"
                        required
                      />
                    </div>


                    <div class="mobile_number_div">
                      <select>
                        <option value="" selected="">Interested In</option>
                      </select>
                      <input
                        type="text"
                        name="cint"
                        id="cint"
                        placeholder="Write your interest"
                        required
                      />
                    </div>
                    <br>


                    <input type="submit" value="Contact Owner">
                  </form>
                </div>
              </div>
        
        </button>
    </div>


    <div id="get_phon_modal">
       
        <button onclick="open_num()"><i class="fa fa-times fa-2x"></i></button>

       <h2>Contact Us On</h2> 
      <h4>Mobile No. :  <i class="fa fa-mobile" aria-hidden="true"></i> <i>9771498840</i></h4>
      <h4>Email : <i> info@bpgroup.in </i> </h4>
    <h4>Our Office : <i> 303,vasundhra metro mall east boring canal road,Patna </i></h4>
    </div>

    <script>
      $('#cont_form').submit(function(e){
        e.preventDefault();
        let cname = $('#cname').val();
        let cemail = $('#cemail').val();
        let cmobile = $('#cmobile').val();
        let cint = $('#cint').val();
        let _token = $("input[name=_token]").val();
        $.ajax({
          url:"{{route('user.contact')}}",
          type:"POST",
          data:{
            cname:cname,
            cemail:cemail,
            cmobile:cmobile,
            cint:cint,
            _token:_token
          },
          success:function(response){
            if(response){
           open_cont_modal();
           toastr.success("Our team will contact you as soon as possible");
            }
          }
        })
      })
      
    </script>

    
