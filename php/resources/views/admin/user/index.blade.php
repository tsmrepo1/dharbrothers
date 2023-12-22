<x-app-layout>
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->

    <!--start header -->
    @include('inc.header')
    <!--end header -->

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Users</div>
            </div>        
               
            
            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-md-6 text-start">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i></div>
                                        <h5 class="mb-0 text-primary">User List</h5>
                                    </div>      
                                </div>
                                <div class="col-md-6 text-end">
                                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">New User</a>
                                </div>
                            </div>
        
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL No.</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Since</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{Storage::url($user->photo)}}" style="height: 100px; width: 100px;" />
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                                                <td><?php echo $user->is_active == 1 ? "Active" : "Inactive" ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('users.get_permission_manager', $user->id) }}" class="btn btn-sm btn-primary mx-1">Manage Permission</a>
                                                        
                                                        @if($user->is_active == 1)
                                                        <a href="{{ route('users.deactive', $user->id) }}" class="btn btn-sm btn-danger mx-1">Deactivate</a>
                                                        @endif
                                                        
                                                        @if($user->is_active == 0)
                                                        <a href="{{ route('users.active', $user->id) }}" class="btn btn-sm btn-success mx-1">Activate</a>
                                                        @endif
                                                    </div>
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
    </div>
    
    <!-- The Modal -->
    <div class="modal" id="newuser">
      <div class="modal-dialog">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">New User</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
    
          <!-- Modal body -->
          <div class="modal-body">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" />
                </div>
               
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" />
                </div>
                
                <div class="form-group mb-3">
                    <label>Photo</label>
                    <input type="file" class="form-control" name="photo" />
                </div>
               
                <div class="form-group mb-3">
                    <button class="btn btn-sm btn-primary">Save</button>
                </div>
            </form>
          </div>
    
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
    
        </div>
      </div>
    </div>
    <!--end page wrapper -->
    @include('inc.footer')
</x-app-layout>