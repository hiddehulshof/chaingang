<div class="article border-primary rounded-lg background">
    <div class="container col-md-4">
    <form method="post" action="login">
        @csrf
        <h2 class="text-center article__heading">Log in</h2>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>

        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox" name="remember"> <b>Remember me</b></label>
        </div>
        <div class="form-group">
            <a><button type="submit" class="button btn-block">Log in</button></a>
        </div>
    </form>
        <p class="text-center"><a href="#"><b>Create an Account</b></a></p>
    </div>
</div>