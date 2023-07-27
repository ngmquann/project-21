<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gundam-X</title>
  <link rel="icon" href="{{asset('img/logo tách nền.png')}}" type="image/x-icon">
  <!-- link gg font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <!-- link css -->
  <link href="{{asset('css/style.css') }}" rel="stylesheet">
  <link href="{{asset('css/model.css') }}" rel="stylesheet">
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- link jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- link jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
  @include('layout.header')

  <!-- body-content -->
  <main role="main">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-3">
          @include('layout.category')
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary active" id="grid"><i class="fas fa-th"></i></button>
                    <button type="button" class="btn btn-secondary" id="list"><i class="fas fa-th-list"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div id="filtered-products">
              @include('range')
            </div>
            <div class="card-footer p-3">
              <div class="row">
                <div class="col-md-12">
                  {{$filter->links()}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- end body-content -->
  @include('layout.footer')
  
  <script src="../js/app2.js"></script>
  <script src="../js/model.js"></script>

  <script>

  </script>
</body>

</html>