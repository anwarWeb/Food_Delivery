<div class="card-body">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter title']) !!}
            </div>
       </div>
       <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id',$category,null,['class'=>'form-control','placeholder'=>'Select Category']) !!}
            </div>
       </div>
       <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('is_veg', 'is Vegan') !!}
            {!! Form::select('is_veg',[ 1=> 'True',0=>'False'],!isset($food)?1:null,['class'=>'form-control','placeholder'=>'Select vegan']) !!}
        </div>
       </div>

   </div>

   <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('is_available', 'Available') !!}
                {!! Form::select('is_available',[ 1=> 'True',0=>'False'],!isset($food)?1:null,['class'=>'form-control','placeholder'=>'Select available']) !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', null, ['class' => 'form-control','placeholder'=>'Enter price']) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('image', 'Food Image') !!}
                <input type="file" class="form-control" name="image" id="image" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', null, ['class' => 'form-control','placeholder'=>'Place some text here']) !!}
               
            </div>
        </div>
    </div>
   
</div>

<!-- /.card-body -->
