
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    @include('layout.header')
</div>

<div class="page-content container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <div class="content-wrap">
                        <h6>Sign Up</h6>
                        <form action="{{url('/register') }}" method="post">
                        {{ csrf_field() }}
                        @if (count($errors) > 0)
                            <div>
                                Error:
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                        <input class="form-control" type="text" name="email" placeholder="E-mail address">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                        <div class="action">
                            <button class="btn btn-primary signup" type="submit">Sign Up</button>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="already">
                    <p>Have an account already?</p>
                    <a href="login.html">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/custom.js"></script>
</body>
