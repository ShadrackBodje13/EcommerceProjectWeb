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
        <div class="col-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter Categories</h4>
                    <form class="forms-sample" method="post" id="cat_form">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Categories Type</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Type" id="Type" placeholder="Enter Category Type">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                    </form>
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

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                    <th>
                                        Created At
                                    </th>
                                    <th>
                                        Updated At
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Update
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($catlist as $cat)
                                <tr>
                                    <td>
                                        {{$cat->name}}
                                    </td>
                                    <td>
                                        {{$cat->type}}
                                    </td>
                                    <td>
                                        {{$cat->created_at}}
                                    </td>
                                    <td>
                                        {{$cat->updated_at}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.categories.edit', ['id' => $cat->id])}}" class="btn btn-warning">Modifs</a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.categories.delete', ['id' => $cat->id])}}" onclick="delete()" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--JQUERY -->
<script>
	
	$(document).ready(function() {
		
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
<!--/JQUERY fi,n-->

@endsection
