@extends('main')
@section('dynamic_page')


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Lead Information</h6>
                            <form  action="" method="POST">
                                @csrf
                                

                                     



                                <div class="mb-6">

                                    <label  class="form-label">First Name</label>
                                    <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control" >
                                   @error('first_name')
                                   <small class="text-danger">{{ $message}}</small>
                                   @enderror
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Last Name</label>
                                    <input name="last_name" type="text"value="{{old('last_name')}}"class="form-control" >
                                    @error('last_name')
                                    <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Title</label>
                                    <input type="text" name="title" value="{{old('title')}}" class="form-control" >
                                    @error('title')
                                    <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label  for="inputEmail3" class="form-label">Company</label>
                                    <input type="text" value="{{old('company')}}" name="company" id="inputEmail3" class="form-control" >
                                    @error('company')
                                    <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label  for="inputEmail3" class="form-label">Email</label>
                                    <input type="text" name="email" id="inputEmail3" class="form-control" >
                                   
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Phone</label>
                                    <input  name="phone" type="text" class="form-control" >
                                    @error('phone')
                                    <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                                <div>
                                @php
                                 $lead_source = array('Advertising','social media','direct call' , 'search');   
                                @endphp
                                <select class="form-select form-select-sm mb-3" name="lead_source"  aria-label=".form-select-sm example">
                                    <option selected>Lead Source</option>
                                    @foreach($lead_source as $single)
                                    <option value="{{$single}}">{{$single}}</option>
                                    @endforeach
                                </select>
                            </div>
                                <div>
                                    @php
                                    $lead_status = array('needs analysis','proposal','negotiation' , 'closed won ', 'closed lost');   
                                   @endphp

                                <select class="form-select form-select-sm mb-3" name="lead_status" aria-label=".form-select-sm example">
                                    <option selected>Lead Status</option>
                                    @foreach($lead_status as $single)
                                    <option value="{{ $single }}">{{$single}}</option>
                                   @endforeach
                                    
                                </select>
                            </div>
                              
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Optional Detail</h6>
                            <h6 class="mb-4">Address</h6>

                            <div class="mb-3">
                                <label  class="form-label">street</label>
                                <input type="text" name="street" class="form-control" >
                               
                            </div>
                            <div class="mb-3">
                                <label  for="inputEmail3" class="form-label">City</label>
                                <input type="text"  name="city" id="inputEmail3" class="form-control" >
                               
                            </div>    <div class="mb-3">
                                <label  class="form-label">State</label>
                                <input  name="state" type="text" class="form-control" >
                               
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Zip Code</label>
                                <input  name="zip_code" type="text" class="form-control" >
                               
                            </div>
                            <div class="mb-3">
                                <label  for="inputEmail3" class="form-label">Country</label>
                                <input type="text" name="country" id="inputEmail3" class="form-control" >
                               
                            </div>
                         
                        
                            <h6 class="mb-4">Discription Information</h6>
                      
                        
                        <div class="form-floating py-2">
                            <textarea class="form-control "  name="description" placeholder="Leave a comment here"
                                id="floatingTextarea" style="height: 150px;"></textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>
                        
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-primary">Cancel</button>

                        </form>
                               
                        </div>
                    </div>
                    


           @endsection