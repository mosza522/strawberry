<?php
/*
$pl  = $load->library('pagelen');

$cnt = $brd->db->countRow('tbl's name');
$len = $pl->countRow($cnt);

$board = $brd->postList($len);
<?=$pl->render('page.php?');? >
*/
class pagelen{
	var $Pagelen = 10;
	var $end_page=3;
	var $Page;
	var $total;
	var $first_title = 'First';
	var $last_title  = 'Last';
	var $prev_title  = 'Back';
	var $go_title    = 'Next';

 
	function pagelen()
	{
		if(file_exists(CONFIG_PATH . DS . 'pagelen' . EXT))
		{
			require CONFIG_PATH . DS . 'pagelen' . EXT;
		}

		$this->initialize($PL);
		$this->Page = $_GET['p'];
	} 
	
	function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key)) $this->$key = $val;
			}		
		}
	}

	function countRow($num)
	{
		$this->total = ceil($num / $this->Pagelen);
		
		if(empty($this->Page)) $this->Page = 1;
		
		$goto = ($this->Page - 1) * $this->Pagelen;
		
		$len = array($goto => $this->Pagelen);
		
		return $len;
	}

	function render($uri)
	{			
		$start = $this->Page - $this->Range;
		
		if($start <= 1) $start = 1;

		$end = $this->end_page;	

		
		if($end >= $this->total) $end = $this->total;

		$p = '';


	/// ก่อนหน้า
		if($this->Page > 1){
			$back = $this->Page - 1;
			$p.='<li class=""><a href="' . $uri . 'p=' . $back . '">«</a></li>';
			//$p .= '<a href="' . $uri . 'p=' . $back . '" title="' . $this->prev_title . '"  class="font1 linkC1">&laquo; Previous&nbsp;</a>';
		}else{
			$p.='<li class="disabled"><a href="#">«</a></li>';
			//$p .= '<a href="#" title="' . $this->prev_title . '"  class="font1 linkC1">&laquo; Previous&nbsp;</a>';
		}
	/// หน้าแรก
		if($this->Page > $this->end_page + 1){
			$p.='<li class="active"><a href="' . $uri . 'p=1">1</a></li>';
			//$p .= '<a href="' . $uri . 'p=1" title="' . $this->first_title . '"  class="font1 linkC1">1</a>';
		}
		if($this->Page > $this->end_page + 2){
			$p.='<li class="disabled"><a href="#">...</a></li>';
			//$p .= '<span>...</span>';
		}

	// แสดงหน้า
		$start = $this->Page - $this->end_page;
		if($this->Page <= $this->end_page){$start=1;}
		$stop= $this->Page + $this->end_page;
		if($stop>= $this->total ){$stop = $this->total;}
		for($i = $start; $i <= $stop; $i++)
		{
			if($i == $this->Page)
				$p .= '<li><a href="#">'.$i.'</a></li>';
				//$p .= '<span>'. $i .'</span>';
			else
				$p .= '<li><a href="' . $uri . 'p=' . $i . '" title="' . $i . '">'.$i.'</a></li>';
				//$p .= '<a href="' . $uri . 'p=' . $i . '" title="' . $i . '" class="font1 linkC1">' . $i . '</a>';
		}


	// สุดท้าย
		if($this->Page+$this->end_page < $this->total-1){
			//$p .= '<span>...</span>';
			$p.='<li class="disabled"><a href="#">...</a></li>';
		}
		if($this->Page< $this->total-$this->end_page){
			$p .= '<li><a href="' . $uri . 'p=' . $this->total . '">'.$this->total.'</a></li>';
			//$p .= '<a href="' . $uri . 'p=' . $this->total . '" title="' . $this->last_title . '"  class="font1 linkC1">'.$this->total.'</a>';
		}

	/// ถัดไป
		if($this->Page < $this->total){
			$next = $this->Page + 1;
			$p .= '<li><a href="' . $uri . 'p=' . $next . '">»</a></li>';
			//$p .= '<a href="' . $uri . 'p=' . $next . '" title="' . $this->go_title . '"  class="font1 linkC1">&nbsp;Forward &raquo;</a>';
		}else{
			$p .= '<li class="disabled"><a href="#">»</a></li>';
			//$p .= '<a href="#" title="' . $this->go_title . '"  class="font1 linkC1">&nbsp;Forward &raquo;</a>';
		}


		$render = '<div><ul class="pagination m-t-0 m-b-10">'. $p .'</ul></div>';
		
		return $render;
	}
}
?>