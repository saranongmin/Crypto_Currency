<div class="form-group">
 {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, [
            'class' => $errors->has('title') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Team Member Name.....',
            'id' => 'name'
        ]) }}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
<div class="form-group">
 {{ Form::label('position', 'Position') }}
        {{ Form::text('position', null, [
            'class' => $errors->has('position') ?  'form-control is-invalid': 'form-control',
            'placeholder' => 'Enter Position Title Here.....',
            'id' => 'position'
        ]) }}
        @error('position')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {{ Form::label('image', 'Profile Image') }}<br>

        {{ Form::file('image', null, [
            'class' => $errors->has('image') ?  'form-control is-invalid': 'form-control',
            'id' => 'image'
        ]) }}
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>