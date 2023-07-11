<div class="row">
    <div class="col-md-6 mb-3">
          <label class="form-label" for="businnes-name">Business Name</label>
          <input type="text" class="form-control form-control-lg" name="business" id="businnes-name"
            placeholder="business name" aria-label="business name" required="">

          <span class="invalid-feedback">Please enter a business name.</span>
    </div>
    <div class="col-md-6 mb-3">
          <label class="form-label" for="businnes-name">Address</label>
          <input type="text" class="form-control form-control-lg" name="address" id="businnes-name"
            placeholder="address" aria-label="address" required="">

          <span class="invalid-feedback">Please enter a address.</span>
    </div>
</div>
<div class="row">
     <div class="col-md-6 mb-3">
          <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
          <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail"
            placeholder="email@site.com" aria-label="email@site.com" required="">
  
          <span class="invalid-feedback">Please enter a valid email.</span>
     </div>
     <div class="col-md-6 mb-3">
          <label class="form-label" for="phone">Phone</label>
          <input type="text" class="form-control form-control-lg" name="phone" id="phone"
            placeholder="934 941 846" aria-label="phone" required="">

          <span class="invalid-feedback">Please enter a phone.</span>
     </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
          <label class="form-label" for="signupModalFormSignupPassword">Password</label>
          <div class="input-group input-group-merge" data-hs-validation-validate-class="">
               <input type="password" class="js-toggle-password form-control form-control-lg" name="password"
               id="signupModalFormSignupPassword" placeholder="8+ characters required"
               aria-label="8+ characters required" required=""
               data-hs-toggle-password-options='{
                    "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                    "defaultClass": "bi-eye-slash",
                    "showClass": "bi-eye",
                    "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
               }'>
               <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                    <i class="js-toggle-passowrd-show-icon-1 bi-eye"></i>
               </a>
        </div>
        <span class="invalid-feedback">Your password is invalid. Please try again.</span>
    </div>
    <div class="col-md-6 mb-3">

        <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
        <div class="input-group input-group-merge" data-hs-validation-validate-class="">
            <input type="password" class="js-toggle-password form-control form-control-lg" name="confirmPassword"
                id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required"
                aria-label="8+ characters required" required=""
                data-hs-validation-equal-field="#signupModalFormSignupPassword"
                data-hs-toggle-password-options='{
                    "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                    "defaultClass": "bi-eye-slash",
                    "showClass": "bi-eye",
                    "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
               }'>
            <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
               <i class="js-toggle-passowrd-show-icon-2 bi-eye"></i>
            </a>
        </div>
        <span class="invalid-feedback">Password does not match the confirm password.</span>
    </div>
</div>
