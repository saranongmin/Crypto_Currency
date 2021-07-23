
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
    	{{ Form::label('video', 'video File') }}<br>

        {{ Form::file('video', null, [
            'class' => $errors->has('video') ?  'form-control is-invalid': 'form-control',
            'id' => 'video',
            'accept' =>'mimetypes:video/avi,video/mpeg,video/quicktime',
        ]) }}
        @error('video')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>