<!DOCTYPE html>
<html>
  <head>
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
      html, body {
      min-height: 100%;
      background-color: 	#EFF7FA ;
      background-image:url('bg3.jpg');
      background-size: cover;
      background-repeat: no-repeat;

      }
      body, div, form, input, textarea, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position:center;
      margin: 0;
      font-size: 32px;
      color: #20C997;
      z-index: 2;
      text-align: center;
      font-family: Arial, sans-serif;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 40%;
      padding: 20px;
      border-radius: 6px;
      background: rgba(255,255,255,0);
      box-shadow: 0 0 10px 0  #20C997;
      }
      .banner {
      position: relative;
      height: 210px;
      background-image:url('epharmalog21.jpg');
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0);
      position: absolute;
      width: 50%;
      height: 50%;
      }
      input, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, input:hover::placeholder {
      color:  #20C997;
      }
      .item input:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0  #20C997;
      color:  #20C997;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #20C997;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #FFC400;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .contact-item .item {
      width: calc(50% - 8px);
      }

      .contact-item input {
      width: calc(100% - 12px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form  method="post"  action="{{ route('register-user') }}">
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
      @csrf

      <div class="banner">
          <h1></h1>
        </div>
        <div class="item">
            <div>
        <h1><i class="glyphicon glyphicon-user" ></i></h1>
        <h1>Inscription<h1>
    </div>


        <div class="contact-item">
          <div class="item">
            <p>Nom</p>
            <input type="text" name="nom" value="{{ old('nom') }}"/>
            <span class="text-danger">@error('nom') {{$message}} @enderror </span>
          </div>
          <div class="item">
            <p>Prenom</p>
            <input type="text" name="prenom" value="{{ old('prenom') }}"/>
            <span class="text-danger">@error('prenom') {{$message}} @enderror </span>
          </div>
    </div>
        <div class="contact-item">
          <div class="item">
            <p>Email</p>
            <input type="text" name="email" value="{{ old('email') }}"/>
            <span class="text-danger">@error('email') {{$message}} @enderror </span>
          </div>
          <div class="item">
            <p>Telephone</p>
            <input type="text" name="telephone" value="{{ old('telephone') }}"/>
            <span class="text-danger">@error('telephone') {{$message}} @enderror </span>
          </div>
        </div>
        <div class="contact-item">


    </div>
        <div class="contact-item">
            <div class="item">
        <p>Mot de passe</p>
            <input type="password" name="motdepasse"/>
            <span class="text-danger">@error('mot de passe') {{$message}} @enderror </span>
          </div>
          <div class="item">
            <p>Confirmation</p>
            <input type="password" name="confirmation"/>
            <span class="text-danger">@error('confirmation') {{$message}} @enderror </span>
          </div>



        </div>
        <centre>
        <label  for="role">Je suis:</label>
  <select name="role" id="role">
    <option value="USR">utilisateur</option>
    {{-- <option value="ADM">admin</option> --}}
    <option value="PHARMA">pharmacien</option>
    {{-- <option value="MED">medecin</option> --}}
  </select>
    </centre>
        <div class="btn-block">
        <button style='font-size:24px'><i class="glyphicon glyphicon-heart"></i>Valider</button>
        </div>
      </form>
    </div>
  </body>
</html>

