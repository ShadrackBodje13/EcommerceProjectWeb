@extends('admin_panel.adminLayout') @section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <a href="{{route('admin.categories')}}"> < Retour à la lisre</a>
                    <br><br>
                      <h4 class="card-title">Modifier Categorie</h4>
                      <br>
                      <form class="forms-sample" method="post"  id="cat_form">
                      {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nom de Categorie</label>
                          <input type="text" class="form-control" id="Name" name="Name" value="{{$category->name}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Categorie Type</label>
                          <textarea type="textarea" class="form-control" id="Type" name="Type" >{{$category->type}}</textarea>
                        </div>
                        <input  type="submit" name="updateButton"  class="btn btn-success mr-2" id="updateButton" value="UPDATE" />
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
    
    
    <!--JQUERY -->
<script>
	
	$(document).ready(function() {

		// validation de formulaire
		$("#cat_form").validate({
			rules: {
				Name: "required",
				Type: "required",
				
				
				
			},
			messages: {
				Name: "Category Name is Required",
				Type: "Category Type is Required",
                	
			}
		});

		
	});
	</script>
<!--/JQUERY fin-->
@endsection