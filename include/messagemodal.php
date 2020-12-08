<div id ="messageForm" class="modal fade">
    <div class="modal-dialog" role   ="document"> 
        <div class="modal-content"> 
            <div class="modal-header">
                <h1 class="modal-title">Email Me</h1> 
            </div> 
                <div class="modal-body"> 
                <form method = "POST" action = "include/messages.php" id="contactForm1" class="formBook1 autocomplete">
                <div class="form-group">
                    <label for="exampleFormControlInput2" style="color: silver;">Email address</label>
                    <input type="email" class="form-control" id="email1" name="email1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2" style="color: silver;">Subject</label>
                    <input type="text" class="form-control" id="topic1" name="topic1" placeholder="subject">
                </div>
                <div class="form-group">
                    <label for="text" style="color: silver;">Message</label>
                    <textarea class="form-control" id="text1" name="text1" rows="3"></textarea>
                    <div class="my-4"> 
                        <button type="submit" data-target="#contactForm1" class="button">Submit</button> 
                    </div>
                </div>
                </form> 
            </div> 
        </div> 
    </div> 
</div>