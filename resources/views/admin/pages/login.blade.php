@extends('admin.partials.linkcss') {{-- Kế thừa linkcss --}}

@section('title', 'Đăng nhập')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        {{-- Hiển thị thông báo thành công từ server --}}
                        @if(session('success'))
                            <p style="color: green;">{{ session('success') }}</p>
                        @endif
                        <form role="form" action="{{ route('login.store') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" autofocus>
                                </div>
                                <p id="emailError"></p>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                               
                                <a href="" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                        {{-- Hiển thị lỗi nếu có --}}
                        @if ($errors->has('email'))
                        <p style="color: red;">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    const emailInput = document.getElementById('email');
    const errorText = document.getElementById('emailError');
    const form = document.getElementById('emailForm');

    emailInput.addEventListener('input', function () {
      const email = emailInput.value.trim();
   
      if (email === '') {
    errorText.textContent = '';
    return;
    }

    if (!email.includes('@')) {
        errorText.textContent = 'Email phải chứa ký tự @.';
      }
      else {
        errorText.textContent = ''; // hợp lệ thì xoá note lỗi
      }
    });

    // Ngăn không cho submit nếu còn lỗi
    form.addEventListener('submit', function (e) {
      if (errorText.textContent !== '') {
        e.preventDefault();
      }
    });
  </script>

