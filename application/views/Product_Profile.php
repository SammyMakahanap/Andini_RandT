<?php
	foreach ($data as $data){
?>
	<body>
	 <h1>Andini Test GIT</h1>
		<h2>Edit Data Product</h2>
		<form id="form" action="<?php echo site_url('Product/Execute_Edit_Product_Info/'); ?>" method="post" novalidate>
			 <div>
				<label>ID Product</label>
				 <input type='text' name='id_product' value="<?php echo $data->ID_Product;?>" />
			 </div>
			 <div>
				<label>Product</label>
				 <input type='text' name='product' value="<?php echo $data->Name_Product;?>" />
			 </div>		 
			 <div>
				<label>Category</label>
				 <input type='text' name='category' value="<?php echo $data->Category_Product;?>" />
			 </div>		 
			 <div>
				<label>Price</label>
				 <input type='text' name='price' value="<?php echo $data->Price;?>" />
			 </div>		 
			 <p><input type='submit' value='Edit Item' /></p>
		</form>
	</body>
<?php } ?>
