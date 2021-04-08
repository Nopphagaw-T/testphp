

    <section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        <?php   
                        $mysql = new mysqli("localhost","root", "", "shopshock");
                        $mysql->set_charset("utf8");
						$sql = "SELECT product.Product_code, product.Product_Name, product.Cost, product.Stock_Quantity FROM `product`";
						$result = $mysql->query($sql);
						$rows = $result->fetch_all(MYSQLI_NUM);
                        
                        show_detail();
                        $total = 99;
                        function show_detail($product_code='111', $product_name='T-Shirt', $price='12', $demand='1' ,$stock_quantity='5'){
                        ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="img/product1.jpg" width="50%" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?= $product_name ?></a></h4>
								<p>Product ID : <?= $product_code ?></p>
							</td>
							<td class="cart_price">
								<p><?= $price ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" 
                                           type="number" min="1" max="<?= $stock_quantity ?>" name="quantity" 
                                           value="<?= $demand ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?= $price*$demand ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        <?php } ?>
                        <tr><th colspan='6'><center><h1>Total <?= $total ?>บาท</h1></center></th></tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
