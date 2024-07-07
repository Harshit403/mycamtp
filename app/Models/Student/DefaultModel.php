<?php 
	namespace App\Models\Student;

	use CodeIgniter\Model;
	class DefaultModel extends Model
	{
		public function fetchLevelListModel($category_short_name=''){
			$builder = $this->db->table('level_table');
			$builder->select('level_table.*,category_table.category_short_name,category_table.category_name');
			$builder->join('category_table','category_table.category_id=level_table.category_id','left');
			$builder->where('level_table.deleted',0);
			$builder->where('category_table.deleted',0);
			$builder->where('category_table.active',1);
			if (!empty($category_short_name)) {
				$builder->where('category_table.category_short_name',$category_short_name);
			}
			$response = $builder->get()->getResult();
			return $response;
		}

		public function fetchTypeListModel($level_short_name=''){
			$builder = $this->db->table('type_table');
			$builder->select('type_table.*,level_table.level_short_name,category_table.category_short_name,type_table.type_name');
			$builder->join('level_table','level_table.level_id=type_table.level_id','left');
			$builder->join('category_table','category_table.category_id=level_table.category_id','left');
			$builder->where('type_table.deleted',0);
			$builder->where('level_table.deleted',0);
			$builder->where('category_table.deleted',0);
			$builder->where('category_table.active',1);
			if (!empty($level_short_name)) {
				$builder->where('level_table.level_short_name',$level_short_name);
			}
			$response = $builder->get()->getResult();
			return $response;
		}

		public function fetchSubjectListModel($type_short_name=''){
			$builder = $this->db->table('subject_table');
			$builder->select('subject_table.*,level_table.level_short_name,category_table.category_short_name,type_table.type_short_name,level_table.level_name,type_table.type_name,category_table.category_name');
			$builder->join('type_table','type_table.type_id=subject_table.type_id');
			$builder->join('level_table','level_table.level_id=subject_table.level_id');
			$builder->join('category_table','category_table.category_id=level_table.category_id');
			$builder->where('subject_table.deleted',0);
			$builder->where('type_table.deleted',0);
			$builder->where('level_table.deleted',0);
			$builder->where('category_table.deleted',0);
			$builder->where('category_table.active',1);
			if (!empty($type_short_name)) {
				$builder->where('type_table.type_short_name',$type_short_name);
			}
			$response = $builder->get()->getResult();
			return $response;
		}

		public function checkExistStudent($email='',$mobile_no=''){
	        $builder = $this->db->table('student_table');
	        if (!empty($email)) {
	        	$builder->where('email', $email);
	        }
	        if ($mobile_no) {
	        	$builder->orWhere('mobile_no', $mobile_no);
	        }
	        $records = $builder->get()->getRow();
	        return $records;
	    }

	    public function getActiveCartItems($cartId=''){
            $builder = $this->db->table('cart_items_table');
            $builder->select('cart_items_table.*,subject_table.subject_name,subject_table.offer_price,subject_table.original_price,type_table.type_name,level_table.level_name');
            $builder->join('subject_table','subject_table.subject_id=cart_items_table.subject_id','left');
            $builder->join('type_table','type_table.type_id=subject_table.type_id','left');
            $builder->join('level_table','level_table.level_id=type_table.level_id','left');
            $builder->join('category_table','category_table.category_id=level_table.category_id','left');
            $builder->where('cart_items_table.deleted',0);
            $builder->where('category_table.deleted',0);
            $builder->where('category_table.active',1);
            $builder->where('level_table.deleted',0);
            $builder->where('type_table.deleted',0);
            $builder->where('subject_table.deleted',0);
            $builder->where('cart_items_table.cart_id',$cartId);
            return $builder->get()->getResultArray();
        }

        public function getPromoCodeDetails($cart_id){
	        $builder = $this->db->table('cart_items_table');
	        $builder->select('promo_code_table.min_cart_amt,cart_items_table.promo_code_name');
	        $builder->join('promo_code_table', 'promo_code_table.code_name = cart_items_table.promo_code_name','left');
	        $builder->where('cart_items_table.cart_id', $cart_id);
	        $builder->where('cart_items_table.deleted', 0);
	        $response = $builder->get()->getRow();
	        return $response;
	    }

	    public function fetchPurchaseModel($link_id){
	    	$builder = $this->db->table('cart_items_table as cit');
	    	$builder->select('cit.*,sut.student_id,sut.student_name,sut.email,sut.mobile_no,sut.city_name,sut.state_name,pt.payment_request_id,pt.cf_link_id,pt.order_id,pt.payment_mode,pt.total_payment_amount,pt.create_date as payement_date,st.subject_name,tt.type_name,lt.level_name,ct.category_name');
	    	$builder->join('cart_table','cart_table.cart_id=cit.cart_id','left');
	    	$builder->join('student_table as sut','sut.student_id=cart_table.student_id','left');
	    	$builder->join('purchase_table as pt','pt.purcahse_id=cit.purchase_id','left');
	    	$builder->join('subject_table as st','st.subject_id=cit.subject_id','left');
	    	$builder->join('type_table as tt','tt.type_id=st.type_id','left');
	    	$builder->join('level_table as lt','lt.level_id=tt.level_id','left');
	    	$builder->join('category_table as ct','ct.category_id=lt.category_id','left');
	    	$builder->where('pt.payment_request_id',$link_id);
	    	$response = $builder->get()->getResult();
	    	return $response;
	    }

	    public function fetchAvailableSubject($cart_id='',$limit=''){
	        $builder = $this->db->table('cart_items_table');
	        $builder->select('cart_items_table.*, subject_table.subject_name,subject_table.subject_short_name,type_table.type_name,level_table.level_name,type_table.schedule_file,type_table.access');
	        $builder->join('subject_table','subject_table.subject_id=cart_items_table.subject_id','left');
	        $builder->join('type_table','type_table.type_id=subject_table.type_id','left');
	        $builder->join('level_table','level_table.level_id=subject_table.level_id','left');
	        $builder->join('category_table','category_table.category_id=level_table.category_id','left');
	        if (!empty($cart_id)) {
	            $builder->where('cart_items_table.cart_id',$cart_id);
	            $builder->where('cart_items_table.payment_status','PAID');
	        }
	        $builder->where('cart_items_table.active','1');
	        $builder->where('cart_items_table.access',1);
	        if (!empty($limit)) {
	            $builder->limit($limit);
	        }
	        return $builder->get()->getResultArray();
	    }

	    public function getNotesSubjectList($cart_id='',$limit=''){
	        $builder = $this->db->table('cart_items_table');
	        $builder->select('cart_items_table.*,subject_table.subject_name,subject_table.subject_short_name');
	        $builder->join('subject_table','subject_table.subject_id = cart_items_table.subject_id','left');
	        $builder->join('notes_table','cart_items_table.subject_id = notes_table.subject_id');
	        $builder->join('type_table','type_table.type_id = subject_table.type_id','left');
	        $builder->where('cart_items_table.cart_id',$cart_id);
	        $builder->where('cart_items_table.payment_status','PAID');
	        $builder->where('cart_items_table.active','1');
	        $builder->where('cart_items_table.access','1');
	        $builder->where('notes_table.deleted',0);
	        $builder->orderBy('subject_table.subject_id','ASC');
	        $builder->groupBy('subject_name');
	        if (!empty($limit)) {
	            $builder->limit($limit);
	        }
	        $records = $builder->get()->getResult();
	        return $records;
	    }

	    public function getAmendmentSubjectList($cart_id='',$limit=''){
	        $builder = $this->db->table('cart_items_table');
	        $builder->select('cart_items_table.*,subject_table.subject_name,subject_table.subject_short_name');
	        $builder->join('subject_table','subject_table.subject_id = cart_items_table.subject_id','left');
	        $builder->join('amendment_table','cart_items_table.subject_id = amendment_table.subject_id');
	        $builder->join('type_table','type_table.type_id = subject_table.type_id','left');
	        $builder->where('cart_items_table.cart_id',$cart_id);
	        $builder->where('cart_items_table.payment_status','PAID');
	        $builder->where('cart_items_table.active','1');
	        $builder->where('cart_items_table.access','1');
	        $builder->where('amendment_table.deleted',0);
	        $builder->orderBy('subject_table.subject_id','ASC');
	        $builder->groupBy('subject_name');
	        if (!empty($limit)) {
	            $builder->limit($limit);
	        }
	        $records = $builder->get()->getResult();
	        return $records;
	    }

	    public function getQbankSubjectList($cart_id='',$limit=''){
	        $builder = $this->db->table('cart_items_table');
	        $builder->select('cart_items_table.*,subject_table.subject_name,subject_table.subject_short_name');
	        $builder->join('subject_table','subject_table.subject_id = cart_items_table.subject_id','left');
	        $builder->join('qbank_table','cart_items_table.subject_id = qbank_table.subject_id');
	        $builder->join('type_table','type_table.type_id = subject_table.type_id','left');
	        $builder->where('cart_items_table.cart_id',$cart_id);
	        $builder->where('cart_items_table.payment_status','PAID');
	        $builder->where('cart_items_table.active','1');
	        $builder->where('cart_items_table.access','1');
	        $builder->where('qbank_table.deleted',0);
	        $builder->orderBy('subject_table.subject_id','ASC');
	        $builder->groupBy('subject_name');
	        if (!empty($limit)) {
	            $builder->limit($limit);
	        }
	        $records = $builder->get()->getResult();
	        return $records;
	    }
	    
	    public function getScheduleList($cart_id=''){
	    	$builder = $this->db->table('cart_items_table');
	        $builder->select('cart_items_table.*,type_table.schedule_file,type_table.type_name');
	        $builder->join('subject_table','subject_table.subject_id=cart_items_table.subject_id','left');
	        $builder->join('type_table','type_table.type_id=subject_table.type_id','left');
	        $builder->where('cart_id',$cart_id);
	        $builder->where('payment_status','PAID');
	        $builder->where('cart_items_table.access','1');
	        $builder->where('cart_items_table.active','1');
	        $builder->groupBy('cart_items_table.subject_id');
	        $builder->limit(3);
	        $builder->orderBy('cart_items_table.cart_items_id','desc');
	        $response = $builder->get()->getResult();
	        return $response;
	    }

	    public function getPaperListModel($subject_id='',$type='',$subject_short_name=''){
	        $currentDateTime = date("Y-m-d H:i:s");
	        $builder = $this->db->table('paper_table');
	        $builder->select('paper_table.*,subject_table.subject_short_name');
	        $builder->join('subject_table','subject_table.subject_id=paper_table.subject_id');
	        if (!empty($subject_id)) {
	        	$builder->where('paper_table.subject_id',$subject_id);
	        } else if ($subject_short_name) {
	        	$builder->where('subject_table.subject_short_name',$subject_short_name);
	        }
	        $builder->where('paper_table.deleted','0');
	        $builder->where('paper_table.active','1');
	        if (!empty($type) && $type=='free') {
	            $builder->where('paper_table.type','free');
	        }
	        $builder->where('paper_table.schedule_date <=',$currentDateTime);
	        $records = $builder->get()->getResultArray();
	        return $records;
	    }

	    public function fetchBlogList($limit=''){
	    	$builder = $this->db->table('blog_table');
	    	$builder->where('active',1);
	    	$builder->where('deleted',0);
	    	if (!empty($limit)) {
	    		$builder->limit($limit);
	    	}
	    	$records = $builder->get()->getResult();
	        return $records;
	    }

	    public function validatePurchasedSubject($subject_short_name='',$cart_id=''){
	    	$builder = $this->db->table('cart_items_table');
	    	$builder->select('cart_items_table.*,');
	    	$builder->where('cart_items_table.deleted',1);
	    	$builder->where('cart_items_table.deleted',1);
	    	$builder->where('cart_items_table.payment_status','PAID');
	    	$builder->join('subject_table','subject_table.subject_id=cart_items_table.subject_id');
	    	$builder->where('cart_items_table.cart_id',$cart_id);
	    	$builder->where('subject_table.subject_short_name',$subject_short_name);
	    	$records = $builder->get()->getResult();
	    	return $records;
	    }

	    public function getAvailableNotesList($subject_short_name=''){
	    	$builder = $this->db->table('cart_items_table');
	    	$builder->select('notes_table.*,cart_items_table.payment_status,subject_table.subject_short_name');
	    	$builder->join('notes_table','notes_table.subject_id=cart_items_table.subject_id');
	    	$builder->join('subject_table','subject_table.subject_id=notes_table.subject_id');
	    	$builder->where('cart_items_table.payment_status','PAID');
	    	$builder->where('subject_table.subject_short_name',$subject_short_name);
	    	$records = $builder->get()->getResult();
	    	return $records;
	    }

	    public function fetchAmendmentList($subject_short_name){
	    	$builder = $this->db->table('cart_items_table');
	    	$builder->select('amendment_table.*,cart_items_table.payment_status,subject_table.subject_short_name');
	    	$builder->join('amendment_table','amendment_table.subject_id=cart_items_table.subject_id');
	    	$builder->join('subject_table','subject_table.subject_id=amendment_table.subject_id');
	    	$builder->where('cart_items_table.payment_status','PAID');
	    	$builder->where('subject_table.subject_short_name',$subject_short_name);
	    	$records = $builder->get()->getResult();
	    	return $records;
	    }

	    public function fetchQbankList($subject_short_name){
	    	$builder = $this->db->table('cart_items_table');
	    	$builder->select('qbank_table.*,cart_items_table.payment_status,subject_table.subject_short_name');
	    	$builder->join('qbank_table','qbank_table.subject_id=cart_items_table.subject_id');
	    	$builder->join('subject_table','subject_table.subject_id=qbank_table.subject_id');
	    	$builder->where('cart_items_table.payment_status','PAID');
	    	$builder->where('subject_table.subject_short_name',$subject_short_name);
	    	$records = $builder->get()->getResult();
	    	return $records;
	    }
	    public function getSalesInfoModel($purchase_id){
        $builder = $this->db->table('cart_items_table as cit');
        $builder->select('cit.*,pt.create_date as purchase_date,pt.payment_mode,st.subject_name,st.subject_short_name,tt.type_name,tt.type_short_name,lt.level_name,lt.level_short_name,ct.category_name,ct.category_short_name');
        $builder->join('purchase_table as pt','pt.purcahse_id=cit.purchase_id','left');
        $builder->join('subject_table as st','st.subject_id=cit.subject_id');
        $builder->join('type_table as tt','tt.type_id=st.type_id');
        $builder->join('level_table as lt','lt.level_id=tt.level_id');
        $builder->join('category_table as ct','ct.category_id=lt.category_id');
        $builder->where('pt.purcahse_id',$purchase_id);
        $response = $builder->get()->getResult();
        return $response;
    }

	}
?>