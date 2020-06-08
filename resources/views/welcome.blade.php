<head>
    <link rel="stylesheet" href="css/app.css">
    
</head>

{{-- <div class="confirm">
    <i class='close'>×</i>
    <h1><i class="fa fa-check-circle fa-3x"></i>Boom! Profile Created</h1>
</div> --}}
<h1>
    Create User Profile
    <br>
    @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
    @endif
</h1>

<form action="{{route('useers.store')}}" method="POST">
    @csrf
    <div class="float-label">
        <input type="text" name="pseudo" id="f-name" value="{{old('pseudo')}}" />
        <label for="f-name">Pseudo</label>
        @if ($errors->has('pseudo'))
                  <strong style="color: red">{{ $errors->first('pseudo') }}</strong>
                    @endif
    </div>
    
    <!--Row-->
    <div class='row'>
        <div class="float-label">
            <i class="fa fa-caret-down"></i>
            <select name="gender" id="gender">
                <option value=""></option>
                @foreach ($genders as $gender)
                    
                <option value="{{$gender->id}}">{{$gender->gender}}</option>
                {{-- <option value="Female">Female</option> --}}
                @endforeach
            </select>
            <label for="gender">Gender</label>
        </div>
        
     
        <!--//row-->
    </div>
    <div class="float-label">
        <fa class="fa eye fa-eye-slash"></fa>
        <input type="password" name="password" id="pw" placeholder="" autocomplete="new-password" />
        <label for="pw">Password</label>
        @if ($errors->has('password'))
                  <strong style="color: red">{{ $errors->first('password') }}</strong>
                    @endif
    </div>
    

    <button class="btn" type="submit">Submit</button>
    <button class="btn" id="clear" type="reset" value="Reset">Reset</button>
</form>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/app.js"></script>
