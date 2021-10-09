<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration - 50watt</title>
</head>
<body>
  <h2>Registration: </h2>
  @if($errors->any())
    <div class="alert alert-danger" style="color: red; border:red; ">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="{{ route('register.create') }}" method="post">
    @csrf
    <p><span>Username: </span><input type="text" name="name" id="name" value="{{ old('name') }}"></p>
    <p><span>Email: </span><input type="email" name="email" id="email" value="{{ old('email') }}"></p>
    <p><span>Password: </span><input type="password" name="password" id="password"></p>
    <p><span>Confirm password: </span><input type="password" name="password_confirmation" id="password_confirmation"></p>
    <p><input type="submit" value="Create"></p>
  </form>
</body>
</html>