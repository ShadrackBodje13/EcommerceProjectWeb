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
}</style>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
        <form method="post" id="loginForm">
            {{csrf_field()}}
            <div class="col-md-6" style="float: none;">
                <!-- detail de la facturatiooon -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">User Login</h3>
                    </div>
                    <div class="form-group">
                        <input class="input" type="email" name="email" id="email" placeholder="Email" value="john@examle.com">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="password" id="password" placeholder="Password" value="12345">
                    </div>
                        <input type="submit"  name="signin" class="primary-btn order-submit" value="Sign In">
                </form>
               
                @if(session('message'))
                
                
                <tr>
                    <td>
                        <li> {{session('message')}}</li>
                    </td>
                </tr>
                
                
                @endif   
                
                @if($errors->any())

                    <ul>
                        @foreach($errors->all() as $err)
                        <tr>
                            <td>
                                <li>{{$err}}</li>
                            </td>
                        </tr>
                        @endforeach
                    </ul>
                @endif
                    
                </div>
                
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!--JQUERY -->
<script>
	
	$(document).ready(function() {
		// 

		// validation formulaire et soumession
		$("#loginForm").validate({
			rules: {
				
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 6
				}
			},
			messages: {
				
				email: "Please enter a valid email address",
                
                
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 6 characters long"
				}
				
				
			}
		});

		
	});
	</script>
<!--/JQUERY fin-->
<!-- /SECTION -->
@endsection
