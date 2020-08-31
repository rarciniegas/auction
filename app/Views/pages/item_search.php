<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Item search</h3>
        <hr>

<form class="" action="/item_search" method="post">
	<div class="form-group row">
    	<label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
    	<div class="col-sm-10">
      		<input type="text" name="keyword" class="form-control" id="keyword">
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
    	<label for="item_label" class="col-sm-2 col-form-label">Minimum price</label>
    	<div class="col-sm-4">
			<input type="number" value="0.00" class="form-control" name="start_bid">
    	</div>
  	</div>
	<div class="form-group row">
    	<label for="item_label" class="col-sm-2 col-form-label">Maximum price</label>
    	<div class="col-sm-4">
			<input type="number" value="0.00" class="form-control" name="reserve">
    	</div>
  	</div>


	<div class="form-group row">
    	<label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
    	<div class="col-sm-4">
			<select class="form-control" name="category">
				<option></option>
                <option>New</option>
                <option>Very Good</option>
                <option>Good</option>
                <option>Fair</option>
                <option>Poor</option>
			</select>
		</div>
  	</div>

	<div class="row">
        <div class="col-12 col-sm-4">
		<a href="welcome" class="btn btn-danger">Cancel</a> 

        </div>
        <div class="col-12 col-sm-8 text-right">
		<button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
									
</form>
</div>
    </div>
  </div>
</div>