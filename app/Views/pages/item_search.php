
                            <form class="" action="/item_search" method="post">

								<table>
									<tr>
										<td class="item_label">Keyword</td>
										<td>
											<input type="text" name="keyword" value="" />
										</td>
									</tr>
									<tr>
										<td class="item_label">Category</td>
										<td>
										    <select class="form-control" name="category">
									            <option></option>
                                                <option>Art</option>
                                                <option>Books</option>
                                                <option>Electronics</option>
                                                <option>Home & Garden</option>
                                                <option>Sporting Goods</option>
                                                <option>Toys</option>
                                                <option>Other</option>
									        </select>
									    </td>
									</tr>
									<tr>
										<td class="item_label">Minimum Price</td>
										<td>
											<input name="min_price" type="number" value="0.00">
										</td>
									</tr>

									<tr>
										<td class="item_label">Maximum Price</td>
										<td>
											<input name="max_price" type="number">
										</td>
									</tr>

                                    <tr>
                                        <td class="item_label">Condition</td>
                                        <td>
                                            <select class="form-control" name="shape">
                                                <option></option>
                                                <option>New</option>
                                                <option>Very Good</option>
                                                <option>Good</option>
                                                <option>Fair</option>
                                                <option>Poor</option>
                                            </select>
                                        </td>
                                    </tr>

									<tr>
										<td>
											<a href="welcome.php" class="fancy_button">Cancel</a> 
										</td>
										<td>
											<a href="javascript:item_search_form.submit();" class="fancy_button">Search</a> 
										</td>
									</tr>
								</table>
								
							
							</form>