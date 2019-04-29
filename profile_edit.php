<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/global.css" rel=stylesheet>
    <link href="css/profile_edit.css" rel=stylesheet>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="container" style="padding-top: 60px;">
        <h1 class="page-header">Edit Profile</h1>

        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">

            <h3>Personal info</h3>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" placeholder="Name" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="Gender">Gender</label>
                    <div class="col-lg-8">
                        <label class="radio-inline" for="Gender-0">
                            <input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">
                            Male
                        </label>
                        <label class="radio-inline" for="Gender-1">
                            <input type="radio" name="Gender" id="Gender-1" value="2">
                            Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="Username" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="*********" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                        <input class="form-control" placeholder="*********" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" placeholder="xxxxxx@email.com" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 control-label">Bio</label>
                    <div class="col-lg-8">
                    </div>
                    <div class="col-lg-8">
                        <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Upload photo</label>
                    <div class="col-lg-8">
                        <input id="Upload photo" name="Upload photo" class="input-file" type="file">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input class="btn btn-primary" value="Save Changes" type="button">
                        <span></span>
                        <input class="btn btn-default" value="Cancel" type="reset">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
