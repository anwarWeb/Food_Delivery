@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Category</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Category</li>
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
                 <a href="{{ route('category.create') }}" class="btn btn-info pull-left">Add Category</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th class="text-right" scope="col">Option</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($categories as $category)
                    <tr>
                      <td>{{$category->title}}</td>
                      <td>{{$category->description}}</td>         
                      <td class="text-right">
                        <div class="btn-group">
                          <a href="{{ route('category.edit',$category->id) }}" class="btn"><i class="fas fa-edit btn-option-con"></i></a>
                    
                          <form action="{{ route('category.destroy',$category->id) }}" method="POST">
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
                      <td colspan="3" class="text-right">
                        {{-- {{ $categories->links() }} --}}
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
