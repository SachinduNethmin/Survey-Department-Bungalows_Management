<div class="modal fade" id="mdlLogin" tabindex="-1" aria-labelledby="mdlLoginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlLoginLabel">Log In</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="../new/app/engine/_login.php" method="post">
      <div class="modal-body">
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="pword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="pword1" name="pword1">
        </div>
      </div>
      <div class="modal-footer">
        <p>New user?</p>
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#mdlRegister">
        Sign Up
        </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-dark" value="Sign In">
      </div>
    </form>
    </div>
  </div>
</div>