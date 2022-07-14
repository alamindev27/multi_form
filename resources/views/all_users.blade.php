@extends('head')
@section('maincontent')

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Users</h2>
	
		<div class="right-wrapper text-right">
			<ol class="breadcrumbs">
				<li>
					<a href="{{route('dashboard')}}">
						<i class="fas fa-home"></i>
					</a>
				</li>
				<li><span>Pages</span></li>
				<li><span>Users</span></li>
			</ol>
	
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
		</div>
	</header>

	<!-- start: page -->
	<div class="row">
      <div class="col-md-12">
         <section class="card">
            <header class="card-header bg-theme">
               <div class="card-actions">
                  <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                  <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
               </div>
   
               <h2 class="card-title text-center color-theme">Users List</h2>
            </header>
            <div class="card-body">
                <a data-toggle="modal" href="#newCat" class="btn btn-sm btn-info mb-2">Create Account</a>
               <div id="datatable-default_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="table-responsive">
                     <table class="table table-bordered table-striped" id="datatable-default">
						<thead align="center">
							<tr>
								
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Account Type</th>
								<th>Permition for create account</th>
								<th>Join Date</th>								
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody align="center">
							@foreach($total_users as $key => $total_user)
								<tr>
									<td>{{$total_user->name}}</td>
									<td>{{$total_user->email}}</td>
									<td>+123456789</td>
									<td>{{$total_user->role}}</td>
									<td>
										@if($total_user->permission==1) Yes @endif
										@if($total_user->permission==0) No @endif
									</td>
									<td>
										{{date("M d Y", strtotime($total_user->joined_date))}}
									</td>
									
									<td  class="center">
                      <a data-toggle="modal" href="#newCat{{$key}}" class="text-success"><i class="fa fa-edit"></i></a>
                      <a data-confirm="This will permanently remove the user, are you sure you want to delete?" class="text-danger" href="{{url('delete_user')}}/{{$total_user->id}}"><i class="fa fa-trash"></i></a>
                 	</td>
								</tr>
							@endforeach
						
							
						</tbody>
					</table>
                  </div>
               </div>
            </div>
         </section>
      </div>
    </div>
	
	<!-- end: page -->
</section>

<!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="newCat" class="modal fade">
      <div class="modal-dialog">
         <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Create User</h4>
              </div>
             
              <form action="{{route('joinnow_save')}}" method="POST" enctype="multipart/form-data">
                
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <div class="modal-body">

                	<div class="form-group">
                      <label class="" for="exampleInputEmail1">Name</label>
                      <input class="form-control form-control" name="name" type="text" required="">
                    </div>
                    <div class="form-group">
                      <label class="" for="exampleInputEmail1">Email</label>
                      <input class="form-control form-control" name="email" type="text" required="">
                    </div>
                    <div class="form-group">
                      <label class="" for="exampleInputEmail1">Phone</label>
                      <input class="form-control form-control" name="phone" type="text" required="">
                    </div>

                    <div class="form-group">
                      <label class="" for="exampleInputEmail1">Account Type</label>
                      <select class="form-control form-control" name="role" type="text" required="" >
                      	<option value="admin">Admin</option>
                      	<option value="coach">Coach</option>
                      	<option value="client">Client</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="" for="exampleInputEmail1">Permission for create account</label>
                      <select class="form-control form-control" name="permission" type="text" required="" >
                      	<option>Permite your user</option>
                      	<option class="text-primary" value="1">Yes</option>
                      	<option class="text-success" value="0">No</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="" for="exampleInputEmail1">Password</label>
                      <input class="form-control form-control" name="password" type="password" required="">
                    </div>

                    
                    
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-danger" type="button">Cancel</button>
                  <button class="btn btn-success" type="submit">Save</button>
                </div>
              </form>
          </div>
      </div>
    </div>
  <!-- modal -->


@foreach($total_users as $key => $total_user)
	
	<!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="newCat{{$key}}" class="modal fade">
      <div class="modal-dialog">
         <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Update User</h4>
              </div>
             
              <form action="{{route('joinnow_update')}}" method="POST" enctype="multipart/form-data">
                
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <div class="modal-body">
                	<input type="hidden" name="id" value="{{$total_user->id}}">
                	<div class="form-group">
                      <label class="" for="exampleInputEmail1">Name</label>
                      <input class="form-control form-control" name="name" type="text" required="" value="{{$total_user->name}}">
                    </div>
                    
                    <div class="form-group">
                      <label class="" for="exampleInputEmail1">Phone</label>
                      <input class="form-control form-control" name="phone" type="text" required="" value="{{$total_user->phone}}">
                    </div>

                    <div class="form-group">
                      <label class="" for="exampleInputEmail1">Account Type</label>
                      <select class="form-control form-control" name="role" type="text" required="" >
                      	<option value="admin" @if($total_user->role=='admin') selected @endif>Admin</option>
                      	<option value="coach" @if($total_user->role=='coach') selected @endif>Coach</option>
                      	<option value="client" @if($total_user->role=='client') selected @endif>Client</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="" for="exampleInputEmail1">Permission for create account</label>
                      <select class="form-control form-control" name="permission" type="text" required="" >
                      	<option>Permite your user</option>
                      	<option class="text-primary" @if($total_user->permission==1) selected @endif value="1">Yes</option>
                      	<option class="text-success"  @if($total_user->permission==0) selected @endif value="0">No</option>
                      </select>
                    </div>

                    

                    
                    
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-danger" type="button">Cancel</button>
                  <button class="btn btn-success" type="submit">Save</button>
                </div>
              </form>
          </div>
      </div>
    </div>
  <!-- modal -->
	
@endforeach


@endsection