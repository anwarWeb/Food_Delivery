<div class="card-body">
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title']) !!}
    </div>
    <div class="form-group">
        {{-- {{dd(isset($category))}} --}}
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Enter description']) !!}
    </div>
</div>

<!-- /.card-body -->
