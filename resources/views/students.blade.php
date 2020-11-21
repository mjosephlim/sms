<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Student Management System</title>

    <style>
    #navbar.edit{
        background-color:red !important;
    }
    </style>
  </head>
  <body>
    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

      @if($layout == 'index')
      <div class="container-fluid">
          <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Add new student information</h5>
                    <form action="{{url('/store')}}" method="POST" >
                        @csrf
                            <div class="form-group">
                              <label for="cne">CNE</label>
                              <input name="cne" type="text" class="form-control" id="cne" placeholder="Enter CNE">
                            </div>
        
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input name="firstName" type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                              </div>
        
                              <div class="form-group">
                                <label for="secondName">Last Name</label>
                                <input name="secondName" type="text" class="form-control" id="secondName" placeholder="Enter Second Name">
                              </div>
        
                              <div class="form-group">
                                <label for="age">Age</label>
                                <input name="age" type="text" class="form-control" id="age" placeholder="Enter Age">
                              </div>
        
                              <div class="form-group">
                                <label for="specialty">Specialty</label>
                                <input name="specialty" type="text" class="form-control" id="specialty" placeholder="Enter Specialty">
                              </div>
        
                              <input type="submit" class="btn btn-info col-md-4" value="Add">
                              <input type="reset " class="btn btn-danger col-md-3" value="Cancel">
                        </form>
                   </div>
                </div>
            </section>
          </div>  
      </div>
      @elseif($layout=='create')
      <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Add new student information</h5>
                    <form action="{{url('/store')}}" method="POST" >
                        @csrf
                            <div class="form-group">
                              <label for="cne">CNE</label>
                              <input name="cne" type="text" class="form-control" id="cne" placeholder="Enter CNE">
                            </div>
        
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input name="firstName" type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                              </div>
        
                              <div class="form-group">
                                <label for="secondName">Last Name</label>
                                <input name="secondName" type="text" class="form-control" id="secondName" placeholder="Enter Second Name">
                              </div>
        
                              <div class="form-group">
                                <label for="age">Age</label>
                                <input name="age" type="text" class="form-control" id="age" placeholder="Enter Age">
                              </div>
        
                              <div class="form-group">
                                <label for="specialty">Specialty</label>
                                <input name="specialty" type="text" class="form-control" id="specialty" placeholder="Enter Specialty">
                              </div>
        
                              <input type="submit" class="btn btn-info col-md-4" value="Add">
                              <input type="reset " class="btn btn-danger col-md-3" value="Cancel">
                        </form>
                   </div>
                </div>
            </section>
          </div>  
    </div>
      @elseif($layout=='show')
      <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col"></section>
          </div>  
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of student</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="cne">CNE</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" id="cne" >
                              </div>
          
                              <div class="form-group">
                                  <label for="firstName">First Name</label>
                                  <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" id="firstName" >
                                </div>
          
                                <div class="form-group">
                                  <label for="secondName">Last Name</label>
                                  <input   value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" id="secondName" >
                                </div>
          
                                <div class="form-group">
                                  <label for="age">Age</label>
                                  <input  value="{{ $student->age }}" name="age" type="text" class="form-control" id="age">
                                </div>
          
                                <div class="form-group">
                                  <label for="specialty">Specialty</label>
                                  <input  value="{{ $student->specialty }}"  name="specialty" type="text" class="form-control" id="specialty" >
                                </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
      @endif


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
  </body>
</html>