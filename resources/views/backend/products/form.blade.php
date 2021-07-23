                  <div class="form-group">
 {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, [
            'class' => $errors->has('title') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Class Title Here.....',
            'id' => 'name'
        ]) }}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
    	 {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, [
            'class' => $errors->has('description') ?  'form-control is-invalid': 'form-control',
            'id' => 'description',
            'rows' => '3',
        ]) }}
    
    @error('description')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    	{{ Form::label('price', 'Price') }}
        {{ Form::text('price', null, [
            'class' => $errors->has('price') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Class Price Here.....',
            'id' => 'price'
        ]) }}
        @error('price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
   