<!DOCTYPE html>
<html>
<head>
<link href="{{ asset('/css/header.css') }}" rel="stylesheet">
<link href="{{ asset('/css/index.css') }}" rel="stylesheet">
    
<link href="{{ asset('/css/font.css') }}" rel="stylesheet">
    
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">


</head>
<body link="blue">
    <div id="main-container-div">

        <div class="header">

            <input class="topButtons1" type="button" value="Sign Up" data-toggle="modal" data-target="#exampleModalSignUp">
            <input class="topButtons2" type="button" value="Sign In" data-toggle="modal" data-target="#exampleModal">
            <a id="pageTitle" class="logo-title">WeEBlY</a>
            <p class="middleText">Explore Imagine Create</p>
              
        </div>
        <div class="postButtons">

          <button type="button" id="allpost"><a href="blogs" >All Posts</a></button>
          <button type="button" id="createpost"><a href="create" >Create Post</a></button>

        </div>
    </div>
    <div >
    
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title1">Welcome Back!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form>
                        <div class="form-group">
                                <label class="label">Username</label>
                                <input type="text" class="form-control" placeholder="Enter Username" required="required">
                            </div>
                        <div class="form-group">
                                <label  class="label">Password</label>
                                <input type="password" class="form-control"  placeholder="Enter Password" required="required">
                            </div>
                                 <button type="submit" class="btn btn-primary" id="signinbtn">Sign In</button>
                        <div class="form-group">
                                 <label id="notamember">Not a member?</label><a data-toggle="modal" href="#exampleModalSignUp" id="lnk">Sign Up</a>
                            </div>
                  
                   </form>
            </div>
 
          </div>
        </div>
      </div>
     

    </div>
    
    <div>
      <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title2" >Get Started</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form>
                            <div class="form-group">
                                    <label  class="label">Full Name</label>
                                    <input type="text" class="form-control"  placeholder="Enter Full Name" required="required">
                                </div>
                            <div class="form-group">
                                     <label   class="label">Username</label>
                                     <input type="text" class="form-control"  placeholder="Enter Username" required="required">
                                </div>
                            <div class="form-group">
                                     <label  class="label">Password</label>
                                     <input type="password" class="form-control" id="password1" placeholder="Enter Password" required="required">
                                </div>
                            <div class="form-group">
                                     <label  class="label" >Confirm Password</label>
                                     <input type="password" class="form-control" id="password2" placeholder="Confirm Password"required="required">
                                </div>
                                      <button type="submit" class="btn btn-primary" id="signupbtn" onclick="verify()" >Sign Up</button>
                      </form>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <div>

   

    </div>
 
    <script src="{{ asset('/js/jquery.js') }}"> </script>
   
    <script src="{{ asset('/js/bootstrap.min.js') }}"> </script>
    <!-- Place all Javascript for header in this file -->
    <script src="{{ asset('/js/header.js') }}"> </script>
	
    <!-- Place all Javascript for rest of the elements in this file -->
    <script src="{{ asset('/js/index.js') }}"> </script>
   
    
</body>
</html>