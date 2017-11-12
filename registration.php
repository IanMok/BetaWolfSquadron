<div class="container" name="registrationContainer">

    <!-- Registration form; validate each field using regEx onSubmit-->
    <form class="form-horizontal" role="form" name=registrationForm onsubmit=return(validateFields());>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Surname:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="surname" placeholder="Enter surname">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Confirm email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

</div>
