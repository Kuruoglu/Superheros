<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="nickname">Nickname</label>
            <input type="text" class="form-control" id="nickname" name="nickname"
                placeholder="Enter nickname hero" value="{{old('nickname', $hero->nickname ?? '')}}">
        </div>
        <div class="form-group">
            <label for="real_name">Real name</label>
            <input type="text" class="form-control" id="real_name" name="real_name"
                placeholder="Enter real name hero" value="{{old('real_name', $hero->real_name ?? '')}}">
        </div>
        <div class="form-group">
            <label for="origin_description">Origin description</label>
            <textarea name="origin_description" id="origin_description" class="form-control">{{old('origin_description', $hero->origin_description ?? '')}}</textarea>

        </div>
        <div class="form-group">
            <label for="superpowers">Super powers</label>
            <input type="text" class="form-control" id="superpowers" name="superpowers"
                placeholder="Enter super powers hero" value="{{old('superpowers', $hero->superpowers ?? '')}}">
        </div>
        <div class="form-group">
            <label for="catch_phrase">Catch frase</label>
            <input type="text" class="form-control" id="catch_phrase" name="catch_phrase"
                placeholder="Catch frase hero" value="{{old('catch_phrase', $hero->catch_phrase ?? '')}}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative mb-3">
            
            @if(isset($hero->id))
                <img src="{{ $hero->img }}" class="card-img-top position-relative" alt="picture">
            
            @else
                <img src="{{ asset('uploads/no-image.jpg') }}" class="card-img-top position-relative" alt="picture">
                <button class="btn btn-light position-absolute fixed-bottom"
                    style="background-color: #fff; border:none" title="Delete this picture"><i class="fa fa-trash"></i>
                </button>
            @endif
           
        </div>
        <div class="form-group">

            <input type="file" class="form-control" id="catch_phrase" name="img">
        </div>
    </div>
    <button class="btn btn-primary ml-3" type="submit">Save</button>