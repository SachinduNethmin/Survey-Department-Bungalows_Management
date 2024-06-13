<div class="modal fade" id="mdlRegister" tabindex="-1" aria-labelledby="mdlRegisterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mdlRegisterLabel">Register New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        
    <form action="app/engine/_register.php" method="post">
        <div class="modal-body">

            <div class="mb-3">
                <label for="usersName" class="form-label">Name</label>
                <input type="text" class="form-control" id="usersName" name="usersName">
            </div>

            <div class="mb-3">
                <label for="usersEmail" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="usersEmail" name="usersEmail">
            </div>

            <div class="mb-3">
                <label for="usersUiD" class="form-label">Username</label>
                <input type="text" class="form-control" id="usersUiD" name="usersUiD">
            </div>

            <div class="mb-3">
                <label for="usersPwd1" class="form-label">Password</label>
                <input type="password" class="form-control" id="usersPwd1" name="usersPwd1">
            </div>

            <div class="mb-3">
                <label for="usersPwd2" class="form-label">Verify Password</label>
                <input type="password" class="form-control" id="usersPwd2" name="usersPwd2">
            </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-dark" value="Sign Up">
      </div>
    </form>
    </div>
  </div>
</div>