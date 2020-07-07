<?php
class Pagination
{

	private $totalItems;					// Tổng số phần tử
	private $totalItemsPerPage;	    		// Tổng số phần tử xuất hiện trên một trang
	private $pageRange;						// Số trang xuất hiện
	private $totalPage;						// Tổng số trang
	private $currentPage;					// Trang hiện tại

	public function __construct($totalItems, $pagination)
	{
		$this->totalItems			= $totalItems;
		$this->totalItemsPerPage	= $pagination['totalItemsPerPage'];

		if ($pagination['pageRange'] % 2 == 0) $pagination['pageRange'] = $pagination['pageRange'] + 1;

		$this->pageRange			= $pagination['pageRange'];
		$this->currentPage			= $pagination['currentPage'];
		$this->totalPage			= ceil($totalItems / $pagination['totalItemsPerPage']);
	}

	public function showPanigation()
	{
		$paginationHTML = ' </div>
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
					<ul class="pagination">';
		if($this->totalPage > 1){
			$prev = '<li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>';
			if($this->currentPage > 1){
				$prev = '<li class="paginate_button page-item " ><a onclick ="javascript:changePage('.($this->currentPage - 1) .')"  href="#"  class="page-link">Previous</a></li>';
			}
		
			$next 	= ' <li class="paginate_button page-item next" ><a href="#"  class="page-link">Next</a></li>';
			if($this->currentPage < $this->totalPage){
				$next 	= ' <li class="paginate_button page-item next" ><a  onclick ="javascript:changePage('.($this->currentPage + 1) .')" href="#"  class="page-link">Next</a></li>';
			}
			else if ($this->currentPage == $this->totalPage)
			{
				$next 	= ' <li class="paginate_button page-item next disabled" ><a href="#"  class="page-link">Next</a></li>';				
			}
		
			if($this->pageRange < $this->totalPage){  
				if($this->currentPage == 1){         
					$startPage 	= 1;    		
					$endPage 	= $this->pageRange;  
				}else if($this->currentPage == $this->totalPage){
					$startPage		= $this->totalPage - $this->pageRange + 1;
					$endPage		= $this->totalPage;
				}else{
					$startPage		= $this->currentPage - ($this->pageRange-1)/2; 
					$endPage		= $this->currentPage + ($this->pageRange-1)/2;
		
					if($startPage < 1){
						$endPage	= $endPage + 1;
						$startPage = 1;
					}
		
					if($endPage > $this->totalPage){
						$endPage	= $this->totalPage;
						$startPage 	= $endPage - $this->pageRange + 1;
					}
				}
			}else{
				$startPage		= 1;
				$endPage		= $this->totalPage;
			}
			$listPages = '';
			for($i = $startPage; $i <= $endPage; $i++){
				if($i == $this->currentPage) {
					$listPages .= '<li class="paginate_button page-item active "><a onclick ="javascript:changePage('.$i.')" href="#"class="page-link ">'.$i.'</a></li> ' ;
				}else{
					// $listPages .= '<a href="#" onclick="javascript:changePage('.$i.')">'.$i.'</a>';
					$listPages .= '<li class="paginate_button page-item ">       <a onclick ="javascript:changePage('.$i.')" href="#" class="page-link">'.$i.'</a></li> ' ;
				}
			}
			$listPages .= '';
			// $endPagination	= '<div class="limit">Page '.$this->currentPage.' of '.$this->totalPage.'</div>';
			$paginationHTML .= '<div class="pagination">'  . $prev . $listPages . $next . '</div>';
		}
		$paginationHTML .= '</ul></div></div></div></div>'
		;
		return $paginationHTML;
	}

}
