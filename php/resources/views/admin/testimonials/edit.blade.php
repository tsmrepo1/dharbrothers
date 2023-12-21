<x-app-layout>
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->

    <!--start header -->
    @include('inc.header')
    <!--end header -->

    <style>
        .is-invalid {
            border-color: red;
        }
    </style>
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Edit Vehicle</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Vehicle</li>
                        </ol>
                    </nav>
                </div>
            </div>

            {{-- Success and error messages start  --}}
            <br />
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            {{-- Success and error messages end  --}}

            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i></div>
                                <h5 class="mb-0 text-primary">Edit Vehicle Details</h5>
                            </div>
                            <hr>
                            <form class="row g-3" method="POST" action="{{route('vehicles.update',$vehicle->id)}}" id="add-member-form">
                                @csrf
                                @method('PUT')
                                <div class="col-md-3">
                                    <label for="introducer_id" class="form-label">Vehicle No</label>
                                    <input type="text" class="form-control" value="{{$vehicle->vehicle_no}}" name="vehicle_no">
                                    @error('vehicle_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="inputMenberName" class="form-label">PAN</label>
                                    <input type="text" class="form-control" id="pan" value="{{$vehicle->pan}}" name="pan">
                                    @error('pan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="inputEmail" class="form-label">Owner's Name</label>
                                    <input type="text" class="form-control" id="owners_name" value="{{$vehicle->owners_name}}" name="owners_name">
                                    @error('owners_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="inputDate" class="form-label">Contact No</label>
                                    <input type="text" class="form-control" id="contact_no" value="{{$vehicle->contact_no}}" name="contact_no">
                                    @error('contact_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="inputMobile" class="form-label">A/C No</label>
                                    <input type="text" class="form-control" id="account_no" value="{{$vehicle->account_no}}" name="account_no">
                                    @error('account_no')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword" class="form-label">IFSC Code</label>
                                    <input type="text" class="form-control" id="ifsc_code" value="{{$vehicle->ifsc_code}}" id="ifsc_code" name="ifsc_code">
                                    @error('ifsc_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>  
                                 <div class="col-md-3">
                                    <label for="inputPanNumber" class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" id="bank" value="{{$vehicle->bank}}" id="bank" name="bank" readonly>
                                    @error('bank')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword" class="form-label">Branch</label>
                                    <input type="text" class="form-control" id="branch" value="{{$vehicle->branch}}" id="branch" name="branch" readonly>
                                    @error('branch')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                 
                                <div class="col-md-3">
                                    <label for="inputPassword" class="form-label">Fund Transfer Type</label>
                                    <select class="single-select" id="fund_transfer_type" name="fund_transfer_type">
                                        <option value=""
                                                {{$vehicle->fund_transfer_type == "" ? "selected" : ""}} 
                                                 {{old('fund_transfer_type' == "" ? "selected" : "")}}>--select--</option>
                                        
                                        <option value="NEFT" 
                                                {{$vehicle->fund_transfer_type == "NEFT" ? "selected" : ""}} 
                                                 {{old('fund_transfer_type' == "NEFT" ? "selected" : "")}}>NEFT</option>
                                        
                                        <option value="RTGS" 
                                                {{$vehicle->fund_transfer_type == "RTGS" ? "selected" : ""}} 
                                                {{old('fund_transfer_type' == "RTGS" ? "selected" : "")}}>RTGS</option>
                                                
                                        <option value="IMPS"
                                                {{$vehicle->fund_transfer_type == "IMPS" ? "selected" : ""}} 
                                                {{old('fund_transfer_type' == "IMPS" ? "selected" : "")}}>IMPS</option>
                                                
                                        <option value="Phone Pay"
                                                {{$vehicle->fund_transfer_type == "Phone Pay" ? "selected" : ""}} 
                                                {{old('fund_transfer_type' == "Phone Pay" ? "selected" : "")}}>Phone Pay</option>
                                        
                                        <option value="Google Pay"
                                                {{$vehicle->fund_transfer_type == "Google Pay" ? "selected" : ""}} 
                                                {{old('fund_transfer_type' == "Google Pay" ? "selected" : "")}}>Google Pay</option>
                                        
                                        <option value="Paytm"
                                                {{$vehicle->fund_transfer_type == "Paytm" ? "selected" : ""}} 
                                                {{old('fund_transfer_type' == "Paytm" ? "selected" : "")}}>Paytm</option>
                                        
                                        <option value="UPI"
                                                {{$vehicle->fund_transfer_type == "UPI" ? "selected" : ""}} 
                                                {{old('fund_transfer_type' == "UPI" ? "selected" : "")}}>UPI</option>
                                        
                                        <option value="NA"
                                                {{$vehicle->fund_transfer_type == "NA" ? "selected" : ""}} 
                                                {{old('fund_transfer_type' == "NA" ? "selected" : "")}}>NA</option>
                                    </select>
                                </div> 
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
    @include('inc.footer')

    <script>
        function debounce(func, timeout = 400){
        let timer;
          return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => { func.apply(this, args); }, timeout);
          };
        }
        
        function getDetails(){
            let pan = document.getElementById("pan").value;
            
            fetch(`{{ url('/vehicles/search') }}/${pan}`)
            .then(response => response.json())
            .then(data => {
              if(data.vehicle) {
                  document.getElementById("owners_name").value          = data.vehicle.owners_name
                  document.getElementById("contact_no").value           = data.vehicle.contact_no
                  document.getElementById("bank").value                 = data.vehicle.bank
                  document.getElementById("account_no").value           = data.vehicle.account_no
                  document.getElementById("branch").value               = data.vehicle.branch
                  document.getElementById("ifsc_code").value            = data.vehicle.ifsc_code
                  document.getElementById("fund_transfer_type").value   = data.vehicle.fund_transfer_type
              }
              else {
                  document.getElementById("owners_name").value          = ""
                  document.getElementById("contact_no").value           = ""
                  document.getElementById("bank").value                 = ""
                  document.getElementById("account_no").value           = ""
                  document.getElementById("branch").value               = ""
                  document.getElementById("ifsc_code").value            = ""
                  document.getElementById("fund_transfer_type").value   = ""
              }
            })
        }
        
        function setSelectedValue(selectObj, valueToSet) {
            for (var i = 0; i < selectObj.options.length; i++) {
                if (selectObj.options[i].text== valueToSet) {
                    selectObj.options[i].selected = true;
                    return;
                }
            }
        }
        
        const processChange = debounce(() => getDetails());
    </script>
</x-app-layout>
