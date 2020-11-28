<div id="contact" class="row">
        <header class="col-md-12">
            <h1 id="RC_h1"  class="text-center">Contact</h1>
        </header>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-1"></div>
        <div class="col-lg-4 col-md-5">
            <h2 style="color: silver; text-shadow: 2px 2px rgb(10, 94, 163);">Social Media</h2>
            <br>
            <h4><a href="https://stackexchange.com/users/18674299/michael">StackExchange/StackOverflow</a></h3>
            <h4><a href="https://www.linkedin.com/in/michael-rettus-23680b150/">LinkedIn</a></h3>
            <h4><a href="https://www.upwork.com/freelancers/~0120d677d50b804ebd">UpWork</a></h3>
            <h4><a href="https://github.com/rettus-code">Github Profile</a></h3>
        
            <br>
            <h6 style="color: silver; text-shadow: 1px 1px rgb(10, 94, 163);">Contact Information:</h6>
            <p>Michael S Rettus II  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ph#(360) 499-9260  <br><br>  email: <strong>michael.rettusii@gmail.com</strong></p>
        </div>
        <div class="col-lg-2 col-md-1"></div>
        <div class="col-lg-4 col-md-5">
            <img src="images/me.jpg" class="my-pic" alt="Pic of me">
        </div>
    </div>
    <div class="row">

    <div class="col-lg-2 col-md-1"></div>
    <div class="col-lg-4 col-md-6">
        <form method = "POST" action = "include/contacts.php" id="contactForm">
        <div class="form-group">
            <label for="exampleFormControlInput1" style="color: silver;">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" style="color: silver;">Primary Topic</label>
            <select class="form-control" id="topic" name="topic">
                <option>New Project</option>
                <option>Old Project</option>
                <option>Debugging</option>
                <option>Updates</option>
                <option>Migrating Servers</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="text" style="color: silver;">Details and additional return contact information</label>
            <textarea class="form-control" id="text" name="text" rows="3"></textarea>
            <div class="my-4"> 
                <button type="submit" data-target="#contactForm" class="button">Submit</button> 
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
</div>