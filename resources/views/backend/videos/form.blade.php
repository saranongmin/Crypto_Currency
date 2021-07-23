
 <div class="form-group">
 {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, [
            'class' => $errors->has('title') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Video Title Here.....',
            'id' => 'title'
        ]) }}
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

<div class="form-group">
    	{{ Form::label('image', 'video File') }}<br>

        {{ Form::file('image', null, [
            'class' => $errors->has('image') ?  'form-control is-invalid': 'form-control',
            'id' => 'image'
        ]) }}
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>