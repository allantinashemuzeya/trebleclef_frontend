<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="mb-1">
            <label class="form-label" for="login-email">Student Level {{$studentLevel}} </label>
            <!-- <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus /> -->
            <select name="studentLevel" class="form-control js-example-basic-single" wire:model="studentLevel" wire:change="change">
                <option disabled selected>Choose Student Level </option>
                @foreach($studentLevels as $item)
                    <option value="{{$item['id']}}">{{$item['title']}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="mb-1">
            <label class="form-label" for="login-email">Activity 1:</label>

            <!-- <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus /> -->
            <select name="activities[]" multiple class="form-control">
                <option disabled selected>Choose Activity Level</option>

               @foreach($subjects as $item)

                 <option>{{$item['name']}}</option>
               @endforeach
            </select>
        </div>
    </div>
</div>
