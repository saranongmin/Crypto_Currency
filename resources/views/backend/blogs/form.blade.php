

    <div class="form-group">
        {{ Form::label('image', 'Blog Image') }}<br>

        {{ Form::file('image', null, [
            'class' => $errors->has('image') ?  'form-control is-invalid': 'form-control',
            'id' => 'image'
        ]) }}
        @error('image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
 {{ Form::label('title', 'Blog Title') }}
        {{ Form::text('title', null, [
            'class' => $errors->has('title') ?  'form-control is-invalid': 'form-control',
            'id' => 'title'
        ]) }}
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">

 {{ Form::label('details', 'Blog Short Details') }}

        {{ Form::textarea('details', null, [
            'class' => $errors->has('details') ?  'form-control is-invalid': 'form-control',
            'id' => 'details',
            'rows' => '2',
            'placeholder'=>'Description',
        ]) }}
    @error('details')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
    <div class="form-group">

 {{ Form::label('description', 'Blog Description') }}

        {{ Form::textarea('description', null, [
            'class' => $errors->has('description') ?  'form-control is-invalid': 'form-control',
            'id' => 'description',
            'rows' => '2',
            'placeholder'=>'Description',
        ]) }}
    @error('description')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


