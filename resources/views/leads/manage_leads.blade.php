@extends('main')
@section('dynamic_page')

<div class="col-10 my-5 ">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">All Leads</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Title</th>
                        <th scope="col">Compay Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Country</th>
                        <th scope="col">Action</th>
                        
                   
                    </tr>
                </thead>
                <tbody>
                    @foreach($leads as $single)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $single->first_name }}  {{ $single->last_name }} </td>
                        <td>{{ $single->title }}</td>
                        <td>{{ $single->company }}</td>
                        <td>{{ $single->email }}</td>
                        <td>{{ $single->phone }}</td>
                        <td>{{ $single->country }}</td>
                        <td>
                            <a href="{{url('/leads/edit-lead/'.$single->id) }} " class="btn btn-primary btn-sm" ><span class="fa fa-edit"></span></a>
                        </td>
                        <td>
                            <a href="{{url('/leads/delete-lead/'.$single->id) }}" onclick="return confirm('Are You Sure delete this lead.')" class="btn btn-danger btn-sm" ><span class="fa fa-trash"></span></a>

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

@endsection