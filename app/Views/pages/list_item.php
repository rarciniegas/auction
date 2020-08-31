<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>List item</h3>
        <hr>

<form class="" action="/list_item" method="post">
	<div class="form-group row">
    	<label for="inputItem_name" class="col-sm-2 col-form-label">Item</label>
    	<div class="col-sm-10">
      		<input type="text" name="item_name" class="form-control" id="input_name">
    	</div>
  	</div>
	<div class="form-group row">
    	<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
    	<div class="col-sm-10">
			<textarea class="form-control" id="description" name="description" rows="3"></textarea>
		</div>
  	</div>
	<div class="form-group row">
    	<label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
    	<div class="col-sm-4">
			<select class="form-control" name="category">
				<option>Art</option>
				<option>Books</option>
				<option>Electronics</option>
				<option>Home & Garden</option>
				<option>Sporting Goods</option>
				<option>Toys</option>
				<option>Other</option>
		</select>
		</div>
  	</div>
	<div class="form-group row">
    	<label for="shape" class="col-sm-2 col-form-label">Condition</label>
    	<div class="col-sm-4">
			<select class="form-control" name="shape">
				<option>New</option>
				<option>Very Good</option>
				<option>Good</option>
				<option>Fair</option>
				<option>Poor</option>
			</select>
		</div>
  	</div>
	<div class="form-group row">
    	<label for="item_label" class="col-sm-2 col-form-label">Start bid</label>
    	<div class="col-sm-4">
			<input type="number" value="0.00" class="form-control" name="start_bid">
    	</div>
  	</div>
	<div class="form-group row">
    	<label for="item_label" class="col-sm-2 col-form-label">Reserve</label>
    	<div class="col-sm-4">
			<input type="number" value="0.00" class="form-control" name="reserve">
    	</div>
  	</div>
	<div class="form-group row">
    	<label for="item_label" class="col-sm-2 col-form-label">Ends in</label>
    	<div class="col-sm-4">
			<select class="form-control" name="ends_in">
				<option>1 day</option>
				<option>3 days</option>
				<option>5 days</option>
				<option>7 days</option>
			</select>
		</div>
  	</div>
	<div class="form-group row">
    	<label for="item_label" class="col-sm-2 col-form-label">Get it now</label>
		<div class="col-sm-4">
			<input type="number" value="0.00" class="form-control" name="get_it_now">
    	</div>
  	</div>


<div class="form-group row">
    <div class="col-sm-2">Returnable</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="returnable">
        <label class="form-check-label" for="returnable">
          
        </label>
      </div>
    </div>
  </div>

	<div class="row">
        <div class="col-12 col-sm-4">
            <button type="submit" class="btn btn-primary">List</button>
        </div>
        <div class="col-12 col-sm-8 text-right">
			<a href="welcome" class="btn btn-danger">Cancel</a> 
        </div>
    </div>
									
</form>
</div>
    </div>
  </div>
</div>
