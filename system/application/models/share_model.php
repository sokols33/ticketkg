<?php

class Share_model extends Model {

	// Function to retrieve an array with all product information
	function retrieve_products(){
		$query = $this->db->get('products');
		return $query->result_array();
	}
	
	// Updated the shopping cart
	function validate_buy_share(){
		// Retrieve the posted information
		$item = $this->input->post('id_item');
	    $qty = $this->input->post('quantity');
        $date = date("Y-m-d H:i:s");
        $user = $this->ion_auth->user()->row();
        echo $item;
		// Cycle true all items and update them
		for($i=0;$i < $qty;$i++)
		{
			// Create an array with the products rowid's and quantities. 
			$data = array(
               'id_item' => $item,
               'id_user' => $user->id,
               'create_date' => $date
            );
            
            // Update the cart with the new information
			$this->db->insert('shares',$data);
		}
	}
	
	// Add an item to the cart
	function validate_add_cart_item(){
		
		$id = $this->input->post('product_id'); // Assign posted product_id to $id
		$cty = $this->input->post('quantity'); // Assign posted quantity to $cty
		$measur = $this->input->post('measure'); // Assign posted quantity to $cty
        if ($measur == 'kg')
        {
        $meascon = '��';
        }
        elseif ($measur == 'sht')
        {
        $meascon = '��';    
        }
        elseif ($measur == 'puch')
        {
        $meascon = '���';    
        }
        elseif ($measur == 'l')
        {
        $meascon = '�';    
        }
        else
        {
        $meascon = '������';
        }
		 
		//$kolvo = $this->input->post('kolichestvo');
		
		$this->db->where('id_product', $id); // Select where id matches the posted id
		$query = $this->db->get('products', 1); // Select the products where a match is found and limit the query by 1
		
		// Check if a row has been found
		if($query->num_rows > 0){
		
			foreach ($query->result() as $row)
			{
			    $data = array(
               		'id'      => $id,
               		'qty'     => $cty,
               		'price'   => $row->cost_sell,
               		'name'    => $row->product,
					'options' => array('Measure' => $meascon)
            	);

				$this->cart->insert($data); 
				
				return TRUE;
			}
		
		// Nothing found! Return FALSE!	
		}else{
			return FALSE;
		}
	}
	
	
	function validate_delete_cart_item(){
			
		// Get the total number of items in cart
		$total = $this->cart->total_items();
		
		// Retrieve the posted information
		$item = $this->input->post('product_id');
	    $qty = $this->input->post('quantity');

 
			$data = array(
               'rowid' => $item,
               'qty'   => $qty
            );
            
            // Update the cart with the new information
			$this->cart->update($data);
		
	}
    
    
    public function user_prizes($just_get)
{
    $this->db->where ('id_user',$just_get);
    //$this->db->where ('prize_group',4);
    //$this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->order_by ('create_date','desc');
    $query = $this->db->get('shares');
    return $query->result_array();
}
	
	// Needed?
	//function cart_content(){
	//	return $this->cart->total();
	//}

}


/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */