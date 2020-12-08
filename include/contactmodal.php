<div id ="supportForm" class="modal fade">
    <div class="modal-dialog" role   ="document"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h1 class="modal-title">Email Support</h1> 
            </div> 
                <div class="modal-body"> 
                <form method = "POST" action = "include/contacts.php" id="contactForm" class="formBook autocomplete">
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