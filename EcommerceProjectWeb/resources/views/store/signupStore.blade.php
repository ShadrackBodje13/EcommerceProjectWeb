@extends('store.storeLayout')
@section('content')
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>


<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}


</style>
    <!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

        <form id="signupForm" method="post" >
            {{csrf_field()}}
            <div class="col-md-12">
                <!-- Formus -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">SIGN UP</h3>
                    </div>
                    
                    <div class="form-group ">
                        <input class="input" type="text" name="name" id="name" placeholder="Full Name">
                    </div>
                   {!! $errors->first('name', '<label class="error">:message</label>') !!}
                    
                    <div class="form-group">
                        <input class="input" type="email" name="email" id="email" placeholder="Email" onkeyup="myFunction()">
                    </div>
                    <div id="for_duplicate-email"></div>
                     {!! $errors->first('email', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                        <input class="input" type="text" name="address" id="address" placeholder="Address">
                    </div>
                     {!! $errors->first('address', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                        <input class="input" type="text" name="city" id="city" placeholder="City">
                    </div>
                     {!! $errors->first('city', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                        <input class="input" type="text" name="zip" id="zip" placeholder="ZIP Code">
                    </div>
                     {!! $errors->first('zip', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                        <input class="input" type="tel" name="tel" id="tel" placeholder="Telephone">
                    </div>
                     {!! $errors->first('tel', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                        <input class="input" type="password" name="password" id="password" placeholder="Enter Your Password">
                    </div>
                     {!! $errors->first('password', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                        <input class="input" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    </div>
                    {!! $errors->first('confirm_password', '<label class="error">:message</label>') !!}


                    <br>
                        
                        <input type="submit"  name="signup" class="primary-btn order-submit" value="Sign Up">
                </form>
                
                
                    
                </div>
                <!-- /Form -->
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

<!--JQUERY -->
<script>
    
    
   
    
    
    
	$(document).ready(function() {
		// validate the comment form when it is submitted
		//$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
                address: "required",
                city: "required",
                zip: {
					required: true,
					number: true
				},
                tel: "required",
				password: {
					required: true,
					minlength: 6
				},
				confirm_password: {//la confirmation du mdp doit etre egale à paswword je crois j'ai mis 6 caractere ailleurs
					required: true,
					minlength: 6,
					equalTo: "#password"
				}
				
				
				
			},
			messages: {
				name: "Please enter your Fullname",
				email: "Please enter a valid email address",
                address: "Please enter your Address",
                city: "Please enter your City",
                address: "Please enter your Address",
				zip: {
					required: "Please enter Zipcode",
					number: "Invalid Zipcode"
				},
                tel: "Please enter your Phone number",
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				}
				
				
			}
            
            
        
		});

		
	});
	</script>
<!--/JQUERY Validation-->



<!--Duplicate Email Validation-->
<script>
function myFunction() {
    //var token={{ csrf_token() }};
    var email=$("#email").val();//contenu de email
    var token=$("input[name=_token]").val();
    var url="{{route('user.signup.check_email')}}";
    

            $.ajax({
                type:'post',
                url:url,
                dataType: "JSON",
                async: false,
                data:{email: email, _token: token},
                success:function(msg){
                        
                     //email est dejà token    
                    if(msg == "1")
                        {
                            document.getElementById("for_duplicate-email").innerHTML = "<label class='error'>This Email Address is Already taken</label>";                   
                        }
                    else
                        {
                            document.getElementById("for_duplicate-email").innerHTML = "";

                        }
                    }
             });
    
}
</script>
<!--/Duplicate Email Validation-->

<!-- /SECTION -->
@endsection

