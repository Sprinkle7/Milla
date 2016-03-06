  <div class="add_place none" id="autorized">
    <div class="place_form login_form">
      <i class="fa fa-times close_window" id="closeau"></i>
      <h3>Autorization<span></span></h3>
      <form method="post" action="data/Get_user_authentication.api.php">
          <label>Username:<input type="text" placeholder="Username" name="Username"></label>
          <label>Password:<input type="password" placeholder="Password" name="password"></label>
          <input type="submit" style="margin-left:2.2em;" value="Log in" class="btn btn-primary">
          <input type="hidden" name="userlogin" value="lsdfkjdsofu988432wuro32iuweoir">
      </form>
    </div>
  </div>
  <div class="add_place none" id="claims">
    <div class="place_form login_form">
      <i class="fa fa-times close_window" id="c"></i>
      <h3>Claim it If it's Yours<span></span></h3>
      <form method="post" action="data/Submit.api.php">
          <label>Enter The ID #:<input type="number" placeholder="ID e.g. 23" name="ID" required></label>
         <input type="submit" style="margin-left:2.2em;" name="ids" value="Claim it" class="btn btn-primary" id="calm">
          <input type="hidden" value="<?php echo $_SESSION['ID'];?>" name="idNumber">
      </form>
    </div>
  </div>
  <div class="add_place none" id="thannkyou">
    <div class="place_form">
      <i class="fa fa-times pull-right close" id="closed"></i>
      <h3 class="bold">Thank You!</h3>
      <span class="span-chat"> You are registered!.Now You Can Login</span>
    </div>
  </div>
  <div class="add_place none" id="claimti">
    <div class="place_form">
      <i class="fa fa-times pull-right close text-center" id="loot"></i>
      <h3 class="bold">Thank You!</h3>
      <span class="span-chat"> We will Contact You very Soon.</span>
    </div>
  </div>
  <div class="add_place none" id="autoriz">
    <div class="place_form login_form">
      <i class="fa fa-times close_window" id="close"></i>
      <h3>Sign up<span></span></h3>
      <form name="myForm" novalidate>
        <label for=""><small>Note: Your Information Will Not Be Disclosed To AnyOne</small></label>
        <label>Username:<input type="text" name="Username" ng-model="Username" placeholder=" Username" required>
        <span style="color:red" ng-show="myForm.Username.$dirty && myForm.Username.$invalid">
          <span ng-show="myForm.Username.$error.required">Username is required.</span>
        </span>
        </label>
        <label>Email:<input type="email" name="Email"  ng-model-options="{ updateOn: 'blur' }"  ng-model="Email" placeholder="Email" required>
        <span style="color:red" ng-show="myForm.Email.$dirty && myForm.Email.$invalid">
          <span ng-show="myForm.Email.$error.required">Email is required.</span>
          <span ng-show="myForm.Email.$error.email">Invalid email address.</span>
        </span>
        </label>
        <label>Contact #:<input type="text" name="Number" ng-model="Number" placeholder="Contact Number"  ng-minlength="10" ng-model-options="{ updateOn: 'blur' }" ng-pattern="/^[0-9]+$/" required>
        <span style="color:red" ng-show="myForm.Number.$dirty && myForm.Number.$invalid">
          <span ng-show="myForm.Number.$error.required">Number is required.</span>
          <span ng-show="myForm.Number.$error.pattern">Phone must be numeric.</span>
          <span ng-show="myForm.Number.$error.minlength">Phone must be min 10 char.</span>
        </span>
        </label>
        <label>Password:<input type="text" name="Password" ng-minlength="6" ng-model="Password" placeholder="Password" required>
        <span style="color:red" ng-show="myForm.Password.$dirty && myForm.Password.$invalid">
          <span ng-show="myForm.Password.$error.required">Password is required.</span>
        </span>
        </label>
        <a id="signup"><input type="submit" value="Sign Up" class="btn btn-success" ng-click="SaveUser()"  ng-disabled="myForm.Username.$dirty && myForm.Username.$invalid || myForm.Email.$dirty && myForm.Email.$invalid || myForm.Number.$dirty && myForm.Number.$invalid || myForm.Password.$dirty && myForm.Password.$invalid"></a>
      </form>
    </div>
  </div>
  <div class="add_place none" id="Thanx">
    <div class="place_form">
      <i class="fa fa-times pull-right close" id="Thanxby"></i>
      <h3 class="bold">Thank You!</h3>
      <span class="span-chat"> You are registered!.Now You Can Login</span>
    </div>
  </div>
  <div class="add_place none" id="foundsomething">
    <div class="place login_form">
      <h3>Found Something<span>
      <i style="background:red; padding:1em 1em 0.5em 0.5em;" class="fa fa-times close_window" id="Unopen"></i></span></h3>
      <form name="myForm" novalidate>
        <div class="left">
             <label>Title:<input type="text" name="Title" ng-model="Title" placeholder=" Username" required>
              <span style="color:red" ng-show="myForm.Title.$dirty && myForm.Title.$invalid">
                <span ng-show="myForm.Title.$error.required">Username is required.</span>
              </span>
              </label>
              <span style="padding-left: 2em;font-weight: 500;">Found Or Lost:
               <input type="radio" ng-model="found" name="found" value="1"> Found
               <input type="radio" ng-model="found" name="found" value="0"> Lost
              </span>
              
              <label for="">Place The Picker:
                  <div id="us3" style="width:340px; height: 160px;"></div>
              </label>
               <input type="text" style="display:none;" class="cord" disabled name="Longi" ng-model="Longi" id="us3-lon">
               <input type="text" style="display:none;" class="cord" name="Lat" ng-model="Lat" id="us3-lat" disabled>
        </div>
        <div class="right">
              <label>Address:<input type="text" id="us3-address" name="address" ng-model="address" placeholder="City Name"></label>
              <label>Description:<textarea name="Text1" placeholder="Description" style="display: block;width: 100%;height: 100px;border-radius: 3px;
              border: 1px solid #DDDDDD;margin-top: 10px;background: #F9F9F9;padding: 0px 20px;font-size: 16px;font-weight: 300;" required cols="40" rows="5" ng-model-options="{ updateOn: 'blur' }" name="desc" style="height:100px;" ng-model="desc" ></textarea>
              <span style="color:red" ng-show="myForm.desc.$dirty && myForm.desc.$invalid">
                <span ng-show="myForm.desc.$error.required">Description is required.</span>
              </span>
              </label>

              </label>
                <a id="asdsdasdsadsa"> <input type="submit" ng-disabled="myForm.$invalid" value="Upload" class="btn btn-success" ng-click="WhatHappend()">
              </a>
        </div>
      </form>
    </div>
  </div>