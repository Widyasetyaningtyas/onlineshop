<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<style>
        .box{
            /* background-image: url('../assets/ref/login-bg.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            border: none;
            /* height: 100vh; */
            background-color: white;
            font-family: 'Spectral', serif;
            font-size: 20px;
        }

        /* REGISTER LOGAN */
        @media(max-width: 575.98px){
            #login .box h4,
            #register .box h4{
                font-size: 10pt;
                margin-bottom: 8px;
                font-family: 'Spectral', serif;
            }
            #login .box .card,
            #register .box .card{
                margin-top: 0;
            }
            #login .box label,
            #register .box label{
                font-size: 10pt;
                margin-bottom: 2px;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
                font-size: 15pt;
            }
            .box .form-auth{
                margin-top: 50px;
                padding: 0;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
            }
            .box h6, .box p{
                font-size: 10pt;
                font-family: 'Spectral', serif;
            }
            .box .nb-text{
                font-size: 6pt;
            }
            .box{
                font-family: 'Spectral', serif;
            }
        }

        @media(min-width: 576px) and (max-width: 767.98px){
            .box h4{
                font-size: 11pt;
                margin-bottom: 8px;
            }
            .box label{
                font-size: 10pt;
                margin-bottom: 2px;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
            }
            .box .form-auth{
                margin-top: 80px;
                margin-left: 10px;
                margin-right: 10px;
                padding: 0;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
            }
            .box h6, .box p{
                font-size: 10pt;
            }
            .box .nb-text{
                font-size: 7pt;
            }
        }

        @media(min-width: 768px) and (max-width: 991.98px){
            .box h4{
                font-size: 10pt;
                margin-bottom: 8px;
            }
            .box label{
                font-size: 10pt;
                margin-bottom: 2px;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
            }
            .box .form-auth{
                margin-top: 80px;
                margin-left: 10px;
                margin-right: 10px;
                padding: 0;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
            }
            .box h6, .box p{
                font-size: 10pt;
            }
            .box .nb-text{
                font-size: 6pt;
            }
            .box .card .card-img{
                height: 70%;
                border: none;
            }
        }

        @media(min-width: 992px) and (max-width: 1199.98px){
            .box h4{
                font-size: 11pt;
                margin-bottom: 8px;
            }
            .box label{
                font-size: 10pt;
                margin-bottom: 0;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
            }
            .box .form-auth{
                margin-top: 80px;
                margin-left: 10px;
                margin-right: 10px;
                padding: 0;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
            }
            .box h6, .box p{
                font-size: 10pt;
            }
            .box .nb-text{
                font-size: 8pt;
            }
            .box .card .card-img{
                height: 80%;
                border: none;
            }
        }

        @media(min-width: 1200px){
            .box h4{
                margin-bottom: 8px;
            }
            .box label{
                margin-bottom: 2px;
                font-size: 1.2vw;
            }
            .box a{
                font-size: 1.2vw;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
                font-size: 1.2vw;
            }
            .box .form-auth{
                margin-top: 15vh;
                margin-left: 20px;
                margin-right: 20px;
                padding: 0;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
                font-size: 1.2vw;
            }
            .box .nb-text{
                font-size: 9pt;
            }
            .box .card .card-img{
                height: 100%;
                border: none;
            }
        }


        .box .card{
            height: 90.2vh;
            border: none;
            margin: auto ;
        }


        .box input[type=text],
        .box input[type=email],
        .box input[type=password],
        .box input[type=checkbox]{
            box-shadow: none;
            border-radius: 0;
            border-bottom: 1px solid black;
            border-top: none;
            border-left: none;
            border-right: none;
            padding: 0;
        }

        .box input[type=text]:focus,
        .box input[type=email]:focus,
        .box input[type=password]:focus {
            box-shadow: none;
            border-radius: 0;
            border-bottom: 1px solid grey;
            border-top: none;
            border-left: none;
            border-right: none;
            padding: 0;
        }

        .box input[type=text]:active,
        .box input[type=email]:active,
        .box input[type=password]:active {
            border: none;
            box-shadow: none;
            padding: 0;
        }

        .box .field-icon {
            float: right;
            margin-left: -25px;
            position: relative;
            z-index: 2;
        }

        .w3l-ecommerce-main .product-grid2 .add-to-cart {
		  color: #fff;
		  background-color: black;
		  font-size: 13px;
		  font-weight: 600;
		  text-align: center;
		  padding: 7px 7px;
		  left: 0;
		  bottom: -100%;
		  transition: all .3s;
		}

		.w3l-ecommerce-main .product-grid2 .add-to-cart:hover {
		  background-color: #ff7315;
		  text-decoration: none;
		}

		.w3l-ecommerce-main .product-grid2:hover .add-to-cart {
		  bottom: 0;
		}

    .inputBox{
        position: relative;
    }
    .inputBox input{
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        background: transparent;
        padding: 0 20px;
        box-sizing: border-box;
        border-radius: 8px;
        box-shadow: -4px -4px 10px rgba(255,255,255,1),
                    inset 4px 4px 10px rgba(0,0,0,0.05),
                    inset -4px -4px 10px rgba(255,255,255,1),
                    4px 4px 10px rgba(0,0,0,0.05);
    }
    .inputBox input::placeholder{
        color: #ccc;
    }
    #toggle{
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        background: url("assets/images/hide.png");
        background-size: cover;
        cursor: pointer;
    }
    #toggle.hide{
        background: url("assets/images/show.png");
        background-size: cover;
    }

    #toggles{
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        background: url("assets/images/hide.png");
        background-size: cover;
        cursor: pointer;
    }
    #toggles.hide{
        background: url("assets/images/show.png");
        background-size: cover;
    }


    </style>


    <div class="box" id="register">
        <div class="card bg-transparent text-white w3l-ecommerce-main">
            <div class="row justify-content-center my-3 my-xl-5">
                <div class="col-10 col-sm-8 col-md-7 col-lg-5">
                <form action="{{ route('register') }}" method="post" class="form-auth text-black">
                @csrf
                <h4 class="caps text-center" style="letter-spacing: 2px; font-weight: 550;">REGISTER</h4>

                <div class="card-body">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close mr-2" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group text-left">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px;">Username</label>
                        <input type="text" name="name" class="form-control" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px;">
                    </div>
                    <div class="form-group text-left">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px;">Email</label>
                        <input type="text" name="email" class="form-control" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px;">
                    </div>
                    <div class="form-group text-left">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px;">Phone Number</label>
                        <input type="text" name="no_hp" class="form-control" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px;">
                    </div>
                    <div class="form-group text-left">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px;">Address</label>
                        <input type="text" name="alamat" class="form-control" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px;">
                    </div>
                    <div class="form-group text-left">
                        
                    <label for="" style="font-size: 13pt; letter-spacing: 1px;">Password</label>
                    <div class="inputBox">
                        <input type="password" name="password" id="password" class="form-control" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px;">
                        <div id="toggle" onclick="showHide();"></div>
                    </div>
                    </div>
                    <div class="form-group text-left">

                    <label for="" style="font-size: 13pt; letter-spacing: 1px;">Confirm Password</label>
                        <div class="inputBox">
                            <input type="password" name="password_confirmation" id="password_confirm" class="form-control" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px;">
                            <div id="toggles" onclick="showHideConfirm();"></div>
                        </div>
                    </div>
                </div>
                <div class="product-grid2" style="padding-left: 20px; padding-right: 20px;">
                <button type="submit" class="btn btn-block transmitv-cart ptransmitv-cart add-to-cart" style="padding-top: 10px; letter-spacing: 2px; font-weight: 550; font-size: 10pt; border-radius: 0px;">REGISTER</button>
                    <p class="mt-2 text-center">Already have an account? <a href="{{ route('login') }}">Login</a> now!</p>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const password = document.getElementById('password');
        const toggle = document.getElementById('toggle');
        
        function showHide(){
            if(password.type === 'password'){
                password.setAttribute('type', 'text');
                toggle.classList.add('hide')
            } else{
                password.setAttribute('type', 'password');
                toggle.classList.remove('hide')
            }
        }
    </script>

    <script type="text/javascript">
        const password_confirm = document.getElementById('password_confirm');
        const toggles = document.getElementById('toggles');
        
        function showHideConfirm(){
            if(password_confirm.type === 'password'){
                password_confirm.setAttribute('type', 'text');
                toggles.classList.add('hide')
            } else{
                password_confirm.setAttribute('type', 'password');
                toggles.classList.remove('hide')
            }
        }
    </script>
    
</body>
</html>