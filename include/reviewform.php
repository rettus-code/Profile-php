<div class="row">

    <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form method = "POST" action = "include/rev_table.php" id="reviewForm" class="revForm">
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: silver;">Full name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="First Name Last Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" style="color: silver;">Website URL</label>
                <input type="url" class="form-control" id="link" name="link" placeholder="https://example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1" style="color: silver;">Number of Stars</label>
                <select class="form-control" id="stars" name="stars">
                    <option>5</option>
                    <option>4</option>
                    <option>3</option>
                    <option>2</option>
                    <option>1</option>
                </select>
            </div>
            <div class="form-group">
                <label for="text" style="color: silver;">Details of Review</label>
                <textarea class="form-control" id="review" name="review" rows="5"></textarea>
                <div class="my-4"> 
                    <button type="submit" data-target="#reviewForm" class="button">Submit</button> 
                </div>
            </div>
            </form>
        </div>
    </div>
</div>