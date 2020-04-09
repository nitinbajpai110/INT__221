<!DOCTYPE html>
<html>

<head>
        <link rel="stylesheet" href="..\css\bootstrap.min.css">
  
    <link href='..\css\bloglist.css' rel='stylesheet' type='text/css'>    
    <link href='..\css\header.css' rel='stylesheet' type='text/css'>
    <link href='..\css\font.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="..\font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
    </style>
</head>
<body>
        
    <div id="main-container-div">
        <div class="header">
                                
            <div class="header">

                <!-- code for Sign Up,Sign In button here.code for "ScriBBler" heading and the sub-heading -->
                <input class="topButtons1" type="button" value="Sign Up" data-toggle="modal" data-target="#exampleModalSignUp">
                <input class="topButtons2" type="button" value="Sign In" data-toggle="modal" data-target="#exampleModal">
                <a id="pageTitle" class="logo-title">WeEBlY</a>
                <p class="middleText">Explore Imagine Create</p>
                 
            </div>

        </div>
    </div>
    <div>
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

    <div class="allPostsContainer">
    <div class="post" id="post1">
        <div class="post-left">
            <p class="post-username">NITIN</p>
        </div>
        <div class="post-content">

            <!-- Insert code for Trash icon here -->
            <button style="font-size:24px" id="btn-confirm" data-toggle="modal" data-target="#Confirmmodal" onclick="del(1)"><i class="fa fa-trash-o"></i></button>

            <p class="post-title">How to write </p>
            <p class="post-desc">You’re a writer, you know how to write a sentence, right?Of course you do.But have you ever heard the phrase Keep it simple, stupid?Or the acronym KISS?Apparently, it originated in the 1960s from Navy and was then adopted by the programming world.Here’s what Techopedia has to say about KISS:The “keep it simple stupid” (KISS) principle is a design rule that states that systems perform best when they have simple designs rather than complex ones. KISS is not meant to imply stupidity. On the contrary, it is usually associated with intelligent systems that may be misconstrued as stupid because of their simplistic design.So what’s this got to do with how to write a sentence?In the last few months alone here on WritetoDone we’ve published posts on podcasting, freelancing, advanced blogging techniques and a whole series on how to write a bestseller.All really great articles and full of useful, actionable advice.But all concentrating on what could be termed ‘complicated systems’. If you’ve ever tried to run a podcast or write a bestseller I think you’ll know what I mean.This week I’ve decided to make amends by keeping it simple and going back to basics:Ladies and gentlemen… drum roll, please… This wonderful infographic from Writing Rocks re-examines the humble sentence so we can keep it simple, stupid 🙂
            </p>

         
            <!-- Insert code for ... icon here -->
            <button id="icon" ><a href="post"><i class="fa fa-ellipsis-h" ></i></a></button>
        </div>
    </div>

    <div class="post" id="post2">
        <div class="post-left">
            <p class="post-username">Jimi</p>
        </div>
        <div class="post-content">

                <!-- Insert code for Trash icon here -->
                <button style="font-size:24px"id="btn-confirm" data-toggle="modal" data-target="#Confirmmodal" onclick="del(2)"><i class="fa fa-trash-o"></i></button>

                <p class="post-title">ABOUT ME </p>
                <p class="post-desc">Jimi Hendrix was arguably the greatest instrumentalist in the history of rock music.[1] Hendrix expanded the range and vocabulary of the electric guitar into areas no musician had ever ventured before. His boundless drive, technical ability and creative application of such effects as distortion forever transformed the sound of rock and roll. While creating his unique musical voice and guitar style, Hendrix synthesized diverse genres, including blues, R&B, soul, British rock, American folk music, 1950s rock and roll, psychedelic and jazz.</p>

            
            <!-- Insert code for ... icon here -->
            <button id="icon" ><a href="post"><i class="fa fa-ellipsis-h" ></i></a></button>
        </div>
    </div>


   
    
    <div class="post" id="post5">
            <div class="post-left" >
                <p class="post-username">SUDEEPT</p>
            </div>
            <div class="post-content">

                <!-- Insert code for Trash icon here -->
                <button style="font-size:24px" id="btn-confirm" data-toggle="modal" data-target="#Confirmmodal" onclick="del(5)"><i class="fa fa-trash-o"></i></button>

                    <p class="post-title">Hello there ! This is 1 post. </p>
                    <p class="post-desc">Jimi Hendrix was arguably the greatest instrumentalist in the history of rock music.[1] Hendrix expanded the range and vocabulary of the electric guitar into areas no musician had ever ventured before. His boundless drive, technical ability and creative application of such effects as distortion forever transformed the sound of rock and roll. While creating his unique musical voice and guitar style, Hendrix synthesized diverse genres, including blues, R&B, soul, British rock, American folk music, 1950s rock and roll, psychedelic and jazz.</p>
                
                <!-- Insert code for ... icon here -->
                <button id="icon" ><a href="post"><i class="fa fa-ellipsis-h" ></i></a></button>
            
            </div>
        </div>
  
        <!-- Insert code for delete modal here -->
<div>  
              <div class="modal fade" id="Confirmmodal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <p id="sure">Are you sure you want to delete this post?</p>
                    </div>
                 <div class="btnns">

                      <button type="button" class="btnyes" onclick="calldel()"data-dismiss="modal">YES</button>
                      <button type="button" class="btnno" data-dismiss="modal">NO</button>
                    </div>
                  </div>
                </div>
              </div>
</div>
<script src="..\js/jquery.js"></script>
    <script src="..\js/popper.min.js"></script>
    <script src="..\js/bootstrap.min.js"></script>
    <script src="..\js\bloglist.js">  </script>
    <script src="..\js\header.js"> </script>

</body>

</html>