
<div id="header">
		<div id="logotop"><a href="<?php echo base_url();?>index.php/webshop">
		<img src="assets/images/banner_logo_top.gif" alt="Logo" name="logo" width="53" height="118" id="logo" title="Logo" /></a>
		</div>
		<div id="greenbox">
			<div class="insideright10">
				<p><span id="cart"><a href="<?php echo base_url();?>index.php/<?php echo $this->lang->line('webshop_folder');?>/pages/cart"><?php echo lang('general_shopping_cart'); ?></a></span><br />
				<?php
				$this->data['handlekurv'] = number_format($this->data['handlekurv'] ,2,'.',',');
				if(isset($this->data['handlekurv'])){
					echo lang('webshop_currency_symbol').$this->data['handlekurv'];	
				}else{
				echo lang('webshop_shoppingcart_empty');
				}
				?>
				</p>    
			</div>
		</div>
		<div id="flags">
			
				<?php 
				echo form_open($this->lang->line('webshop_folder')."/search");
				$data = array(
				  "name" => "term",
				  "id" => "term",
				  "maxlength" => "64",
				  "size" => "15"
				);
				echo form_input($data);
				echo form_submit("submit",lang('webshop_search'));
				echo form_close();
				?>
		
		</div>
		<div id="headnav">
			
			<?php
		
		echo "\n<ul id='nav'>";
		foreach ($this->data['mainnav'] as $key => $menu){
				echo "\n<li class='menuone'>\n";
				echo anchor ($this->lang->line('webshop_folder')."/pages/".$menu['page_uri'], $menu['name']);
						if (count($menu['children'])){
								echo "\n<ul>";
								foreach ($menu['children'] as $subkey => $submenu){
								  echo "\n<li class='menutwo'>\n";
								  echo anchor($this->lang->line('webshop_folder')."/pages/".$submenu['page_uri'],$submenu['name']);
												if (count($submenu['children'])){
																echo "\n<ul>";
																foreach ($submenu['children'] as $subkey => $subsubname){	
																		echo "\n<li class='menuthree'>\n";
																		echo anchor($this->lang->line('webshop_folder')."/cat/",$subsubname['name']);	
																		echo "\n</li>";
																}
																echo "\n</ul>";
												}
								  echo "\n</li>";
								}
						echo "\n</ul>";
						}
				echo "\n</li>\n";
		}
  echo "\n</ul>\n";
		
		?>
		
			<div class="cb">&nbsp;</div>
		</div>	
    </div>
   <!-- End of div header-->