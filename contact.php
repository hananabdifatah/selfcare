<!DOCTYPE html>
    <head>
        <title>contact</title>
        <link rel="stylesheet" type="project/css" href="css/bootstrap.css"> 
    </head>
    <body>
        <div class="container">
            <div class="row">
                
                  <?php
                  include("nav.html");
                  ?>
            </div>
           
                    <div class="row col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                              <h1>registration form</h1> 
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="firstname">first name</label>
                                        <input type="text" class="form-control" id="firstname"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="secondname">second name</label>
                                        <input type="text" class="form-control" id="secondname"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" class="form-control" id="email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="number">phone number</label>
                                        <input type="text" class="form-control" id="number"/>
                                    </div>
                                    <input type="submit" class="btn btn-primary"/>
                                </form>
                            </div>
                            <div class="panel panel-footer text-right">
                              <small> &copy; hanan abdifatah</small> 
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <h2>email</h2>
                            cabdifatahhanan@gmail.com
                            <h3>contact us here</h3>
                            <p>phone number<br/>tel: 0774723274</p>
                        </div>
                    </div>

                </div>
            </div>   
         <script src="js/bootstrap.min.js"></script>
    </body>
    
</html>