@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Foods</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Foods</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
      </div>
    </div>
  </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header"> 
                <!-- <h3 class="card-title">DataTable with minimal features &amp; hover style</h3> -->
                <!-- Button trigger modal -->
                 <a href="{{ route('food.create') }}" class="btn btn-info pull-left">Add Foods</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Image</th>
                      <th scope="col">Category</th>
                      <th scope="col">Title</th>
                      <th scope="col">Price</th>
                      <th scope="col">Vegan</th>
                      <th scope="col">Available</th>
                      <th class="text-right" scope="col">Option</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($foods as $food)
                   
                    <tr>
                      <td>
                        <img src="{{$food->image? asset('storage/'.$food->image->url):'//placehold.it/100'}}" wodth='50' height='50' class="avatar img-circle" alt="avatar">
                      </td>
                      <td>{{$food->category->title}}</td>
                      <td>{{$food->title}}</td>  
                      <td>{{$food->price}}</td>   
                      <td>{{$food->is_veg ==1 ?'True':'False'}}</td>        
                      <td>{{$food->is_available ==1 ?'True':'False'}}</td>  
                      <td class="text-right">
                        <div class="btn-group">
                          <a href="{{ route('food.edit',$food->id) }}" class="btn"><i class="fas fa-edit btn-option-con"></i></a>
                    
                          <form action="{{ route('food.destroy',$food->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            
                            <button type="submit" class="btn"><i class="fa fa-trash btn-option-con" aria-hidden="true"></i></button>
                        </form>
                           
                        </div>
                      
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="7" class="text-right">
                        {{ $foods->links() }}
                      </td>
                    </tr>
                 </tfoot>
                </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
@endsection
