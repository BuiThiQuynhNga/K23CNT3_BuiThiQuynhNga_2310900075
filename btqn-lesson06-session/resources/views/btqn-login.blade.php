<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTQN-login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('btqnaccount.btqnloginsubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>BTQN-Login</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="btqnemail" class="form-label">Email </label>
                        <input type="email" class="form-control" 
                        id="btqnemail" name="btqnemail" 
                        placeholder="btqnemail@example.com"/>
                        @error('btqnemail')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="btqnpass" class="form-label">Email </label>
                        <input type="password" class="form-control" 
                        id="btqnpass" name="btqnpass" 
                        placeholder="???"/>
                        @error('btqnpass')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>

                    @if (Session::has('btqn-error'))
                        <div class="alert alert-danger">
                            {{ Session::get('btqn-error')}}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>